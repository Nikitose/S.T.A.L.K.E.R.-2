document.addEventListener("DOMContentLoaded", function() {
    window.onscroll = function() {
      var sticky_content = document.querySelector(".sticky_content");
      if (document.body.scrollTop > 440 || document.documentElement.scrollTop > 440) {
        sticky_content.style.opacity = "1";
      } else {
        sticky_content.style.opacity = "0";
      }
    };
  });