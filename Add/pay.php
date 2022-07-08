<?php
$product_name=$_POST['products'];
$price=$_POST['grand_total'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
include 'instamojo/Instamojo.php';
$api=new Instamojo\Instamojo()
?>