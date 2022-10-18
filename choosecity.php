<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
    <link rel = "stylesheet" href= "FPstyles.css"> 

    <style> 
      * {box-sizing: border-box}
      body {
      font-family: "Lucida Console", Courier, monospace; 
      margin:0;
      background-color: #0d1433;
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

      .main {
        max-width: 1000px;
        margin: auto;
      }

      h1 {
        font-size: 50px;
        text-align: center;
        word-break: break-all;
        color: #6b0f24;
        font-weight: bolder;
      }

      h2,p{
        text-align: center;
        font-weight: bolder;
        color: black;
      }
      * {
        box-sizing: border-box;
      }

      .column {
        float: left;
        width: 33.33%;
        padding: 5px;
      
      }


      /* Clearfix (clear floats) */
      .row::after {
        content: "";
        clear: both;
        display: grid;
      }

      .row{
        position:relative;
        display:block;
        overflow: auto;
      }

      .citylink{
        position: absolute;
        bottom: 20px;
        margin-left:180px;
        
            
      }


      /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 500px) {
      .column {
        width: 100%;}}

      .imagewrap{
        object-fit:cover;
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
          <a href ="aboutus.php" class="right"> ABOUT US</a>
        </nav>
      </div>

    <div class="row">
        <div class="column">
          <div class = "imagewrap">
              <img src="https://cdn.travelpulse.com/images/99999999-9999-9999-9999-999999999999/625b0c80-d52e-33fe-4294-826781c6abec/630x355.jpg" alt="Snow" style="width:100%">
              <div class = "citylink">
              <a href="austin.php"> Austin</a> 
              </div>
              
          </div>
              
          
    </div>

      <div class="column">
        <a href="dallas.php"> <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/View_from_Reunion_Tower_August_2015_13.jpg" alt="Forest" style="width:100%"> 
        Dallas
      </a> </div>
      <div class="column">  <a href="denton.php">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/03/Old_Courthouse_Denton_TX.jpg" alt="Mountains" style="width:100%">
        Denton </a>
      </div>
  </div>

<div class="row">
  <div class="column">  <a href="fortworth.php">
    <img src="https://ctycms.com/tx-fort-worth/business-downtown-shot.jpg" alt="Snow" style="width:100%"> Fort Worth </a>
  </div>
  <div class="column"> <a href="houston.php">
    <img src="https://www.visittheusa.com/sites/default/files/styles/hero_l_x2/public/images/hero_media_image/2016-10/0%20HERO_HoustonTX_GettyImages-532390052.jpg?itok=z90H1yyG" alt="Forest" style="width:100%"> Houston
  </a> </div>
  <div class="column"> <a href="laredo.php">
    <img src="https://media.gettyimages.com/photos/downtown-laredo-texas-picture-id986701116?s=612x612"  alt="Mountains" style="width:100%">Laredo </a>
  </div>
  
</div>


<div class="row">
 <div class="column"> <a href="sanantonio.php">
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/San_Antonio_Christmas.jpg?download"  alt="Mountains" style="width:100%"> San Antonio </a>
  </div>
  <div class="column"> <a href="sugarland.php">
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Sugarland_Town_Square.jpg" style="width:100%"> Sugarland </a>
  </div>
  <div class="column">  <a href="waco.php">
    <img src="https://gray-kwtx-prod.cdn.arcpublishing.com/resizer/fA5cUwYVeQ_RGSh1OVraCYV-Wmw=/1200x675/smart/cloudfront-us-east-1.images.arcpublishing.com/gray/3T5GME5LGZJCTFIPFWVOJWPSNE.jpg" alt="Waco" style="width:100%"> Waco
  </div>
 
</div>
      


  
  

<br>
<br>
<br>


    
</body>
</html>