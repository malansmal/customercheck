<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report a Customer</title>
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
        <p style="color: red;" > No Customer was Found for you Search please add Customer </p>
            <h1 class="fw-bold custom-space">Report a Customer</h1>

        </div>
        <div class="col-md-8 bg1 custom-space2 mt-5">
            <h5 class="text-white  blue_color  mt-2 fw-bold">Customer Name</h5>
        </div>

    </div>

</div>
<div class="container-fluid mt-3">
    <form action="insert_customer" method="POST">
        <div class="row">
            <div class="col-md-9">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 ">

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">First Name*</label>
                            <input type="text" name="fname" placeholder="<?php echo $data['firstname'] ?>" value="<?php echo $data['firstname'] ?>" class="form-control" id="name" aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 ">
                            <label  class="form-label fw-bold">Last Name*</label>

                            <input type="text" name="lname" placeholder="<?php echo $data['lastname'] ?>" value="<?php echo $data['lastname'] ?>" class="form-control" >

                        </div>

                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 bg1 custom-space2 mt-5">
                <h5 class="text-white  blue_color  mt-2 fw-bold">Phone Number</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="row mt-3">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 ">

                        <div class="mb-3">
                            <label for="pno" class="form-label fw-bold">Primary Phone Number*</label>
                            <input type="text" name="phone" placeholder="<?php echo $data['phone'] ?>" value="<?php echo $data['phone'] ?>" class="form-control" id="pno" >
                            <div class="col-md-5 ">

<div class="mb-3">
    <label for="pno" class="form-label fw-bold">dob*</label>
    <input type="date" name="dob"  class="form-control" id="pno" >

</div>
</div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 ">
                            <label  class="form-label fw-bold">Secondary Phone Number*</label>

                            <input type="text" name="phone2" class="form-control" >

                        </div>

                    </div>
                    
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="mb-3  custom-space_9_5">
                            <label  class="form-label fw-bold">Full Address*</label>

                            <input type="text" name="address" placeholder="<?php echo $data['address'] ?>" value="<?php echo $data['address'] ?>" class="form-control" >

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 bg1 custom-space2 mt-5">
                <h5 class="text-white  blue_color  mt-2 fw-bold">Content Guidelines</h5>
            </div>
            <div class="col-md-8 custom-space2 p-0">
                <div class=" scroll ">
                    <p>[Last Updated on April 18, 2019.]</p>

                    <p class="fw-bold">General Guidelines</p>
                    <p>customer check allpws registred users, includung therir agents and assigns, to contribute different kinds of content including reviews,photos, videos, tips, and more. playing nice isn't brain surgery, but just in case, we've put together these general guidelines, Please also read the below for specfic types of content that might contribute to the site.</p>
                    <ul>
                        <li><b>Privacy:</b>Don't publicize other meeber's private information. Please dont post close-up photos or videos of other persons without theirs permission, Unless you hace chosen to expose your bussiness information. Customer check will never publicize your information to an other registered member.We allow you to remain anonymous to the other members to protect you from exposing your data to potential competiors
                        </li>
                        <li><b>Intellectual property:</b>Don't swipe content from other sites or users. You're smaret cokkie, so write your own rewiews and take your own photos and videos please!</li>
                        <li><b>Demanding payment:</b>you should not removing ot posting your review as a way to extract payment from a business, regradless of the circumstances.</li>
                    </ul>
                    <p>Copyright © 2018 Customer Check LLC., PO Box 397, Norwalk, IA  50211</p>
                </div>

                <p class="mt-3 fw-bold">I have read and understand the submission Guidelines</p>
                <div class="form-check  mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        <p>I Agree</p>
                    </label>
                </div>
                <div class="col-md-4 ">
                    <button type="submit" name="submit" class="btn btn-success fw-bold custom-button2">Submit</button>
                </div>

            </div>

        </div>

    </form>

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

</html>