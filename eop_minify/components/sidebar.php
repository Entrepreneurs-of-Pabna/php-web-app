<?php
// Sidebar Members query
$statement = $con->prepare('select * from members where is_approve = 1');
$statement->execute();
$members = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<div class="sidebar mb-5 scrollbar">
  <ul>
    <?php foreach($members as $member):?>
    <li onclick="window.location='<?=$url?>/?member_id=<?= $member->id ?>'">
      <img src="<?= $url.'/images/'.$member->avater?>" alt="<?= $member->name ?>">
      <!-- <img src="<? // $root?>/images/1.jpg" alt="a"> -->
      <div class="name">
        <h4><?= $member->name ?></h4>
        <p><?= $member->member_rule ?></p>
      </div>
    </li>
    <?php endforeach;?> 
  </ul>
</div>
<div class="contentbar area" data-simplebar>