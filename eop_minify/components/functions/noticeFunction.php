<?php
// Add Notice
if(isset($_POST['subject']) && isset($_POST['content'])) {
  $subject  = $_POST['subject'];
  $content  = $_POST['content'];

  // Insert Notice data
  $statement = $con->prepare('
    insert into notices
      (subject, content)
      values(:subject, :content)
  ');
  $statement->execute([
    ':subject'  => $subject,
    ':content'  => $content
  ]);

  echo '<script>alert("1 Notice has been added.")</script>';
  echo '<script>document.location="'.$url.'?goto=notices"</script>';

}


// All Notices
$statement = $con->prepare('
  select * from notices order by date desc
');
$statement->execute();
$notices = $statement->fetchAll(PDO::FETCH_OBJ);


// Single Notice
if(isset($_GET) && $_GET['goto'] && $_GET['id']) {
  $notice_id = $_GET['id'];

  $statement = $con->prepare('
    select * from notices
      where id = :id
  ');
  $statement->execute([':id' => $notice_id]);
  $single_notice = $statement->fetchAll(PDO::FETCH_OBJ);
  
}


?>