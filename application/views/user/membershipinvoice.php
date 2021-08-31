<!DOCTYPE html>
<html lang="en">
<head>
  <title>Membership</title>
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
<div class="container mt-5 custom_height table-responsive">
  <h1>Membership Invoice</h1>
  <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">Invoice No#</th>
      <th scope="col">Invoice Date</th>
      <th scope="col">Due Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>22-01-2021</td>
      <td>22-01-2022</td>
      <td>R 89</td>
      <td>Paid</td>
      <th><button type="button" class="btn btn-success custom-button fw-bold">View</button></th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>22-01-2021</td>
      <td>22-01-2022</td>
      <td>R 89</td>
      <td>Paid</td>
      <th><button type="button" class="btn btn-success custom-button fw-bold">View</button></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>22-01-2021</td>
      <td>22-01-2022</td>
      <td>R 89</td>
      <td>Paid</td>
      <th><button type="button" class="btn btn-success custom-button fw-bold">View</button></th>
    </tr> -->
    </tbody>

  </table>
  <div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li> -->
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
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