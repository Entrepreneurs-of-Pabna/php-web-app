<?php
  include $root.'/components/functions/noticeFunction.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-2">
      <h1>Add New Notice</h1>
      <form action="" method="post">
      <div class="form-group">
        <label for="subject">Notice Subject</label>
        <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Notice Subject Goes Here...">
        
        <label for="content">Notice Content</label>
        <textarea type="email" rows="8" class="form-control mb-3" id="content" name="content">Notice Content Goes Here...</textarea>
        <button type="submit" class="btn btn-success">Notice Publish</button>
      </div>
      </form>
    </div>
  </div>
</div>