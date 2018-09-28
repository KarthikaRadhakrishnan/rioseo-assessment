(function($) {
  "use strict"; // Start of use strict

    var environment = window.location.host;

    if (environment === "localhost") {
        var rootUrl = window.location.protocol + "//" + window.location.host;
    }

    $('[data-toggle="tooltip"]').tooltip({html:true});
    
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
    
    // flash message 
    $(document).ready(function() {
     $('#flashMsg').fadeOut(1800);   
    });
    
  // Toggle the side navigation
  $("#sidebarToggle").on('click',function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll',function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
   
// tbl row delete action    
window.deleteAction = function(id) {
           var deletePath = $("#deletePath_" + id).val();
        $.ajax({
            url: rootUrl + deletePath,
            type: 'GET',
            success: function () {
                console.log('it worked!');
                window.location.reload();
            },
            error: function () {
                console.log('it failed!');
            }
        });
}

})(jQuery); // End of use strict
//
  // delete employee
    function deleteEmployee(id) {
      deleteAction(id); 
  }
  
 // delete job roles
  function deleteRole(id) {
      deleteAction(id); 
  }
  
  // delete location
    function deleteLocation(id) {
      deleteAction(id); 
  }