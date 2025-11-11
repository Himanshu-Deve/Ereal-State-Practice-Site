<?php $title = "RealEstate — Find your next home"; include __DIR__ . "/includes/header.php"; ?>

<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2064&q=80')">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    
    <!-- Content -->
    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-lg text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Your Partner in Creating<br><span class="text-blue-300">Functional & Beautiful Spaces</span></h1>
                
                <p class="text-lg mb-8 text-gray-200 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi purus in mollis nunc. Tristique senectus et netus et malesuada fames ac.
                </p>
                
                <button id="cta-button" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105 flex items-center">
                    See Our Project 
                    <span class="ml-2">💬</span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="animate-bounce text-white text-2xl">↓</div>
    </div>
</section>

<!-- Projects Section (hidden by default) -->
<section id="projects" class="py-10 bg-white ">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern Living Room" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Modern Living Room</h3>
                    <p class="text-gray-600">Elegant and functional design for contemporary living.</p>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Minimalist Kitchen" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Minimalist Kitchen</h3>
                    <p class="text-gray-600">Clean lines and efficient use of space.</p>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cozy Bedroom" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Cozy Bedroom</h3>
                    <p class="text-gray-600">Warm and inviting atmosphere for restful sleep.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Accomplishment Section -->
<section class="py-10 bg-white text-gray-900" id="accomplishment-section">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Left: Image -->
      <div class="w-full">
        <img src="https://salvatori-dam.imgix.net/uploads/2021/02/MEDIA-GALLERY_Salvatori_Inspiration_Singapore-loft-style-1.jpg"
             alt="Minimalist Interior Decor"
             class="rounded-2xl shadow-lg w-full object-cover">
      </div>

      <!-- Right: Text + Stats -->
      <div>
        <div class="text-left mb-10">
          <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Our Accomplishments</h2>
          <p class="text-lg md:text-xl text-blue-500 font-medium leading-relaxed">
            We Have Expanded Our Reach,<br class="hidden md:block">
            Establishing A Strong Presence
          </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <!-- Clients -->
          <div class="text-center bg-white border border-gray-200 rounded-2xl shadow-md p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <!-- ID added, initial value 0 for animation, aria-live for accessibility -->
            <div id="clients-count" class="text-4xl font-bold text-blue-500 mb-2" aria-live="polite">0+</div>
            <div class="text-md font-semibold text-gray-800">Our Clients</div>
          </div>

          <!-- Projects -->
          <div class="text-center bg-white border border-gray-200 rounded-2xl shadow-md p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div id="projects-count" class="text-4xl font-bold text-blue-500 mb-2" aria-live="polite">0+</div>
            <div class="text-md font-semibold text-gray-800">Projects Completed</div>
          </div>

          <!-- Awards -->
          <div class="text-center bg-white border border-gray-200 rounded-2xl shadow-md p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div id="awards-count" class="text-4xl font-bold text-blue-500 mb-2" aria-live="polite">0+</div>
            <div class="text-md font-semibold text-gray-800">Awards Won</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class=" mx-auto w-full">
  <!-- Section Header -->
  <div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Testimonials</h2>
    <p class="text-lg text-gray-600">Trusted By Over 8,000+ Worldwide Customers</p>
  </div>

  <!-- Loading Spinner -->
  <div id="loadingSpinner" class="loading-spinner mb-8"></div>

  <!-- Horizontal Scroll Container -->
  <div id="testimonialsWrapper" class="relative">
    <!-- Scroll buttons -->
    <button id="scrollLeft" 
            class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </button>

    <div id="testimonialsContainer" 
         class="flex gap-4 overflow-x-auto px-12 pb-4 scroll-smooth no-scrollbar snap-x snap-mandatory">
      <!-- Testimonials dynamically inserted here -->
    </div>

    <button id="scrollRight" 
            class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 z-10 transition">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </button>
  </div>

  <!-- Error Message -->
  <div id="errorMessage" class="hidden text-center text-red-500 mt-8">
    Failed to load testimonials. Please try again later.
  </div>
</div>

