<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Antonio</title>
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


    

    
<h2> San Antonio Venues</h2>
<p>A list of venues near San Antonio.</p>

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
    <td>The Event Center at Plaza Lecea</td>
    <td> <img src="https://plazalecea.com/wp-content/uploads/2017/12/atrium-front-wedding-venue-full-size.jpg" width=40% > <img src="https://plazalecea.com/wp-content/uploads/2017/12/grand-ballroom-wedding-event-center-san-antonio-full-size.jpg" width=40%></td>
    <td> <li> Indoor Venue</li> <li>Venue can hold up 100 guests </li>  <li> Birthday, Anniversary, & Other Packages</li></td>
    <td> <button  onclick="location.href='plazalacea.php'"> select </button> </td>
  </tr>
  
     <tr>
    <td>Lambermont Events</td>
    <td> <img src="https://cdn0.weddingwire.com/emp/fotos/5/2/4/6/3/5/1371853400186-img5231.jpg" width=40% > <img src="https://img1.wsimg.com/isteam/ip/bd115aa5-4a2b-4c21-a48f-1ae4db79b6c1/24f8d7e8c648f878d6b9050c231c836c.jpg" width=40%></td>
    <td><li>Outdoor/Indoor Venue</li><li>Venue can hold up 400 guests </li><li>ALL Packages</li></td>
    <td> <button  onclick="location.href='lambermont.php'"> select </button> </td>
  </tr>
  
  <tr>
     <td>Roszell Gardens Wedding and Events Center</td>
    <td> <img src="https://roszellgardens.com/wp-content/uploads/2017/12/cermony-site-roszell-gardens-event-venue.jpg" width=40% > <img src="https://i.ytimg.com/vi/ual1wwihivA/maxresdefault.jpg" width=40%></td>
    <td><li>Outdoor Venue</li><li>Venue can hold up 150 guests </li><li> Wedding Packages</li></td>
    <td> <button  onclick="location.href='roszell.php'"> select </button> </td>
  </tr>
  
    <tr>
     <td>Jack Guenther Pavilion at the Briscoe</td>
    <td> <img src="https://sanantonioweddings.com/wp-content/uploads/2020/06/Briscoe-Western-Art-Muesum-18.jpg" width=40% > <img src="https://hctg-images.imgix.net/images/venues/jack-guenther-pavilion-at-the-briscoe/WD20200604JackGuentherPavilionAtTheBriscoe02.jpg?auto=format%2Ccompress&fit=clamp&h=430&s=4b0db48cc1dd9146a1df292c383c2af1" width=40%></td>
    <td> <li>Indoor Venue</li><li>Venue can hold 250 guests</li><li>Birthday, Anniversary, & Other Packages</li></td>
    <td> <button  onclick="location.href='jackG.php'"> select </button> </td>
  </tr>

</table>

    
</body>
</html>