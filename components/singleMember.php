<?php
// Define a Member ID
  if($_GET['member_id']) {
    $member_id = $_GET['member_id'];

    // Query The Member in Database
    $statement = $con->prepare(' select * from members where id = :id ');
    $statement->execute([ ':id' => $member_id ]);
    $member = $statement->fetchAll(PDO::FETCH_OBJ);
    
    if(!sizeof($member)) {
        $statement = $con->prepare(' select * from members limit 1 ');
        $statement->execute();
        $member = $statement->fetchAll(PDO::FETCH_OBJ);
    }
  } else {
    $statement = $con->prepare(' select * from members limit 1 ');
    $statement->execute();
    $member = $statement->fetchAll(PDO::FETCH_OBJ);
  }

  
?>


<div class="container">
  <div class="row">

    <div class="col-md-5 text-center">
      <img class="member-photo" src="<?= $url.'/images/'.$member[0]->avater?>" alt="<?= $member[0]->name ?>">
      <?php if($member[0]->facebook): ?>
        <a class="btn btn-primary mt-2" href="//<?= $member[0]->facebook ?>" target="_blank">Facebook</a>
      <?php endif; ?>
    </div> <!-- /.col-md-5 -->

    <div class="col-md-7">
      <div class="member-details">
        <h1 class="text-center"><?= $member[0]->name ?></h1>
        <h4 class="text-center"><?= $member[0]->member_rule ?></h4>
        <table class="table table-hover">
          <tr>
            <td class="td-key"> Member ID </td>
            <td>:</td>
            <td><?= $member[0]->id ?></td>
          </tr>
          <tr>
            <td class="td-key"> Gender </td>
            <td>:</td>
            <td> <?= $member[0]->gender ?> </td>
          </tr>
          <tr>
            <td class="td-key"> Date of Birth </td>
            <td>:</td>
            <td> <?= date("d-m-Y", strtotime($member[0]->date_of_birth)) ?> </td>
          </tr>
          <tr>
            <td class="td-key"> Email </td>
            <td>:</td>
            <td> <a href="mailto:<?= $member[0]->email ?>"><?= $member[0]->email ?></a> </td>
          </tr>
          <tr>
            <td class="td-key"> Phone </td>
            <td>:</td>
            <td>
              <?php if($member[0]->is_hide_phone=='on') { echo 'Content Hidden';} else {?>
                <a href="tel:<?= $member[0]->phone ?>"><?= $member[0]->phone ?></a>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td class="td-key"> Blood Group </td>
            <td>:</td>
            <td> <?= $member[0]->blood_group ?> </td>
          </tr>
          <tr>
            <td class="td-key"> Present Address </td>
            <td>:</td>
            <td> <?= $member[0]->present_address.', '.$member[0]->city ?> </td>
          </tr>
          <tr>
            <td class="td-key"> Parmanent Address </td>
            <td>:</td>
            <td> <?= $member[0]->parmanent_address ?> </td>
          </tr>
          <tr>
            <td class="td-key"> Batch </td>
            <td>:</td>
          <td> <?= $member[0]->batch ?> </td>
        </tr>
        <tr>
          <td>About</td>
          <td>:</td>
          <td><?= $member[0]->about ?></td>
        </tr>
      </table>
      <!-- <table class="table table-hover">
        <tr>
          <td colspan=3>
          <h4 class="bold" style="border-top:0">Occupations</h4>
          </td>
        </tr>
        <tr>
          <td class="td-key"> Student </td>
          <td>:</td>
          <td> Honurs (Dept. of Mathematics) at Govt. Edward College, Pabna </td>
        </tr>
          <tr>
            <td class="td-key"> Student </td>
            <td>:</td>
          <td> Fazil at Pabna Alia Madrasah </td>
        </tr>
        <tr>
          <td>About</td>
          <td>:</td>
          <td><?php //$member[0]->about ?></td>
        </tr>
      </table> -->
    </div>
    </div> <!-- /.col-md-5 -->
  </div> <!-- /.row -->
</div> <!-- /.container-fluid -->
