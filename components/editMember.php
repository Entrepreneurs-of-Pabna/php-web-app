<?php
include $root.'/components/functions/editMemberFunction.php';
include $root.'/components/functions/settingsFunction.php';

?>
<div class="container">
<?php
if(!sizeof($member)){
  echo '<script>alert("Please Provide a Valid Member ID.")</script>';
}

if($_GET['action']=='edit' && isset($_GET['id']) && sizeof($member)) { ?>
  <div class="row">
    <div class="col-md-8 offset-md-2">

      <div class="edit-member">
        <h2>Update Member</h2>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="member_id" value="<?= $member[0]->id ?>">
          <input type="hidden" name="avater" value="<?= $member[0]->avater ?>">
          <div class="form-group">

            <div class="row">
              <div class="col-md-5">
                <img class="rounded container-fluid" src="<?= $url.'/images/'.$member[0]->avater?>" alt="<?= $member[0]->name ?>">
              </div>
              <div class="col-md-7">
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="avater" name="f_avater">
                  <label class="custom-file-label" for="avater">Upload Profile Picture</label>

                </div>

                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name" value="<?= $member[0]->name ?>">
              </div>
            </div> <!-- /.row -->

          
            <div class="row">
              <div class="col-md-5">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control">
                  <option value="" <?php if(!$member[0]->gender) echo 'selected'; else ''; ?> 
                  >Choose Your Gender...</option>

                  <?php foreach($genders as $gender): ?>
                  <option 
                    value="<?= $gender->name ?>"
                    <?php
                    if($member[0]->gender == $gender->name)
                    echo 'selected'; ?>
                    ><?= $gender->name ?>
                  </option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-5 -->

              <div class="col-md-7">
                <label for="dob">Birthday</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="18/12/1995" value="<?= $member[0]->date_of_birth ?>">
              </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->


            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="01700000000" value="<?= $member[0]->phone ?>" >
            
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="isHidePhone" name="is_hide_phone" <?php if($member[0]->is_hide_phone=='on') echo 'checked="checked"'; ?>>
              <span class="form-check-label" for="isHidePhone">
                Hidden Phone Number
              </span>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="name">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="someone@mail.com" value="<?= $member[0]->email ?>" >
              </div> <!-- /.col-md-6 -->

              <div class="col-md-6">
                <label for="name">Facebook Account</label>
                <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook Account" value="<?= $member[0]->facebook ?>" >
              </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->

            
            
              
            <label for="blood">Blood Group</label>
            <select id="blood" name="blood" class="form-control">
              <option <?php if(!$member[0]->blood_group) echo 'selected'; ?> >Choose Your Blood</option>

              <?php foreach($blood_groups as $blood_group): ?>
              <option 
                value="<?= $blood_group->name ?>"
                <?php if($member[0]->blood_group == $blood_group->name) echo 'selected'; ?>
                ><?= $blood_group->name ?>
              </option>
              <?php endforeach;?>

            </select>
            
            <div class="row">
              <div class="col-md-8">
                <label for="presentAddress">Present Address</label>
                <input type="text" class="form-control" id="presentAddress" name="present_address" placeholder="Address Line" value="<?= $member[0]->present_address ?>" >
              </div> <!-- /.col-md-8 -->

              <div class="col-md-4">
                <label for="city">City</label>
                <select id="city" name="city" class="form-control">
                  <option value="" <?php if(!$member[0]->city) echo 'selected'; ?> >Choose Your City</option>

                  <?php foreach($cities as $city): ?>
                  <option 
                    value="<?= $city->name ?>"
                    <?php if($member[0]->city == $city->name) echo 'selected'; ?>
                    ><?= $city->name ?>
                  </option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
            

            

            <label for="parmanentAddress">Parmanent Address</label>
            <input type="text" class="form-control" id="parmanentAddress" name="parmanent_address" placeholder="Address Line" value="<?= $member[0]->parmanent_address ?>">
            
            <div class="row">
              <div class="col-md-4">
                <label for="batch">Batch</label>
                <select id="batch" name="batch" class="form-control">
                  <option value="" <?php if(!$member[0]->batch) echo 'selected'; ?> >Choose Your Batch</option>

                  <?php foreach($batches as $batch): ?>
                  <option 
                    value="<?= $batch->name ?>"
                    <?php if($member[0]->batch == $batch->name) echo 'selected'; ?>
                    ><?= $batch->name ?>
                  </option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-4 -->

              <div class="col-md-8">
                <label for="memberPosition">Member Position</label>
                <select id="memberPosition" name="member_rule" class="form-control">
                  <option value="" <?php if(!$member[0]->member_rule) echo 'selected'; ?> >Choose Member Position</option>

                  <?php foreach($member_positions as $member_position): ?>
                  <option 
                    value="<?= $member_position->name ?>"
                    <?php if($member[0]->member_rule == $member_position->name) echo 'selected'; ?>
                    ><?= $member_position->name ?>
                  </option>
                  <?php endforeach;?>

                </select>
              </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->

            <!-- Todo: Add Occupation -->

            <label for="about">Enter Yourself</label>
            <textarea class="form-control" name="about" id="about" cols="30" rows="5"><?= $member[0]->about ?></textarea>
            <button type="submit" class="btn btn-success mt-2">Update Member</button>

            <?php if($auth): ?>
            <a class="btn btn-danger mt-2" href="<?=$url?>?action=delete&id=<?= $member[0] ->id ?>">Delete Member</a>
            <?php endif;?>

        </div>
        </form>
      </div> <!-- /.edit-member -->

    </div> <!-- /.col-md-8 /.offset-2 -->
  </div> <!-- /.row -->
  <?php } else { ?>
    <div class="card login-card" style="width: 18rem;">
    <div class="card-body">
      <h4 class="card-title text-center">Update Member</h4>
      <form action="" method="get">
        <input type="hidden" name="action" value="edit">
        <input type="text" class="form-control mb-2" id="id" name="id" placeholder="member ID" autocomplete="off">
        <button type="submit" class="btn btn-success form-control" >Go</button>
      </form>
      
    </div>
  </div> <!-- /.card -->
  <?php }?>
</div> <!-- /.container -->
