<?php
include $root.'/components/functions/addMemberFunction.php';
include $root.'/components/functions/settingsFunction.php';

?>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">

      <div class="add-member">
        <h2>Add New Member</h2>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name" >

            <div class="row">
              <div class="col-md-5">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control">
                  <option value="" selected>Choose Gender...</option>

                  <?php foreach($genders as $gender): ?>
                  <option value="<?= $gender->name ?>"><?= $gender->name ?></option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-5 -->


              <div class="col-md-7">
                <label for="dob">Birthday</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="18/12/1995" >
              </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->


            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="01700000000" >
            
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="isHidePhone" name="is_hide_phone">
              <span class="form-check-label" for="isHidePhone">
                Hidden Phone Number
              </span>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="name">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="someone@mail.com" >
              </div> <!-- /.col-md-6 -->

              <div class="col-md-6">
                <label for="name">Facebook Account</label>
                <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook Account" >
              </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->

            
            
              
            <label for="blood">Blood Group</label>
            <select id="blood" name="blood" class="form-control">
              <option value="" selected>Choose Your Blood...</option>

              <?php foreach($blood_groups as $blood_group):?>
              <option value="<?= $blood_group->name ?>"><?= $blood_group->name ?></option>
              <?php endforeach;?>

            </select>
            
            <div class="row">
              <div class="col-md-8">
                <label for="presentAddress">Present Address</label>
                <input type="text" class="form-control" id="presentAddress" name="present_address" placeholder="Address Line" >
              </div> <!-- /.col-md-8 -->

              <div class="col-md-4">
                <label for="city">City</label>
                <select id="city" name="city" class="form-control">
                  <option value="" selected>Choose your City...</option>

                  <?php foreach($cities as $city):?>
                  <option value="<?= $city->name ?>"><?= $city->name ?></option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
            

            

            <label for="parmanentAddress">Parmanent Address</label>
            <input type="text" class="form-control" id="parmanentAddress" name="parmanent_address" placeholder="Address Line">
            
            <div class="row">
              <div class="col-md-4">
                <label for="batch">Batch</label>
                <select id="batch" name="batch" class="form-control">
                  <option value="" selected>Choose a Batch...</option>

                  <?php foreach($batches as $batch):?>
                  <option value="<?= $batch->name ?>"><?= $batch->name ?></option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-4 -->

              <div class="col-md-8">
                <label for="memberPosition">Member Position</label>
                <select id="memberPosition" name="member_rule" class="form-control">
                  <option value="" selected>Choose your Position...</option>
                  
                  <?php foreach($member_positions as $member_position):?>
                  <option value="<?= $member_position->name ?>"><?= $member_position->name ?></option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->

            <!-- <div class="mt-3">
              <h4>Occupations:</h4>
              <span>1.</span>
              <span>Student of</span>
              <span>HSC</span>
              <span>at Ataikula Saradangi Alim Madrasah</span>
              <span class="text-danger">Delete</span>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label for="occupation1name">Occupation</label>
                <select id="occupation1name" name="occupation1name" class="form-control">
                  <option selected>Choose a Occupation...</option>
                  <option value="Student">Student</option>
                  <option value="Teacher">Teacher</option>
                  <option value="Job Holder">Job Holder</option>
                  <option value="Business">Business</option>
                  <option value="Housewife">Housewife</option>
                  <option value="Doctor">Doctor</option>
                  <option value="Driver">Driver</option>
                </select>
              </div> -->
              <!-- /.col-md-4 -->

              <!-- <div class="col-md-8">
                <label for="occupation1company">Company Name</label>
                <input type="text" class="form-control" id="occupation1company" name="occupation1company" placeholder="Company Name" >
              </div> -->
              <!-- /.col-md-8 -->
              
            <!-- </div> -->
            <!-- /.row -->
            
            
            

            <!-- <label for="occupation1position">Your Position</label>
            <input type="text" class="form-control" id="occupation1position" name="occupation1position" placeholder="Your Position" >

            <div class="row">
              <div class="col-6">
                <label for="occ1start">Start Date</label>
                <input type="date" class="form-control" id="occ1start" name="occ1start" placeholder="18/12/1995" >
              </div>

              <div class="col-6">
                <label for="occ1end">End Date</label>
                <input type="date" class="form-control" id="occ1end" name="occ1end" placeholder="18/12/1995" >
              </div>
            </div>


            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="occ1stillwork" name="occ1stillwork">
              <span class="form-check-label" for="occ1stillwork">
                Still Work Here
              </span>
            </div>

            <button class="btn btn-primary my-2">+</button>
            <br> -->

            <label for="about">Enter Yourself</label>
            <textarea class="form-control" name="about" id="about" cols="30" rows="5">Hello World</textarea>
            

            <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="avater" name="avater">
              <label class="custom-file-label" for="avater">Upload Profile Picture</label>

            </div>

            <button type="submit" class="btn btn-success mt-2">Add Member</button>
          
          </div> <!-- /.form-group -->
        </form>
      </div> <!-- /.add-member -->

    </div> <!-- /.col-md-8 /.offset-2 -->
  </div> <!-- /.row -->
</div> <!-- /.container -->
