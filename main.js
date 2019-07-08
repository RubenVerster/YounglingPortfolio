//show small menu on bar click
$(document).ready(function() {
  $('.menu-icon').on('click', function() {
    $('nav ul').toggleClass('showing');
  });
});

$(document).ready(function() {
  $('a').on('click', function() {
    $('nav ul').toggleClass('showing');
  });
});
