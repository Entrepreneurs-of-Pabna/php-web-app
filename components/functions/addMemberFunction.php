<?php
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
    // $occupation     = array();

    $statement = $con->prepare(
    'select * from members, new_members
      where members.phone= '.$phone.' or
        new_members.phone = '.$phone.' or
        members.email = '.$email.' or
        new_members.email = '.$email
      );
    $statement->execute();
    $isExist = $statement->fetchAll(PDO::FETCH_OBJ);

    // Upload Profile Picture Functions
    if($_FILES['avater'] && !empty($_FILES['avater'])) {
      $upload_dir   = $root."/tmp/";
      $timestamp    = date_timestamp_get(date_create());
      $filetmp      = $_FILES['avater']['tmp_name'];
      $filename     = $_FILES['avater']['name'];
      $ext          = pathinfo($filename, PATHINFO_EXTENSION);
      $newfilename  = $timestamp.'.'.$ext;
      move_uploaded_file($filetmp, $upload_dir.$newfilename);
    } else $newfilename = '';

    //insert Form Data Field
    $statement = $con->prepare(
      'insert into new_members(
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
        ':avater'           => $newfilename,
        // ':updated_by'       => $updated_by
      ]);

      
      echo '<script>alert("Member ( '.sizeof($isExist). $name .' ) has been Added Successfully. Please Wait for Review.")</script>';
}


?>