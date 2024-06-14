<nav class="navbar navbar-expand-lg navbar-light">
    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
            <li class="nav-divider">
                Menu
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="request.php"><i class="fa fa-fw fa-forward"></i>Request</a>
            </li>

            <?php
            $id=$_SESSION['id'];
                $select="select * from request where seller_id = $id AND status='Approved' ";
                $select_exe=mysqli_query($connection,$select);
                $select_num_rows= mysqli_num_rows($select_exe);

                if($select_num_rows>0){
                    ?>
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2"
                    aria-controls="submenu-2"><i class="fa fa-fw fa-list"></i>Item
                    <span class="badge badge-success">2</span></a>
                <div id="submenu-2" class="collapse submenu">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="add_item.php">Add Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_item.php">View Item</a>
                        </li>
                    </ul>
                </div>
            </li>

            <?php
    

            }
            ?>

        </ul>
    </div>
</nav>