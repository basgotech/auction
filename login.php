<?php
    include "include/header.php";
    
?>

<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">
        <?php
    include "include/BTHomeContent/nav.php";
?>
        <!--Section: Jumbotron-->
        <div class="row">
            <div class="col-sm-3 col-md-3 col-xl-3"></div>
            <div class="col-sm-6 col-md-6 col-xl-6">
                <section class="card wow fadeIn"
                    style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

                    <!-- Content -->
                    <div class="card-body text-white py-5 px-5 my-5">
                        <div class="card-header">
                            <h1 class="text-heading text-center">Login</h1>
                        </div>
                        <div class="login-form">
                            <?php  echo Message();
echo SuccessMessage();
?>

                            <form action="include/login.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group text-center">

                                    <input class="btn btn-primary " type="submit" name="loginsys" value="sign in">
                                </div>


                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="registration.php"><span class="btn btn-info btn-sm">Sign Up Here</span></a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- Content -->
                </section>

            </div>
        </div>

        <!--Section: Jumbotron-->



        <hr class="my-5">



    </div>




    </div>
    <!--Grid row-->

    <!--Grid row-->


    <!--Grid column-->

    </div>
    <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Pagination-->
    <!-- <nav class="d-flex justify-content-center wow fadeIn">
          <ul class="pagination pg-blue">

         Arrow left
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>

            <li class="page-item active">
              <a class="page-link" href="#">1
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">5</a>
            </li>

            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav> -->
    <!--Pagination-->

    </section>
    <!--Section: Cards-->

    </div>
</main>


<?php
    include "include/footer.php";
?>