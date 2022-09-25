       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('pa/pa'); ?>">
               <div class="sidebar-brand-icon">
                   <img src="<?= base_url('assets/img/logoapp.png'); ?>" class="img-fluid" width="70%">
               </div>
           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link" href="<?= base_url('pa/pa'); ?>">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>
           <!-- ========================================================= -->
           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Menu
           </div>
           <!-- Menu Banding -->
           <li class="nav-item">
               <a class="nav-link" href="<?= base_url('pa/banding/banding'); ?>">
                   <i class="fas fa-fw fa-chart-area"></i>
                   <span>Perkara Banding</span></a>
           </li>

           <!-- ======================================================== -->


           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                   <i class="fas fa-fw fa-cog"></i>
                   <span>Laporan Perkara</span>
               </a>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                   <div class="bg-white py-2 collapse-inner rounded">
                       <h6 class="collapse-header">Pilih Laporan:</h6>
                       <a class="collapse-item" href="buttons.html">Laporan Bulanan</a>
                       <a class="collapse-item" href="cards.html">Laporan Triwulan</a>
                   </div>
               </div>
           </li>
           <!-- ======================================================== -->

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               User
           </div>

           <!-- Nav Item - Charts -->
           <li class="nav-item">
               <a class="nav-link" href="charts.html">
                   <i class="fas fa-fw fa-chart-area"></i>
                   <span>User Profile</span></a>
           </li>

           <!-- Nav Item - Tables -->
           <li class="nav-item">
               <a class="nav-link" href="tables.html">
                   <i class="fas fa-fw fa-table"></i>
                   <span>Logout</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>
       </ul>
       <!-- End of Sidebar -->