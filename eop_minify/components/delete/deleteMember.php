<?php

if(isset($_GET['action']) =='delete' && isset($_GET['id'])) {
  $id = $_GET['id'];
  
  // Query The Member in Database
  $statement = $con->prepare('
  delete from members where id = :id
  ');
  
  $statement->execute([
    ':id' => $id
    ]);

  echo '<script>window.location="'.$url.'?goto=allMembers"</script>';
    
  }
?>