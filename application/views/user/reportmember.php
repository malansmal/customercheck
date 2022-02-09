

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6  mt-5">
       <div <p <h3 style="color: red;" > No customer was found for you search please Add a Customer </h3></p></div>
            <h1 class="fw-bold custom-space">Add a Customer</h1>

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
                            <?php 
                            if(isset($data['firstname'])){
                            
                            ?>
                            <input disabled required type="text" name="fname1" placeholder="<?php echo $data['firstname'] ?>" value="<?php echo $data['firstname'] ?>" class="form-control" id="name" aria-describedby="emailHelp">
    <input type="hidden" name="fname" value="<?php echo $data['firstname'] ?>">
    <?php }
    else{ ?>
                              <input required type="text" name="fname" placeholder="Enter First Name"  class="form-control" id="name" aria-describedby="emailHelp">
<?php } ?>  
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 ">
                            <label  class="form-label fw-bold">Last Name*</label>
                            <?php 
                            if(isset($data['lastname'])){
                            
                            ?>
        
                            <input disabled required type="text" name="lname" placeholder="<?php echo $data['lastname'] ?>" value="<?php echo $data['lastname'] ?>" class="form-control" >
                            <input type="hidden" name="lname" value="<?php echo $data['lastname'] ?>">
                            <?php }
    else{ ?>
                            <input required type="text" name="lname" placeholder="Enter Last Name"  class="form-control" >
<?php } ?>  
   
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
                            <input minlength="10"  type="text" name="phone" placeholder="Enter Phone" class="form-control" id="pno" >
                            <div class="col-md-5 ">

<div class="mb-3">
    <label for="pno" class="form-label fw-bold">dob*</label>
    <input  type="date" name="dob"  max="<?php echo date("Y-m-d"); ?>" required  class="form-control" id="pno" >

</div>
</div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 ">
                            <label  class="form-label fw-bold">Secondary Phone Number*</label>

                            <input minlength="10"  type="text" name="phone2" class="form-control" >

                        </div>

                    </div>
                    
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="mb-3  custom-space_9_5">
                            <label  class="form-label fw-bold">Full Address*</label>

                            <input  type="text" name="address" placeholder="Enter Address"   id="ad" class="form-control" >

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

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCDOXSX2fbSRHbszDzW-M7Jf6IqaNuSzQ&libraries=places&callback=auto">
</script>
<script>
function auto(){
    var input=document.getElementById('ad');
    var autocomplete= new google.maps.places.Autocomplete(input);


}</script>