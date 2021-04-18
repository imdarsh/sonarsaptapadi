// // Animations init
// new WOW().init();

$(document).ready(function() {
    $("#profile_for").change(function() {
      if ($(this).val() == "Self") {
        $('#gender').show();
      } else {
        $('#gender').hide();
      }
    });
  });