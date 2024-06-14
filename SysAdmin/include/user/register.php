<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "../db.php"; ?>
<?php include "../function.php"; ?>

<?php

if (isset($_POST['register'])) {
  // registration process


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$kebele=$_POST['kebele'];
$email=$_POST['email'];
$user_image = $_FILES['image']['name'];
$user_image_temp = $_FILES['image'] ['tmp_name'];
move_uploaded_file($user_image_temp, "../../../img/user/$user_image");
$age=$_POST['age'];
$gender=$_POST['gender'];
$username=$_POST['username'];
$re_password=$_POST['con_password'];
$password=$_POST['password'];


//sql enjection security
$fname =  mysqli_real_escape_string ($connection, $fname);
$lname =  mysqli_real_escape_string ($connection, $lname);
$phone =  mysqli_real_escape_string ($connection, $phone);
$city =  mysqli_real_escape_string ($connection, $city);
$kebele =  mysqli_real_escape_string ($connection, $kebele);
$email =  mysqli_real_escape_string ($connection, $email);
$age =  mysqli_real_escape_string ($connection, $age);
$gender =  mysqli_real_escape_string ($connection, $gender);
$username =  mysqli_real_escape_string ($connection, $username);
$re_password =  mysqli_real_escape_string ($connection, $re_password);
$password =  mysqli_real_escape_string ($connection, $password);


$pinkey="auctionmeu";
$encrypted_email=openssl_encrypt($email,"AES-128-ECB",$pinkey);
$encrypted_phone=openssl_encrypt($phone,"AES-128-ECB",$pinkey);


      $query ="SELECT * FROM users WHERE phone = '{$encrypted_phone}' ";
      $query_em ="SELECT * FROM users WHERE email = '{$encrypted_email}' ";


    $select_user =mysqli_query($connection, $query);
     $rows=mysqli_num_rows($select_user);
    if($rows>=1){
          $_SESSION["ErrorMessage"]="Phone Exists!!!";
      Redirect_to("../../reg_user.php");
    }
    $select_email =mysqli_query($connection, $query_em);
     $rows_em=mysqli_num_rows($select_email);
    if($rows_em>=1){
          $_SESSION["ErrorMessage"]="Email Exists!!!";
      Redirect_to("../../reg_user.php");
    }

$phone_validation=preg_match('/^[0-9]{10}+$/', $phone);

if(!preg_match("/^[a-zA-Z ]*$/", $fname)){
  $_SESSION["ErrorMessage"]="Please Enter Correct First Name!!!";
      Redirect_to("../../reg_user.php");
 }
  else if(!preg_match("/^[a-zA-Z ]*$/", $lname)){
  $_SESSION["ErrorMessage"]="Please Enter Correct Last Name!!!";
     Redirect_to("../../reg_user.php?reg=1");
 }
   elseif(strlen($username)>20){
    $_SESSION["ErrorMessage"]="User Name out of length require!!";
     Redirect_to("../../reg_user.php");
  }
   elseif(strlen($password)<6){
    $_SESSION["ErrorMessage"]="Atleast 6 characters for Password Required";
     Redirect_to("../../reg_user.php");
  }
    elseif(!$phone_validation){
    $_SESSION["ErrorMessage"]="Phone Starting in 09, and length of 10";
      Redirect_to("../../reg_user.php");
  } elseif($password!==$re_password){
    $_SESSION["ErrorMessage"]="Password / Confirm Password does not match";
      Redirect_to("../../reg_user.php");
  }
    elseif($password==$username){
    $_SESSION["ErrorMessage"]="You Enterd Easy password";
     Redirect_to("../../reg_user.php");
  }
else{


$pinkey="auctionmeu";
$encrypted_username=openssl_encrypt($username,"AES-128-ECB",$pinkey);
$encrypted_password=openssl_encrypt($password,"AES-128-ECB",$pinkey);
$encrypted_email=openssl_encrypt($email,"AES-128-ECB",$pinkey);
$encrypted_phone=openssl_encrypt($phone,"AES-128-ECB",$pinkey);



$query = "INSERT INTO users(fname, lname, username,email,phone,image,gender,age,city,kebele,role,password)";
$query .="VALUES('{$fname}','{$lname}','{$encrypted_username}','{$encrypted_email}','{$encrypted_phone}','{$user_image}','{$gender}','{$age}','{$city}','{$kebele}','user','{$encrypted_password}') ";




}

      $user_query = mysqli_query($connection,$query);




 if($user_query ){
    $_SESSION["SuccessMessage"]="Account Created Successfuly!";
    Redirect_to("../../users.php");
    }
    

  }







  ?>