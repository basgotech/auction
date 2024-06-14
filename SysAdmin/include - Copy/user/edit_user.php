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
<div class="card-body">
    <?php  echo Message();
echo SuccessMessage();
?>

    <form action="include/user/update.php" method="post">
        <div class="row">

            <input type="text" value="<?php echo $id;?>" name="id" hidden>

            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="fname" type="text" name="fname"
                        value="<?php echo $fname;?>" autocomplete="off">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="fname" type="text" name="lname"
                        value="<?php echo $lname;?>" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Email"
                        value="<?php echo  $encrypted_email;?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="phone" type="tel" name="phone"
                        value="<?php echo $encrypted_phone;?>" autocomplete="off" required>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">

                    <select name="gender" class="form-control form-control-lg" required>
                        <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Custom">Custom</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="age" type="number" name="age"
                        value="<?php echo $age;?>" autocomplete="off" required>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="city" type="text" name="city"
                            value="<?php echo $city;?>" autocomplete="off" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="kebele" type="text" name="kebele"
                        value="<?php echo $kebele;?>" autocomplete="off" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input name="update" class="btn btn-primary btn-lg btn-block" value="Update" type="submit">
        </div>

    </form>
</div>