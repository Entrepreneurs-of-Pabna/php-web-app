<?php

if($_GET['action']=='confirm' && isset($_GET['id'])) { 
  $id = $_GET['id'];

  // Query The Member in Database
  $statement = $con->prepare('
  select * from new_members where id = :id
  ');
  $statement->execute([ ':id' => $id ]);
  $member = $statement->fetchAll(PDO::FETCH_OBJ);
  
  
  $statement1 = $con->prepare('select max(id)+1 as max_id from members');
  $statement1->execute();
  $max_id = $statement1->fetchAll(PDO::FETCH_OBJ);

}
// Store inserted Data
if(
  isset($_POST['name']) &&
  isset($_POST['phone']) &&
  isset($_POST['present_address'])
  ) {
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
    $is_approve     = $_POST['is_approve'];
    // $occupation     = array();

    if(!empty($_POST['avater']) ) {
      $avater       = $_POST['avater'];
      $ext          = pathinfo($avater, PATHINFO_EXTENSION);
      $newfilename  = $max_id[0]->max_id.'.'.$ext;
      // Move Avater File
      rename($root.'/tmp/'.$avater, $root.'/images/'.$newfilename);
      $avater       = $newfilename;
    } else $avater  = '';


    //insert Form Data Field
    $statement = $con->prepare(
      'insert into members(
        name,
        member_rule,
        gender,
        phone,
        is_hide_phone,
        email,
        facebook,
        date_of_birth,
        blood_group,
        present_address,
        parmanent_address,
        city,
        batch,
        about,
        is_approve,
        avater )

      values(
        :name,
        :member_rule,
        :gender,
        :phone,
        :is_hide_phone,
        :email,
        :facebook,
        :date_of_birth,
        :blood_group,
        :present_address,
        :parmanent_address,
        :city,
        :batch,
        :about,
        :is_approve,
        :avater )
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
        ':is_approve'       => $is_approve,
        ':avater'           => $avater,
        // ':updated_by'       => $updated_by
      ]);
    
      

      echo '<script>alert("Member ( '. $name .' ) is now Public.")</script>';
      echo '<script>document.location="'.$url.'?action=delete_req&id='.$member[0] ->id.'"</script>';
}


?>