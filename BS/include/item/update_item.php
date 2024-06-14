<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "../db.php"; ?>
<?php include "../function.php"; ?>

<?php
    if(isset($_POST['update_item'])){
        
        $seller_id=$_SESSION['id'];
        $item_name=$_POST['item_name'];
        $item_type=$_POST['item_type'];
        $item_price=$_POST['item_price'];
        $item_start_date=$_POST['item_start_date'];
        $item_end_date=$_POST['item_end_date'];
        $get_id=$_POST['get_id'];


        $query = "UPDATE item SET ";
   $query .="item_name = '{$item_name}' , ";
   $query .="item_type = '{$item_type}' , ";
   $query .="item_ini_prize = '{$item_price}' , ";
   $query .="item_start_date = '{$item_start_date}' , ";
   $query .="item_end_date = '{$item_end_date}'  ";
   $query .="WHERE item_id  = $get_id ";

      
        
        $update_query = mysqli_query($connection,$query);
        
        if($update_query ){
            $_SESSION["SuccessMessage"]="Your Item Information Updated!";
            Redirect_to("../../view_item.php");
            }
            else{
                $_SESSION["ErrorMessage"]="Error To Update!";
                die(mysqli_error($connection));
            Redirect_to("../../view_item.php");
            }
        
          }


          if(isset($_POST['update_image'])){
        
            $get_id=$_POST['get_id'];
            $item_image = $_FILES['item_image']['name'];
            $item_image_temp = $_FILES['item_image'] ['tmp_name'];
            move_uploaded_file($item_image_temp, "../../../file/item/$item_image");
    
    
            
         
        $query = "UPDATE item SET ";
        $query .="item_image = '{$item_image}'  ";
        $query .="WHERE item_id  = $get_id ";
     
           
             
             $update_query = mysqli_query($connection,$query);
             
             if($update_query ){
                 $_SESSION["SuccessMessage"]="Your Item Image  Updated!";
                 Redirect_to("../../view_item.php");
                 }
                 else{
                     $_SESSION["ErrorMessage"]="Error To Update!";
                     die(mysqli_error($connection));
                 Redirect_to("../../view_item.php");
                 }
            
              }
           
       

        

    
?>