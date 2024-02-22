$(document).ready(function () {
  // Initial state of the back-to-top button
  $(".back-to-top").hide();

  // Function to check scroll position and toggle the button
  function toggleBackToTopButton() {
    var scrollPosition = $(window).scrollTop();
    var articleSectionOffset = $("#article").offset().top;

    if (scrollPosition > articleSectionOffset) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  }

  // Event listener for scroll
  $(window).scroll(function () {
    toggleBackToTopButton();
  });

  // Event listener for button click
  $(".back-to-top").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      1500,
      "easeInOutExpo"
    );
    return false;
  });
});
