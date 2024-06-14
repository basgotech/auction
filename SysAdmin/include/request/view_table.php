<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-heder">
                Unseen Request
            </div>
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
                                         $query .="where request.status='unseen' ";

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
        
    
                                                }
                                                ?>

                        </td>
                        <td><?php echo $req_date; ?></td>


                        <td>
                            <a title="Approve Request" href="#" onclick="approve_request(<?php echo $id; ?>)"
                                class="btn btn-success btn-xs"><i class="fa fa-check"></i>
                            </a>
                            <a title="DisApprove Request" href="#" onclick="disapprove_request(<?php echo $id; ?>)"
                                class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
                            </a>
                        </td>
                        <?php
    

                                            }
                                            ?>
                    </tbody>
                </table>

                <script>
                function approve_request(ID) {

                    var r = confirm("Do You went to Approve This Request?");
                    if (r == true) {
                        location.href = "request.php?yes_approve=" + ID;
                    } else {

                    }
                }

                function disapprove_request(ID) {

                    var r = confirm("Do You went to Dis Approve This Request?");
                    if (r == true) {
                        location.href = "request.php?yes_disap=" + ID;
                    } else {

                    }
                }
                </script>

                <?php

if(isset($_GET['yes_approve'])){
            
    $id_approve_yes=$_GET['yes_approve'];
    
      
    $query = "UPDATE request SET ";
    $query .="status = 'Approved'  ";
    $query .="WHERE id_req  = $id_approve_yes ";
    $update_query = mysqli_query($connection, $query);
                 
                         
                              if($update_query){
    $_SESSION["SuccessMessage"]="Request Approved successfuly";
Redirect_to("request.php"); 
}
else{
    $_SESSION["ErrorMessage"]="Error To Approve This Request!";
 Redirect_to("request.php"); ; 
}
     
}


if(isset($_GET['yes_disap'])){
            
    $id_approved_yes=$_GET['yes_disap'];
    
      
    $query = "UPDATE request SET ";
    $query .="status = 'Approved'  ";
    $query .="WHERE id_req  = $id_approved_yes ";
    $update_query = mysqli_query($connection, $query);
                 
                         
                              if($update_query){
    $_SESSION["SuccessMessage"]="Request Dis Approved successfuly";
Redirect_to("request.php"); 
}
else{
    $_SESSION["ErrorMessage"]="Error To Dis Approve This Request!";
 Redirect_to("request.php"); ; 
}
     
}

?>
            </div>

        </div>
    </div>
</div>

<style>
#lic_fil:hover {
    border: 1px solid red;
    height: 700px;
    width: 1000px;

}
</style>