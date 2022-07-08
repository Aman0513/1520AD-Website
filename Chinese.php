<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1520 AD | Chinese</title>
    
    <!-- style sheet -->
    <link rel="stylesheet" href="/Css/Chinese.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet"> 
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
    
    <!-- animation on surface -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<header>
  <a href="#" class="logo">
    <img src="/Pictures/logo-img.png" alt="">
    </a>
    <div class="container-1" id="cont" onclick="myFunction()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <nav class="navbar" id="navi">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="/contact.html">Contact us</a></li>
        </ul>
    </nav>
</header>

<section id="home">
  <div class="chinese">
  </div>
  <div class="main">
    <h1>Chinese</h1>
    <hr>
  </div>
</section> 

      <section class="food-items">
        <div class="search">
          <div id="search-box">
            <img src="/Pictures/logo5.png" id="icon">
            <input type="text" placeholder="Search here......">
          </div>
        </div>
        </section> 

        <section id="food-items">
          <div class="sec-item">
            <div id="box-1" class="inside">
            </div>
            <h2 class="h-sec center">Chicken fried Rice</h2>
            <button class="sec-btn">Place Order</button>
          </div>
    
          <div class="sec-item">
            <div id="box-2" class="inside">
            </div>
            <h2 class="h-sec center">Chicken Noodles</h2>
            <button class="sec-btn">Place Order</button>
          </div>
    
          <div class="sec-item">
            <div id="box-3" class="inside">
            </div>
            <h2 class="h-sec center">Tofu with Rice</h2>
            <button class="sec-btn">Place Order</button>
          </div>
          
          <div class="sec-item">
            <div id="box-4" class="inside">
            </div>
            <h2 class="h-sec center">Schezwan Chilli Chicken</h2>
            <button class="sec-btn">Place Order</button>
          </div>
          
          <div class="sec-item">
            <div id="box-5" class="inside">
            </div>
            <h2 class="h-sec center">Spring Roll</h2>
            <button class="sec-btn">Place Order</button>
          </div>
          
          <div class="sec-item">
          <div id="box-6" class="inside">
            </div>
            <h2 class="h-sec center">Manchow Soup</h2>
            <button class="sec-btn">Place Order</button>
          </div>
        </section>
    
        <script>
          var searchBox=document.getElementById("search-box");
          var icon=document.getElementById("icon");
  
          icon.onclick=function (){
            searchBox.classList.toggle("active");
            //activate this class whenever clicked
          }
          </script>

  <!-- Our Aos data -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration: 1600
    });
  </script>
</body>
</html>