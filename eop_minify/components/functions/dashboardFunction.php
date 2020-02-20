<?php
  // Dashboard
  $statement = $con->prepare('select count(id) as count from members');
  $statement->execute();
  $all_member = $statement->fetchAll(PDO::FETCH_OBJ);
  $all_member_count = $all_member[0]-> count;

  // New Member Request
  $statement = $con->prepare('select count(id) as count from new_members');
  $statement->execute();
  $new_member = $statement->fetchAll(PDO::FETCH_OBJ);
  $new_member_count = $new_member[0]-> count;
  
  // Edit Member Request
  $statement = $con->prepare('select count(id) as count from edit_members');
  $statement->execute();
  $edit_member = $statement->fetchAll(PDO::FETCH_OBJ);
  $edit_member_count = $edit_member[0]-> count;
  
  // Notices
  $statement = $con->prepare('select count(id) as count from notices');
  $statement->execute();
  $notice = $statement->fetchAll(PDO::FETCH_OBJ);
  $notice_count = $notice[0]-> count;


?>