
$(document).ready(function(){

  var oritop = -100;
  $(window).scroll(function() {

      var scrollt = window.scrollY;
      var elm = $(".nav-header");
      if(oritop < 0) {
          oritop= elm.offset().top;
      }

      if(scrollt >= oritop) {
          elm.css("position", "fixed");
          elm.css("top" , 0);
      }

      else {
          elm.css("position", "relative");
      }

      
  });
});