

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6  mt-5">
            <h1 class="fw-bold custom-space">Contact Us</h1>




        </div>

    </div>

</div>
<div class="container-fluid">
  <form method="POST" action="sendmail">
        <div class="row">
            <div class="col-md-9">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 ">

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input required type="text" name="fname" class="form-control" id="name" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">First</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input required type="email" name="email" class="form-control" id="email" >
                        </div>




                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 margin_top_custom3">

                            <input required type="text" name="lname" class="form-control"  aria-describedby="emailHelp2">
                            <div id="emailHelp2" class="form-text">Last</div>
                        </div>
                        <div class="mb-3 ">
                            <label for="phoneno" class="form-label fw-bold">Phone Number</label>
                            <input required type="text" name="phone" class="form-control" id="phoneno" >

                        </div>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <label  class="form-label fw-bold">Preferred Method of Contact</label>
                        <select name="option1" class="form-select" aria-label="Default select example">
                          <option value="email" selected>Email</option>

                            <option value="Phone">Phone</option>
                            <option value="No Preference">No Preference</option>
                        </select>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt-3">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Message</label>
                            <textarea required name="message" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success fw-bold custom-button2 ">Submit</button>
                    </div>

                </div>

            </div>

        </div>

    </form>

</div>
<br>