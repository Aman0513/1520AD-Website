<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>1520 AD | South Indian</title>
    
    <link rel="stylesheet" href="Css/South.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
    
    <!-- Animation on source -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
<div class="navi">
    <a href="#" class="logo">
    <img src="./Pictures/logo-img.png" alt="">
    </a>
    <div class="container-1" id="cont" onclick="myFunction()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <nav class="navbar" id="navi">
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="contact.php">Contact us</a>
            </li>
            <li><a href="Add/cart.php"><i class="fa fa-shopping-cart" style="font-size: 35px;"></i> <span id="cart_item" class="badge badge-danger"></span></a></li>
    []    </ul>
    </nav>
</div>

<section id="home">
  <div class="south">
  
  </div>
  <div class="main">
    <h1>South Indian</h1>
  </div>
</section> 
   
<section id="food-items">
    <div class="sec-item">
        <div id="box-1" class="inside">
        </div>
            <h2 class="h-sec center">Wheat Dosa</h2>
            <button class="sec-btn">Place Order</button>
          </div>
    
          <div class="sec-item">
            <div id="box-2" class="inside">
            </div>
            <h2 class="h-sec center">Vada</h2>
            <button class="sec-btn">Place Order</button>
          </div>
    
          <div class="sec-item">
            <div id="box-3" class="inside">
            </div>
            <h2 class="h-sec center">Tamarind Rice</h2>
            <button class="sec-btn">Place Order</button>
          </div>
          
          <div class="sec-item">
            <div id="box-4" class="inside">
            </div>
            <h2 class="h-sec center">Maggi Cheese Dosa</h2>
            <button class="sec-btn">Place Order</button>
          </div>
          
          <div class="sec-item">
            <div id="box-5" class="inside">
            </div>
            <h2 class="h-sec center">Idli</h2>
            <button class="sec-btn">Place Order</button>
          </div>
          
          <div class="sec-item">
          <div id="box-6" class="inside">
            </div>
            <h2 class="h-sec center">Butter Chicken</h2>
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