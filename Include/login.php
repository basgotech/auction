<?php ob_start(); ?>

<?php session_start(); ?>


<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php


if(isset($_POST['loginsys']))
{
   $username_get = $_POST['username'];
   $password_get = $_POST['password'];


//SQL Injection

  $username_get =  mysqli_real_escape_string ($connection, $username_get);

  $password_get =  mysqli_real_escape_string ($connection, $password_get);

         $pinkey="auctionmeu";
$encrypted_username=openssl_encrypt($username_get,"AES-128-ECB",$pinkey);
$encrypted_password=openssl_encrypt($password_get,"AES-128-ECB",$pinkey);



  $query ="SELECT * FROM users WHERE username = '{$encrypted_username}' AND password = '{$encrypted_password}' ";


    $select_user =mysqli_query($connection, $query);
     $rows=mysqli_num_rows($select_user);
    if($rows==1){
           while($row = mysqli_fetch_array($select_user)){



        $id=$row['id'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $username=$row['username'];
        $email=$row['email'];
        $phone=$row['phone'];
        $image=$row['image'];
        $gender=$row['gender'];
        $age=$row['age'];
        $city=$row['city'];
        $kebele=$row['kebele'];
        $role=$row['role'];
        $password=$row['password'];
        $reg_date=$row['reg_date'];


          $_SESSION['id']=$id;
          $_SESSION['fname']=$fname;
          $_SESSION['lname']=$lname;
          $_SESSION['username']=$username;
          $_SESSION['email']=$email;
          $_SESSION['phone']=$phone;
          $_SESSION['image']=$image;
          $_SESSION['gender']=$gender;
          $_SESSION['age']=$age;
          $_SESSION['city']=$city;
          $_SESSION['kebele']=$kebele;
          $_SESSION['role']=$role;
          $_SESSION['password']=$password;
          $_SESSION['reg_date']=$reg_date;


         if($_SESSION['role']=='Admin'){
           header("Location: ../SysAdmin/");
         }
         if($_SESSION['role']=='BS'){
          header("Location: ../BS/");
        }
        if($_SESSION['role']=='user'){
          header("Location: ../");
        }

        }

     } else{
                   $_SESSION["ErrorMessage"]="is not valid account!!";
               header("Location: ../login.php");
    }
    }

















?>