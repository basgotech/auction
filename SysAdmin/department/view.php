<div class="table-responsive">
    <table class="table">
        <thead class="bg-light">
            <tr class="border-0">
                <th class="border-0">id</th>
                <th class="border-0">Department Name</th>
                <th class="border-0">Added By</th>
                <th class="border-0">Reg date</th>
                <th class="border-0">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $query="select * from department order by id desc";
    
    $query_exe=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_exe)){
        $id=$row['id'];
        $dept_name=$row['dept_name'];
        $dept_by=$row['dept_by'];
        $reg_date=$row['dept_reg_date'];
  
        ?>

            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $dept_name;?> </td>
                <td><?php echo $dept_by;?> </td>
                <td><?php echo $reg_date;?></td>
                <td>
                    <a title="Edit Department" href="index.php?edit=<?php echo $id;?>" class="btn btn-info btn-xs"><i
                            class="fa fa-edit"></i>
                    </a>
                </td>

            </tr>
            <?php
    }
?>
            <tr>
                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View
                        Details</a></td>
            </tr>
        </tbody>
    </table>
</div>