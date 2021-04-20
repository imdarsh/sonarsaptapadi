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

  new Picker(document.querySelector('.js-time-picker'), {
    format: 'HH:mm',
    headers: true,
    text: {
      title: 'Pick a time',
    },
  });