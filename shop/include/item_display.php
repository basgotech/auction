      <!--Grid column-->


      <?php
      
        
      if(isset($_GET['dep'])){
          $get_dep=$_GET['dep'];
          
          if($get_dep=="All"){
            $query_item="select * from item where item_status='Accepted' "; 
          }else{
            $query_item="select * from item where item_status='Accepted' and dept_name='$get_dep' "; 
          }
         
        
      }
      else if(isset($_GET['search'])){

        $get_val=$_GET['search'];

        $query_item = "SELECT * FROM item WHERE item_name LIKE '%$get_val%'"; 
      }

      else{
         
    $query_item="select * from item where item_status='Accepted' "; 
      }
    
    $query_item_exe=mysqli_query($connection,$query_item);
    
    while ($row=mysqli_fetch_assoc($query_item_exe)) {
        $item_id=$row['item_id'];
        $item_name=$row['item_name'];
        $item_type=$row['item_type'];
        $item_ini_prize=$row['item_ini_prize'];
        $item_image=$row['item_image'];
        
        ?>



      <div class="col-lg-3 col-md-6 mb-4">

          <style>
          .item {
              height: 200px;
          }
          </style>

          <!--Card-->

          <div class="card">

              <!--Card image-->
              <div class="view overlay">
                  <img src="../file/item/<?php echo $item_image;?>" class="card-img-top item">
                  <a href="index.php?bid=<?php echo $item_id; ?>">
                      <div class="mask rgba-white-slight"></div>
                  </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                  <!--Category & Title-->
                  <a href="index.php?bid=<?php echo $item_id; ?>" class="grey-text">

                      <h5><?php
                          echo $item_type;
                      ?></h5>
                  </a>
                  <h5>
                      <strong>
                          <a href="index.php?bid=<?php echo $item_id; ?>" class="dark-grey-text"><?php
                          echo $item_name;
                      ?>
                              <span class="badge badge-pill danger-color">NEW</span>
                          </a>
                      </strong>
                  </h5>

                  <h4 class="font-weight-bold blue-text">
                      <strong><?php
                          echo $item_ini_prize;
                      ?></strong> <small>Initial</small>
                  </h4>

              </div>
              <!--Card content-->

          </div>
          <!--Card-->

      </div>
      <?php
    
      }

      ?>