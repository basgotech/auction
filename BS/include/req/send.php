<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "../db.php"; ?>
<?php include "../function.php"; ?>

<?php
    if(isset($_POST['sub_lic'])){
        
        $seller_id=$_SESSION['id'];
        $dept=$_POST['dept'];
        $c_name=$_POST['com_name'];
        $seller_name=$_SESSION['fname']." ".$_SESSION['lname'];
        $user_lic = $_FILES['file_lic']['name'];
        $user_lic_temp = $_FILES['file_lic'] ['tmp_name'];
        move_uploaded_file($user_lic_temp, "../../../file/lic/$user_lic");


        $query_valid="select id from request where seller_id= '$seller_id' ";
        $query_valid_exe=mysqli_query($connection,$query_valid);
        $valid=mysqli_num_rows($query_valid_exe);

        if($valid>0){
            $_SESSION["ErrorMessage"]="You are Requested Before!!!!";
            Redirect_to("../../request.php");
        }else{
            
        $query = "INSERT INTO request(seller_id, seller_name, seller_lic_file,dept_id,com_name)";
        $query .="VALUES('{$seller_id}','{$seller_name}','{$user_lic}','{$dept}','{$c_name}') ";

        $req_query = mysqli_query($connection,$query);
        
        if($req_query ){
            $_SESSION["SuccessMessage"]="Your information send to Admin for approval!";
            Redirect_to("../../request.php");
            }
            else{
                $_SESSION["ErrorMessage"]="Error To Send Licence!";
            Redirect_to("../../request.php");
            }
        
          }
        }

        

    
?>