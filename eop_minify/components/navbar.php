<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
<div class="container-fluid">


  <span class="navbar-brand mb-0 h1">
    <span class="right-toogle">➤</span>
    <a href="<?=$url?>">Entrepreneurs Of Pabna</a>
    </span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="<?=$url?>/?action=edit" class="nav-link">Update Member</a>
        </li>

        <li class="nav-item">
          <a href="<?=$url?>/?action=add" class="nav-link">Add Member</a>
        </li>

        <li class="nav-item">
          <a href="<?=$url?>/?goto=about" class="nav-link">About</a>
        </li>
        
        <li class="nav-item">
          <a href="<?=$url?>/?goto=notices" class="nav-link">Notices</a>
        </li>

        <?php if(!$auth): ?>
        <li class="nav-item">
          <a href="<?=$url?>/?action=login" class="nav-link">Login</a>
        </li>
        <?php endif; ?>

        <!-- if Admin Logged in -->
        <?php if($auth): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </a>
          
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?=$url?>/?goto=dashboard">Dashboard</a>
            <a class="dropdown-item" href="<?=$url?>/?goto=add_user">Add User</a>
            <a class="dropdown-item" href="<?=$url?>/?goto=settings">Settings</a>
            <a class="dropdown-item" href="<?=$url?>/?action=logout">Logout</a>
          </div>
        </li>
        <?php endif; ?>
      </ul>

    </div> <!-- /.collapse -->
  </div> <!-- /.container -->
</nav>