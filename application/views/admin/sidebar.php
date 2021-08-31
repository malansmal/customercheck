  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hassan</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
   
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         <li><a href="<?php echo base_url();?>index.php/Admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo base_url();?>index.php/Admin/users"><i class="fa fa-edit"></i> <span>User details</span></a></li>
       
        
      
          </ul>
        </li>
   
   
 

       
 <li><a href="<?php echo base_url();?>index.php/Admin/group"><i class="fa fa-edit"></i> <span>Group details</span></a></li>
 <li><a href="<?php echo base_url();?>index.php/Admin/capital"><i class="fa fa-edit"></i> <span>Capital details</span></a></li>
 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">