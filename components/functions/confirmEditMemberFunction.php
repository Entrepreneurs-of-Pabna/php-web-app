<?php

if($_GET['action']=='update' && isset($_GET['id'])) { 
  $ids = $_GET['id'];

  // Query The Member in Database
  $statement = $con->prepare('
  select * from edit_members where id = :id
  ');

  $statement->execute([ ':id' => $ids ]);
  $member = $statement->fetchAll(PDO::FETCH_OBJ);

}
// Store inserted Data
if(
  isset($_POST['name']) &&
  isset($_POST['phone']) &&
  isset($_POST['present_address'])
  ) {
    $member_id      = $_POST['member_id'];
    $name           = $_POST['name'];
    $gender         = $_POST['gender'];
    $phone          = $_POST['phone'];
    $is_hide_phone  = $_POST['is_hide_phone'];
    $email          = $_POST['email'];
    $facebook       = $_POST['fb'];
    $dob            = $_POST['dob'];
    $blood          = $_POST['blood'];
    $present_add    = $_POST['present_address'];
    $city           = $_POST['city'];
    $parmanent_add  = $_POST['parmanent_address'];
    $batch          = $_POST['batch'];
    $member_rule    = $_POST['member_rule'];
    $about          = $_POST['about'];


    if($_POST['avater'] && !empty($_POST['avater']) ) {
      $avater       = $_POST['avater'];
      // Move Avater File
      rename($root.'/tmp/'.$avater, $root.'/images/'.$avater);
    } else $avater  = '';

    // $is_approve     = $_POST['is_approve'];
    // $occupation     = array();


    //Update Form Data Field
      $statement = $con->prepare('
      update members
        set name            = :name,
          member_rule       = :member_rule,
          gender            = :gender,
          phone             = :phone,
          is_hide_phone     = :is_hide_phone,
          email             = :email,
          facebook          = :facebook,
          date_of_birth     = :date_of_birth,
          blood_group       = :blood_group,
          present_address   = :present_address,
          parmanent_address = :parmanent_address,
          city              = :city,
          batch             = :batch,
          about             = :about,
          avater            = :avater
        where id = :member_id
      ');

      $statement->execute([
        ':name'             => $name,
        ':member_rule'      => $member_rule,
        ':gender'           => $gender,
        ':phone'            => $phone,
        ':is_hide_phone'    => $is_hide_phone,
        ':email'            => $email,
        ':facebook'         => $facebook,
        ':date_of_birth'    => $dob,
        ':blood_group'      => $blood,
        ':present_address'  => $present_add,
        ':parmanent_address'=> $parmanent_add,
        ':city'             => $city,
        ':batch'            => $batch,
        ':about'            => $about,
        // ':is_approve'       => $is_approve,
        ':member_id'        => $member_id,
        ':avater'           => $avater,
        // ':updated_by'       => $updated_by
      ]);


      echo '<script>alert("'.$name.'\'s information has been Changed Successfully.")</script>';
      echo '<script>document.location="'.$url.'?action=delete_update_req&id='.$member[0] ->id.'"</script>';
}  


?>