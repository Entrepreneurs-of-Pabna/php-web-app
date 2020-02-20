<?php

if(isset($_GET['action']) =='delete_update_req' && isset($_GET['id'])) {
  $id = $_GET['id'];
  
  // Query The Member in Database
  $statement = $con->prepare('
  delete from edit_members where id = :id
  ');
  
  $statement->execute([
    ':id' => $id
    ]);

  echo '<script>window.location="'.$url.'?goto=updateRequest"</script>';
    
  }

?>