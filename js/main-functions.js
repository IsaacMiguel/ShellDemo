$("#login").on('click', function(e) {
    e.preventDefault();
    $(".login-overlay").fadeIn(300);
    $(".glyphicon").on('click', function(e) {
      $(".login-overlay").fadeOut(300);  
    });
});

// $('#slider').nivoSlider({
//     controlNav: false,
//     effect: 'fade',
//     animSpeed: 200,
//     manualAdvance: false,
// });