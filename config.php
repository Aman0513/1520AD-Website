<?php
$conn = new mysqli("localhost","root","","cartsystem");
if($conn->connect_error){
    die("Connection  failed!".$conn->connect_error);
}
?>