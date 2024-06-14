<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "include/db.php"; ?>
<?php include "include/function.php"; ?>

<?php
if(isset($_POST['update_dept'])){{
   $id=$_POST['id'];
   $dept_name=$_POST['dept_name'];
   
   $query = "UPDATE department SET ";
   $query .="dept_name = '{$dept_name}'  ";
   $query .="WHERE id  = $id ";


 $update_query = mysqli_query($connection, $query);

  if($update_query){
      
         $_SESSION["SuccessMessage"]="User Updated Successfuly";
     
     Redirect_to("index.php");
     }
     else{
         $_SESSION["ErrorMessage"]="Error To update Department!";
       Redirect_to("edit.php");


}
}
    
}