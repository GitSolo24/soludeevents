<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    
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

      .container{
        display:inline-flex;
        
      }
      .bottomhalf{
        text-align:right;
        padding: 10px;
      }
</style>

</head>
<body>
      <?php include 'dbconnect.php'?> 
     <div class="title"><header> S O L U D E E V E N T S </header></div>

     <br>
    
       <div class="linksBar">
          <nav class="topbar">
            <a href="index.php"> HOME</a>
            <a href="choosecity.php"> CITIES <a>
            <a href ="aboutus.php" class="right"> ABOUT US</a>        
          </nav> 
        </div>
      <br>
        <div> <h1>You have selected The Belmont in Austin, TX!</h1> </div>     <!-- change the names --> 

      <div class = "container">
            <div class = "tophalf">
                
                <br>
                <!--<img src="PRICES.png" alt="prices" align="right" width=40% >-->

                <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="https://static.spacecrafted.com/fd5288b16263413e98b563a5ea4dbf25/i/f3ea6a2077ea487cbc6babb0243aa610/1/GCuCv726gZycFxatRCb7iU/2Q%3D%3D-1.jpg" style="width:100%">

                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="https://static.spacecrafted.com/fd5288b16263413e98b563a5ea4dbf25/i/de6f6e7eda2447f5b3c9b0502812d233/1/GCuCv726gZycFxatRCb7iU/2Q%3D%3D-2.jpg" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="https://cdn.wedding-spot.com/__sized__/images/venues/10898/The-Belmont-Austin-TX-532dd1d4-8ee7-440d-bc5a-1477902dbbde-97450e389c42885476f1fbe9bc5bca5a.jpg"  style="width:100%">
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
                      dots[i].className = dots[i].className.replace("active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += "active";
                    setTimeout(showSlides, 6000); // Change image every 6 seconds
                  }
                </script>
            </div>

            <br>
            <div class = "bottomhalf">
              <form class="forms" action="final_registered.php" method="POST">

                  <b>Let's get your information: <b>
                  <br>
                  <p>First Name:  <input type="text" name="first_name" size="30" placeholder = "First Name" value="" required/> </p>
                  <p>Last Name:  <input type="text" name="last_name" size="30" value="" required/> </p>
                  <p>Address:  <input type="text" name="streetadd" size="40" value="" placeholder = "Street" required/> </p>
                  City:  <input type="text" name="city" size="15" value="" placeholder = "City" required/>
                  State: <select name = "staty" required>
                          <option value="-">Other</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District Of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                    </select>
                    zipcode:  <input type="number" name="zipcode" size="20" value ="" min="01000" max= "99999" placeholder = "zip" required/> <br><br>
                    Email: <input type="text" name="email" size="30" value="" required/> 
                    Age:  <input type="number" name="age" size="5" min = "18" max = "99" value="" required/>
                  <p>Phone Number : <input type="text" name="phone" size="30" value="" placeholder = "optional"></p>

              
                  <label for="Eventdate"> Event Date: </label>
                  <input type="date" id="Eventdate" name="Eventdate">
                  <script>

                      var today = new Date();
                      var dd = today.getDate();
                      var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
                      var yyyy = today.getFullYear();
                        if(dd<10){
                          dd='0'+dd
                        } 
                        if(mm<10){
                          mm='0'+mm
                        } 

                      today = yyyy+'-'+mm+'-'+dd;
                      document.getElementById("Eventdate").setAttribute("min", today);
                  </script>

                
                  <p>Event Type : 
                  <select name = "Events" id = "Events"> 
                    <option value = "blank"> </option>
                    <option value = "Wedding"> Wedding</option>
                    <option value = "Birthday"> Birthday</option>
                    <option value = "Conference"> Conference</option>
                    <option value = "Anniversary"> Anniversary</option>
                    <option value = "Fundraiser"> Fundraiser</option>
                    <option value = "Awards Ceremony"> Awards Ceremony</option>
                    <option value = "Other"> Other</option>
                  </select> 
                  
                  </p> <input readonly name = "EventHall" value = "The Belmont - Austin, TX" size = "25" >  </p> 

                  
                    <!-- time controls -->
                    <label for = "EventTime"> Event Time Start: </label>
                    <?php 
                    date_default_timezone_set('America/Chicago');
                    $current = date("g:i a");
                    ?>
                    <input type ="time" id="eventtime" name="eventtime" min = "<?php $current?>" >

                    
                    <!--creating amount of hours-->
                    <label for = "hours"> Amount of Hours: </label>
                    <input type = "number" id = "hours" name = "Hours" min = "1" max = "12" value="" onchange = "getPrice()">
                    <input readonly id = "total" name = "Total" size = "15" value = "0">

                    <script>
                    function getPrice(){
                      var booktime = Number(document.getElementById("hours").value);
                      var totalValue = (booktime * 375)*(1 + 0.0625);
                      document.getElementById("total").value = "$" + totalValue.toFixed(2);

                    }
                    </script>

                    <!-- Venue info -->                                               <!-- edit these--> 
                    <input type = "hidden" name = "vstreet" value = '305 W 6th St'>
                    <input type = "hidden" name = "vcity" value = 'Austin'>
                    <input type = "hidden" name = "vstate" value = 'TX'>
                    <input type = "hidden" name = "vzipcode" value = '78701'>

                    <!-- Submit -->
                    <p><input type="submit" name="submit" value ="Send" onclick="location.href='final_registered.php'"/></p>

              </form>

            </div>
      </div>




              
            
</body>
</html>




</html>