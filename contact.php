<?php 
  $title = "Contact Us"; 
  include __DIR__ . "/includes/header.php"; 
?>

<!-- Contact Section -->
<section class="bg-gray-50 text-gray-900">
  <!-- Map Section -->
  <div class="w-full h-[400px]">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345094433!2d144.9537363159046!3d-37.81627974202108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1f3e1b7%3A0x5045675218ce840!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1702532078940!5m2!1sen!2sin" 
      width="100%" height="100%" 
      style="border:0;" allowfullscreen="" loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <!-- Contact Form + Info -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid md:grid-cols-2 gap-12 items-start">
      
      <!-- Contact Info -->
      <div>
        <h1 class="text-4xl font-bold mb-4">Get in Touch</h1>
        <p class="text-gray-700 mb-8">
          We'd love to hear from you! Share your requirements, feedback, or partnership ideas — our team will reach out shortly.
        </p>

        <div class="space-y-5">
          <!-- Address -->
          <div class="flex items-center space-x-3">
            <div class="p-3 bg-blue-100 rounded-lg text-blue-600">
              <i class="fa-solid fa-location-dot text-xl"></i>
            </div>
            <div>
              <p class="font-semibold">Head Office</p>
              <p class="text-gray-600">123 Business Avenue, Melbourne, Australia</p>
            </div>
          </div>

          <!-- Phone -->
          <div class="flex items-center space-x-3">
            <div class="p-3 bg-blue-100 rounded-lg text-blue-600">
              <i class="fa-solid fa-phone text-xl"></i>
            </div>
            <div>
              <p class="font-semibold">Phone</p>
              <p class="text-gray-600">+61 3 1234 5678</p>
              <p class="text-gray-600">+61 400 987 654</p>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-center space-x-3">
            <div class="p-3 bg-blue-100 rounded-lg text-blue-600">
              <i class="fa-solid fa-envelope text-xl"></i>
            </div>
            <div>
              <p class="font-semibold">Email</p>
              <p class="text-gray-600">info@orizonagency.com</p>
              <p class="text-gray-600">support@orizonagency.com</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
        <h2 class="text-2xl font-semibold mb-6">Send Us a Message</h2>
        <form action="contact_mail.php" method="POST" class="space-y-5">
          <div>
            <label class="text-sm font-medium">Full Name</label>
            <input type="text" name="name" required 
              class="mt-1 w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
          </div>

          <div>
            <label class="text-sm font-medium">Email Address</label>
            <input type="email" name="email" required 
              class="mt-1 w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
          </div>

          <div>
            <label class="text-sm font-medium">Phone Number</label>
            <input type="tel" name="phone" required 
              class="mt-1 w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
          </div>

          <div>
            <label class="text-sm font-medium">Message</label>
            <textarea name="message" rows="5" required 
              class="mt-1 w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
          </div>

          <button type="submit" 
            class="w-full bg-blue-500 text-white font-semibold py-3 rounded-md hover:bg-blue-600 transition">
            Send Message →
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . "/includes/footer.php"; ?>
