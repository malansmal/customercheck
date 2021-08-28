
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-resp  table-bordered table-striped">
            <a href="<?php echo base_url();?>index.php/Admin/addemployee" style="float: right; width: 120px;" class="btn btn-block btn-success">+ Add New</a>
       
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Surname</th>
                  <th>Number</th>
                  <th>Email</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
                <tbody>
               <?php    
               foreach($data as $d){
               
               ?>
                <tr>
                  <td><?php echo $d->id ?></td>
                  <td><?php echo $d->username?>
                  </td>
                  <td><?php echo $d->surname ?></td>
                  <td><?php echo $d->contactnumber ?></td>
                  <td><?php echo $d->email ?></td>
               
                  
                  <td>
                  <!-- <div class="btn-group">
                  <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url();?>index.php/Admin/editemployee?id=<?php echo $d->id ?>">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>index.php/Admin/employee_record?id=<?php echo $d->id ?>">View Details</a></li>
                   
                  </ul>
                </div> -->
                  </td>


                 
                </tr>
               <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