<!-- Custom scrollbar hide utility -->
<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<script>
  // Generate star rating
  function generateStarRating(rating) {
    let stars = '';
    for (let i = 0; i < 5; i++) {
      stars += i < rating ? '★' : '☆';
    }
    return `<div class="text-xl text-blue-500 mb-4">${stars}</div>`;
  }

  // Generate initials from name
  function getInitials(name) {
    return name.split(' ').map(w => w[0]).join('').toUpperCase();
  }

  // Render testimonials as horizontally scrollable cards
  function renderTestimonials(testimonials) {
    const container = $('#testimonialsContainer');
    testimonials.forEach(testimonial => {
      const card = `
        <div class="testimonial-card bg-white rounded-xl shadow-md p-6 md:p-8 w-80 flex-shrink-0 snap-center">
          ${generateStarRating(testimonial.rating)}
          <p class="text-gray-600 mb-6 italic">"${testimonial.content}"</p>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
              <span class="text-indigo-600 font-bold">${getInitials(testimonial.name)}</span>
            </div>
            <div>
              <h4 class="font-bold text-gray-800">${testimonial.name}</h4>
              <p class="text-gray-500 text-sm">${testimonial.title}</p>
            </div>
          </div>
        </div>
      `;
      container.append(card);
    });
  }

  $(document).ready(function() {
    $('#loadingSpinner').show();

    $.ajax({
      url: '/assets/data/testimonials.json',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        $('#loadingSpinner').hide();
        if (data.testimonials && data.testimonials.length > 0) {
          renderTestimonials(data.testimonials);
          $('#scrollLeft, #scrollRight').show();
        } else {
          $('#errorMessage').removeClass('hidden').text('No testimonials found.');
        }
      },
      error: function() {
        $('#loadingSpinner').hide();
        $('#errorMessage').removeClass('hidden');
      }
    });

    // Horizontal scroll buttons
    const scrollAmount = 300;
    $('#scrollLeft').click(function() {
      $('#testimonialsContainer').animate({ scrollLeft: '-=' + scrollAmount }, 400);
    });
    $('#scrollRight').click(function() {
      $('#testimonialsContainer').animate({ scrollLeft: '+=' + scrollAmount }, 400);
    });
  });
</script>


<!-- jQuery Counter Animation (place after jQuery) -->
<script>
  $(function () {
    // generic counter that optionally adds suffix after completion
    function animateCounter($el, finalValue, duration, suffix = '') {
      $({ countNum: 0 }).animate({ countNum: finalValue }, {
        duration: duration,
        easing: "swing",
        step: function () {
          // show integer while animating (no suffix to avoid jumping)
          $el.text(Math.floor(this.countNum));
        },
        complete: function () {
          // show final number + suffix
          $el.text(Math.floor(this.countNum) + suffix);
        }
      });
    }

    // target elements and desired final numbers
    const counters = [
      { selector: '#clients-count', value: 126, duration: 2000, suffix: '+' },
      { selector: '#projects-count', value: 300, duration: 2500, suffix: '+' },
      { selector: '#awards-count', value: 25, duration: 1800, suffix: '+' }
    ];

    // ensure elements exist
    const allExist = counters.every(c => $(c.selector).length);
    if (!allExist) {
      console.warn('Accomplishment counters - elements not found. Check IDs.');
      return;
    }

    let animated = false;
    const section = document.querySelector('#accomplishment-section');

    function runAnimation() {
      if (animated) return;
      counters.forEach(c => {
        animateCounter($(c.selector), c.value, c.duration, c.suffix);
      });
      animated = true;
    }

    if ('IntersectionObserver' in window && section) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            runAnimation();
            observer.disconnect();
          }
        });
      }, { threshold: 0.35 });
      observer.observe(section);
    } else {
      // fallback: trigger when scrolled into view (older browsers)
      function onScrollCheck() {
        const $sec = $('#accomplishment-section');
        const sectionTop = $sec.offset().top;
        const sectionHeight = $sec.outerHeight();
        const scrollTop = $(window).scrollTop();
        const windowHeight = $(window).height();

        if (scrollTop + windowHeight > sectionTop + sectionHeight * 0.25) {
          runAnimation();
          $(window).off('scroll', onScrollCheck);
        }
      }
      $(window).on('scroll', onScrollCheck);
      // also check immediately in case section is already in view
      onScrollCheck();
    }
  });
</script>



<script>
    $(document).ready(function() {
        // Smooth scroll to projects section when CTA button is clicked
        $('#cta-button').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#projects').offset().top
            }, 800);
            $('#projects').slideDown();
        });
        
        // Add some animation to the hero text on page load
        $('h1, p, button').hide().fadeIn(1000);
    });
</script>



<?php include __DIR__ . "/includes/footer.php"; ?>