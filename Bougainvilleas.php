<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bougainvilleas</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <style>
      body{
        background-color:#9B7B55;
      }
       .title{
           background-color: #C09A6B;
           font-size: x-large;
           text-align: center;
           width:100%;
       }

      .forms{
        text-align: center;
      }

      .rightSide{
          position: fixed;
          left: 0;
          bottom: 0;
      }
      h1{
          text-align: center;
      }
      
      .topbar {
        overflow: hidden;
        background-color: #0d1433;
      }
      .topbar a {
        float: left;
        display: block;
        color: whitesmoke;
        font-weight: bolder;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        cursor: pointer;
      }
      .topbar .right {
        float: right;}


        * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
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

/* The dots/bullets/indicators */
.dot {
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
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  
    </style>
</head>
<body>
     <div class="title"><header> S O L U D E E V E N T S </header></div>

     <br>
    <div class="linksBar" style="position:absolute; right:0;">
      <nav class="rightSide">
        <a href="index.php"> Restart </a>
      </nav> </div>


       <div class="linksBar">
      <nav class="topbar">
         <a href="index.php"> HOME</a>
        <a href="choosecity.php"> CITIES <a>
       
        <a href ="" class="right"> ABOUT US</a>
      </nav> <div>
      <br>



<h1>You have selected The Bougainvilleas in Houston, TX!</h1>

<br>
<!--<img src="PRICES.png" alt="prices" align="right" width=40% >-->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdn.wedding-spot.com/images/venues/2419/The-Bougainvilleas-Event-Center-Wedding-Houston-Texas-1.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://s3.us-west-2.amazonaws.com/images.herecomestheguide.com/images/articles/_1200x630_crop_center-center_82_none/WD20181121-CorinthianThe-01_190701_020832.jpg?mtime=1573006303" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://media-api.xogrp.com/images/e958c933-0f7d-4ce6-a443-d3e065862a41~rs_414.240"  style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<br>



    <form class="forms" action="registered.php" method="POST">

      <b>Let's get your information: <b>
      <br>
      <p>First Name:  <input type="text" name="first_name" size="30" value="" required/> </p>
      <p>Last Name:  <input type="text" name="last_name" size="30" value="" required/> </p>
      <p>Full Address:  <input type="text" name="email" size="70" value="" required/> </p>
      <p>Email:  <input type="text" name="email" size="30" value="" required/> </p>
      <p>Phone Number:   <input type="text" name="phone" size="30" value="" required /></p>
<!--<form action="" method="post" class="date">-->
     
<!--Date-->
    <label for="EventDate"> Event Date: </label>
        <input type="date" id="EventDate" name="EventDate" min="Today">
    <script>    
        var today=new.Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
            if(dd<10)
            {
                dd='0'+dd;
            }
            if(mm<10){
                mm='0'+mm;
            }
        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("Eventdate").setAttribute("min", today);

        </script>

     <form name="EventHall" method="POST" class="mb" ><p> Venue Name: 
      <select>
    
      <!--Fort Worth-->
       <option value="bouga">The Bougainvilleas - Houston, TX </option>

      </select> </p> <!--use options--></form>

        <!--TIME-->
      <label for = "EventTime"> Event Time Start: </label>
        <input type="time" id="eventtime" name="eventtime">
        
      <!--creating amount of hours-->
        <form>
            <label for = "Hours">Amount of Hours: </label>
            <input type = "number" id= "Hours" name = "Hours" min = "1" max = "12">
            <select name ="operator"> <option name="blank"> </option>
            <option>TP </option> </select>
        
          <button name="submit"> Total Price is </button> $
           <?php
  if(isset($_GET['submit']))
        {
            //creating a variable and set it equal to what is inside the url 
        $result1 = $_GET['Hours'];
        $operator = $_GET['operator'];
            switch($operator){
             case "":
                echo "You need to select a method";
             break;
              case "TP":
                echo 550 * $result1;
              break;}

    }
//checking for the operator
        


?>
        </form>


        
        


      

      <p><input type="submit" name="submit" value="Send" onclick="location.href='registered.php'"/></p>

    </form>


        



       
    
</body>
</html>



</body>
</html>