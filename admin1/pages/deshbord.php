<?php
include('hhh.php');
?>
<!-- [ Main Content ] start -->
      <div class="pc-content">
        <!-- [ Main Content ] start -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <a href="product_master.php">
              <div class="card hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <div class="card-header !pb-0 !border-b-0">
                  <h5>Total Products</h5>
                </div>
                <div class="card-body">
                  <div class="flex items-center justify-between gap-3 flex-wrap">
                    <h3 class="font-light flex items-center mb-0">
                      <i class="feather icon-box text-primary-500 text-[30px] mr-1.5"></i>
                      <?php
                      // include('connect.php');
                      // $sql = mysqli_query($con, "SELECT COUNT(*) AS total FROM product_master");
                      // $row = mysqli_fetch_array($sql);
                      // echo $row['total'];
                      ?>
                    </h3>
                    <p class="mb-0 text-green-600 font-medium">from last month</p>
                  </div>
                  <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                    <div class="bg-primary-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
                      style="width: 75%"></div>
                  </div>
                  <p class="text-sm text-gray-500 mt-2">You have
                      <?php
                      include('connect.php');
                      $sql = mysqli_query($con, "SELECT COUNT(*) AS total FROM product_master");
                      $row = mysqli_fetch_array($sql);
                      echo $row['total'];
                      ?>  
                  products available in your store.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <a href="category_master.php">
              <div class="card hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <div class="card-header !pb-0 !border-b-0">
                  <h5>Total Categories</h5>
                </div>
                <div class="card-body">
                  <div class="flex items-center justify-between gap-3 flex-wrap">
                    <h3 class="font-light flex items-center mb-0">
                      <i class="feather icon-layers text-warning-500 text-[30px] mr-1.5"></i>
                      <?php
                      include('connect.php');
                      $sql = mysqli_query($con, "SELECT COUNT(*) AS total FROM category_master");
                      $row = mysqli_fetch_array($sql);
                      echo $row['total'];
                      ?>
                    </h3>
                    <p class="mb-0 text-yellow-600 font-medium">from last month</p>
                  </div>
                  <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                    <div class="bg-warning-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
                      style="width: 50%"></div>
                  </div>
                  <p class="text-sm text-gray-500 mt-2">You have
                    <?php
                      include('connect.php');
                      $sql = mysqli_query($con, "SELECT COUNT(*) AS total FROM category_master");
                      $row = mysqli_fetch_array($sql);
                      echo $row['total'];
                    ?>
                  categories to organize your products.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-span-12 xl:col-span-4">
            <a href="active-users.php">
              <div class="card hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <div class="card-header !pb-0 !border-b-0">
                  <h5>Total Active Users</h5>
                </div>
                <div class="card-body">
                  <div class="flex items-center justify-between gap-3 flex-wrap">
                    <h3 class="font-light flex items-center mb-0">
                      <i class="feather icon-users text-success-500 text-[30px] mr-1.5"></i>
                      <?php
                      include('connect.php');
                      $sql = mysqli_query($con, "SELECT COUNT(*) AS total FROM user_master WHERE status=0");
                      $row = mysqli_fetch_array($sql);
                      echo $row['total'];
                      ?>
                    </h3>
                    <p class="mb-0 text-green-600 font-medium">from last month</p>
                  </div>
                  <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                    <div class="bg-success-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
                      style="width: 80%"></div>
                  </div>
                  <p class="text-sm text-gray-500 mt-2">You have
                      <?php
                      include('connect.php');
                      $sql = mysqli_query($con, "SELECT COUNT(*) AS total FROM user_master WHERE status=0");
                      $row = mysqli_fetch_array($sql);
                      echo $row['total'];
                      ?>  
                  active users registered on your platform.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card user-list">
              <div class="card-header">
                <h5>Rating</h5>
              </div>
              <div class="card-body">
                <div class="flex items-center justify-between gap-1 mb-5">
                  <h2 class="font-light flex items-center m-0">
                    4.7
                    <i class="fas fa-star text-[10px] ml-2.5 text-warning-500"></i>
                  </h2>
                  <h6 class="flex items-center m-0">
                    0.4
                    <i class="fas fa-caret-up text-success text-[22px] ml-2.5"></i>
                  </h6>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    5
                  </h6>
                  <h6>384</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3 dark:bg-themedark-bodybg">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 70%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    4
                  </h6>
                  <h6>145</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3 dark:bg-themedark-bodybg">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 35%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    3
                  </h6>
                  <h6>24</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3 dark:bg-themedark-bodybg">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 25%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    2
                  </h6>
                  <h6>1</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3 dark:bg-themedark-bodybg">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 10%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 xl:col-span-8 md:col-span-6">
            <div class="card table-card">
              <div class="card-header">
                <h5>Recent Users</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tbody>
                      <?php
                        include("connect.php");
						            $q = mysqli_query($con, "SELECT * FROM user_master WHERE status = 0 LIMIT 5");
                        while($row = mysqli_fetch_array($q)) {
                        ?>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../../user/pages/uimages/<?php echo $row['photo'];?>" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1"><?php echo $row['uname'] ?></h6>
                          <p class="m-0"><?php echo $row['email'] ?></p>
                        </td>
                        <td>
                          <a href="active-users.php" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Learn More!.</a>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Main Content ] end -->
     <?php
     include('footer.php');
     ?>