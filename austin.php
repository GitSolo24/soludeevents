<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Austin</title>
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
      .pics {
        margin: 0 auto;
        display: block;
        border: 2px solid black;
      }
      body {
        background-image: url("diamond.jpg");
        margin: 0 auto;
        display: block;
        text-align:center;
        
      }
     
      * {
  box-sizing: border-box;
}
      
      table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}

button{cursor:pointer;}

h2,p{
text-align: center;}
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


    

    
<h2> Austin Venues</h2>
<p>A list of venues near Austin.</p>

<table style="width:100%">
  
  <!--title-->
  <tr>
    <th>Venue</th>
    <th>Pictures</th>
    <th> Details </th>
    <th> Select </th>
  </tr>
  <!--row 2-->
  <tr>
    <td>THE BELMONT</td>
    <td> <img src="https://static.spacecrafted.com/fd5288b16263413e98b563a5ea4dbf25/i/f3ea6a2077ea487cbc6babb0243aa610/1/GCuCv726gZycFxatRCb7iU/2Q%3D%3D-1.jpg" width=40% > <img src="https://static.spacecrafted.com/fd5288b16263413e98b563a5ea4dbf25/i/de6f6e7eda2447f5b3c9b0502812d233/1/GCuCv726gZycFxatRCb7iU/2Q%3D%3D-2.jpg" width=40%></td>
    <td> <li>  Indoor Venue</li> <li> Venue can hold up 200 guests </li>
    <li> Different Packages</li></td>
    <td> <button  onclick="location.href='belmont.php'"> select </button> </td>
  </tr>
  
  <tr>
    <td>MERCURY HALL</td>
    <td> <img src="https://i.pinimg.com/originals/fd/1c/66/fd1c6638d1cf9241661dad4dae9cdafb.jpg" width=40% > <img src="https://www.nowplayingaustin.com/wp-content/uploads/sites/www.nowplayingaustin.com/images/2019/05/MercuryHall_JWPhoto_023.jpg" width=40%></td>
    <td> <li>  Outdoor/Indoor Venue </li> <li>  Can hold up to 150 guests</li> <li> Wedding, Anniversary & Birthday Packages  </li> </td>
 <td> <button  onclick="location.href='mercuryhall.php'"> select </button> </td>
  </tr>
   
  <tr>
    <td>HOUSE ON THE HILL</td>
    <td> <img src="https://hctg-images.imgix.net/images/venues/house-on-the-hill/WD20190812-HouseOnTheHill-06.jpg?auto=format%2Ccompress&fit=clamp&h=430&s=21cdebdd4e31bd239d2223ec58a91d95" width=40% > <img src="https://hctg-images.imgix.net/images/venues/house-on-the-hill/WD20190812-HouseOnTheHill-08.jpg?auto=format%2Ccompress&fit=clamp&h=430&s=4e572524aefdd3b6b62aeb078fa6d818"  width=40% ></td>
    <td> <li> Outdoor Venue </li> <li>  Can hold up to 100 guest </li> <li> Wedding, Conference, & Birthday Packages </li> </td>
     <td> <button  onclick="location.href='houseHill.php'"> select </button> </td>
  </tr>
  
<tr>
    <td>THE ELEANOR</td>
    <td><img src="https://images.squarespace-cdn.com/content/v1/582398a0b8a79b7c7e46746d/1501441399390-D4N8V760CYCXH0EENQ1K/ke17ZwdGBToddI8pDm48kOAuvUHQti6LPXLIsfKjnbV7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UZ3DoQuPHSEiO3guLd1YUMrVb5Il0Ua0u5aWwCiRbwqd3BUESXVGd-RB7HqGuTySQA/Eleanor+Front+Lounge+%232+%28Day%29.jpg" width=40% > <img src="https://images.squarespace-cdn.com/content/v1/582398a0b8a79b7c7e46746d/1501444073889-M5K3WHKQMV37M8K1RRMS/ke17ZwdGBToddI8pDm48kF1kX6Qf76usu0rK8rYEZct7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UdRj0wFpcJVu3XXOzMzzjhkOz-h9AX7zMGZBZXPPdj9IVF5ZVBcK9vO2Z90nG0mtBg/Eleanor+Dance+Floor+%232+%28Day%29.jpg" width=40% > </td>
    <td> <li> Indoor Venue </li> <li> Can hold up to 100 guests </li> <li> Birthday, Anniversary, & Awards Ceremony  </li> </td>
     <td> <button  onclick="location.href='eleanor.php'"> select </button> </td>
  </tr>
   
  
</table>


    
</body>
</html>