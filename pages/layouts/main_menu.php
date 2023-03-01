<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

      <div class="main-menu-header">
        <div class="media">
          <div class="media-left">
            <span class="avatar avatar-sm avatar-online rounded-circle">
              <img src="../app-assets/images/portrait/small/avatar-s-1.png"><i></i>
            </span>
          </div>
          <div class="media-body">
            <h6 class="media-heading"><?php echo $_SESSION["user"]["name_u"].' '.$_SESSION["user"]["last_name"]; ?></h6>
            <p class="notification-text font-small-3 text-muted"><?php echo $_SESSION["user"]["email"]; ?></p>
          </div>
        </div>
      </div>

      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">


          <li class=" nav-item"><a href="welcome.php"><i class="icon-home3"></i><span class="menu-title">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-gears"></i><span class="menu-title">Settings</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-user-secret"></i><span  class="menu-title">Users managment</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Users</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-mobile2"></i><span class="menu-title">Contacts</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Customers</a></li>
              <li><a href="#" class="menu-item">Suppliers</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-dropbox"></i><span class="menu-title">Products</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">New product</a></li>
              <li><a href="#" class="menu-item">List products</a></li>
              <li><a href="../pages/category.php" class="menu-item">Categories</a></li>
              <li><a href="#" class="menu-item">Subcategories</a></li>
              <li><a href="#" class="menu-item">Unit of measurement</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span class="menu-title">Sales</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Make sale</a></li>
              <li><a href="#" class="menu-item">List sales</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-ios-cart-outline"></i><span class="menu-title">Purchases</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Make purchase</a></li>
              <li><a href="#" class="menu-item">List purchases</a></li>
            </ul>
          </li>

          <li class=" navigation-header"><span>Reports</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-file-text2"></i><span class="menu-title">Reports</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span  class="menu-title">Graphics</span></a>
          </li>
          <li class=" navigation-header"><span>Support</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-database2"></i><span  class="menu-title">Backup</span></a>
          </li>
        </ul>
      </div>

</div>
<!-- / main menu-->