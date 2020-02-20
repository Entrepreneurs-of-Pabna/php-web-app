<?php
if($_GET['action']=='edit' && isset($_GET['id'])) { 
  $id = $_GET['id'];
  
  // Query The Member in Database
  $statement = $con->prepare('
  select * from members where id = :id
  ');

  $statement->execute([ ':id' => $id ]);
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

    // Upload Profile Picture Functions if admin change
    if(isset($_FILES['avater']) && !empty($_FILES['avater'])) {
      $upload_dir   = $root."/tmp/";
      $filetmp      = $_FILES['avater']['tmp_name'];
      $filename     = $_FILES['avater']['name'];
      $ext          = pathinfo($filename, PATHINFO_EXTENSION);
      $avater       = $member_id.'.'.$ext;
      move_uploaded_file($filetmp, $upload_dir.$avater);

    } 
    else if(isset($_POST['avater']) && !empty($_POST['avater']) && empty($_FILES['avater']) ) {
      $ext = pathinfo($member[0]->avater, PATHINFO_EXTENSION);
      copy($root.'/images/'.$member[0]->avater, $root.'/tmp/'.$member[0]->id.'.'.$ext);
      $avater  = $member[0]->id.'.'.$ext;

    }  else $avater  = $member[0]->avater;

    // $occupation     = array();

    

    //insert Form Data Field
    $statement = $con->prepare(
      'insert into edit_members(
        member_id,
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
        avater )

      values(
        :member_id,
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
        :avater )
      ');

    
      $statement->execute([
        ':member_id'        => $member_id,
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
        ':avater'           => $avater,
        // ':updated_by'       => $updated_by
      ]);
    


      echo '<script>alert("'. $name.'\'s Information has been Changed. Please Wait for Review")</script>';
}


?>