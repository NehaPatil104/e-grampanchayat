 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link" style="font-weight:bold; font-size:22px;">
    

      <span class="brand-text font-weight-light">E-Gram | User</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/download.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="admin-profile.php" class="d-block">Welcome : User</a>
  
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           
          <li class="nav-item has-treeview menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               </p>
            </a>
        
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Certificate Category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="obcs/user/login.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Birth Certificate</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="odcs/user/login.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Death Certificate</p>
                </a>
              </li>
             </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="complaint/index.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
           Complaints
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>

         
         
          
        </ul>


       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>