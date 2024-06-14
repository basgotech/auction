<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-heder card-primary">
                Approved Request
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
                    </thead>
                    <tbody>

                        <?php
                                         $seller_id=$_SESSION['id'];

                                         $query="SELECT * ";
                                         $query .="FROM request ";
                                         $query .="INNER JOIN department ON request.dept_id=department.id ";
                                         $query .="where request.status='approved' ";

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
                        <td><img width="300" height="200" src="../file/lic/<?php echo $seller_lic_file; ?>">
                        </td>
                        <td><?php echo $dept_name; ?></td>
                        <td>

                            <span class="btn btn-success"><?php
    echo $status;
?></span>


                        </td>
                        <td><?php echo $req_date; ?>
                        </td>



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