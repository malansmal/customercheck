<!DOCTYPE html>
<html lang="en">
<head>
  <title>customers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/style.css">
  <script src="https://kit.fontawesome.com/81f686e84d.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>assets/landing/js/j1.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/js/j2.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/js/j3.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/css1.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/css2.css">




</head>
<body>

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


<div class="container-fluid">
  <div class="row">
    <div class="col-md-6  mt-5">
      <h1 class="fw-bold custom-space">Customers</h1>

    </div>


  </div>

</div>
<div class="container">
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>Secondary Number</th>
      <th>Address</th>
      <th>DOB</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php 

foreach($data as $re){

?>
    <tr>
      <td><?php echo $re->name ?></td>
      <td><?php echo $re->surname ?></td>
      <td><?php echo $re->customertel ?></td>
      <td><?php echo $re->customertel2 ?></td>
      <td><?php echo $re->address ?></td>
      <td><?php echo $re->dob ?></td>
      <td>
      <form action="mul_report" method="POST"> 
      
      <input type="hidden" name="id" value="<?php echo $re->id ?>">
      <button type="submit" name="submit">View</button>
      
      
      
      
      </form></td>

    </tr>
    <?php } ?>
    <!-- <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012/12/02</td>

    </tr>
    <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012/08/06</td>

    </tr>
    <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010/10/14</td>

    </tr>
    <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009/09/15</td>

    </tr> -->


    </tfoot>
  </table>

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
  <script>$(document).ready(function() {
    $('#example').DataTable();
  } );</script>

</html>