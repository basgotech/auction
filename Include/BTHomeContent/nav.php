 <!--Main Navigation-->
 <header>

     <!-- Navbar -->
     <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
         <div class="container">

             <!-- Brand -->
             <a class="navbar-brand waves-effect" href="index.php" target="_blank">
                 <strong class="blue-text">ASMeU</strong>
             </a>

             <!-- Collapse -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <!-- Links -->
             <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 <!-- Left -->
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="#">Home
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>

                     <?php
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role']=='Admin') {
            ?>
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="SysAdmin">Admin Page
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <?php
        }
        if ($_SESSION['role']=='BS') {
            ?>
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="BS">BS Page
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <?php
        }
    }
?>
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="bid/">Bid</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="shop">Item</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link waves-effect" href="contact.php">Contact</a>
                     </li>
                 </ul>

                 <!-- Right -->
                 <?php
    if (isset($_SESSION['role'])) {
            ?>
                 <ul class="navbar-nav nav-flex-icons">
                     <li class="nav-item">
                         <a href="include/logout.php">
                             <button class="nav-link waves-effect btn btn-warning">Logout</button></a>
                     </li>

                 </ul>
                 <?php
        
    }else{
      ?>

                 <ul class="navbar-nav nav-flex-icons">
                     <li class="nav-item">
                         <a href="login.php">
                             <button class="nav-link waves-effect btn btn-info">Login</button></a>
                     </li>

                 </ul>
                 <?php
    }
?>


             </div>

         </div>
     </nav>
     <!-- Navbar -->

 </header>
 <!--Main Navigation-->