<div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">

        <?php
    $query_department="select * from department";
    $query_dep_exe=mysqli_query($connection,$query_department);
    
    while($row=mysqli_fetch_assoc($query_dep_exe)){
        $id=$row['id'];
        $dept_name=$row['dept_name'];

        ?>
        <li class="nav-item">
            <a class="nav-link" href="index.php?dep=<?php echo $dept_name;?>"><?php echo $dept_name; ?></a>
        </li>

        <?php
    }
?>




    </ul>
    <!-- Links    -->

    <form class="form-inline" method="GET">
        <div class="md-form my-0">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">

        </div>

    </form>
</div>