
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

   <div class = "managecontainer">
       <div class="manageform">
           <br>
            <h2> Booking listings </h2>
    
            
            <div class = "table">
                <?php
                if (isset($_POST['retrieve'])) {
                  $mysqli = new mysqli('localhost','root','','solude_events') or die (mysqli_error($mysqli));
                  $firstname = $_POST['first_name'];
                  $lastname = $_POST['last_name'];
                  $email = $_POST['email'];
                 

                  $result = $mysqli -> query("SELECT * FROM Booking WHERE firstname ='$firstname' AND lastname = '$lastname' AND email = '$email'")or die($mysqli ->error);
                  ?> <!-- php ends -->
                  <div class = "table2">
                    <div class = "table">
                      <thead>
                        <tr>
                          <th>firstname</th>
                          <th>lastname</th>
                          <th>email</th>
                          <th>venue</th>
                          <th>event</th>
                          <th>date</th>
                          <th>time</th>
                          <th>hours</th>
                          <th colspan = "2"> Action </th>
                        </tr>
                      </thead>
                    </div>
                  </div>

                  <?php
                  while ($row = $result ->fetch_assoc()) :?>
                    <tr>
                        
                            
                        <td> <?php echo $row['firstname']?> </td>
                        <td> <?php echo $row['lastname']?> </td>
                        <td> <?php echo $row['email']?> </td>
                        <td> <?php echo $row['venue']?> </td>
                        <td> <?php echo $row['eventtype']?> </td>
                        <td> <?php echo $row['date']?> </td>
                        <td> <?php echo $row['starttime']?> </td>
                        <td> <?php echo $row['hours']?> </td>
                        <td>
                          <a href= "manageupdate.php?edit = <?php echo $row['booking_id'];?>" class = "btn btn-info">Edit</a>
                          <a href= "manageupdate.php?delete = <?php echo $row['booking_id'];?>" class = "btn btn-danger">Delete</a> 
                        </td>
                        <br>
                            
                    </tr>
                         <?php endwhile; ?>
                   
                  
                <?php } ?>
                
                <?php if (isset($GET['delete'])) {
                  $id = $GET['delete'];
                  $mysqli ->query("DELETE FROM Booking WHERE booking_id = $id ") or die($mysqli ->error());
                  $_SESSION['message'] = "Booking deleted";
                  header("location: manageupdate.php");

                } ?>
                
                <?php
                if (isset($_GET['edit'])) {
                  echo "did you get it?";
                  $id = $GET['edit'];
                  $result = $mysqli ->query("SELECT * FROM Booking WHERE booking_id = $id") or die($mysqli ->error());

                  $row = $result ->fetch_array();
                  //intiliazing variables 
                  $firstname = ""; $lastname = ""; $email = "";$venue = ""; $eventtype = ""; $date="";
                  $starttime = ""; $hours = "";

                  $firstname = $row['firstname'];
                  $lastname = $row['lastname'];
                  $email = $row['email'];
                  $venue = $row['venue'];
                  $eventtype = $row['eventtype'];
                  $date = $row['date'];
                  $starttime = $row['starttime'];
                  $hours = $row['hours'];
                  
                  ?>

                  <form class="form-inline" action="manageupdate.php" method = "POST">
                  <label for="firstname">firstname</label>
                  <input type="text" id="firstname" value= <?php echo $firstname?> name="email">

                  <label for="lastname">lastname</label>
                  <input type="text" id="lastname"  value= <?php echo $lastname?> name="lastname">

                  <label for="email">email</label>
                  <input type="text" id="email" value= <?php echo $email?> name="email">

                  <label for="venue">venue</label>
                  <input type="text" readonly id="venue" value= <?php echo $venue?> name="venue">

                  <label for="eventtype">event</label>
                  <input type="text" id="eventtype" value= <?php echo $eventtype?> name="eventtype">

                  <label for="date">date</label>
                  <input type="date" id="date" name="date">

                  <label for="starttime">time</label>
                  <input type="time" id="starttime" value= <?php echo $starttime?> name="starttime">

                  <label for="hours">hours</label>
                  <input type="number" id="hours" min= "1" max= "12" <?php echo $hours?> name="hours">

                  <button type="submit">Submit</button>
                  </form>

                  <!-- watch out --> 
               <?php } ?>
                
   
            </div>
            
       </div>
                        
    </div>
  
</body>
</html>
<?php




   //header("refresh:1; url= managebook.php");

  //update query 
  
?>