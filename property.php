<?php
header('Content-Type: text/html; charset=utf-8');
$title = "Property Details";
include __DIR__ . "/includes/header.php";

// Database connection
require_once __DIR__ . '/config/db.php';

$database = new Database();
$conn = $database->getConnection();
  
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['propertyId'])) {
     // Sanitize and validate input data
    $propertyId = intval($_POST['propertyId']);
    $propertyName = $conn->real_escape_string($_POST['propertyName']);
    $propertyLocation = $conn->real_escape_string($_POST['propertyLocation']);
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $visitDate = $conn->real_escape_string($_POST['visitDate']);
    
    // Insert into database
    $sql = "INSERT INTO visit_booking (property_id, property_name, property_location, customer_name, customer_phone, customer_email, visit_date, booking_date) 
            VALUES ('$propertyId', '$propertyName', '$propertyLocation', '$name', '$phone', '$email', '$visitDate', NOW())";
    
    if ($conn->query($sql) === TRUE) {
        $success_message = "✅ Booking request sent successfully!";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<style>
  /* Mobile horizontal scroll styling */
  #galleryContainer::-webkit-scrollbar {
    height: 6px;
  }
  #galleryContainer::-webkit-scrollbar-thumb {
    background: #c3c3c3;
    border-radius: 10px;
  }
  #galleryContainer::-webkit-scrollbar-thumb:hover {
    background: #a0a0a0;
  }

  /* Make sure thumbnails stay in a row on mobile */
  @media (max-width: 768px) {
    #galleryContainer {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
    }
    #galleryLeft,
    #galleryRight {
      display: none !important;
    }
  }
  
  /* Success/Error message styling */
  .alert {
    padding: 12px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-weight: 500;
  }
  .alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
  }
  .alert-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }
</style>

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div id="propertyDetails" class="mt-8">
    <p class="text-gray-500">Loading property details...</p>
  </div>
</section>

<!-- Booking Modal -->
<div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative">
    <button id="closeModal" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600 text-xl">&times;</button>
    <h2 class="text-2xl font-bold mb-4 text-center text-indigo-600">Book a Property Visit</h2>

    <!-- Success/Error Messages -->
    <?php if (isset($success_message)): ?>
      <div class="alert alert-success"><?php echo $success_message; ?></div>
    <?php endif; ?>
    
    <?php if (isset($error_message)): ?>
      <div class="alert alert-error"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form id="bookingForm" method="POST" class="space-y-4">
      <input type="hidden" id="propertyId" name="propertyId">
      <div>
        <label class="block text-gray-700 font-medium mb-1">Property Name</label>
        <input type="text" id="propertyName" name="propertyName" class="w-full border rounded-lg px-3 py-2" readonly>
      </div>
      <div>
        <label class="block text-gray-700 font-medium mb-1">Location</label>
        <input type="text" id="propertyLocation" name="propertyLocation" class="w-full border rounded-lg px-3 py-2"
          readonly>
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

