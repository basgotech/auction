<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "../db.php"; ?>
<?php include "../function.php"; ?>

<?php
    if(isset($_POST['upload_item'])){
        
        $seller_id=$_SESSION['id'];
        $item_name=$_POST['item_name'];
        $dept_name=$_POST['dept_name'];
        $item_type=$_POST['item_type'];
        $item_price=$_POST['item_price'];
        $item_start_date=$_POST['item_start_date'];
        $item_end_date=$_POST['item_end_date'];
        $item_image = $_FILES['item_image']['name'];
        $item_image_temp = $_FILES['item_image'] ['tmp_name'];
        move_uploaded_file($item_image_temp, "../../../file/item/$item_image");


        
        
        $query = "INSERT INTO item(seller_id,item_name,dept_name, item_type, item_ini_prize,item_start_date,item_end_date,item_image)";
        $query .="VALUES('{$_SESSION['id']}','{$item_name}','{$dept_name}','{$item_type}','{$item_price}','{$item_start_date}','{$item_end_date}','{$item_image}') ";

        $req_query = mysqli_query($connection,$query);
        
        if($req_query ){
            $_SESSION["SuccessMessage"]="Your Item Addede as Pending wait for approval!";
            Redirect_to("../../view_item.php");
            }
            else{
                $_SESSION["ErrorMessage"]="Error To Add Item!";
                die(mysqli_error($connection));
            Redirect_to("../../view_item.php");
            }
        
          }
       

        

    
?>