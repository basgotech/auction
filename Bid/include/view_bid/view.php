<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <?php  echo Message();
echo SuccessMessage();
?>

                <table class="table">
                    <thead>
                        <th>Item Name</th>
                        <th>Item Type</th>
                        <th>Item Initial Prise</th>
                        <th>Item Start Date</th>
                        <th>Item End Date</th>
                        <th>Item Image</th>
                        <th>Bid Amount</th>
                        <th>Your Bid Status</th>
                        <th>Bid Licence</th>
                        <th>Bid Staus</th>
                    </thead>
                    <tbody>

                        <?php
                                                       $id=$_SESSION['id'];
                                                       $query="SELECT * ";
                                                       $query .="FROM bid ";
                                                       $query .="INNER JOIN item ON item.item_id =bid.bid_item_for_id ";
                                                       $query .="where bid.bid_by_id='$id' ";
                                         $query_req_exe=mysqli_query($connection,$query);
                                      
                                         while ($item_data=mysqli_fetch_assoc($query_req_exe)) {
                                             $item_id=$item_data['item_id'];
                                             $item_name=$item_data['item_name'];
                                             $item_type=$item_data['item_type'];
                                             $item_ini_prize=$item_data['item_ini_prize'];
                                             $item_start_date=$item_data['item_start_date'];
                                             $item_end_date=$item_data['item_end_date'];
                                             $item_image=$item_data['item_image'];
                                             $item_status=$item_data['item_status'];
                                             $item_reg_date=$item_data['item_reg_date'];
                                             $bid_license=$item_data['bid_license'];
                                             $bid_status=$item_data['bid_status'];
                                             $bid_amount=$item_data['bid_amount']; 
                                             $closed_status=$item_data['closed_status']; 
                                             ?>
                        <tr>
                            <td><?php echo $item_name; ?></td>
                            <td><?php echo $item_type; ?></td>
                            <td><?php echo $item_ini_prize; ?></td>
                            <td><?php echo $item_start_date; ?></td>
                            <td><?php echo $item_end_date; ?></td>
                            <td><img id="lic_fil" width="300" height="200"
                                    src="../file/item/<?php echo $item_image; ?>">
                            </td>
                            <td><?php echo $bid_amount; ?></td>
                            <td><?php echo $bid_status; ?></td>
                            <td><img id="lic_fil" width="300" height="200"
                                    src="../file/lic/<?php echo $bid_license; ?>">
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <?php
                                    if($closed_status=="Closed"){
?>
                                <button title="Item Closed" type="button" class="btn btn-outline-danger"><i
                                        class="fa fa-lock"></i></button>
                                <?php
                                    }else{
                                        ?>
                                <button type="button" name="" id="" class="btn btn-primary" btn-lg
                                    btn-block>Open</button>
                                <?php
                                    }
                                ?>

                            </td>

                        </tr>
                        <?php
                                         }
?>

                    </tbody>
                </table>

                <script>
                function delete_item(ID) {

                    var r = confirm("Do You went to Delete This Item?");
                    if (r == true) {
                        location.href = "view_item.php?delete_item=" + ID;
                    } else {

                    }
                }
                </script>

                <?php

if(isset($_GET['delete_item'])){
            
    $id_delete_yes=$_GET['delete_item'];
    
                            $query = "DELETE FROM item WHERE item_id = {$id_delete_yes}";
                            
                            $delete_query = mysqli_query($connection,$query);
                            
                         
                              if($delete_query){
    $_SESSION["ErrorMessage"]="Item Deleted successfuly";
Redirect_to("view_item.php"); 
}
else{
    $_SESSION["ErrorMessage"]="Error To Delete This Item!";
 Redirect_to("view_item.php"); ; 
}
     
}

?>
            </div>

        </div>
    </div>
</div>