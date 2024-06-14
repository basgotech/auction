<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-title">
                <a href="view_item.php"><span class="btn btn-info"><i class="fa fa-arrow-left"></i></span></a>
            </div>
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
                        <th>Bid Status</th>
                        <th>Bid Licence</th>
                        <th> Select Winner</th>
                    </thead>
                    <tbody>

                        <?php
                        
                                                       $query="SELECT * ";
                                                       $query .="FROM bid ";
                                                       $query .="INNER JOIN item ON item.item_id =bid.bid_item_for_id ";
                                                       $query .="where bid.bid_item_for_id='$get_item_id' ";
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
                                             $bid_id=$item_data['bid_id'];
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
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                    data-target="#modelId">
                                    Select
                                </button>
                                <?php
                                    }
                                ?>


                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                    aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Choose Winner</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Are you sure for selecting this bidder as a winner?
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">No</button>
                                                <a
                                                    href="view_item.php?view_bid=<?php echo $item_id;?>&winner=<?php echo $bid_id;?>"><button
                                                        type="button" class="btn btn-primary">Sure</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                $('#exampleModal').on('show.bs.modal', event => {
                                    var button = $(event.relatedTarget);
                                    var modal = $(this);
                                    // Use above variables to manipulate the DOM

                                });
                                </script>
                            </td>

                        </tr>
                        <?php
                                         }
?>

                    </tbody>
                </table>






            </div>



        </div>
    </div>
</div>


<?php
if (isset($_GET['view_bid'])) {

    $get_id=$_GET['view_bid'];

    $select="select bid_status from bid where bid_status='Seen' ";
    $select_exe=mysqli_query($connection,$query);
    $result_count=mysqli_num_rows($select_exe);
    if($result_count<1){
        $query = "UPDATE bid SET ";
        $query .="bid_status = 'Seen'  ";
        $query .="WHERE bid_item_for_id  = $get_id ";
        $update_query = mysqli_query($connection,$query); 
    }


}
    if(isset($_GET['winner'])){
        
        $get_winner=$_GET['winner'];
        
        $query = "UPDATE bid SET ";
        $query .="bid_status = 'Winner'  ";
        $query .="WHERE bid_id  = $get_winner ";
     
           
             
             $update_query = mysqli_query($connection,$query);
             
             if($update_query ){

                $query = "UPDATE bid SET ";
                $query .="closed_status = 'Closed'  ";
                $query .="WHERE bid_item_for_id  = $item_id ";
             
                   
                     
                     $update_query = mysqli_query($connection,$query);
                
                 $_SESSION["SuccessMessage"]="The winner Selected!";
                 Redirect_to("view_item.php?view_bid=$item_id");
                 }
                 else{
                     $_SESSION["ErrorMessage"]="Error To Update!";
                     die(mysqli_error($connection));
                     Redirect_to("view_item.php?view_bid=$item_id");
                 }
    }
?>