neve<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="asset/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/style.css">
    <script src="https://kit.fontawesome.com/81f686e84d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>
<body >

<nav  class="navbar navbar-expand-lg navbar-light bg1">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url();?>index.php/User/dashboard"><img src="<?php echo base_url() ?>assets/landing/images/logo.png" alt="logo"> </a>
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
<div class="container-fluid ">

    <div class="row mt-4">
        <div class="col-md-7 custom-space">
            <h1 class="fw-bolder "><?php echo $data[0]->name.' '.$data[0]->surname;?></h1>
            <p>Customer id: <?php echo $data[0]->id ?></p>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h5 class="fw-bold">Phone Number</h5>
                    <h6 class="text-secondary"><?php echo $data[0]->customertel?></h6>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold">Address</h5>
                    <h6 class="text-secondary"><?php echo $data[0]->address?>
                    </h6>
                </div>
				<div class="col-md-4">
                    <h5 class="fw-bold">DOB</h5>
                    <h6 class="text-secondary"><?php echo $data[0]->dob?>
                    </h6>
                </div>
				
				
				
                <div class="col-md-5">
                <a target="_blank" href="mailto:info@customercheck.com?subject=Please change or update information for <?php echo $data[0]->name.' '.$data[0]->surname;?>&body=Please update the following information for this customer id:<?php echo $data[0]->id; ?>">
                    <h6><u>Request a correction for <?php echo $data[0]->name.' '.$data[0]->surname;?></u></h6>
                    </a>
                    <!-- <a class="anchorstyle" href="">
                        <button type="button" class="btn btn-success custom-button fw-bold mt-4">Add Report</button>
                    </a> -->
                </div>

            </div>

        </div>

    </div>
    <div class="row mt-5">
        <div class="col-md-4  custom-space">
            <h2 class="fw-bolder blue_color">Reports</h2>


        </div>
        <div class="col-md-6 bg_light div_scroll">
           <?php 
           if($report){
                          foreach($report as $rep){
           
           ?>
           
            <div class="row mt-2">
                <div class="col-md-3">
                    <h5 class="blue_color">Report #<?php echo $rep->id ?></h5>
                    <p class="text-secondary custom_p_size">Report Created
                    <?php echo date("d-m-Y", strtotime($rep->reportdate)); ?></p>


                </div>
                <?php 
                    if($rep->reporttype=="Good Customer"){
                        $color="btn btn-success";
                    }
                    elseif($rep->reporttype=="Insurance Claim" || $rep->reporttype=="Unreasonable Expectation"){
                        $color="btn btn-success";
                    }else{
                        $color="btn btn-warning";
                    }
                
                ?>
                <div class="col-md-3 pe-0 ps-0">
					<button type="button" class="<?php echo $color ?> b-rad"><?php echo $rep->reporttype?></button>
                    <!-- <button type="button" class="btn btn-danger  custom_p_size"><?php echo $rep->reporttype?></button> -->
                    <p class="text-secondary custom_p_size mt-3">Service Date: <?php echo date("d-m-Y", strtotime($rep->servicedate)) ?>
                    <p class=" custom_p_size">Service Provided: <p class="text-secondary custom_p_size mt-3"><?php echo $rep->service ?>                               </P>
					
                    </p>



                </div>
                <?php 
                if($rep->reporttype2){
                    if($rep->reporttype2=="Good Customer"){
                        $color="btn btn-success";
                    }
                    elseif($rep->reporttype2=="Insurance Claim" || $rep->reporttype2=="Unreasonable Expectation"){
                        $color="btn btn-warning";
                    }else{
                        $color="btn btn-danger";
                    }
                ?>
                <div class="col-md-4 ps-0 pe-0">
					<button type="button" class="<?php echo $color ?> b-rad"><?php echo $rep->reporttype2?></button>
                    <!-- <button type="button" class="btn btn-warning  custom_p_size"><?php echo $rep->reporttype2?></button>-->



                </div>
<?php } ?>

            </div>
            <?php
            }}else{
                echo "No Report found";
            }
            ?>
            <!-- <div class="row mt-2">
                <div class="col-md-3">
                    <h5 class="blue_color">Report #537</h5>
                    <p class="text-secondary custom_p_size">Report Created
                        05/15/2018</p>


                </div>
                <div class="col-md-3 pe-0 ps-0">
                    <button type="button" class="btn btn-danger  custom_p_size">Demanded Refund</button>
                    <p class="text-secondary custom_p_size mt-3">Service Date: 04/01/2018</p>
                    <p class="fw-bold custom_p_size">Service Provided<br>
                        Remodeling Painting</p>



                </div>
                <div class="col-md-4 ps-0 pe-0">
                    <button type="button" class="btn btn-warning  custom_p_size">Unreasonable Expectations</button>



                </div>


            </div> -->
            <!-- <div class="row mt-2">
                <div class="col-md-3">
                    <h5 class="blue_color">Report #537</h5>
                    <p class="text-secondary custom_p_size">Report Created
                        05/15/2018</p>


                </div>
                <div class="col-md-3 pe-0 ps-0">
                    <button type="button" class="btn btn-danger  custom_p_size">Demanded Refund</button>
                    <p class="text-secondary custom_p_size mt-3">Service Date: 04/01/2018</p>
                    <p class="fw-bold custom_p_size">Service Provided<br>
                        Remodeling Painting</p>



                </div>
                <div class="col-md-4 ps-0 pe-0">
                    <button type="button" class="btn btn-warning  custom_p_size">Unreasonable Expectations</button>



                </div>


            </div> -->


        </div>

    </div>
    <form action="insert_report" method="POST">
    <div class="row mt-5">
        <div class="col-md-4  custom-space">
        <input type="hidden" name="useremail" value="<?php echo $_SESSION['email'] ?>">
        <input type="hidden" name="customerid" value="<?php echo $data[0]->id ?>">
            <h2 class="fw-bolder blue_color">Add Report</h2>

            <div class="mb-3">
                <label for="date" class="form-label fw-bold">Date of Service</label>
                <input type="date" max="<?php echo date("Y-m-d"); ?>" name="servicedate" class="form-control" id="date" >
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4  custom-space">
          

            <div class="mb-3">
                <label for="date" class="form-label fw-bold">Report Type</label> (Select Max 2 Report Types)<br>
                <!-- <select name="reason" id="" class="form-control"> -->
                <input type="checkbox" class="a" name="reason[]" value="Never Paid">Never Paid<br>
                <input type="checkbox" class="a" name="reason[]" value="Demanded Refund">Demanded Refund<br>
                <input type="checkbox" class="a" name="reason[]" value="Small Claims Action">Small Claims Action<br>
                <input type="checkbox" class="a" name="reason[]" value="Unreasonable Expectation">Unreasonable Expectation<br>
                <input type="checkbox" class="a" name="reason[]" value="Time Waster">Time Waster<br>
                <input type="checkbox" class="a" name="reason[]" value="Gives Falls Reviews">Gives Falls Reviews<br>
                <input type="checkbox" class="a" name="reason[]" value="Property Damage">Property Damage<br>
                <input type="checkbox" class="a" name="reason[]" value="Insurance Claim">Insurance Claim<br>
                <input type="checkbox" class="a" name="reason[]" value="Good Customer">Good Customer<br>
           
                
                
                <!-- </select> -->
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4  custom-space">
           
            <div class="mb-3">
                <label for="date" class="form-label fw-bold">Service Provided</label>
                <input type="text" name="service" class="form-control" id="date" >
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4 custom-space">
            <h6 class="fw-bold">Describe the Incident</h6>
            <p>This description is visible only to the site adminstrators</p>

        </div>

    </div>
    <div class="row">
        <div class="col-md-10 custom-space">
            <textarea name="description" class="form-control"  rows="6"></textarea>
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
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        <p>I Agree</p>
                    </label>
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
            <div class="col-md-2 mt-4 col-4">
                <a href="">
                    <button type="submit" name="submit" class="btn btn-success fw-bold custom-button-font">Report</button>
                </a>
            </div>

        </div>
        
        </form>
        <div class="row text-center text-white">
            <p class=" font-size-custom">© Customer Check 2021.<b> Privacy Policy. Terms of Service.</b></p>

        </div>


    </div>

</div>
<script>
            
            var limit = 2;
$('input.a').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
   }

});
            </script>
</body>
</html>
