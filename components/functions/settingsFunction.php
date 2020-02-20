<?php

// Include this file in
// 1. <root>/components/addMember.php
// 2. <root>/components/confirmAddMember.php
// 3. <root>/components/confirmEditMember.php
// 4. <root>/components/editMember.php




// Insert Gender
if(isset($_POST['add_gender'])) {
  $statement = $con->prepare('
    insert into genders (name) values(:gender)
  ');
  $statement->execute([
    ':gender' => $_POST['add_gender']
  ]);
}
// Get Genders
$statement = $con->prepare('select * from genders');
$statement->execute();
$genders = $statement->fetchAll(PDO::FETCH_OBJ);






// Insert Blood Groups
if(isset($_POST['add_blood_group'])) {
  $statement = $con->prepare('
    insert into blood_groups (name) values(:blood_group)
  ');
  $statement->execute([
    ':blood_group' => $_POST['add_blood_group']
  ]);
}
// Get Blood Groups
$statement = $con->prepare('select * from blood_groups');
$statement->execute();
$blood_groups = $statement->fetchAll(PDO::FETCH_OBJ);






// Insert Cities
if(isset($_POST['add_city'])) {
  $statement = $con->prepare('
    insert into cities (name) values(:city)
  ');
  $statement->execute([
    ':city' => $_POST['add_city']
  ]);
}
// Get Cities
$statement = $con->prepare('select * from cities');
$statement->execute();
$cities = $statement->fetchAll(PDO::FETCH_OBJ);






// Insert Batches
if(isset($_POST['add_batch'])) {
  $statement = $con->prepare('
    insert into batches (name) values(:batch)
  ');
  $statement->execute([
    ':batch' => $_POST['add_batch']
  ]);
}
// Get Batches
$statement = $con->prepare('select * from batches');
$statement->execute();
$batches = $statement->fetchAll(PDO::FETCH_OBJ);



// Insert Member Positions
if(isset($_POST['add_member_position'])) {
  $statement = $con->prepare('
    insert into member_rules (name) values(:member_rule)
  ');
  $statement->execute([
    ':member_rule' => $_POST['add_member_position']
  ]);
}
// Get Member Positions as member_rules
$statement = $con->prepare('select * from member_rules');
$statement->execute();
$member_positions = $statement->fetchAll(PDO::FETCH_OBJ);




?>