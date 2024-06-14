<div class="row">
    <!-- ============================================================== -->
    <!-- sales  -->
    <!-- ============================================================== -->
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12"></div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <h5 class="text-muted">Department</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">
                        <?php
                                                $query="select * from department ";
                                                $query_exe=mysqli_query($connection,$query);
                                                $count_dept=mysqli_num_rows($query_exe);

                                                echo $count_dept;
                                                
                                            ?>
                    </h1>
                </div>

            </div>
        </div>
    </div>

    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- end total orders  -->
    <!-- ============================================================== -->
</div>