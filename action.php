<?php
include 'database.php';

$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$message=$_POST['QUANTITE'];

$sql="INSERT INTO users(Username, Email, Contact, Address, QUANTITE) VALUES ('$username','$email','$contact','$address','$message')";

$result=mysqli_query($conn, $sql);

if($result){
   
    header('Location: ./index.php');
   
}
?>