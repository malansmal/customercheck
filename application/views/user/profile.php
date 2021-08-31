<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>
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
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>index.php/User/profile">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/User/mymembership">My Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/User/dashboard">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/User/membershipinvoice">Membership Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="anchorstyle" href="<?php echo base_url();?>index.php/User/logout">
                        <button type="button" class="btn btn-success fw-bold">Logout</button>
                    </a>
                </li>

            </ul>

    </div>
  </div>
</nav>
<!--start main-->
<form action="#" method="POST">
<div class="container-fluid">

  <div class="row  mt-4">
    <div class="col-md-6">
      <h1 class="fw-bolder custom-space">My Profile</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6 bg_light ">
      <h5 class="mt-3">Account Information</h5>
      <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo $this->session->flashdata('error');?>
<?php echo $this->session->flashdata('success');?>
      <div class="mb-3 ">
        <label for="name" class="form-label fw-bold">Name</label>*
        <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $data[0]->name ?>" value="<?php echo $data[0]->name ?>" >
      </div>
      <div class="mb-3 ">
        <label for="name" class="form-label fw-bold">SurName</label>*
        <input type="text" class="form-control" name="surname" id="surname" placeholder="<?php echo $data[0]->surname ?>" value="<?php echo $data[0]->surname ?>" >
      </div>
      <div class="mb-3 ">
        <label for="name" class="form-label fw-bold">Username</label>*
        <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo $data[0]->username ?>" value="<?php echo $data[0]->username ?>">
      </div>
      <div class="mb-3 ">
        <label for="email" class="form-label fw-bold">Email Address</label>*
        <input type="text" class="form-control" id="email"  placeholder="<?php echo $data[0]->email ?>" disabled>
      </div>
      <div class="mb-3 ">
        <label for="lname" class="form-label fw-bold">Telephone No</label>*
        <input type="text" class="form-control" name="contactnumber" id="lname" placeholder="<?php echo $data[0]->contactnumber ?>" value="<?php echo $data[0]->contactnumber ?>">
      </div>
      <div class="mb-3 ">
        <label for="lname" class="form-label fw-bold">Change Password</label>*
        <input type="text" class="form-control" name="password" id="lname" placeholder="" value="<?php echo $data[0]->password ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6 bg_light">
      <div class="mb-3 ">
        <label  class="form-label fw-bold">Part of Group</label>
        <select name="group" class="form-select" aria-label="Default select example">
          <option selected value="<?php echo $data[0]->groupid ?>"><?php echo $data[0]->groupid ?></option>
         <?php 
         foreach($group as $g){
         ?>
          <option value="<?php echo $g->name ?>"><?php echo $g->name ?></option>
         <?php } ?>
        </select>
      </div>
      <div class="row mb-3">
        <div class="col-md-5"></div>
        <div class="col-md-4 ">
          <button type="submit" name="submit" class="btn btn-success fw-bold custom-button2">Save</button>
        </div>
      </div>

    </div>

  </div>

</div>






</div>
</form>

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