<?php
    include "include/header.php"; 
?>

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

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Users</h5>
                                <?php  echo Message();
echo SuccessMessage();
?>

                            </div>
                            <div class="card-body">




                                <?php
  include "include/request/view_table.php";   
 ?>



                            </div>
                        </div>

                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Users</h5>
                                <?php  echo Message();
echo SuccessMessage();
?>

                            </div>
                            <div class="card-body">




                                <?php
  include "include/request/view_approved.php";   
 ?>



                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php
                include "include/footer.php";
            ?>