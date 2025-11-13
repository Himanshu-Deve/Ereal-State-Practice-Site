<?php
include_once(__DIR__ . '/../config/db.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $database = new Database();
    $conn = $database->getConnection();

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $number = trim($_POST['number'] ?? '');
    $bhk_type = trim($_POST['bhk_type'] ?? '');

    if ($name !== '' && $number !== '') {
        $sql = "INSERT INTO enquire_table (name, email, number, bhk_type) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            echo "Prepare failed: " . htmlspecialchars($conn->error);
            exit;
        }

        $stmt->bind_param("ssss", $name, $email, $number, $bhk_type);
        if ($stmt->execute()) {
            echo "Enquiry submitted successfully!";
        } else {
            echo "Error executing query: " . htmlspecialchars($stmt->error);
        }

        $stmt->close();
    } else {
        echo "Name and mobile number are required.";
    }

    $conn->close();
    exit; // important: prevent HTML output
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Orizon Style Navbar</title>

  <!-- Font + Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- jQuery (optional, for other parts of your site) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    /* Smooth mobile menu animation */
    #mobileMenu {
      transition: all 0.3s ease;
      overflow: hidden;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-900 antialiased">

  <!-- Navbar -->
  <header class="sticky top-0 z-50 bg-black text-white shadow-md">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">

        <!-- Left: Logo -->
        <a href="/" class="flex items-center space-x-2">
          <div class="h-8 w-8 bg-blue-500 flex items-center justify-center font-bold rounded">DD</div>
          <span class="font-semibold"> ASSOCIATES</span>
        </a>

        <!-- Center: Menu (desktop) -->
        <div class="hidden md:flex items-center space-x-10">
          <a href="/" class="hover:text-blue-400 transition">Home</a>
          <a href="/about" class="hover:text-blue-400 transition">About Us</a>
          <a href="/properties" class="hover:text-blue-400 transition">Projects</a>
          <a href="/contact" class="hover:text-blue-400 transition">Contact Us</a>
          <a href="/pricing" class="hover:text-blue-400 transition">Pricing</a>
        </div>

        <!-- Right: CTA button -->
        <div class="hidden md:flex">
          <a href="/quote" class="px-4 py-2 rounded-md bg-blue-500 text-white font-semibold hover:bg-blue-600 transition">
            Get The Quote ➔
          </a>
        </div>

        <!-- Mobile Menu Button -->
<div id="mobileMenuBtn"
  class="md:hidden inline-flex items-center justify-center p-2 rounded-md hover:bg-gray-800 focus:outline-none transition">
  <svg class="h-6 w-6" fill="none" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
  </svg>
  </div>

      </div>
    </nav>

    <!-- Mobile Menu -->
   <div id="mobileMenu" class="max-h-0 overflow-hidden bg-black transition-all duration-300 ease-in-out">
      <div class="px-4 py-3 space-y-2">
        <a href="/" class="block px-3 py-2 rounded hover:bg-gray-800">Home</a>
        <a href="/about" class="block px-3 py-2 rounded hover:bg-gray-800">About Us</a>
        <a href="/properties" class="block px-3 py-2 rounded hover:bg-gray-800">Projects</a>
        <a href="/contact" class="block px-3 py-2 rounded hover:bg-gray-800">Contact Us</a>
        <a href="/pricing" class="block px-3 py-2 rounded hover:bg-gray-800">Pricing</a>
        <a href="/quote" class="block px-3 py-2 rounded bg-blue-500 text-white hover:bg-blue-600">Get The Quote ➔</a>
      </div>
    </div>
  </header>

  <!-- Floating Enquiry Button -->
<button id="enquiryBtn"
  class="fixed top-1/2 right-0 transform -translate-y-1/2 bg-blue-600 text-white px-3 py-2 rounded-l-lg shadow-lg hover:bg-blue-700 transition z-50"
  style="writing-mode: vertical-rl; text-orientation: mixed; font-weight: 600;">
  Enquire Now
</button>


<!-- Popup Enquiry Form -->
<div id="enquiryModal"
  class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-2xl p-6 w-96 relative shadow-xl">
    <button id="closeModal" class="absolute top-3 right-4 text-gray-500 hover:text-black text-xl">&times;</button>
    <h2 class="text-2xl font-semibold mb-4 text-center">Enquiry Form</h2>
    <form id="enquiryForm" method="POST" class="space-y-3">
      <div>
        <label class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" name="name" required
          class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email"
          class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Mobile Number</label>
        <input type="text" name="number" required
          class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">BHK Type</label>
        <select name="bhk_type" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400">
          <option value="">Select</option>
          <option value="1 BHK">1 BHK</option>
          <option value="2 BHK">2 BHK</option>
          <option value="3 BHK">3 BHK</option>
          <option value="4 BHK">4 BHK</option>
        </select>
      </div>
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
        Submit & WhatsApp
      </button>
    </form>
  </div>
</div>

<!-- JS for Modal + WhatsApp -->
<script>
  const enquiryBtn = document.getElementById('enquiryBtn');
  const enquiryModal = document.getElementById('enquiryModal');
  const closeModal = document.getElementById('closeModal');
  const enquiryForm = document.getElementById('enquiryForm');

  enquiryBtn.onclick = () => enquiryModal.classList.remove('hidden');
  closeModal.onclick = () => enquiryModal.classList.add('hidden');

  // Optional: close on background click
  enquiryModal.addEventListener('click', (e) => {
    if (e.target === enquiryModal) enquiryModal.classList.add('hidden');
  });

  enquiryForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(enquiryForm);

    fetch('', {
      method: 'POST',
      body: formData
    })
    .then(res => res.text())
    .then(response => {
      alert(response);
      enquiryModal.classList.add('hidden');

      // Navigate to WhatsApp
      const name = formData.get('name');
      const number = formData.get('number');
      const bhk = formData.get('bhk_type');
      const message = encodeURIComponent(`Hello, my name is ${name}. I am interested in a ${bhk} property. My number is ${number}.`);
      window.open(`https://wa.me/9718751020?text=${message}`, '_blank'); // Replace with your WhatsApp number
    })
    .catch(err => alert("Error submitting enquiry."));
  });
</script>


  <!-- Script -->
<script>
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  let isOpen = false;

  mobileMenuBtn.addEventListener('click', () => {
    isOpen = !isOpen;
    if (isOpen) {
      mobileMenu.classList.remove('max-h-0');
      mobileMenu.classList.add('max-h-96');
    } else {
      mobileMenu.classList.remove('max-h-96');
      mobileMenu.classList.add('max-h-0');
    }
  });
</script>


</body>
</html>
