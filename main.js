//Ajax code for entering details into cart
$(document).ready(function(){
$(".addItemBtn").click(function(e){
    e.preventDefault();
    var $form = $(this).closest(".form-submit");
    var pid = $form.find(".pid").val();
    var pname = $form.find(".pname").val();
    var pprice = $form.find(".pprice").val();
    var pimage = $form.find(".pimage").val();
    var pcode = $form.find(".pcode").val();
  
  $.ajax({
    url:'action.php',
    method:'post',
    data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
    success:function(response){
    $("#message").html(response);
    load_cart_item_number();
  }
  });
});
    
load_cart_item_number();
    function load_cart_item_number(){
      $.ajax({
        url:'action.php',
        method:'get',
        data:{cartItem:"cart_item"},
        success:function(response){
          $("#cart_item").html(response);
        }
      });
    }
});

    