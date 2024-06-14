<?php include "db.php"; ?>

<?php session_start(); ?>



<?php




          
$_SESSION['id']=null;
$_SESSION['fname']=null;
$_SESSION['lname']=null;
$_SESSION['username']=null;
$_SESSION['email']=null;
$_SESSION['phone']=null;
$_SESSION['image']=null;
$_SESSION['gender']=null;
$_SESSION['age']=null;
$_SESSION['city']=null;
$_SESSION['kebele']=null;
$_SESSION['role']=null;
$_SESSION['password']=null;
$_SESSION['reg_date']=null;

           header("Location: ../index.php");



?>