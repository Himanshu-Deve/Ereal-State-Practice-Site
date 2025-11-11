<?php $title = "Browse Properties"; include __DIR__ . "/includes/header.php"; ?>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <h1 class="text-3xl font-bold">Find Properties</h1>
  <p class="text-gray-600 mt-2">Use filters to narrow your search. Results load instantly.</p>

  <!-- Search Bar + Filter Toggle -->
  <div class="mt-6 flex items-center gap-3">
    <input id="searchText" type="text" placeholder="Search by title or location..."
      class="flex-1 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500" />
    <button id="toggleFilters"
      class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Filters</button>
  </div>

  <!-- Sidebar (hidden by default) -->
  <div id="filterSidebar"
    class="fixed top-0 left-0 w-72 h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 z-40 overflow-y-auto">
    <div class="p-5 border-b flex items-center justify-between">
      <h2 class="text-lg font-semibold">Filters</h2>
      <button id="closeFilters" class="text-gray-500 hover:text-gray-700 text-xl">&times;</button>
    </div>

    <div class="p-5 space-y-5">
      <div>
        <label class="text-sm font-semibold">Min Price</label>
        <input id="minPrice" type="number" min="0" step="100000" placeholder="0"
          class="mt-1 w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500" />
      </div>

      <div>
        <label class="text-sm font-semibold">Max Price</label>
        <input id="maxPrice" type="number" min="0" step="100000" placeholder="50000000"
          class="mt-1 w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500" />
      </div>

      <div>
        <label class="text-sm font-semibold">BHK (min)</label>
        <select id="bedsFilter"
          class="mt-1 w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500">
          <option value="0">Any</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
          <option value="4">4+</option>
        </select>
      </div>

      <button id="resetFilters" class="w-full mt-4 bg-gray-100 hover:bg-gray-200 text-sm py-2 rounded">Reset Filters</button>
    </div>
  </div>

  <!-- Dark overlay when sidebar open -->
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden z-30"></div>

  <!-- Results Count -->
  <div class="mt-6 flex items-center justify-between">
    <p class="text-sm text-gray-600">Results: <span id="resultsCount">0</span></p>
  </div>

  <!-- Property Grid -->
  <div id="propertiesGrid" class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function () {
  let properties = [];

  // Load JSON data
  $.getJSON('/assets/data/properties.json', function (data) {
    properties = data;
    renderProperties(properties);
  });

  // Sidebar toggle logic
  $('#toggleFilters').click(() => {
    $('#filterSidebar').removeClass('-translate-x-full');
    $('#overlay').show();
  });
  $('#closeFilters, #overlay').click(() => {
    $('#filterSidebar').addClass('-translate-x-full');
    $('#overlay').hide();
  });

  // Filter on input change
  $('#searchText, #minPrice, #maxPrice, #bedsFilter').on('input change', function () {
    applyFilters();
  });

  $('#resetFilters').click(function () {
    $('#minPrice').val('');
    $('#maxPrice').val('');
    $('#bedsFilter').val('0');
    applyFilters();
  });

  function applyFilters() {
    const search = $('#searchText').val().toLowerCase();
    const minPrice = parseInt($('#minPrice').val()) || 0;
    const maxPrice = parseInt($('#maxPrice').val()) || Infinity;
    const beds = parseInt($('#bedsFilter').val()) || 0;

    const filtered = properties.filter(p => {
      return (
        (p.title.toLowerCase().includes(search) || p.location.toLowerCase().includes(search)) &&
        p.price >= minPrice &&
        p.price <= maxPrice &&
        p.beds >= beds
      );
    });

    renderProperties(filtered);
  }

 function renderProperties(list) {
  const grid = $('#propertiesGrid');
  grid.empty();
  $('#resultsCount').text(list.length);

  if (list.length === 0) {
    grid.html('<p class="text-gray-500 col-span-full text-center">No properties found.</p>');
    return;
  }

  list.forEach(p => {
    const card = `
      <a href="property.php?id=${p.id}" class="block border rounded-lg overflow-hidden shadow hover:shadow-lg transition bg-white">
        <img src="${p.image_thumbnail}" alt="${p.title}" class="h-48 w-full object-cover" />
        <div class="p-4">
          <h2 class="font-semibold text-lg">${p.title}</h2>
          <p class="text-sm text-gray-600">${p.location}</p>
          <p class="mt-2 font-medium text-indigo-600">₹${p.price.toLocaleString()}</p>
          <p class="text-sm text-gray-500">${p.beds} Beds • ${p.baths} Baths • ${p.area} sq.ft</p>
        </div>
      </a>`;
    grid.append(card);
  });
}

});
</script>

<?php include __DIR__ . "/includes/footer.php"; ?>
