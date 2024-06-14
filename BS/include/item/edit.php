<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        Content Updater
                    </div>
                    <div class="card-body">
                        <form action="include/item/update_item.php" method="POST">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="mb-1">Item Update</h3>

                                    <?php  echo Message();
echo SuccessMessage();
?>

                                </div>


                                <?php

                                
       $query="SELECT * from item where item_id=$get_id ";

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
       }
?>


                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Item Name</label>
                                        <input class="form-control form-control-lg" type="text" name="item_name"
                                            required="" value="<?php echo $item_name; ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="get_id" value="<?php echo $get_id;?>" id="" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Item Type</label>
                                        <select class="form-control form-control-lg" name="item_type">
                                            <option value="<?php echo $item_type; ?>"><?php echo $item_type; ?></option>
                                            <option value="Food">Food</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Home Furniture">Home Furniture</option>
                                            <option value="Office Goods">Office Goods</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">IInitial Item Price</label>
                                        <input class="form-control form-control-lg" type="number" name="item_price"
                                            required="" value="<?php echo $item_ini_prize; ?>" autocomplete="off">
                                    </div>

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="">Item Start Date</label>
                                                <input class="form-control form-control-lg" type="date"
                                                    name="item_start_date" required=""
                                                    value="<?php echo $item_start_date; ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">Item End Date</label>
                                                <input class="form-control form-control-lg" type="date"
                                                    name="item_end_date" required=""
                                                    value="<?php echo $item_end_date; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-info btn-block" value="Update Content" type="submit"
                                            name="update_item">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Image Updater
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-1">Item Upload</h3>

                                <?php  echo Message();
echo SuccessMessage();
?>

                            </div>


                            <div class="card-body">

                                <img class="" width="100" height="100" src="../file/item/<?php echo $item_image;?>">
                                <form action="include/item/update_item.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="get_id" value="<?php echo $get_id;?>" id="" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Item Image</label>
                                        <input class="form-control form-control-lg" type="file" name="item_image"
                                            required="" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-info btn-block" value="Update Image" type="submit"
                                            name="update_image">
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>