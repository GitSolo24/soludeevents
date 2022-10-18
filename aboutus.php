<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: #0D1433;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.firstBox{
    font-size: 300px
    width: 60%;
    border: 3px solid #CBAE88;
    padding: 10px;
    text-align: center;
    background: #CBAE88;
  }
  
  
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
        float: right;}
        
        .container,.card{
        background-color:white;
        }
        .email{
        text-align:center;
        }
        .row{
          text-align: center;
        }
</style>
</head>
<body>

  <div class="firstBox">
    <h1> SOLUDE EVENTS </h1> </div>
    
    <div class="linksBar">
      <nav class="topbar">
         <a href="index.php"> HOME</a>
        <a href="choosecity.php"> CITIES <a>
       
        <a href ="" class="right"> ABOUT US</a>
      </nav>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Solomon.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Solomon Ugbane</h2>
        <p class="title">Project Manager/Database Administrator</p>
        <p align="center">Solomon is a level headed and organized individual focused on achieving goals and objectives through a practical approach. He has a degree in mechanical engineering and is currently working in creatin solutions in the technology field. His interests are currently in Data science, Artifical Intelligence and internet of things (IOT).</p>
        <p class="email">solomonu@solude.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="addy1.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Adesola Haastrup</h2>
        <p class="title">Front End Developer</p>
        <p> Adesola is a coordinated individual focused on finding the positivity in each situation. She has her Bachedlor of Science in Mathematics and is currently working on her Masters of Scence in Computer Information Systems. Her interests are currently in Data Science, Algorithms, and coordinating events.</p>
        <p class="email">adesola@solude.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Oluwole.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Oluwole Akande</h2>
        <p class="title">Technical Writer/Accountant</p>
        <p align="center">Oluwole is a seasoned professional with over six (7) years of experience in the financial services sector. Oluwole holds a Bachelor’s degree in Accounting and a Master’s degree in Accounting. Oluwole is an associate chartered accountant and a member of the Institute of chartered Accountants of Nigeria. Oluwole is proficient in the use of financial module and accounting soft wares such as ERP, Peachtree, Sage, Excel. Oluwole is passionate about business finance ,information technology and finds fulfilment in working with people to achieve agreed results.</p>
        <p class="email">olu@solude.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<script>
        function contactUs() {
          let name = prompt("What is your email?");
          if (name.length) {
            alert("Hello, " + name + "! We will contact you!");
          } else {
            alert("SORRY WE CANNOT HELP YOU.");
          }
        }
        let contactButton = document.querySelector("button");
        contactButton.addEventListener("click", contactUs);
      </script>

      <!--ONLY CLICK YOUR NAME PLEASE-->
</body>
</html>
