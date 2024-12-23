
// Preloader and Sidebar Management
document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('.preloader');
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.getElementById('close-sidebar');

    // Preloader
    window.addEventListener('load', () => {
        setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }, 1000);
    });

    // Hamburger and Sidebar Functionality
    hamburger.addEventListener('click', () => {
        sidebar.classList.add('active');
    });

    // Close sidebar with X button
    closeButton.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });

    // Close sidebar when clicking outside
    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && 
            !hamburger.contains(e.target) && 
            sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const animateCounter = (id, start, end, duration) => {
      const element = document.getElementById(id);
      const step = (end - start) / (duration / 20); // Calculate step value
      let current = start;
  
      const interval = setInterval(() => {
        current += step;
        if (current >= end) {
          current = end;
          clearInterval(interval);
        }
        element.textContent = Math.floor(current);
      }, 20); // Update every 20ms
    };
  
    // Animate counters
    animateCounter("students-counter", 0, 50, 5000); // 50+ students
    animateCounter("projects-counter", 0, 50, 5000); // 50+ projects
  });
  
  let currentSlide = 0;

  function moveSlide(direction) {
      const carousel = document.querySelector('.carousel');
      const slides = document.querySelectorAll('.carousel img');
      const totalSlides = slides.length;
  
      currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
      const offset = -currentSlide * 100; // Each slide takes 100% of the width
      carousel.style.transform = `translateX(${offset}%)`;
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    const animatedSections = document.querySelectorAll(".animate-section");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        },
        { threshold: 0.1 } // Trigger when 10% of the section is visible
    );

    animatedSections.forEach((section) => observer.observe(section));
});


// Preloader and Sidebar Management
document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('.preloader');
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.getElementById('close-sidebar');

    // Preloader
    window.addEventListener('load', () => {
        setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }, 1000);
    });

    // Hamburger and Sidebar Functionality
    hamburger.addEventListener('click', () => {
        sidebar.classList.add('active');
    });

    // Close sidebar with X button
    closeButton.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });

    // Close sidebar when clicking outside
    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && 
            !hamburger.contains(e.target) && 
            sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    });
});

/*document.addEventListener("DOMContentLoaded", () => {
    const animateCounter = (id, start, end, duration) => {
      const element = document.getElementById(id);
      const step = (end - start) / (duration / 20); // Calculate step value
      let current = start;
  
      const interval = setInterval(() => {
        current += step;
        if (current >= end) {
          current = end;
          clearInterval(interval);
        }
        element.textContent = Math.floor(current);
      }, 20); // Update every 20ms
    };
  
    // Animate counters
    animateCounter("students-counter", 0, 50, 5000); // 50+ students
    animateCounter("projects-counter", 0, 50, 5000); // 50+ projects
  });
  
  const carouselItems = document.querySelectorAll('.carousel-item');
  const prevControl = document.querySelector('.carousel-control.prev');
  const nextControl = document.querySelector('.carousel-control.next');
  
  let currentIndex = 0;
  
  function showSlide(index) {
    carouselItems.forEach((item, i) => {
      item.classList.toggle('active', i === index);
    });
  }
  
  function prevSlide() {
    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    showSlide(currentIndex);
  }
  
  function nextSlide() {
    currentIndex = (currentIndex + 1) % carouselItems.length;
    showSlide(currentIndex);
  }
  
  prevControl.addEventListener('click', prevSlide);
  nextControl.addEventListener('click', nextSlide);
  
  // Automatically advance the carousel every 5 seconds
  setInterval(nextSlide, 5000);
  
  showSlide(currentIndex);*/

//hero carousel
const carouselItems = document.querySelectorAll('.carousel-item');
  let currentIndex = 0;
  
  function updateCarousel() {
      // Ensure all items are inactive
      carouselItems.forEach((item) => {
          item.classList.remove('active');
          item.style.opacity = '0'; // Hide all items
      });
  
      // Activate the current item
      const currentItem = carouselItems[currentIndex];
      currentItem.classList.add('active');
      currentItem.style.opacity = '1'; // Make it visible
  }
  
  // Initialize the carousel
  updateCarousel();
  
  // Automatically change the slide every 5 seconds
  setInterval(() => {
      currentIndex = (currentIndex + 1) % carouselItems.length; // Cycle to the next image
      updateCarousel();
  }, 3000);
  
