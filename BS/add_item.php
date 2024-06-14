<?php
    include "include/header.php"; 
?>

<link rel="stylesheet" type="text/css" media="all" href="include/picker/daterangepicker.css" />
<script type="text/javascript" src="include/picker/date.js"></script>
<script type="text/javascript" src="include/picker/daterangepicker.js"></script>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include "include/top_nav.php"; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <?php include "include/left_nav.php"; ?>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->



                    <div class="row">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-6">
                            <form action="include/item/upload.php" enctype="multipart/form-data" method="POST">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-1">Item Upload</h3>

                                        <?php  echo Message();
echo SuccessMessage();
?>

                                    </div>


                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Item Name</label>
                                            <input class="form-control form-control-lg" type="text" name="item_name"
                                                required="" placeholder="Item Name" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Item Type</label>
                                            <select class="form-control form-control-lg" name="item_type">
                                                <option value="">Select Item Type</option>
                                                <option value="Food">Food</option>
                                                <option value="Electronics">Electronics</option>
                                                <option value="Home Furniture">Home Furniture</option>
                                                <option value="Office Goods">Office Goods</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Department</label>
                                            <select class="form-control form-control-lg" name="dept_name">
                                                <option value="">Select Department Type</option>

                                                <?php
                                                      $query_department="select * from department";
                                                      $query_dep_exe=mysqli_query($connection,$query_department);
                                                      
                                                      while ($row=mysqli_fetch_assoc($query_dep_exe)) {
                                                          $id=$row['id'];
                                                          $dept_name=$row['dept_name'];
                                                          ?>

                                                <option value="<?php echo $dept_name;?>"><?php echo $dept_name;?>
                                                </option>
                                                <?php
                                                      }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">IInitial Item Price</label>
                                            <input class="form-control form-control-lg" type="number" name="item_price"
                                                required="" placeholder="Item Price" autocomplete="off">
                                        </div>

                                        <div class="form-group">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="">Item Start Date</label>
                                                    <input class="form-control form-control-lg" type="date"
                                                        name="item_start_date" required=""
                                                        placeholder="Item Start Date">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Item End Date</label>
                                                    <input class="form-control form-control-lg" type="date"
                                                        name="item_end_date" required="" placeholder="Item End Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Item Image</label>
                                            <input class="form-control form-control-lg" type="file" name="item_image"
                                                required="" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-info btn-block" value="Upload" type="submit"
                                                name="upload_item">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>





                </div>

            </div>

        </div>






        <?php
                include "include/footer.php";
            ?>