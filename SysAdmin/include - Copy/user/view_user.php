<?php
    $query="select * from users where id= $get_user_id";
    $query_exe=mysqli_query($connection,$query);
    while ($row=mysqli_fetch_assoc($query_exe)) {
        $id=$row['id'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $phone=$row['phone'];
        $image=$row['image'];
        $gender=$row['gender'];
        $age=$row['age'];
        $city=$row['city'];
        $kebele=$row['kebele'];
        $role=$row['role'];
        $reg_date=$row['reg_date'];
        
        $pinkey="auctionmeu";
        $encrypted_email=openssl_decrypt($email, "AES-128-ECB", $pinkey);
        $encrypted_phone=openssl_decrypt($phone, "AES-128-ECB", $pinkey);
    }
?>

<table class="table">
    <tr>
        <th>User List</th>
        <td>
            <a href="users.php">
                <btn class="btn btn-success"><i class="fa fa-backward"></i></btn>
            </a>

        </td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo $fname." ".$lname; ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $encrypted_email; ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?php echo $encrypted_phone; ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo $gender; ?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <th>City</th>
        <td><?php echo $city; ?></td>
    </tr>
    <tr>
        <th>Kebele</th>
        <td><?php echo $kebele; ?></td>
    </tr>
    <tr>
        <th>Role</th>
        <td><?php echo $role; ?></td>
    </tr>
    <tr>
        <th>Image</th>
        <td><img style="width:300px;height: 300px;" src="../img/user/<?php echo $image;?>">
        </td>
    </tr>
    <tr>
        <th>Reg Date</th>
        <td><?php echo $reg_date; ?></td>
    </tr>
</table>