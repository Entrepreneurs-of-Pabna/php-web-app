<?php
  include $root.'/components/functions/settingsFunction.php';
?>





<div class="container">
  <h6 class="display-4">Settings</h6>

  <!-- Gender -->
  <h2>Gender</h2>
  <div class="row">
    <?php foreach($genders as $gender): ?>
      <button class="btn-tag btn-primary pr-5"><?= $gender->name ?></button>
    <?php endforeach;?>

    <form action="" method="post" class="d-flex">
      <input class="btn-tag" type="text" name="add_gender" placeholder="Gender">
      <button class="btn-tag btn-success" type="submit">Add New Gender</button>
    </form>
  </div>
  <div class="gap-50"></div>

  <!-- Blood Group -->
  <h2>Blood Groups</h2>
  <div class="row">
    <?php foreach($blood_groups as $blood_group):?>
      <button class="btn-tag btn-primary pr-5"><?= $blood_group->name ?></button>
    <?php endforeach;?>
    
    <form action="" method="post" class="d-flex">
      <input class="btn-tag" type="text" name="add_blood_group" placeholder="Blood Group">
      <button class="btn-tag btn-success" type="submit">Add New Blood</button>
    </form>
  </div>
  <div class="gap-50"></div>

  <!-- Cities -->
  <h2>Cities</h2>
  <div class="row">
    <?php foreach($cities as $city):?>
      <button class="btn-tag btn-primary pr-5"><?= $city->name ?></button>
    <?php endforeach;?>

    <form action="" method="post" class="d-flex">
      <input class="btn-tag" type="text" name="add_city" placeholder="Cities">
      <button class="btn-tag btn-success" type="submit">Add New Cities</button>
    </form>
  </div>
  <div class="gap-50"></div>

  <!-- Batches -->
  <h2>Batches</h2>
  <div class="row">
    <?php foreach($batches as $batch):?>
      <button class="btn-tag btn-primary pr-5"><?= $batch->name ?></button>
    <?php endforeach;?>

    <form action="" method="post" class="d-flex">
      <input class="btn-tag" type="text" name="add_batch" placeholder="Batches">
      <button class="btn-tag btn-success" type="submit">Add New Batches</button>
    </form>
  </div>
  <div class="gap-50"></div>

  <!-- Member Positions -->
  <h2>Member Positions</h2>
  <div class="row">
    <?php foreach($member_positions as $member_position):?>
      <button class="btn-tag btn-primary pr-5"><?= $member_position->name ?></button>
    <?php endforeach;?>

    <form action="" method="post" class="d-flex">
      <input class="btn-tag" type="text" name="add_member_position" placeholder="Member Positions">
      <button class="btn-tag btn-success" type="submit">Add New Member Positions</button>
    </form>
  </div>
  <div class="gap-50"></div>