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
          <li class=" nav-item"><a href="#"><i class="icon-gears"></i><span class="menu-title">Configuración</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-user-secret"></i><span  class="menu-title">Gestion de usuarios</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Usuarios</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-mobile2"></i><span class="menu-title">Contactos</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Clientes</a></li>
              <li><a href="#" class="menu-item">Proveedores</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-dropbox"></i><span class="menu-title">Productos</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Nuevo producto</a></li>
              <li><a href="#" class="menu-item">Lista de productos</a></li>
              <li><a href="#" class="menu-item">Categorias</a></li>
              <li><a href="#" class="menu-item">Sub categorias</a></li>
              <li><a href="#" class="menu-item">Unidad de medida</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span class="menu-title">Ventas</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Realizar venta</a></li>
              <li><a href="#" class="menu-item">Lista de ventas</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-ios-cart-outline"></i><span class="menu-title">Compras</span></a>
            <ul class="menu-content">
              <li><a href="#" class="menu-item">Realizar compras</a></li>
              <li><a href="#" class="menu-item">Lista de compras</a></li>
            </ul>
          </li>

          <li class=" navigation-header"><span>Informes</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-file-text2"></i><span class="menu-title">Reportes </span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span  class="menu-title">Gráficas</span></a>
          </li>
          <li class=" navigation-header"><span>Soporte</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-database2"></i><span  class="menu-title">Backup</span></a>
          </li>
        </ul>
      </div>

</div>
<!-- / main menu-->