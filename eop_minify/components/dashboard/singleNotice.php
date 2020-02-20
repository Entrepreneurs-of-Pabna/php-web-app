<?php
  include $root.'/components/functions/noticeFunction.php';

  if(isset($_GET) && $_GET['goto'] && $_GET['id']):
    
  ?>
<div class="container">
<?php if(sizeof($single_notice)){ ?>
  <div class="row">
    <div class="d-flex">
      <p class="ml-2"><span>Post Time:</span><?= date("d-m-Y", strtotime($notice[0]->date)) ?></p>
    </div> 
    </div><!-- /.row -->

    <div class="row">
    <h2>
      <span class="bold">Subject:</span>
      <?= $single_notice[0]->subject ?>
    </h2>
  </div> <!-- /.row -->

<br>

  <div class="row">
  <pre>
  </pre>
    <p class="text-"><?= $single_notice[0]->content ?></p>
  </div> <!-- /.row -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row justify-content-end">
    <!-- <p>Jubaer Ahmad</p> -->
  </div> <!-- /.row -->

<?php
  } else {
    echo '<script>window.location="'.$url.'"</script>';
  }
?>

</div> <!-- /.container -->
<?php endif;?>