<main class="mt-5 pt-4">
    <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Checkout form</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <form class="card-body" action="include/item/bide.php" method="POST" enctype="multipart/form-data">

                        <!--Grid row-->
                        <div class="row">

                            <?php
                               $query_item="select * from item where item_id=$get_id "; 
                            
                          
                          $query_item_exe=mysqli_query($connection,$query_item);
                          
                          while ($row=mysqli_fetch_assoc($query_item_exe)) {
                              $item_id=$row['item_id'];
                              $item_name=$row['item_name'];
                              $item_type=$row['item_type'];
                              $item_ini_prize=$row['item_ini_prize'];
                              $item_image=$row['item_image'];
                              $item_start_date=$row['item_start_date'];
                              $item_end_date=$row['item_end_date'];
                          }
                        ?>

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <input type="text" name="item_id" value="<?php echo $item_id; ?>" hidden>

                                <!--firstName-->
                                <div class="md-form ">
                                    <input type="text" id="firstName" value="<?php echo $_SESSION['fname'];?>"
                                        class="form-control" readonly>
                                    <label for="firstName" class="">First name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--lastName-->
                                <div class="md-form">

                                    <input type="text" id="lastName" value="<?php echo $_SESSION['lname'];?>"
                                        class="form-control" readonly>
                                    <label for="lastName" class="">Last name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->




                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" id="address" value="<?php echo $_SESSION['city'];?>" class="form-control"
                                readonly>
                            <label for="address" class="">Address</label>
                        </div>

                        <!--address-2-->
                        <div class="md-form mb-5">
                            <input type="text" id="address-2" name="add_addr" class="form-control" placeholder="Address"
                                required>
                            <label for="address-2" class="">Additional Address</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="number" id="address-2" name="amount" class="form-control"
                                placeholder="Amount Money" required>
                            <label for="address-2" class="">Ammount Money</label>
                        </div>


                        <div class="md-form mb-5">
                            <input type="text" id="address-2" class="form-control" placeholder="Address" hidden>
                            <label for="address-2" class="">Commercial Licence</label>

                        </div>
                        <div class="md-form mb-5">

                            <input type="file" name="com_lic" id="address-2" class="form-control" required>
                        </div>


                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" name="bide" type="submit">Continue to
                            Bid</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <!-- Heading -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Item Status</span>
                </h4>

                <!-- Cart -->
                <ul class="list-group mb-3 z-depth-1">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?php echo $item_name;?></h6>
                            <small class="text-muted"><?php
                                echo $item_type; ?>
                            </small>
                        </div>
                        <span class="text-muted"><?php echo $item_ini_prize; ?> ETB</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">

                        <img class="bid_image" src="../file/item/<?php echo $item_image; ?>" />
                    </li>

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Start Date</h6>
                            <small><?php echo $item_start_date;?></small>
                        </div>

                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>End Date</span>
                        <strong><?php echo $item_end_date;?></strong>
                    </li>
                </ul>
                <!-- Cart -->


            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>