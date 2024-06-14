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
                        <th>Item Sub Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        <?php
                        
                                         $seller_id=$_SESSION['id'];

                                         $query="SELECT * from item where seller_id='$seller_id' ";

                                         $query_req_exe=mysqli_query($connection,$query);
                                      
                                         while($item_data=mysqli_fetch_assoc($query_req_exe)){
                                             $item_id=$item_data['item_id'];
                                             $item_name=$item_data['item_name'];
                                             $item_type=$item_data['item_type'];
                                             $item_ini_prize=$item_data['item_ini_prize'];
                                             $item_start_date=$item_data['item_start_date'];
                                             $item_end_date=$item_data['item_end_date'];
                                             $item_image=$item_data['item_image'];
                                             $item_status=$item_data['item_status'];
                                             $item_reg_date=$item_data['item_reg_date'];
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
                            <td><?php echo $item_reg_date; ?></td>
                            <td><?php echo $item_status; ?></td>


                            <?php
if($item_status=='Pending'){
    ?>
                            <td><a href="view_item.php?edit=<?php echo $item_id;?>"><span class="btn btn-warning"><i
                                            class="fa fa-edit"></i></span></a>
                                <a href="#" onclick="delete_item(<?php echo $item_id; ?>)"><span
                                        class="btn btn-danger"><i class="fa fa-trash"></i></span></a>
                            </td>
                            <?php
        
    
                                                }else{
                                                    ?>

                            <td>
                                <?php
                                    if($item_status=="Accepted"){
?><span class="btn btn-info">
                                    <?php echo $item_status; ?>
                                </span>
                                <a href="view_item.php?view_bid=<?php echo $item_id;?>"><span class="btn btn-success"><i
                                            class="fa fa-eye"></i></span></a>
                                <?php
                                    }else{
?>
                                <span class="btn btn-danger">
                                    <?php echo $item_status; ?>
                                </span>
                                <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                                                }
                                                ?>
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