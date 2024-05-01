var btnTgl1 = document.getElementById('btnTgl1');
var btnTgl2 = document.getElementById('btnTgl2');
var leftContent = document.getElementById('leftContent');
var backToogle = document.getElementById('backToogle');



btnTgl1.addEventListener("click", function () {
  leftContent.style.display = "grid";
  btnTgl1.style.transform = "scale(0)";
  backToogle.style.transform = "scale(1)";
  backToogle.style.position= "static";
  btnTgl1.style.position = "absolute";
});

backToogle.addEventListener("click", function () {
    leftContent.style.display = "none";
    btnTgl1.style.transform = "scale(1)";
    backToogle.style.transform = "scale(0)";
  });
