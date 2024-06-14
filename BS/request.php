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




                    <form class="splash-container" action="include/req/send.php" enctype="multipart/form-data"
                        method="POST">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-1">Request For Seller</h3>
                                <p>Add Your Commercial Licence in png format.</p>
                                <?php  echo Message();
echo SuccessMessage();
?>

                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Company Name</label>
                                    <input class="form-control form-control-lg" type="text" name="com_name" required=""
                                        placeholder="Company Name" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="">Department Type</label>
                                    <select class="form-control form-control-lg" name="dept">
                                        <option disabled>Select Department Category</option>
                                        <?php
    $query_dept="select * from department";
    $query_dept_exe=mysqli_query($connection,$query_dept);
    while($row=mysqli_fetch_assoc($query_dept_exe)){
        $id_dept=$row['id'];
        $dept_name=$row['dept_name'];
        ?>

                                        <option value="<?php echo $id_dept; ?>"><?php echo $dept_name; ?></option>

                                        <?php
            
    
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Licence file</label>
                                    <input class="form-control form-control-lg" type="file" name="file_lic" required=""
                                        placeholder="Licence file" autocomplete="off" accept=".png">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info btn-block" value="Request" type="submit" name="sub_lic">
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table class="table">
                                        <thead>
                                            <th>Your Name</th>
                                            <th>Company Name</th>
                                            <th>Company Lic</th>
                                            <th>Department</th>
                                            <th>Status</th>
                                            <th>Request date</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>

                                            <?php
                                         $seller_id=$_SESSION['id'];

                                         $query="SELECT * ";
                                         $query .="FROM request ";
                                         $query .="INNER JOIN department ON request.dept_id=department.id ";
                                         $query .="where request.seller_id='$seller_id' ";

                                         $query_req_exe=mysqli_query($connection,$query);
                                      
                                         while($req_data=mysqli_fetch_assoc($query_req_exe)){
                                             $id=$req_data['id_req'];
                                             $name=$req_data['seller_name'];
                                             $seller_lic_file=$req_data['seller_lic_file'];
                                             $com_name=$req_data['com_name'];
                                             $dept_name=$req_data['dept_name'];
                                             $status=$req_data['status'];
                                             $com_name=$req_data['com_name'];
                                             $req_date=$req_data['req_date'];
                                             ?>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $com_name; ?></td>
                                            <td><img id="lic_fil" width="300" height="200"
                                                    src="../file/lic/<?php echo $seller_lic_file; ?>">
                                            </td>
                                            <td><?php echo $dept_name; ?></td>
                                            <td>

                                                <?php
if($status=='unseen'){
    ?>
                                                <span class="btn btn-warning">unseen</span>
                                                <?php
        
    
                                                }else{
                                                    ?>
                                                <span class="btn btn-success"><i class="fa fa-check">Approved</i></span>

                                                <?php
                                                }
                                                ?>

                                            </td>
                                            <td><?php echo $req_date; ?></td>


                                            <?php
if($status=='unseen'){
    ?>
                                            <td><a href="#" onclick="delete_req(<?php echo $id; ?>)"><span
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></span></a>
                                            </td>
                                            <?php
        
    
                                                }else{
                                                    ?>

                                            <td><span class="btn btn-info"><i class="fa fa-check"></i></span>
                                            </td>
                                            <?php
                                                }
                                                ?>
                                            <?php
    

                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <script>
                                    function delete_req(ID) {

                                        var r = confirm("Do You went to Delete This Request?");
                                        if (r == true) {
                                            location.href = "request.php?yes_delete=" + ID;
                                        } else {

                                        }
                                    }
                                    </script>

                                    <?php

if(isset($_GET['yes_delete'])){
            
    $id_delete_yes=$_GET['yes_delete'];
    
                            $query = "DELETE FROM request WHERE id_req = {$id_delete_yes}";
                            
                            $delete_query = mysqli_query($connection,$query);
                            
                         
                              if($delete_query){
    $_SESSION["ErrorMessage"]="Request Deleted successfuly";
Redirect_to("request.php"); 
}
else{
    $_SESSION["ErrorMessage"]="Error To Delete This Request!";
 Redirect_to("request.php"); ; 
}
     
}

?>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <style>
        #lic_fil {
            border: 2px gray outset;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;

        }
        </style>




        <?php
                include "include/footer.php";
            ?>