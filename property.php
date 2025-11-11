<?php
header('Content-Type: text/html; charset=utf-8');
$title = "Property Details";
include __DIR__ . "/includes/header.php";
?>

<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div id="propertyDetails" class="mt-8">
    <p class="text-gray-500">Loading property details...</p>
  </div>
</section>

<!-- Booking Modal -->
<div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative">
    <button id="closeModal" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600 text-xl">&times;</button>
    <h2 class="text-2xl font-bold mb-4 text-center text-indigo-600">Book a Property Visit</h2>

    <form id="bookingForm" class="space-y-4">
      <input type="hidden" id="propertyId" name="propertyId">
      
      <div>
        <label class="block text-gray-700 font-medium mb-1">Property Name</label>
        <input type="text" id="propertyName" name="propertyName" class="w-full border rounded-lg px-3 py-2" readonly>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Location</label>
        <input type="text" id="propertyLocation" name="propertyLocation" class="w-full border rounded-lg px-3 py-2" readonly>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Your Name</label>
        <input type="text" id="name" name="name" class="w-full border rounded-lg px-3 py-2" required>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Phone</label>
        <input type="tel" id="phone" name="phone" class="w-full border rounded-lg px-3 py-2" required>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" class="w-full border rounded-lg px-3 py-2" required>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Preferred Visit Date</label>
        <input type="date" id="visitDate" name="visitDate" class="w-full border rounded-lg px-3 py-2" required>
      </div>

      <button type="submit"
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition">
        Send Booking Request
      </button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function () {
    const params = new URLSearchParams(window.location.search);
    const propertyId = parseInt(params.get('id'));

    $.getJSON('/assets/data/properties.json', function (data) {
      const property = data.find(p => p.id === propertyId);
      if (!property) {
        $('#propertyDetails').html('<p class="text-red-500">Property not found.</p>');
        return;
      }

      const html = `
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <img src="${property.image_thumbnail}" alt="${property.title}" class="rounded-lg shadow-lg w-full object-cover">
        </div>
        <div>
          <h1 class="text-3xl font-bold mb-2">${property.title}</h1>
          <p class="text-gray-600 mb-3">${property.location}</p>
          <p class="text-2xl font-semibold text-indigo-600 mb-4">₹${property.price.toLocaleString()}</p>
          <ul class="text-gray-700 mb-4 space-y-1">
            <li><strong>BHK:</strong> ${property.beds}</li>
            <li><strong>Baths:</strong> ${property.baths}</li>
            <li><strong>Area:</strong> ${property.area} sq.ft</li>
            <li><strong>Type:</strong> ${property.type}</li>
          </ul>
          <p class="text-gray-600 leading-relaxed mb-6">${property.description || 'No description available.'}</p>

          <!-- WhatsApp Button -->
          <button id="interestBtn"
            class="flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded transition mb-3">
            <i class="fab fa-whatsapp text-lg"></i> Interested in Property
          </button>

          <!-- Book Visit Button -->
          <button id="bookVisitBtn"
            class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
            <i class="fas fa-calendar-alt text-lg"></i> Book a Visit
          </button>
        </div>
      </div>
    `;

      $('#propertyDetails').html(html);

      // WhatsApp integration
      $('#interestBtn').click(function () {
        const currentUrl = window.location.href;

        const messageText = `
            🏠 *${property.title}*
            📍 *Location:* ${property.location}
            💰 *Price:* ₹${property.price.toLocaleString()}
            🖼 *Image:* ${property.image_thumbnail}
            🔗 *Property Link:* ${currentUrl}

            Hello, I'm interested in this property. Please share more details.
        `.trim();

        const whatsappNumber = "919876543210";
        const whatsappLink = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(messageText);
        window.open(whatsappLink, '_blank');
      });

      // Book Visit Modal Logic
      $('#bookVisitBtn').click(function () {
        $('#propertyId').val(property.id);
        $('#propertyName').val(property.title);
        $('#propertyLocation').val(property.location);
        $('#bookingModal').removeClass('hidden').addClass('flex');
      });

      $('#closeModal').click(function () {
        $('#bookingModal').addClass('hidden').removeClass('flex');
      });

      // Submit Booking Form
      $('#bookingForm').submit(function (e) {
        e.preventDefault();

        const formData = $(this).serializeArray();
        console.log("Booking Submitted:", formData);

        alert('✅ Booking request sent successfully!');
        $('#bookingModal').addClass('hidden').removeClass('flex');
        this.reset();
      });
    });
  });
</script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<?php include __DIR__ . "/includes/footer.php"; ?>
