<?php
  include $root.'/components/functions/noticeFunction.php';
?>

<div class="container notice">
  <h1>Notices
    <?php if($auth): ?>
      <button class="btn btn-sm btn-primary" onclick="window.location='<?= $url.'?goto=add_notice' ?>'">Add Notice</button>
    <?php endif; ?>
    </h1>
    
  <div class="table-responsive-lg">
    <table class="table table-hover table-bordered table-striped">
      <tr>
        <th>S/L</th>
        <th class="text-center">Subject</th>
        <th class="text-center">Date</th>
      </tr>
      <?php $i=1; foreach($notices as $notice):?>
      <tr class="cursor-pointer" onclick="window.location='<?=$url?>/?goto=notice&id=<?= $notice->id ?>'">
        <td><?= $i ?></td>
        <td><?= $notice->subject ?></td>
        <td><?= date("d-m-Y", strtotime($notice->date)) ?></td>
      </tr>
      <?php $i++; endforeach;?>
    </table>
  </div>
</div>