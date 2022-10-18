<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dallas</title>
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
       
        <a href ="" class="right"> ABOUT US</a>
      </nav>


    

    
<h2> Dallas Venues</h2>
<p>A list of venues near Dallas.</p>

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
    <td>THE SPACE</td>
    <td> <img src="https://eventective-media.azureedge.net/2175231_lg.jpg" width=40% > <img src="https://www.theroomonmain.com/wp-content/uploads/2015/09/home-110.jpg" width=40%></td>
    <td> <li> Indoor Venue</li> <li>Venue can hold up 300 guests </li> <li>Wedding, Conference, & Other Packages</li></td>
    <td> <button  onclick="location.href='thespace.php'"> select </button> </td>
  </tr>
   
   <tr>
    <td>SIXTY FIVE HUNDRED</td>
    <td> <img src="https://hctg-images.imgix.net/images/venues/sixty-five-hundred/WD20200921SixtyFiveHundred04.jpg?auto=format%2Ccompress&fit=clamp&h=430&s=e019c37ebfe164ede0707fdd56343b4e" width=40% > <img src="https://hctg-images.imgix.net/images/venues/sixty-five-hundred/WD20200921SixtyFiveHundred05.jpg?auto=format%2Ccompress&fit=clamp&h=430&s=7304d9ec594ebdd10106a6216030889c" width=40%></td>
    <td> <li> Indoor Venue</li> <li>Venue can hold up 250 guests </li>
    <li>Wedding Packages</li></td>
    <td> <button  onclick="location.href='650.php'"> select </button> </td>
  </tr>
  
  <tr>
    <td>TOWER CLUB</td>
    <td> <img src="https://www.clubcorp.com/var/ezflow_site/storage/images/media/clubs/tower-dallas-media-folder/images/reinvention/tcd_abouttheclub_static1/15526122-1-eng-US/TCD_AboutTheClub_Static1.jpg" width=40% > <img src="https://www.clubcorp.com/var/ezflow_site/storage/images/media/clubs/tower-dallas-media-folder/images/redesign-website-images/tower-dallas-dining-with-view-header/15461996-1-eng-US/Tower-Dallas-Dining-With-View-Header.jpg" width=40%></td>
    <td> <li> Indoor Venue</li> <li>Venue can hold up 75 guests </li>
    <li>Conference & Other Packages</li></td>
    <td> <button  onclick="location.href='towerclub.php'"> select </button> </td>
  </tr>

     <tr>
    <td>HICKORY STREET ANNEX</td>
    <td> <img src="https://d3emaq2p21aram.cloudfront.net/media/cache/venue_carousel/uploads/venues/33301/originals/00417-Oster-20171209.jpg" width=40% > <img src="https://hctg-images.imgix.net/images/venues/hickory-street-annex/WD2018620-HickoryStreetAnnex-6.jpg?auto=format%2Ccompress&fit=clamp&h=430&s=72ac035d4b32a75b71f2e782214d2a06" width=40%></td>
    <td> <li>Indoor Venue</li> <li>Venue can hold up 200 guests </li>
    <li>Wedding, Birthday, Anniversary & Other Packages</li></td>
    <td> <button  onclick="location.href='hickory.php'"> select </button> </td>
  </tr>
   
  
     <tr>
    <td>THE EMPIRE ROOM</td>
    <td> <img src="https://cdn0.weddingwire.com/emp/fotos/2/1/6/4/7/6/1446070148879-anniversary-party-2.jpg" width=40% > <img src="https://theempireroomdallas.com/wp-content/uploads/2015/01/HarryPhoto_ERGO14_0429.jpg" width=40%></td>
    <td> <li> Outdoor/Indoor Venue</li> <li>Venue can hold up 200 guests </li> <li>All Packages</li></td>
    <td> <button  onclick="location.href='empireroom.php'"> select </button> </td>
  </tr>
  
</table>


    
</body>
</html>