<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="cart.css">
    
    <title>Add to cart</title>
  </head>
  <body>

    <div class="bg-light" onload="set()">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">
                <div class="row mt-5 gx-3">
                <!-- Gutter used in grid system space between horizontal and vertical boxes -->
                <!-- Left side div -->
                <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow" style="overflow-y:scroll">
                <div style="display:<?php if(isset($_SESSION['showAlert'])){
                    echo $_SESSION['showAlert'];} else{echo 'none';} unset($_SESSION['showAlert']);?>" class="alert alert-success alert-dismissible mt-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];} unset($_SESSION['message']); ?></strong>
                </div>
                 <div class="table-responsive mt-2">
                     <table class="table table-bordered table-striped text-center">
                      <thead>
                      <tr>
                      <td colspan="7">
                          <h4 class="text-center text-info m-0">
                           Products in your cart!
                          </h4>
                      </td>    
                      </tr>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                          <th>
                              <a href="action.php?clear=all" class="badge-danger badge p-2" onclick="return confirm('Are you sure want to clear your cart?' )"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                          </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      require 'config.php';
                      $stmt = $conn->prepare("SELECT * FROM cart");
                      $stmt->execute();
                      $result = $stmt->get_result();
                      $grand_total=0;
                      while($row=$result->fetch_assoc()): 
                      ?>    
                      <tr>
                          <td style="padding-top: 20px"><?= $row['product_code'] ?></td>
                          
                          <input type="hidden" class="pid" value="<?= $row['product_code']?>">
                          
                          <td style="padding-top: 20px"><?= $row['product_name']?></td>
                          
                          <td style="padding-top: 20px"><i class="fas fa-rupee-sign"></i>&nbsp;<?= number_format($row['product_price'],2)?></td>
                          
                          <input type="hidden" class="pprice" value="<?=$row['product_price']?>">
                          
                          <td><input type="number" class="form-control itemQty" value="<?=$row['Qty']?>" style="width: 70px;"></td>
                          
                          <td style="padding-top: 20px"><i class="fas fa-rupee-sign"></i>&nbsp;<?= number_format($row['Total_Price'],2)?></td>
                          
                          <td style="padding-top: 16px">
                              <a href="action.php?remove=<?=$row['id']?>" class="text-danger 
                              lead" onclick="return confirm('Are you sure want to remove this item ?')"><i class="fas fa-trash-alt"></i></a>
                          </td>
                      </tr>
                      <?php
                      $grand_total += $row['Total_Price'];
                      ?>
                      <?php endwhile; ?> 
                      <tr>
                        <td colspan="2" style="padding-top: 13px">
                            <a href="North.php" class="btn btn-success" style="height:35px"><i class="fas fa-cart-plus"></i>
                            &nbsp;&nbsp;Continue Shopping</a>
                        </td>
                        <td colspan="2" style="padding-top: 13px">
                            <h4>Total: </h4>
                        </td>
                        <td style="padding-top: 19px"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?=number_format($grand_total,2)?></td>
                        <td style="padding-top: 13px">
                        <input type="hidden" class="check" value="<?=number_format($grand_total)?>">
                        <a href="checkout.php" class="btn btn-info <?=($grand_total)?"":"disabled";?>" id="check" style="height:35px">Check Out</a>
                        </td>
                      </tr>
                      </tbody>
                     </table>
                 </div>   
                </div>
                <!-- right side div -->
                <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                    <div class="right_side p-3 shadow bg-white">
                        <h2 class="product_name mb-5">Total</h2>
                        <div class="price_indiv d-flex justify-content-between">
                            <p>Product(s) amount</p>
                            <p><span><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<span id="product_total_amt" > <?=$grand_total?> </span>
                            </span></p>
                        </div>
                        <div class="price_indiv d-flex justify-content-between">
                            <p>Delivery charges</p>
                            <p><span><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<span  id="shipping_charge">50.00</span></span></p>
                        </div>
                        <hr />
                        <div class="total-amt-d-flex justify-content-between font-weight-bold">
                            <p>Total amount (including VAT)</p>
                            <p><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<span id="total_cart_amt"></span></p>
                        </div> 
                    </div>
                <!-- Discount code part -->
                <div class="discount_code mt-3 shadow">
                    <div class="card">
                        <div class="card-body">
                            <a class="d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Add a discount code(optional)
                                <span><i class="fas fa-chevron-down pt-1"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div class="mt-3">
                                    <input type="text" name="" id="discount_code1" class="form-control font-weight-bolder" placeholder="Enter the discount code">
                                    <small id="error_trw" class="text-dark mt-3"></small>
                                </div>
                                <button class="btn btn-info mt-3" id="apply" onclick="discount_code()">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 shadow p-3 bg-white">
                    <div class="pt-4">
                        <h5 class="font-weight-502">Expected delivery date</h5>
                        <p class="mt-5">July 27th 2021 - July 29th 2021</p>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
                    <script type="text/javascript">
                        $("#check").click(function(e){
                          
                          var total=$(".check").val();
                          $.ajax({
                          method:"Post",
                          url:"checkout.php",
                          data:{total:total},
                          success:function(response){
                                  console.log(response);
                              }
                          });
                        });
                        
                      $(document).ready(function() {
                        // Change the item quantity
                        $(".itemQty").on('change', function() {
                        var $el = $(this).closest('tr');
                        var pid = $el.find(".pid").val();
                        var pprice = $el.find(".pprice").val();
                        var qty = $el.find(".itemQty").val();
                        location.reload(true);
                        $.ajax({
                        url: 'action.php',
                        method: 'post',
                        cache: false,
                        data: {
                           qty: qty,
                           pid: pid,
                           pprice: pprice
                         },
                         success: function(response) {
                         console.log(response);
                         }
                         });
                        });
                        });
                      </script>          
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<script src="cart.js"></script>  
</body>
</html>
