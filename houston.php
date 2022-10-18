<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Houston</title>
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


    

    
<h2> Houston Venues</h2>
<p>A list of venues near Houston.</p>

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
    <td> THE BELL TOWER ON 34TH  </td>
    <td> <img src="https://cdn.wedding-spot.com/__sized__/images/venues/1504/Bell-Tower-on-34th-Houston-TX-1ada67f6-8b3c-4013-baf9-305254ed7c54-97450e389c42885476f1fbe9bc5bca5a.jpg" width=40% > <img src="https://cdn.wedding-spot.com/__sized__/images/venues/1504/Bell-Tower-on-34th-Houston-TX-dc5c5bf0-ea99-4a8d-88b0-8eaae729f5b1-97450e389c42885476f1fbe9bc5bca5a.jpg" width=40%> </td>
    <td> <li>Outdoor/Indoor Venue</li> <li>Venue can hold up 300 guests </li>  <li>ALL Packages</li></td>
    <td> <button  onclick="location.href='bellTower.php'"> select </button> </td>
  </tr>
  
     <tr>
    <td> ASTON GARDENS - WEST HOUSTON </td>
    <td> <img src="https://www.weddingsinhouston.com/uploads/vendors/ashton-gardens/Alexis---Corbin-s-Ashton-Gardens-Wedding---Nate-Messarra-Photography--2713-AGHN.jpg" width=40% > <img src="https://s3.us-west-2.amazonaws.com/images.herecomestheguide.com/images/venues/ashton-gardens-houston-west/WD20190626-AshtonGardensHoustonWest-01.jpg" width=40%></td>
    <td> <li> Indoor Venue</li> <li> Venue can hold up 200 guests </li>  <li> Weddings Packages</li></td>
    <td> <button  onclick="location.href='astongardens.php'"> select </button> </td>
  </tr>
  
  <tr>
     <td> THE GALLERY</td>
    <td> <img src="https://cdn0.weddingwire.com/emp/fotos/7/5/6/3/0/0/r10_2x_huyennick-thegalleryhouston-madisonkatlinphotography-7-3_51_3657-158896468118180.jpg" width=40% > <img src="https://i.pinimg.com/originals/b2/34/be/b234bef6bb209419a5c8782ebdc7c3af.jpg" width=40%></td>
    <td> <li>Outdoor/Indoor Venue</li> <li>Venue can hold up 250 guests </li>  <li>ALL Packages</li></td>
    <td> <button  onclick="location.href='gallery.php'"> select </button> </td>
  </tr>
  
    <tr>
     <td>The Bougainvilleas</td>
    <td> <img src="https://cdn.wedding-spot.com/images/venues/2419/The-Bougainvilleas-Event-Center-Wedding-Houston-Texas-1.png" width=40% > <img src="https://s3.us-west-2.amazonaws.com/images.herecomestheguide.com/images/articles/_1200x630_crop_center-center_82_none/WD20181121-CorinthianThe-01_190701_020832.jpg?mtime=1573006303" width=40%></td>
    <td> <li>Indoor Venue</li> <li>Venue can hold 300 guests</li>  <li>Birthday, Anniversary, & Other Packages</li></td>
    <td> <button  onclick="location.href='Bougainvilleas.php'"> select </button> </td>
  </tr>
  <tr>
    <td>SIGNATURE MANOR</td>
    <td> <img src="https://images.squarespace-cdn.com/content/v1/59fd0a40b078696ae64fec75/1521674521049-D8Q7I6AXPLEEJZ54DZ6G/ke17ZwdGBToddI8pDm48kDHPSfPanjkWqhH6pl6g5ph7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0mwONMR1ELp49Lyc52iWr5dNb1QJw9casjKdtTg1_-y4jz4ptJBmI9gQmbjSQnNGng/Stairs.jpg" width=40% > <img src="https://media-api.xogrp.com/images/074a96a1-1d62-41d4-b159-34bb5cebc0bb" width=40%></td>
    <td> <li> Indoor Venue</li><li>Venue can hold up 200 guests </li>  <li> Wedding Packages</li></td>
    <td> <button  onclick="location.href='signatureM.php'"> select </button> </td>
  </tr>
  
     <tr>
    <td>THE HEIGHTS VILLA</td>
    <td> <img src="https://media-api.xogrp.com/images/0d059b7e-c1f6-486c-a46a-c74fe83ab406" width=40% > <img src="https://lh3.googleusercontent.com/proxy/th9c5MBsK5ar63P-0WT6ffCY7PmdPzi0m6lL5uWC0URn6jTHCmBfKb4nyvuOhssYUnncYI9N-xsMP2_jHX1VLzYbVWbAM7u2riMFCbqiAtog1FyvoCtCjYUcO06xLjXs_ROaK18AXba5CQvT" width=40%></td>
    <td> <li>Indoor Venue</li> <li>Venue can hold up 600 guests </li>  <li>ALL Packages</li></td>
    <td> <button  onclick="location.href='heightsV.php'"> select </button> </td>
  </tr>
  




  <tr>
     <td>THE REVAIRE</td>
    <td> <img src="https://www.therevaire.com/wp-content/uploads/2019/03/hcsp-15-1.jpg" width=40% > <img src="https://d3emaq2p21aram.cloudfront.net/media/cache/venue_carousel/uploads/2019/03/TheRevaire-AdamNyholt-05.jpg" width=40%></td>
    <td> <li> Indoor Venue</li><li>Venue can hold up 1000 guests </li><li> ALL Packages</li></td>
    <td> <button  onclick="location.href='revaire.php'"> select </button> </td>
  </tr>
  
    <tr>
     <td>THE BALLROOM AT BAYOU PLACE</td>
    <td> <img src="https://eventective-media.azureedge.net/2500141_lg.jpg" width=40% > <img src="https://www.weddingsinhouston.com/uploads/vendors/the-ballroom-at-bayou-place/Gregg-0617.jpg" width=40%></td>
    <td> <li>Indoor Venue</li> <li>Venue can hold 1500 guests</li>  <li>ALL Packages</li></td>
    <td> <button  onclick="location.href='ballroomB.php'"> select </button> </td>
  </tr>

</table>


    
</body>
</html>