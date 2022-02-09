

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
