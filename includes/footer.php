  </main>
  <footer class="bg-black text-white relative">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Company Info -->
        <div class="lg:col-span-1">
          <div class="flex items-center space-x-3 mb-4">
            <div class="h-10 w-10 rounded-lg bg-blue-500 flex items-center justify-center font-bold text-white">
              <i class="fas fa-home"></i>
            </div>
            <span class="text-xl font-bold">DD ASSOCIATES</span>
          </div>
          <p class="text-gray-300 mb-4 leading-relaxed">
            Premium properties curated with care. Find your next home or investment with our expert team.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="h-8 w-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-colors">
              <i class="fab fa-facebook-f text-sm"></i>
            </a>
            <a href="#" class="h-8 w-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-colors">
              <i class="fab fa-twitter text-sm"></i>
            </a>
            <a href="#" class="h-8 w-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-colors">
              <i class="fab fa-instagram text-sm"></i>
            </a>
            <a href="#" class="h-8 w-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-colors">
              <i class="fab fa-linkedin-in text-sm"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-lg font-semibold mb-4 border-b border-gray-800 pb-2">Quick Links</h3>
          <ul class="space-y-3">
            <li><a href="/properties" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-search mr-2 text-sm text-blue-500"></i>Search Properties
            </a></li>
            <li><a href="/featured" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-star mr-2 text-sm text-blue-500"></i>Featured Listings
            </a></li>
            <li><a href="/agents" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-user-tie mr-2 text-sm text-blue-500"></i>Our Agents
            </a></li>
            <li><a href="/sell" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-tag mr-2 text-sm text-blue-500"></i>Sell Your Property
            </a></li>
          </ul>
        </div>

        <!-- Company -->
        <div>
          <h3 class="text-lg font-semibold mb-4 border-b border-gray-800 pb-2">Company</h3>
          <ul class="space-y-3">
            <li><a href="/about" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-building mr-2 text-sm text-blue-500"></i>About Us
            </a></li>
            <li><a href="/careers" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-briefcase mr-2 text-sm text-blue-500"></i>Careers
            </a></li>
            <li><a href="/testimonials" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-comment-alt mr-2 text-sm text-blue-500"></i>Testimonials
            </a></li>
            <li><a href="/blog" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center">
              <i class="fas fa-newspaper mr-2 text-sm text-blue-500"></i>Blog
            </a></li>
          </ul>
        </div>

        <!-- Newsletter & Contact -->
        <div>
          <h3 class="text-lg font-semibold mb-4 border-b border-gray-800 pb-2">Stay Updated</h3>
          <p class="text-gray-300 mb-4">Subscribe to our newsletter for the latest property listings and market insights.</p>
          
          <form id="newsletterForm" class="mb-6">
            <div class="flex">
              <input type="email" required placeholder="Your email address" 
                class="flex-1 rounded-l-lg border-0 px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" />
              <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-r-lg transition-colors font-medium">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
          
          <div class="flex items-center text-gray-300">
            <i class="fas fa-phone-alt mr-3 text-blue-500"></i>
            <div>
              <p class="text-sm">Call us anytime</p>
              <p class="font-semibold text-blue-400">(555) 123-4567</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t border-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="text-gray-400 text-sm mb-4 md:mb-0">
            © <?php echo date('Y'); ?> DDASSOCIATES. All rights reserved.
          </div>
          <div class="flex space-x-6 text-sm">
            <a href="/privacy" class="text-gray-400 hover:text-blue-400 transition-colors">Privacy Policy</a>
            <a href="/terms" class="text-gray-400 hover:text-blue-400 transition-colors">Terms of Service</a>
            <a href="/sitemap" class="text-gray-400 hover:text-blue-400 transition-colors">Sitemap</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Floating Buttons -->
    <a href="https://wa.me/919876543210" target="_blank"
       class="fixed bottom-5 left-5 bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 transition transform hover:scale-110 p-4 z-50">
      <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <a href="tel:+919876543210"
       class="fixed bottom-5 right-5 bg-blue-500 text-white rounded-full shadow-lg hover:bg-blue-600 transition transform hover:scale-110 p-4 z-50">
      <i class="fas fa-phone-alt text-2xl"></i>
    </a>
  </footer>

  <script>
    $(document).ready(function() {
      // Newsletter form submission animation
      $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();
        const btn = $(this).find('button');
        btn.html('<i class="fas fa-spinner fa-spin"></i>');
        setTimeout(() => {
          btn.html('<i class="fas fa-check"></i>');
          $(this).find('input').val('');
          setTimeout(() => {
            btn.html('<i class="fas fa-paper-plane"></i>');
          }, 2000);
        }, 1500);
      });
    });
  </script>
</body>
</html>
