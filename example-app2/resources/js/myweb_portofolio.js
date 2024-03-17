document.body.scroll({ behavior: "smooth" });

var posY = 0;
var jarak = 20;

function smoothScroll(id) {
  var target = document.getElementById(id).offsetTop;

  var scrollAnimate = setTimeout(function () {
    smoothScroll(id), 2;
  });

  posY = posY + jarak;

  if (posY >= target) {
    clearTimeout(scrollAnimate);
    posY = 0;
  } else {
    window.scroll(0, posY);
  }
}

function Scroll() {
  var Scrolls = document.querySelectorAll(".reveal");
  var header = document.querySelector(".header");
  var bodyContent = document.querySelector(".bodyContent");
  var btnHam = document.querySelectorAll(".btnHam");

  if (document.documentElement.scrollTop > 0) {
    header.style.position = "fixed";
    header.style.width = "100%";
    header.style.zIndex = "1";
    header.style.background = "transparent";
    header.style.transform = "scale(0)";
    for (var i = 0; i < btnHam.length; i++) {
      btnHam[i].style.backgroundColor = "white";
    }
  } else {
    header.style.transform = "scale(1)";

    header.style.background = "#386261";
    header.style.position = "relative";
    for (var i = 0; i < btnHam.length; i++) {
      btnHam[i].style.backgroundColor = "#386261";
    }
  }

  for (var i = 0; i < Scrolls.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = Scrolls[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      Scrolls[i].classList.add("active");
    } else {
      Scrolls[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", Scroll);
window.addEventListener("load", function () {
  alert("Welcome");
});
