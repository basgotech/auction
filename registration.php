

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
<section class="card wow fadeIn" style="background-image: url(include/BTHomeContent/img/banner.jpg);">

<!-- Content -->
<div class="card-body text-white  py-5 px-5 my-5">

<div class="card-header">
    <h1 class="text-heading text-center">Registration</h1>
</div>

<div class="login-form">
<?php  echo Message();
echo SuccessMessage();
?>

    
                                      <form action="include/reg.php" method="post" enctype="multipart/form-data">

                                      <div class="row">
                                      <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                          <label for="">First Name</label>
                                          <input type="text" name="fname" class="form-control" required>
                                        </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                          <label for="">Last Name</label>
                                          <input type="text" name="lname" class="form-control" required>
                                        </div>
                                          </div>
                                          
                                          <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="tel" name="phone" class="form-control" required>
                                          </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                              <label for="">City</label>
                                              <input type="text" name="city" class="form-control" required>
                                            </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                                <label for="">Kebele</label>
                                                <select class="form-control" name="kebele" required>
                                                  <option value="">Select Kebele</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                </select>
                                              </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                                  <label for="">Email</label>
                                                  <input type="email" name="email" class="form-control" required>
                                                </div>
                                                  </div>

                                                  <div class="col-sm-12 col-md-12 col-lg-12"> <div class="form-group">
                                                    <label for="">user image</label>
                                                    <input type="file" name="image" class="form-control" required>
                                                  </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                                      <label for="">Age</label>
                                                      <input type="number" name="age" class="form-control" required>
                                                    </div>
                                                      </div>
                                                      <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                                        <label for="">Gender</label>
                                                        <select class="form-control" name="gender" required>
                                                          <option value="">Select Gender</option>
                                                          <option value="Male">Male</option>
                                                          <option value="Female">Female</option>
                                                        </select>
                                                      </div>
                                                        </div>
                                                          <div class="col-sm-12 col-md-12 col-lg-12"> <div class="form-group">
                                                              <label for="">Username</label>
                                                                <input type="text" name="username" class="form-control" required>
                                                                </div>
                                                              </div>

                                                              <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                                                <label for="">Password</label>
                                                                <input type="password" name="password" class="form-control" required>
                                                              </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 col-lg-6"> <div class="form-group">
                                                                  <label for="">Confirm Password</label>
                                                                  <input type="password" name="con_password" class="form-control" required>
                                                                </div>
                                                                  </div>
                                                                  <div class="col-sm-12 col-md-12 col-lg-12"> <div class="form-group text-center">
                                                                        <input type="submit" name="register" class="btn btn-info btn-block" value="Register">
                                                                        </div>
                                                                      </div>

                                      </div>



                                      
                                      
                                      </form>
                    <div class="register-link">
                        <p>
                           Goto Login
                            <a href="login.php"><span class="btn btn-info btn-sm">Sign In Here</span></a>
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