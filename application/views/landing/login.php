
<!--start main-->
<div class="container-fluid">
  <div class="row text-center mt-4">

    <h1 class="fw-bolder">Register or Login</h1>


  </div>
  <div class="row">
    <div class="col-md-6">
      <h3 class="fw-bold  blue_color custom-space">Join today and start avoiding bad experiences.</h3>
      <div class="custom-space">
        <p>Gain immediate access to our powerful Search Tool that can access the report database 24/7.</p>
        <p class="mt-3">Protect your business from customers, in your area, who have been reported for:</p>
        <ul>
          <li>Money Disputes</li>
          <li>Contract Disputes</li>
          <li>Small Claims Court Actions</li>
          <li> Unreasonable Expectations</li>
          <li>Waisted My Time</li>
          <li>Left an Unfair Review</li>
          <li>Great Customer</li>
        </ul>
        <p>It only takes seconds to search our database when a customer contacts you.</p>
        <h6 class="fw-bolder">Your customers can review you and now you can review them safely and anonymously.</h6>
      </div>

    </div>
    <div class="col-md-6 ">
      <div class="col-md-10 card">
        <div class="row text-center justify-content-center">
          <h3 class="fw-bold  blue_color mt-2">Sign Up Now!</h3>
          <div class="col-md-4">
               <a href="<?php echo base_url();?>index.php/Auth/register">
            <button type="button" class="btn btn-success fw-bold">Register Here</button>
               </a>
          </div>



        </div>
        <hr class="hr_dooted_line mt-4" >
        <div class="row text-center justify-content-center">
          <h3 class="fw-bold  blue_color mt-2">Login</h3>
        </div>
        <form action="#" method="POST">
        <div class="row ms-2 me-2 mt-4">

        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo $this->session->flashdata('error');?>
<?php echo $this->session->flashdata('success');?>
          <div class="mb-3">
            <label for="name" class="form-label ">Username or Email Address</label>
            <input type="text" class="form-control" name="email" id="name" >

          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label ">Password</label>
            <input type="password" name="password" class="form-control" id="pwd" >

          </div>
          <div class="mb-3 form-check ms-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          <div class="col-md-2 mt-2">
          <button type="submit" name="submit" class="btn btn-success fw-bold">Login</button>
          </div>
          </form>
          <div class="ms-3 mt-2">
          <ul>
            <a class="anchorstyle" href="<?php echo base_url();?>index.php/Auth/forgot_password">
            <li class="text-success">Lost your password?</li>
              </a>
          </ul>
            </div>


        </div>

      </div>

    </div>


  </div>

</div>
<br>
<!--end main-->

<!--footer-->
