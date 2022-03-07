var slideIndex = 1;
var slideIndex2 = 1;
showSlides(slideIndex);
showSlides2(slideIndex2);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function plusSlides2(n) {
  console.log("plusSlides2 => ", n)
  showSlides2((slideIndex2 += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function currentSlide2(n) {
  showSlides2((slideIndex2 = n));
}

function showSlides(n) {
  console.log("MASUK")
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

function showSlides2(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides2");
  let dots = document.getElementsByClassName("demo2");
  let captionText = document.getElementById("caption2");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active2";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}
