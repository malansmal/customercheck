
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
