<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1520 AD | Home</title>
</head>
<link rel="stylesheet" href="Css/home.css"/>

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">

<!-- Animation on source -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- Icons -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body onload="myfunc()">
  <div id="loading">
  <div class="cent">
    <div class="hexagon">
    </div>
  </div>
  </div>
  
  <script>
    let loader=document.getElementById('loading');
    function myfunc(){
      loader.style.display='none';
      loader.style.zIndex='-950';
    }
  </script>

  <script src="script.js"></script>

<header>
    <a href="#" class="logo">
    <img src="./Pictures/logo-img.png" alt="">
    </a>

    <div class="container-1 change" id="cont" onclick="myFunction()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <nav class="navbar" id="navi">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="login.php">Sign in</a></li>

        </ul> 
    </nav>
</header>

<!-- Home section -->
<section class="home" id="home-1">
    <div class="content-1">
        <h3>We believe good food offer great smile</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsa suscipit quidem quae impedit commodi obcaecati ea tenetur ratione consequuntur.</p>
        <a href="#"><button class="btn">get started</button></a>
    </div>
    
    <div class="image">
        <img src="./Pictures/home-img.png" alt="">
    </div>
</section>


<h1 class="center" id="service">Services</h1>

<!-- Services section -->
<div class="services">
<div class="slidershow middle">
        
  <div class="slides">

      <input type="radio" name="r" id="r1" checked>
      <input type="radio" name="r" id="r2">
      <input type="radio" name="r" id="r3">
  
      <div class="slide s1">
      <div id="box-1" class="inside">
      </div>
      <h1>North Indian</h1>
      <button class="sec-btn"><a href="North.php">Check Out</a></button>
      </div>
  <div class="slide">
      <div id="box-2" class="inside">
      </div>
      <h1>South Indian</h1>
      <button class="sec-btn"><a href="South.php">Check Out</a></button>
  </div>
  <div class="slide"> 
      <div id="box-3" class="inside" >
      </div>
      <h1>Chinese</h1>
      <button class="sec-btn"><a href="./Chinese.php">Check Out</a></button>
  </div>
  </div>
  <div class="navigation">
      <label for="r1" class="bar"></label>
      <label for="r2" class="bar"></label>
      <label for="r3" class="bar"></label>
  </div>
</div>
</div>

<!-- About us -->
<div class="section" id="about">
  <div class="container">
      <div class="content-section">
          <div class="title">
              <h1>About Us</h1>
          </div>
          <div class="content">
              <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eius consectetur possimus laboriosam aliquam cumque optio culpa tempore labore expedita atque explicabo, modi architecto harum debitis magni ratione! Eaque ullam minus consectetur eveniet dignissimos eligendi excepturi ratione animi placeat voluptas.</p>
              <div class="button">
                  <a href="#">Read more</a>
              </div>
          </div>
          <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
      <div class="image-section">
          <img src="./Pictures/IMG_20210510_115627_467.jpg" alt="">
      </div>
</div>
</div>

<footer>
    <div class="footer-content">
        <h3>1520 AD</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sed autem. Quod, fuga est.</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>     
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; 2020 1520 A.D designed by <span>Aman</span></p>
    </div>
</footer>

</body>
</html> 