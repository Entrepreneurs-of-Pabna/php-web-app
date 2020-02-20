<?php
  // Query The Member in Database
  $statement = $con->prepare('select * from members');
  $statement->execute();
  $members = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container-fluid">
  <h1>All Members</h1>
  <div class="table-responsive-lg">
    <table class="table table-hover table-bordered table-striped">
      <tr>
        <th>ID</th>
        <th>Avater</th>
        <th>Name</th>
        <th>Batch</th>
        <th>Position</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Facebook</th>
        <th>Blood</th>
      </tr>
      <?php foreach($members as $member):?>
      <tr class='cursor-pointer' onclick="window.location='<?=$url?>?action=edit&id=<?=$member->id?>'">
        <td><?= $member->id ?></td>
        <td><img src="<?= $url.'/images/'.$member->avater?>" alt="<?= $member->name ?>"></td>
        <td><?= $member->name ?></td>
        <td><?= $member->batch ?></td>
        <td><?= $member->member_rule ?></td>
        <td><?= $member->present_address.', '.$member->city ?></td>
        <td><a href="tel:+88<?= $member->phone ?>"><?= $member->phone ?></a></td>
        <td><a href="//<?= $member->facebook ?>" class="btn btn-sm btn-primary">Facebook</a></td>
        <td><?= $member->blood_group ?></td>
      </tr>
      <?php endforeach;?>
    </table>
  </div>
</div>