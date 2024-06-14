<?php
    include "include/header.php"; 
?>
<style>
#image {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid burlywood;
}
</style>

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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Your Bid Status</h2>
                                </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Bid</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php
                                            $id=$_SESSION['id'];
                                                $query="select * from bid where bid_by_id='$id' ";
                                                $query_exe=mysqli_query($connection,$query);
                                                $count_bid=mysqli_num_rows($query_exe);

                                                echo $count_bid;
                                                
                                            ?></h1>
                                        </div>

                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>


                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Bid Info</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">

                                            <?php
                                            $id=$_SESSION['id'];
                                            $item_image="-";
                                            $item_name="-";
                                            $amount="-";
                                            $query="SELECT * ";
                                            $query .="FROM bid ";
                                            $query .="INNER JOIN item ON item.item_id =bid.bid_item_for_id ";
                                            $query .="where bid.bid_by_id='$id' ";
                                          
                                                $query_exe=mysqli_query($connection,$query);
                                                while($bid=mysqli_fetch_assoc($query_exe)){
                                                    $amount=$bid['bid_amount'];
                                                    $item_name=$bid['item_name'];
                                                    $item_image=$bid['item_image'];
                                                }

                                                ?>
                                            <li class="list-group-item social-sales-content"><span>
                                                    <img id="image"
                                                        src="../file/item/<?php echo $item_image;?>" /></span><span
                                                    class="social-sales-name"><?php echo $item_name; ?></span><span
                                                    class="social-sales-count text-dark"><?php echo $amount; ?>
                                                    ETB</span>
                                            </li>

                                            <?php
                                                
                                            ?>



                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="view_bid.php" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->
                            </div>


                        </div>



                    </div>
                </div>
            </div>


            <?php
                include "include/footer.php";
            ?>