<?php
  // Query The Member in Database
  $statement = $con->prepare('select * from new_members');
  $statement->execute();
  $members = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container-fluid">
  <h1>New Member</h1>
  <div class="table-responsive-lg">
    <table class="table table-hover table-bordered table-striped">
      <tr>
        <th>S/L</th>
        <th>Avater</th>
        <th>Name</th>
        <th>Batch</th>
        <th>Position</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Facebook</th>
        <th>Blood</th>
      </tr>
      <?php $i=1; foreach($members as $member):?>
      <tr class='cursor-pointer' onclick="window.location='<?=$url?>?action=confirm&id=<?=$member->id?>'">
        <td><?= $i ?></td>
        <td><img src="<?= $url.'/tmp/'.$member->avater?>" alt="<?= $member->name ?>"></td>
        <td><?= $member->name ?></td>
        <td><?= $member->batch ?></td>
        <td><?= $member->member_rule ?></td>
        <td><?= $member->present_address.', '.$member->city ?></td>
        <td><a href="tel:+88<?= $member->phone ?>"><?= $member->phone ?></a></td>
        <td><a href="//<?= $member->facebook ?>" class="btn btn-sm btn-primary">Facebook</a></td>
        <td><?= $member->blood_group ?></td>
      </tr>
      <?php $i++; endforeach;?>
    </table>
  </div>
</div>