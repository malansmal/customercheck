
<!--start main-->
<form method="POST" action="">
<div class="container-fluid custom_height">
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo $this->session->flashdata('error');?>
<?php echo $this->session->flashdata('success');?>
  <div class="row text-center mt-4">
    <h1 class="fw-bolder">Change Password</h1>

  </div>
  <div class="row">
   <div class="col-md-1"></div>
    <div class="col-md-10 card">
    <div class="mb-3 mt-3">
            <label for="name" class="form-label "> New Password</label>
            <input type="password" name="password" class="form-control" id="name" >

    </div>
      <div class="col-md-3 mt-2 mb-3">
          <button type="submit" name="submit" class="btn btn-success fw-bold custom-button">Change Password</button>
          </div>

    </div>
    <div class="row mt-3">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <ul>
            <a class="anchorstyle" href="<?php echo base_url();?>index.php/Auth/login">
            <li class="text-success">Login</li>
              </a>
     </ul>
         <ul>
            <a class="anchorstyle" href="<?php echo base_url();?>index.php/Auth/register">
            <li class="text-success">Register</li>
              </a>
     </ul>

      </div>

      </div>


  </div>
  </form>
</div>
<!--end main-->
<br><br><br><br>
<!--footer-->