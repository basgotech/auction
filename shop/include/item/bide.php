<?php ob_start(); ?>

<?php session_start(); ?>

<?php include "../db.php"; ?>
<?php include "../function.php"; ?>


<?php
    
    if(isset($_POST['bide'])){
  
        $user_id=$_SESSION['id'];
        $item_id=$_POST['item_id'];
        $amount=$_POST['amount'];
        $add_address=$_POST['add_addr'];
        $lic_file = $_FILES['com_lic']['name'];
$lic_file_temp = $_FILES['com_lic'] ['tmp_name'];
move_uploaded_file($lic_file_temp, "../../../file/lic/$lic_file");


$query = "INSERT INTO bid(bid_license, bid_item_for_id, bid_amount,bid_by_id,bid_add_adddr)";
$query .="VALUES('{$lic_file}','{$item_id}','{$amount}','{$user_id}','{$add_address}') ";
    }

    $bid_query = mysqli_query($connection,$query);




    if($bid_query ){
       $_SESSION["SuccessMessage"]="Bid Set Successfuly ";
       Redirect_to("../../../Bid/view_bid.php");
       }
       else{
           $_SESSION["ErrorMessage"]="Error To Bid!";
           die(mysqli_error($connection));
       }
?>