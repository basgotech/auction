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
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2"
                    aria-controls="submenu-2"><i class="fa fa-fw fa-user"></i>Users</a>
                <div id="submenu-2" class="collapse submenu">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="reg_user.php">Register User</a>
                        </li>
                        <a class="nav-link" href="users.php">View user <span
                                class="badge badge-secondary">New</span></a>
            </li>


        </ul>
    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
            aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Department</a>
        <div id="submenu-3" class="collapse submenu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="department/add.php">Add Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="department/index.php">View Department</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="request.php"><i class="fa fa-fw fa-forward"></i>View Request</a>

    </li>

    <li class="nav-item">
        <a class="nav-link" href="item.php"><i class="fa fa-fw fa-list"></i>Item</a>

    </li>



    </ul>
    </div>
</nav>