var product_total_amt=document.getElementById('product_total_amt');
var shipping_charge=document.getElementById('shipping_charge');
var total_cart_amt=document.getElementById('total_cart_amt');
var discountCode=document.getElementById('discount_code1');
const decreaseNumber=(dec,itemprice)=>{
    let itemval=document.getElementById(dec);
    let price=document.getElementById(itemprice);
    if(itemval.value <= 0 ){
        itemval.value=0;
        price.innerHTML=0;
        alert('Negative value not allowed');
    }
    else{
        itemval.style.background='#fff';
        itemval.style.color='#000';
        itemval.value=parseInt(itemval.value)-1;
        price.innerHTML=parseInt(price.innerHTML)-15;
        product_total_amt.innerHTML=parseInt(product_total_amt.innerHTML)-15;        
        total_cart_amt.innerHTML=parseInt(shipping_charge.innerHTML)+parseInt(product_total_amt.innerHTML);        
    }
    
}

const increaseNumber=(inc,itemprice)=>{
    let itemval=document.getElementById(inc);
    let price=document.getElementById(itemprice);
    if(itemval.value >= 7 ){
        itemval.value=7;
        alert('Max 7 allowed');
        itemval.style.background='red';
        itemval.style.color='#fff';
        price.innerHTML=parseInt(price.innerHTML);
    }
    else{
        itemval.value=parseInt(itemval.value)+1;
        price.innerHTML=parseInt(price.innerHTML)+15;
        product_total_amt.innerHTML=parseInt(product_total_amt.innerHTML)+15;
        total_cart_amt.innerHTML=parseInt(shipping_charge.innerHTML)+parseInt(product_total_amt.innerHTML);
    }
    
}

function discount_code(){
    
let totalamtcurr=parseInt(total_cart_amt.innerHTML);
let error_trw=document.getElementById('error_trw');
if(discountCode.value=='goswami'){
    let newtotalamt=totalamtcurr-15;
    total_cart_amt.innerHTML=newtotalamt;
    discountCode.value='-';
    error_trw.innerHTML="Hurray! your code is valid";
}
else{
    error_trw.innerHTML="Try again!";
}
}


function set(){
    let textbox=document.getElementById('textbox');
    let textbox1=document.getElementById('textbox1');
    textbox.value=0;
    textbox1.value=0;
    discountCode.value='';
}