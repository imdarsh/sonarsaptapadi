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

  $(document).ready(function() {
    $("#workingFor").change(function() {
      if ($(this).val() == "Not Working") {
        $('#workingAs').hide();
        $('#annualIncome').hide();
      } else {
        $('#workingAs').show();
        $('#annualIncome').show();
      }
    });
  });

  