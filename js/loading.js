$(document).ready(function() {
    /*
    // show loading symbol when a link is clicked
    $('a').click(function() {
      $('#loading').show();
    });
  
    // hide loading symbol when the page is finished loading
    $(window).on('load', function() {
      $('#loading').hide();
    });
    */
    // show loading symbol when the page is being loaded
    $(document).ajaxStart(function() {
      $('#loading').show();
    });
  
    // hide loading symbol when the page has finished loading
    $(document).ajaxStop(function() {
      $('#loading').hide();
    });
  });
  