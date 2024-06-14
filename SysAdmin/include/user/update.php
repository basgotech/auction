<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "../db.php"; ?>
<?php include "../function.php"; ?>


<?php
if(isset($_POST['update'])){{
   $id=$_POST['id'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $gender=$_POST['gender'];
   $age=$_POST['age'];
   $role=$_POST['role'];
   $city=$_POST['city'];
   $kebele=$_POST['kebele'];

   $pinkey="auctionmeu";
   $username=openssl_encrypt($username,"AES-128-ECB",$pinkey);
   $password=openssl_encrypt($password,"AES-128-ECB",$pinkey);
   $email=openssl_encrypt($email,"AES-128-ECB",$pinkey);
   $phone=openssl_encrypt($phone,"AES-128-ECB",$pinkey);
   
   
   $query = "UPDATE users SET ";
   $query .="fname = '{$fname}' , ";
   $query .="lname = '{$lname}' , ";
   $query .="email = '{$email}' , ";
   $query .="phone = '{$phone}' , ";
   $query .="gender = '{$gender}' , ";
   $query .="age = '{$age}' , ";
   $query .="kebele = '{$kebele}' , ";
   $query .="role = '{$role}' , ";
   $query .="city = '{$city}'  ";
   $query .="WHERE id  = $id ";


 $update_query = mysqli_query($connection, $query);

  if($update_query){
      
         $_SESSION["SuccessMessage"]="User Updated Successfuly";
     
     Redirect_to("../../users.php");
     }
     else{
         $_SESSION["ErrorMessage"]="Error To update tax!";
       Redirect_to("../../users.php");


}
}
    
}
?>