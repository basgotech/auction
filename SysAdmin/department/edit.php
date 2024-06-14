<?php
      $query="select * from department where id =$get_id ";
    
      $query_exe=mysqli_query($connection,$query);
      while ($row=mysqli_fetch_assoc($query_exe)) {
          $id=$row['id'];
          $dept_name=$row['dept_name'];
      }  
?>

<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href=""><img class="logo-img" width="100" height="100"
                    src="../../img/home/dept.jpg" alt="logo"></a><span class="splash-description">Update
                Department</span>
        </div>
        <div class="card-body">
            <form action="update.php" method="post">
                <input type="text" name="id" value="<?php echo $id;?>" hidden>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="dept" name="dept_name" type="text"
                        value="<?php echo $dept_name;?>">
                </div>
                <button name="update_dept" type="submit" class="btn btn-warning btn-lg btn-block">Update
                    Department</button>
            </form>
        </div>


    </div>
</div>