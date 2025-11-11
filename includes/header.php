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
          <span class="font-semibold">DDASSOCIATES</span>
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
