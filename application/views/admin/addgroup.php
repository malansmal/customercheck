<section class="content-header">
      <h1>
        Add Group
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Add Group</li>
      </ol>
    </section>
    <section class="content">
<div class="row">
        <!-- left column -->
        <div class="offset-md-3 col-md-6 ">
<div class="box box-primary">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo $this->session->flashdata('error');?>
<?php echo $this->session->flashdata('success');?>
            <form action="" method="POST" role="form">
              <div class="box-body">
            
           
             
              <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
</div></section>