<!-- Scripts -->
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

      // Top section: thumbnail + info
      const html = `
      <!-- Inside your existing property display section -->
<div class="grid md:grid-cols-2 gap-8 items-start">
  <div>
    <img id="mainImage" src="${property.image_thumbnail}" alt="${property.title}" class="rounded-lg shadow-lg w-full h-80 object-cover">
    
    <!-- Gallery Wrapper -->
    <div class="relative mt-4">
      <!-- Left Arrow -->
      <button id="galleryLeft" class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-white border rounded-full shadow p-2 hover:bg-gray-100">
        <i class="fas fa-chevron-left"></i>
      </button>

      <!-- Thumbnails Scrollable -->
      <div id="galleryContainer" class="flex gap-3 overflow-x-auto md:overflow-hidden scroll-smooth px-8 md:px-0">
        ${property.images_gallery.map(img => `
          <img src="${img}" class="gallery-thumb w-24 h-20 object-cover rounded-lg cursor-pointer border border-gray-200 hover:border-indigo-500 transition shrink-0">
        `).join('')}
      </div>

      <!-- Right Arrow -->
      <button id="galleryRight" class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-white border rounded-full shadow p-2 hover:bg-gray-100">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>

  <div>
    <h1 class="text-3xl font-bold mb-2">${property.title}</h1>
    <p class="text-gray-600 mb-3"><i class="fas fa-map-marker-alt text-indigo-500 mr-1"></i>${property.location}</p>
    <p class="text-2xl font-semibold text-indigo-600 mb-4">₹${property.price.toLocaleString()}</p>

    <button id="interestBtn" class="flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded transition mb-3">
      <i class="fab fa-whatsapp text-lg"></i> Interested in Property
    </button>

    <button id="bookVisitBtn" class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
      <i class="fas fa-calendar-alt text-lg"></i> Book a Visit
    </button>
  </div>
</div>


      <!-- Architecture + Details -->
      <div class="grid md:grid-cols-2 gap-8 mt-10">
        <div>
          <img src="${property.architecture_image}" alt="Architecture" class="rounded-lg shadow-md w-full object-cover">
        </div>
        <div>
          <h2 class="text-2xl font-semibold mb-3 text-gray-800">Property Details</h2>
          <p class="text-gray-700 mb-4">${property.description}</p>
          <ul class="space-y-2 text-gray-700">
            <li><strong>Beds:</strong> ${property.beds}</li>
            <li><strong>Baths:</strong> ${property.baths}</li>
            <li><strong>Area:</strong> ${property.area} sq.ft</li>
            <li><strong>Type:</strong> ${property.type}</li>
          </ul>
        </div>
      </div>

       <!-- Map + Brochure -->
      <div class="grid md:grid-cols-2 gap-8 mt-10 items-start">
        <div class="w-full h-80 rounded-lg overflow-hidden shadow-md">
          <iframe
            width="100%"
            height="100%"
            style="border:0;"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=${property.latitude},${property.longitude}&output=embed">
          </iframe>
        </div>
        <div class="bg-gray-50 border rounded-lg shadow p-6 flex flex-col items-center justify-center">
          <i class="fas fa-file-pdf text-red-600 text-5xl mb-3"></i>
          <h3 class="text-xl font-semibold mb-2">Download Brochure</h3>
          <a href="${property.bouchure_url}" target="_blank" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-6 rounded-lg font-medium transition">
            Download PDF
          </a>
        </div>
    `;

      $('#propertyDetails').html(html);

      // Gallery click to change main image
      $('.gallery-thumb').click(function () {
        $('#mainImage').attr('src', $(this).attr('src'));
        $('.gallery-thumb').removeClass('ring-2 ring-indigo-500');
        $(this).addClass('ring-2 ring-indigo-500');
      });

      // Image click to change main image
      $('.gallery-thumb').click(function () {
        $('#mainImage').attr('src', $(this).attr('src'));
        $('.gallery-thumb').removeClass('ring-2 ring-indigo-500');
        $(this).addClass('ring-2 ring-indigo-500');
      });

      // Gallery navigation for desktop
      const gallery = $('#galleryContainer');
      $('#galleryLeft').click(() => {
        gallery.animate({ scrollLeft: '-=200' }, 300);
      });
      $('#galleryRight').click(() => {
        gallery.animate({ scrollLeft: '+=200' }, 300);
      });

      // Show arrows only if more images exist
      if (property.images_gallery.length > 4) {
        $('#galleryLeft, #galleryRight').removeClass('hidden');
      }

      // WhatsApp button
      $('#interestBtn').click(function () {
        const messageText = `
🏠 *${property.title}*
📍 *Location:* ${property.location}
💰 *Price:* ₹${property.price.toLocaleString()}
🖼 *Image:* ${property.image_thumbnail}
🔗 *Property Link:* ${window.location.href}

Hello, I'm interested in this property. Please share more details.
      `.trim();

        const whatsappNumber = "919876543210";
        const whatsappLink = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(messageText);
        window.open(whatsappLink, '_blank');
      });

      // Book Visit Modal
      $('#bookVisitBtn').click(function () {
        $('#propertyId').val(property.id);
        $('#propertyName').val(property.title);
        $('#propertyLocation').val(property.location);
        $('#bookingModal').removeClass('hidden').addClass('flex');
      });

      $('#closeModal').click(function () {
        $('#bookingModal').addClass('hidden').removeClass('flex');
      });

      // Set minimum date for visit date to today
      const today = new Date().toISOString().split('T')[0];
      $('#visitDate').attr('min', today);

    });
  });
</script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<?php 
// Close database connection
if (isset($conn)) {
    $conn->close();
}
include __DIR__ . "/includes/footer.php"; 
?>