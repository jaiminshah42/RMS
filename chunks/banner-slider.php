
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

</style>
</head>
<body>

<div class="slideshow-container">


<div class="mySlides fade">
  <img src="images/img.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/img3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/img9.jpg" style="width:100%">
</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 0;
let timer;

// Function to start the slideshow
function startSlideshow() {
  // Clear the previous timer
  clearTimeout(timer);
  // Call the showSlides function to display the initial slide
  showSlides();
}

// Function to display the slides
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n) {
    slideIndex = n;
  } else {
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  clearTimeout(timer);
  timer = setTimeout(showSlides, 3000); // Change image every 3 seconds
}

// Function to move to the previous slide
function plusSlides(n) {
  clearTimeout(timer);
  let newIndex = slideIndex + n;
  if (newIndex < 1) {
    newIndex = document.getElementsByClassName("mySlides").length;
  } else if (newIndex > document.getElementsByClassName("mySlides").length) {
    newIndex = 1;
  }
  showSlides(newIndex);
}

// Function to move to a specific slide
function currentSlide(n) {
  clearTimeout(timer);
  showSlides(n);
}

// Call the startSlideshow function to initiate the slideshow
startSlideshow();
</script>


	

</body>
</html>