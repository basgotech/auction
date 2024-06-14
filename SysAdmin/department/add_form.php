<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "include/db.php"; ?>
<?php include "include/function.php"; ?>
<?php
    if(isset($_POST['add_dept'])){
        $dept_name=$_POST['dept_name'];
        $name=$_SESSION['fname']." ".$_SESSION['lname'];

        
$query = "INSERT INTO department(dept_name, dept_by)";
$query .="VALUES('{$dept_name}','{$name}') ";
$dept_query = mysqli_query($connection,$query);
if($dept_query){
    $_SESSION["SuccessMessage"]="Department Created Successfuly!";
    Redirect_to("index.php");
    }

    }
?>