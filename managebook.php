<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managebook</title>
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
    .managecontainer{
        text-align: center;
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
          <a href="managebook.php"> MANAGE BOOKING <a>
          <a href ="aboutus.php" class ="right"> ABOUT US</a>
        </nav>
        <?php
            if (isset($_SESSION['message'])): ?>
                <div class = "alert-<?=$_SESSION['msg_type']?>">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                ?>
                </div>
            <?php endif ?>
            
        

   <div class = "managecontainer">
       <div class="manageform">
           <br>
            <h2> Retrieve your booking </h2>
    
            <div class = "manageform">
                <?php //require_once 'manageupdate.php';?>
                <form action = "manageupdate.php" method = "POST"> 
                <p> FirstName: <input type="text" name="first_name" placeholder = "First Name"  required></p>
                <p> Lastname: <input type="text" name="last_name" placeholder = "Last Name"  required></p>
                <p> email: <input type="text" name="email" placeholder = "email"  required></p>
                <p> <input type="submit" name= "retrieve" value ="Lookup Booking"></p>
                </form>

            </div>
            <div class = "table">
                <?php 
                    
                        
                        /*$mysqli = new mysqli('localhost','root','','solude_events') or die(mysqli_error($mysqli));
                        
                        
                        pre_r($result);
                        function pre_r($array){
                            echo '<pre>';
                            print_r($array);
                            echo '<pre>';
                        }*/
                        
                    
                    
                ?>
                
                

                      
                      
                      
                    
                
                
            </div>
            
    
       </div>
                        
    </div>
  
</body>
</html>