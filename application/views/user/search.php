<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
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
<body >

<nav  class="navbar navbar-expand-lg navbar-light bg1">
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
                    <a class="anchorstyle" href="">
                        <button type="button" class="btn btn-success fw-bold">Report</button>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<div class="container-fluid custom_height">
    <div class="row  mt-4">

        <div class="col-md-3 bg_light custom-space custom-width col-12">
            <h5 class="mt-3">Account</h5>

            <a href="<?php echo base_url();?>index.php/User/profile"><h6 class="text-success">My Profile</h6></a>
            <a href="<?php echo base_url();?>index.php/User/dashboard"><h6 class="text-success">Search</h6></a>
           <a href="<?php echo base_url();?>index.php/User/mymembership"><h6 class="text-success">My Membership</h6></a>
           <a href="<?php echo base_url();?>index.php/User/membershipinvoice"><h6 class="text-success">Membership Invoice</h6></a>
           <!-- <a href="<?php echo base_url();?>index.php/User/myreports"><h6 class="text-success">My Reports</h6></a> -->
           <a href="<?php echo base_url();?>index.php/User/logout"><h6 class="text-success">Log Out</h6></a>


        </div>
        <div class="col-md-8 col-12">
            <div class="row">
                <h1 class="fw-bolder">Search</h1>
            </div>
            <form method="POST" action="search">
            <div class="row ps-0 pe-0">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="cname" class="form-label fw-bold">Customer Name</label>
                        <input type="text" name="firstname" class="form-control bg_light" id="cname" placeholder="First Name">

                    </div>
                    <div class="mb-3">
                        <label for="pno" class="form-label fw-bold">Phone Number</label>
                        <input type="text" name="phone" class="form-control bg_light" id="pno" placeholder="(515) 555-0100">

                    </div>

                </div>
                <div class="col-md-6 pstart-0">
                    <div class="mb-3 margin_top_custom4">

                        <input type="text" name="lastname" class="form-control bg_light" placeholder="Last Name">

                    </div>
                    <div class="mb-3 margin_top_custom5">

                        <input type="text" name="secondarynumber" class="form-control bg_light" placeholder="Secondary Number">

                    </div>

                </div>

            </div>


        </div>
         <div class="col-md-3  custom-space custom-width">



        </div>
        <div class="col-md-8">

            <div class="row ps-0 pe-0">

                    <div class="mb-3">
                        <label for="ad" class="form-label fw-bold">Address</label>
                        <input type="text" name="address" class="form-control bg_light" id="ad" >




                </div>


            </div>

            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo $this->session->flashdata('error');?>
<?php echo $this->session->flashdata('success');?>
        </div>


    </div>

</div>

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
            <div class="col-md-2 mt-4 col-4">
                <a href="">
                    <button type="submit" name="submit" class="btn btn-success fw-bold custom-button-font">Search/Report</button>
                </a>
            </div>
            </form>
        </div>
        <div class="row text-center text-white">
            <p class=" font-size-custom">© Customer Check 2021. Site by<b> Farmboy. Privacy Policy. Terms of Service.</b></p>

        </div>


    </div>

</div>

</body>

</html>