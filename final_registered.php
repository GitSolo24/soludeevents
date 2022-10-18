<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
<style> 
    * {box-sizing: border-box}
      body {
      font-family: "Lucida Console", Courier, monospace; 
      margin:0;
      background-color: #CBAE88;
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
        float: right;
      }
    .pics 
    {
        margin: 0 auto;
        display: block;
        border: 2px solid black;
      }
    .body 
      {
        background-image: url("diamond.jpg");
        margin: 0 auto;
        display: block;
        text-align:center;
        
      }
          
    .pp
      {
        text-align: center;
        padding: 10px;
        border: 5px solid gray;
        margin: 0;

      }
</style>
</head>

<body>

  <div class="firstBox">
    <h1> SOLUDE EVENTS </h1>
    <p> We hope you stay blessed </p>
  </div>

    <div class="linksBar">
        <nav class="topbar">
          <a href="index.php"> HOME</a>
          <a href="choosecity.php"> CITIES <a>
        
          <a href ="aboutus.php" class="right"> ABOUT US</a>
        </nav>
    </div> 

  <?php
    

   if (isset($_POST['submit'])) 
   {
     //add database connection 
     require_once 'dbconnect.php';
     
     $firstName = $_POST['first_name'];
     $lastName = $_POST['last_name'];
     $street = $_POST['streetadd'];
     $city = $_POST['city'];
     $state = $_POST['staty'];
     $zip = $_POST['zipcode'];
     $Email = $_POST['email'];

     if (empty($_POST['phone'])) {
       $phoneNumber = "-";
     } else {
      $phoneNumber = $_POST['phone'];
     }
     $eventDate = $_POST['Eventdate'];
     $eventtimestart = $_POST['eventtime'];
     $eventType = $_POST['Events'];
     $venueName = $_POST['EventHall'];
     $hours = $_POST['Hours'];
     $total_Amount = $_POST['Total'];
     $age = $_POST['age'];

     //venue variables 
     $vstreet = $_POST['vstreet'];
     $vcity = $_POST['vcity'];
     $vstate = $_POST['vstate'];
     $vzipcode = $_POST['vzipcode'];
  
   } 
   
   if (empty($_POST['first_name'])|| empty($_POST['last_name'])|| empty($_POST['streetadd'])|| empty($_POST['city']) || empty($_POST['staty']) || empty($_POST['age']) ) 
   {
     echo "<br>";
     echo "PLEASE FILL OUT FIELDS";
     # code...
   } else {
      $sql = "INSERT INTO Client (firstname, lastname,email,venue,address,city,state,zipcode,age,phonenumber) 
      VALUES ('$firstName','$lastName','$Email','$venueName','$street','$city','$state','$zip','$age','$phoneNumber')";
      mysqli_query($conn,$sql);
  
      $sql2 = "INSERT INTO Booking (firstname, lastname,email,eventtype,hours,date,starttime) 
      VALUES ('$firstName','$lastName','$Email','$eventType','$hours','$eventDate','$eventtimestart')";
      mysqli_query($conn,$sql2);
  
      $sql3 = "INSERT INTO Cost (costhour, totalamount) 
      VALUES ('$hours','$total_Amount')";
      mysqli_query($conn,$sql3);
  
      $sql4 = "INSERT INTO events_p (eventtype, eventdate) 
      VALUES ('$eventType','$eventDate')";
      mysqli_query($conn,$sql4);
  
      $sql5 = "INSERT INTO Venue (venuename, address, city, state,zipcode)   
      VALUES ('$venueName','$vstreet','$vcity','$vstate','$vzipcode')";
      mysqli_query($conn,$sql5);

      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo '<div class = "Thankblock" > <p class = "pp"> THANK YOU FOR REGISTERING WITH SOLUDE EVENTS! <br> WE WILL CONTACT YOU SHORTLY! </p></div>';
      echo "<br>";
      
   }

  ?>
  
</body>
</html>