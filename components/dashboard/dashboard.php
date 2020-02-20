<?php 
include $root.'/components/functions/dashboardFunction.php';

?>
<div class="container">
  <h2>Dashboard</h2>
  <div class="row">
    <div class="col-md-6 col-lg-4">
      <div class="dash-card" onclick="window.location='<?=$url?>/?goto=allMembers'">
        <h2>All Members</h2>
        <h1><?= $all_member_count ?></h1>
      </div>
    </div> 

    <div class="col-md-6 col-lg-4">
      <div class="dash-card" onclick="window.location='<?=$url?>/?goto=notices'">
        <h2>Notices</h2>
        <h1><?= $notice_count ?></h1>
      </div>
    </div>  
    
    <div class="col-md-6 col-lg-4">
      <div class="dash-card" onclick="window.location='<?=$url?>/?goto=newRequest'">
        <h2>New Request</h2>
        <h1><?= $new_member_count ?></h1>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="dash-card" onclick="window.location='<?=$url?>/?goto=updateRequest'">
        <h2>Update Request</h2>
        <h1><?= $edit_member_count ?></h1>
      </div>
    </div>
    
  </div> <!-- /.row -->
  
</div> <!-- /.container-fluid -->