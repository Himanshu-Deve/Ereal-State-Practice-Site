<?php $title = "About Us"; include __DIR__ . "/includes/header.php"; ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-500 to-blue-600 text-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold">About <span class="text-black">PrimeProperties</span></h1>
    <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto text-blue-100">
      Your trusted real estate partner in Gurugram.  
      We connect people with homes that match their lifestyle and aspirations.
    </p>
  </div>

  <!-- Decorative background pattern -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/dark-mosaic.png')] opacity-10"></div>
</section>

<!-- Mission & Values -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-gray-900">Our Mission</h2>
    <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
      To make real estate transparent, simple, and human.  
      We believe buying or renting a home should feel as natural as finding it.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 text-center border border-gray-100">
      <div class="h-14 w-14 mx-auto bg-blue-100 text-blue-600 flex items-center justify-center rounded-full mb-4">
        <i class="fas fa-check-circle text-2xl"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Curation</h3>
      <p class="text-gray-600 mt-2 text-sm">
        Every listing is hand-verified to ensure accuracy and authenticity.  
        We believe in quality over quantity.
      </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 text-center border border-gray-100">
      <div class="h-14 w-14 mx-auto bg-blue-100 text-blue-600 flex items-center justify-center rounded-full mb-4">
        <i class="fas fa-magic text-2xl"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Experience</h3>
      <p class="text-gray-600 mt-2 text-sm">
        Explore with ease using our intuitive filters, sleek interface,  
        and lightning-fast search tools.
      </p>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 text-center border border-gray-100">
      <div class="h-14 w-14 mx-auto bg-blue-100 text-blue-600 flex items-center justify-center rounded-full mb-4">
        <i class="fas fa-handshake text-2xl"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Trust</h3>
      <p class="text-gray-600 mt-2 text-sm">
        Transparency is our foundation — clear pricing, honest guidance,  
        and no hidden surprises.
      </p>
    </div>
  </div>
</section>

<!-- Meet the Team Section -->
<section class="bg-gray-50 py-16 border-t border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-gray-900">Meet Our Team</h2>
    <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
      Our experienced professionals are passionate about real estate and committed to helping you find your perfect property.
    </p>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
        <h4 class="text-lg font-semibold text-gray-900">Amit Sharma</h4>
        <p class="text-sm text-gray-500">Founder & CEO</p>
      </div>
      <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition">
        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Team member" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
        <h4 class="text-lg font-semibold text-gray-900">Priya Mehta</h4>
        <p class="text-sm text-gray-500">Head of Operations</p>
      </div>
      <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition">
        <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="Team member" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
        <h4 class="text-lg font-semibold text-gray-900">Rohit Verma</h4>
        <p class="text-sm text-gray-500">Sales Manager</p>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . "/includes/footer.php"; ?>
