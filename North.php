<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>1520 AD | North Indian</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="Css/North.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
  </head>

<body>

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
    <!-- id = navi deleted in nav tag-->
    <ul style="margin-bottom: 0rem;">
      <li><a href="main.php">Home</a></li>
      <li><a href="#service">Services</a></li>
      <li><a href="#about">About us</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="Add/cart.php"><i class="fa fa-shopping-cart" style="font-size: 35px;"></i> <span id="cart_item" class="badge badge-danger"></span></a></li>
    </ul>
  </nav>

</header>
 
    <section id="home">
    
      <div class="north">

      </div>

      <div class="main">
        <h1>North Indian</h1>
      </div>
    
    </section> 
    
<div>
  <div id="message">

  </div>
  
  <div id="food-items">     
    <?php
      include 'config.php';
      $stmt = $conn->prepare("SELECT * FROM product");
      $stmt->execute();
      $result=$stmt->get_result();
      while($row = $result->fetch_assoc()):
    ?>

    <div class="sec-item">
      <div>
        <div>
          <div id="box-1" class="inside" style="background-image: url('<?= $row['product_image'] ?>');">
          </div>
          
          <div class="card-body p-1">
            <h2 class="card-title text-center text-info"><?=$row['product_name']?></h2>
            
            <h3 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;<?= number_format($row['product_price'],2)?>/-</h3>
          </div>
                    
          <div class="p-1">
            <form action="" class="form-submit">
                <input type="hidden" class="pid" value="<?= $row['id']?>">
                <input type="hidden" class="pname" value="<?= $row['product_name']?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price']?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image']?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code']?>">
                <button class="btn btn-info btn-block addItemBtn" style="height:40px"><i class="fas fa-cart-plus"></i>&nbsp;Add to cart</button>
            </form>
          </div>
                  
        </div>
        </div>
        </div>
        <?php endwhile?>
    </div>
</div>

<script src="main.js"></script>
    
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
  

  <!-- Our Aos data -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 300,
        duration: 1600,
      });
    </script>

  </body>
</html> 