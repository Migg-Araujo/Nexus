let lastScrollTop = 0;
const header = document.getElementById("header");
const arrow = document.getElementById("arrow");
const about = document.getElementById("about");

window.addEventListener("scroll", function() {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  header.style.animation = 'none';

  if (currentScroll > lastScrollTop) {

    header.style.top = "-90px";
    arrow.style.animation = "none";
  } else {
    header.style.top = "0";
    arrow.style.animation = "alert 1s ease-in-out infinite";
  }

  lastScrollTop = currentScroll;
});

function down() {
  about.scrollIntoView({ behavior: "smooth" });
};