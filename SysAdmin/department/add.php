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
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <div class="splash-container">
                        <div class="card ">
                            <div class="card-header text-center"><a href=""><img class="logo-img" width="100"
                                        height="100" src="../../img/home/dept.jpg" alt="logo"></a><span
                                    class="splash-description">Add Department</span></div>
                            <div class="card-body">
                                <form action="add_form.php" method="post">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" id="dept" name="dept_name"
                                            type="text" placeholder="Department name" autocomplete="off">
                                    </div>
                                    <button name="add_dept" type="submit" class="btn btn-primary btn-lg btn-block">Add
                                        Department</button>
                                </form>
                            </div>


                        </div>
                    </div>


                </div>
            </div>


            <?php
                include "include/footer.php";
            ?>