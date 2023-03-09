/* Sidebar */

const sidebar = document.querySelector('#sidebar');
const sidebarToggler = document.querySelector('.sidebar_toggler');


// Toggling the Sidebar
sidebarToggler.addEventListener('click', () => {
    sidebar.classList.toggle('show');
});


// Closing the Sidebar on clicking Outside and on the Sidebar-Links
window.addEventListener('click', (e) => {
    if (e.target.id !== 'sidebar' && e.target.className !== 'sidebar_toggler') {
        sidebar.classList.remove('show');
    }
});

// sliding img for community page 

$(document).ready(function() {
    // set active slide to first slide
    $('.slide').first().addClass('active');
  
    // transition slides every 5 seconds
    setInterval(function() {
      // get active slide
      var activeSlide = $('.slide.active');
      // get next slide
      var nextSlide = activeSlide.next('.slide');
      // if there is no next slide, loop back to first slide
      if (nextSlide.length == 0) {
        nextSlide = $('.slide').first();
      }
      // hide current slide
      activeSlide.removeClass('active');
      // show next slide
      nextSlide.addClass('active');
    }, 5000);
  });
