<div class="table-responsive">
    <table id="example" class="table table-striped table-bordered second" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $query="select * from users";
    $query_exe=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_exe)){
        $id=$row['id'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $phone=$row['phone'];
        $image=$row['image'];
        $pinkey="auctionmeu";
$encrypted_email=openssl_decrypt($email,"AES-128-ECB",$pinkey);
$encrypted_phone=openssl_decrypt($phone,"AES-128-ECB",$pinkey);

        ?>

            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $fname." ".$lname;?></td>
                <td><?php echo $encrypted_email;?></td>
                <td><?php echo $encrypted_phone;?></td>
                <td><img style="width:100px;height:100px;border-radius:50%;" src="../img/user/<?php echo $image;?>">
                </td>
                <td>
                    <a title="View Detail" href="users.php?view=<?php echo $id;?>" class="btn btn-success btn-xs"><i
                            class="fa fa-eye"></i>
                    </a>
                    <a title="Edit User" href="users.php?edit=<?php echo $id;?>" class="btn btn-info btn-xs"><i
                            class="fa fa-edit"></i> </a>
                    <a title="Delete User" href="#" onclick="delete_user(<?php echo $id; ?>)"
                        class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php
    }
?>


        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

<script>
function delete_user(ID) {

    var r = confirm("Do You went to Delete This user?");
    if (r == true) {
        location.href = "users.php?yes_delete=" + ID;
    } else {

    }
}
</script>


<?php

if(isset($_GET['yes_delete'])){
            
    $id_delete_yes=$_GET['yes_delete'];
    
                            $query = "DELETE FROM users WHERE id = {$id_delete_yes}";
                            
                            $delete_query = mysqli_query($connection,$query);
                            
                         
                              if($delete_query){
    $_SESSION["ErrorMessage"]="User Deleted successfuly";
Redirect_to("users.php"); 
}
else{
    $_SESSION["ErrorMessage"]="Error To Delete This User!";
 Redirect_to("users.php"); ; 
}
     
}

?>