<?php
    include "include/header.php"; 
?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include "include/top_nav.php"; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <?php include "include/left_nav.php"; ?>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-xl-2"></div>
                        <div class="col-sm-8 col-md-8 col-xl-8">
                            <div class="splash-container-login">
                                <div class="card ">
                                    <div class="card-header text-center">Please enter your user information.</div>
                                    <div class="card-body">
                                        <?php  echo Message();
echo SuccessMessage();
?>

                                        <form action="include/user/register.php" method="post"
                                            enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="fname"
                                                            type="text" name="fname" placeholder="First Name"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="fname"
                                                            type="text" name="mname" placeholder="Middle Name"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="fname"
                                                            type="text" name="lname" placeholder="Last Name"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="username"
                                                            type="text" name="username" placeholder="Username"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="email"
                                                            type="email" name="email" placeholder="Email"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="username"
                                                            type="tel" name="phone" placeholder="phone"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="email"
                                                            type="file" name="image" placeholder="User Image"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <select name="gender" class="form-control form-control-lg"
                                                            required>
                                                            <option value="">Select Gender</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Custom">Custom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="age"
                                                            type="number" name="age" placeholder="User Age"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <input class="form-control form-control-lg" id="city"
                                                                type="text" name="city" placeholder="City"
                                                                autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="kebele"
                                                            type="text" name="kebele" placeholder="Kebele"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="password"
                                                            type="password" name="password" placeholder="password"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" id="re password"
                                                            type="password" name="con_password"
                                                            placeholder="Confrim Password" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input name="register" class="btn btn-primary btn-lg btn-block"
                                                    type="submit">
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


            <?php
                include "include/footer.php";
            ?>

            <style type="text/css">
            .form-control {
                border: 2px solid gray;
            }
            </style>