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
  
    </style>
</head>
<body>
     <div class="title"><header> S O L U D E E V E N T S </header></div>

     <br>
    <div class="linksBar" style="position:absolute; right:0;">
      <nav class="rightSide">
        <a href="index.php"> Restart </a>
      </nav> </div>
      <br>

<!--<img src="PRICES.png" alt="prices" align="right" width=40% >-->

<br>

    <form class="forms" action="registered.php" method="POST">

      <b> CREATE PROFILE <b>
      <br>
      <p>First Name:  <input type="text" name="first_name" size="30" value="" required/> </p>
      <p>Last Name:  <input type="text" name="last_name" size="30" value="" required/> </p>
      <p>Email:  <input type="text" name="email" size="30" value="" required/> </p>
      <p>Phone Number:   <input type="text" name="phone" size="30" value="" required /></p>
<!--<form action="" method="post" class="date">-->
      <p>Event Date: <select name="month"> 
        <option value = "blank"> </option>
        <option> January </option> 
         <option> February </option> 
          <option> March </option> 
           <option> April </option> 
            <option> June </option> 
             <option> July </option> 
              <option> August </option>
                <option> September </option> 
                 <option> October </option> 
                  <option> Novemeber </option> 
                   <option> December </option> 
      </select>
      
      <select name="day">
      
        <option value = "blank"> </option>
        <option> 1 </option> 
         <option> 2 </option> 
          <option> 3 </option> 
           <option> 4 </option> 
            <option> 5 </option> 
             <option> 6 </option> 
              <option> 7 </option>
                <option> 8 </option> 
                 <option> 9 </option> 
                  <option> 10 </option> 
                   <option> 11 </option>
         <option> 12 </option> 
          <option> 13 </option> 
           <option> 14 </option> 
            <option> 15 </option> 
             <option> 16 </option> 
              <option> 17 </option>
                <option> 18 </option> 
                 <option> 19 </option> 
                  <option> 20 </option> 
                   <option> 21 </option>
         <option> 22 </option> 
          <option> 23 </option> 
           <option> 24 </option> 
            <option> 25 </option> 
             <option> 26 </option> 
              <option> 27 </option>
                <option> 28 </option> 
                 <option> 29 </option> 
                  <option> 30 </option> 
                   <option> 31 </option> 
                   
        
      </select>
    
      <select name="year">
      
      <option>  </option> 
         <option> 2020 </option> 
          <option> 2021</option> 
           <option> 2022 </option> 
            <option> 2023 </option> 
             <option> 2024</option> 
              <option> 2025 </option>
                <option>2026 </option> 
                 <option> 2027</option> 
                  <option> 2028 </option> 
                   <option> 2029</option> 
                   <option> 2030</option>
      </select> </p> 
      
      <p>Event Type : <select name = "Events" id "Events"> 
      <option value = "blank"> </option>
        <option value = "Wedding"> Wedding</option>
        <option value = "Birthday"> Birthday</option>
        <option value = "Conference"> Conference</option>
        <option value = "Anniversary"> Anniversary</option>
        <option value = "Fundraiser"> Fundraiser</option>
        <option value = "Awards Ceremony"> Awards Ceremony</option>
        <option value = "Other"> Other</option>
      </select> </p>

     <form name="EventHall" method="POST" class="mb" ><p> Venue Name: 
      <select>
      <!--Austin-->
      <option name="austin" value="blank">  </option>
      <option name="austin" value="theBelmont"> The Belmont - Austin, TX  </option>
      <option name="austin" value="mercuryHall"> Mercury Hall - Austin, TX  </option>
      <option name="austin" value="houseontheHill">House On the Hill - Austin, TX  </option>
      <option name="austin" value="theEleanor"> The Eleanor - Austin, TX  </option>
      <!--Dallas-->
      <option name="dallas" value="theSpace"> The Space - Dallas, TX  </option>
      <option name="dallas" value="650"> Sixty Five Hundred - Dallas, TX  </option>
      <option name="dallas" value="towerClub"> Tower Club - Dallas, TX  </option>
      <option name="dallas" value="hickoryStreetAnnex">Hickory Street Annex - Dallas, TX  </option>
      <option name="dallas" value="theEmpireRoom"> The Empire Room - Dallas, TX  </option>
      <!--Denton-->
       <option name="denton" value="monroePearson"> Monroe Pearson - Denton, TX  </option>
      <option value="buffaloValleyEventCenter">Buffalo Valley Event Center - Denton, TX  </option>
       <option value="Milestone"> The Milestone - Denton, TX  </option>
      <!--Fort Worth-->
       <option value="aguilarEvents">Aguilar Events & Performance Center - Fort Worth, TX  </option>
      <option value="4Eleven">The 4 Eleven - Fort Worth, TX  </option>
      <option value="historic512">Historic 512 - Fort Worth, TX  </option>
      <option value="809atVickery">809 at Vickery - Fort Worth, TX  </option>
      <!--Houston-->
       <option value="bellTower34th">The Bell Tower at 34th - Houston, TX  </option>
      <option value="AstonGardens">Aston Gardens - West Houston - Houston, TX  </option>
      <option value="Gallery"> The Gallery - Houston, TX  </option>
      <option value="theBougainvilleas"> The Bougainvilleas - Houston, TX  </option>
      <option value="signatureManor">Signature Manor - Houston, TX  </option>
      <option value="heightsVilla">The Heights Villa - Houston, TX  </option>
      <option value="theRevaire"> The Revaire - Houston, TX  </option>
       <option value="ballroomBayouPlace">The Ballroom at Bayou Place - Houston, TX  </option>
      <!--Laredo-->
       <option value="paseoReal">Paseo Real - Laredo, TX  </option>
        <option value="losPatios">Los Patios - Laredo, TX  </option>
         <option value="altezaEvents">Altezza Events Southview - Laredo, TX  </option>
      <!--San Antonio-->
       <option value="plazaLecea"> The Event Center at Plaza Lecea - San Antonio, TX  </option>
        <option value="lambermont">Lambermont Events - San Antonio, TX  </option>
         <option value="roszellGardens"> Roszell Gardens Wedding and Events Center - San Antonio, TX  </option>
       <option value="jackGuenther">Jack Guenther Pavilion at the Briscoe - San Antonio, TX  </option>  
   
      <!--Sugarland-->
       <option value="riverbendCountry">Riverbend Country Club - Sugarland, TX  </option>
        <option value="hollywoodEvent">Hollywood Event Center - Sugarland, TX  </option>
      <!--Waco-->
       <option value="tuckerHall">Tucker Hall - Waco, TX  </option>
        <option value="baaylorClub">Baylor Club - Waco, TX  </option>
         <option value="thePalladium"> The Palladium - Austin, TX  </option>

      
      
      </select> </p> <!--use options--></form>
      <!--creating amount of hours-->
        <form>
            <label for = "Hours">Amount of Hours </label>
            <input type = "number" id= "Hours" name = "Hours" min = "1" max = "12">
        </form>

        
        


      

      <p><input type="submit" name="submit" value="Send" onclick="location.href='registered.php'"/></p>

    </form>


        

   <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['EventsHall'])) {
          $selected = $_POST['EventsHall'];
          echo 'You have chosen: ' . $selected;
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
    -->


       
    
</body>
</html>