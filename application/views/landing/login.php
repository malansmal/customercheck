<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/style.css">
  <script src="https://kit.fontawesome.com/81f686e84d.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>


</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg1">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>assets/landing/images/logo.png" alt="logo"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about_us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="how_its_works.html">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="anchorstyle" href="<?php echo base_url();?>index.php/Auth/login">
                    <button type="button" class="btn btn-success fw-bold">Login</button>
                        </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
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
            <a class="anchorstyle" href="lost_password.html">
            <li class="text-success">Lost your password?</li>
              </a>
          </ul>
            </div>


        </div>

      </div>

    </div>


  </div>

</div>
<!--end main-->

<!--footer-->
<div class="bg1">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 col-6">
        <div class="row mt-4">
          <div class="col-md-2 ps-0 pe-0 col-3">
            <img src="<?php echo base_url() ?>assets/landing/images/logo2.png" alt="logo" width="100%">

          </div>
          <div class="col-md-2 text-white mt-3 ps-0 pe-0 col-3">
            <p>Connect</p>

          </div>
          <div class="col-md-1 mt-3   text-white col-2">
            <i class="fa fa-facebook  fa-lg" aria-hidden="true"></i>

          </div>
          <div class="col-md-1 mt-3   text-white col-2">
            <i class="fa fa-linkedin  fa-lg" aria-hidden="true"></i>

          </div>

        </div>

      </div>
      <div class="col-md-6 col-1"></div>
      <div class="col-md-2 mt-4 col-5">
          <a href="membership.html">
        <button type="button" class="btn btn-success fw-bold  ">Join Now</button>
              </a>
      </div>

    </div>
    <div class="row text-center text-white">
      <p class=" font-size-custom">© Customer Check 2021. Site by<b> Farmboy. Privacy Policy. Terms of Service.</b></p>

    </div>


  </div>

</div>

</body>

</html>