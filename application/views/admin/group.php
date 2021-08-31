
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Groups Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <a href="<?php echo base_url();?>index.php/Admin/addgroup" style="float: right; width: 120px;" class="btn btn-block btn-success">+ Add New</a>
                
              <thead>
                <tr>
                  <th>ID</th>
                 
                  <th>Name</th>
                  
                  
                 
                  <th>Action</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
               <?php    
               foreach($data as $d){
               
               ?>
                <tr>
                  <td><?php echo $d->id ?></td>
                  
                  <td><?php echo $d->name?></td>
                 
                  
                  <td> 
                     <div class="btn-group">
                  <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                    <form action="" method="POST">
                 
                    <input type="hidden" name="groupid" value="<?php echo $d->id ?>">
                    <button style="color: red;" type="submit" name="submit">Remove</button>
                    </form>
                    </li>
                   
                  </ul>
                      </div>
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

