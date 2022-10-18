
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOLUDE EVENTS </title>


  <style> 
* {box-sizing: border-box}
  body {
  font-family: "Lucida Console", Courier, monospace; 
  margin:0;
  background-color: #C09A6B;
  font-size: x-large;}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
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

/* Caption text */
.text {
  color: black;
  font-variant: small-caps;
  font-weight: bold;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

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


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

/*@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}*/

  .firstBox{
    font-size: 300px
    width: 60%;
    border: 3px solid #CBAE88;
    padding: 10px;
    text-align: center;
    background: #CBAE88;
  }

 .button{
  display: block;
  width: 100%;
  border: none;
  background-color: #9B7B55;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
 }

 .button:hover {
  background-color: #ddd;
  color: black;}


  </style>

</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://purewows3.imgix.net/images/articles/2017_10/beautiful_indoor_venues-600.jpg?auto=format,compress&cs=strip" style="width:100%">
  <div class="text">Houston, TX</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://i.pinimg.com/originals/2f/a8/e5/2fa8e5b03c851e87be28c6eae4619cda.jpg" style="width:100%">
  <div class="text">Nashville, TN</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://purewows3.imgix.net/images/articles/2017_02/weddings_alabama.png?auto=format,compress&cs=strip" style="width:100%">
  <div class="text"> Dallas, TX</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<br>

<div>
  <button class="button" onclick="location.href='choosecity.php'">
      CLICK HERE TO BEGIN
    </button>
</div>

  <div class="firstBox">
    <h1> SOLUDE EVENTS </h1>
    <p> We hope you stay blessed </p>
  </div>

<script>

// JS for Pictures in Front Page
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




</body>
</html> 