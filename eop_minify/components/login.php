<?php

if(isset($_POST['username']) && isset($_POST['password'])) {
  $getuser = $_POST['username'];
  $getpass = $_POST['password'];

  if($getuser==$username && $getpass==$password) {
    $auth = array(
      'username' => $username,
      'password' => $password
    );
    // Set login info Session as auth array
    $_SESSION["auth"] = $auth;
    
    // redirect to dashboard Page
    echo '<script>window.location="'.$url.'?goto=dashboard"</script>';

  } else echo '<script>alert("Username or Password is Incorrect.")</script>';
}
  

?>


<div class="container" style="position: relative">
  <div class="card login-card" style="width: 18rem;">
    <div class="card-body">
      <h4 class="card-title text-center">Login</h4>
      <form action="" method="post">
        <input class="form-control" type="text" name="username">
        <input class="form-control my-3" type="password" name="password">
        <button type="submit" class="btn btn-success form-control" >Login</button>
      </form>
      
    </div>
  </div> <!-- /.card -->
</div> <!-- /.container -->