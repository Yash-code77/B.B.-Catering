// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const section = document.querySelector(this.getAttribute('href'));
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// Dynamic Content Loading (optional usage)
function showContent(sectionId) {
  const sections = document.querySelectorAll('.content-section');
  sections.forEach(section => section.style.display = 'none');
  const selectedSection = document.getElementById(sectionId);
  if (selectedSection) selectedSection.style.display = 'block';
}

// Contact Form Submission Handling (general-purpose form)
function showConfirmation(event) {
  event.preventDefault();
  const form = event.target;
  const confirmationMessage = document.getElementById('confirmationMessage');

  fetch(form.action, {
    method: 'POST',
    body: new FormData(form),
    headers: { 'Accept': 'application/json' }
  })
    .then(response => {
      if (response.ok) {
        form.reset();
        confirmationMessage.style.display = 'block';
        setTimeout(() => {
          confirmationMessage.style.display = 'none';
        }, 5000);
      } else {
        alert("Error! Please try again later.");
      }
    })
    .catch(error => {
      console.error("Network error:", error);
      alert("Network error. Please check your connection.");
    });
}

// Booking Form Submission Handling
function showBookingConfirmation(event) {
  event.preventDefault();
  const form = event.target;
  const bookingMsg = document.getElementById('bookingConfirmationMessage');

  fetch(form.action, {
    method: 'POST',
    body: new FormData(form),
    headers: { 'Accept': 'application/json' }
  })
    .then(response => {
      if (response.ok) {
        form.reset();
        bookingMsg.style.display = 'block';
        setTimeout(() => {
          bookingMsg.style.display = 'none';
        }, 5000);
      } else {
        alert("Error sending booking request.");
      }
    })
    .catch(error => {
      console.error("Booking error:", error);
      alert("Network error during booking.");
    });
}

// ParticlesJS Configuration
document.addEventListener('DOMContentLoaded', function () {
  particlesJS('particles-js', {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": { "value": ["#ffffff", "#fdd0d0", "#ffc0cb"] },
      "shape": {
        "type": "circle",
        "stroke": { "width": 0, "color": "#000000" }
      },
      "opacity": {
        "value": 0.5,
        "random": true
      },
      "size": {
        "value": 5,
        "random": true
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 3,
        "random": true,
        "straight": false,
        "out_mode": "out"
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": { "enable": true, "mode": "grab" },
        "onclick": { "enable": true, "mode": "push" },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 200,
          "line_linked": { "opacity": 1 }
        },
        "push": { "particles_nb": 4 }
      }
    },
    "retina_detect": true
  });
});
