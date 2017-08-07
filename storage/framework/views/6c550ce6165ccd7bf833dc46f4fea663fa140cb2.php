<div class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <h4 class="navbar-brand"><a href="/feed">SALT</a></h4>
    </div>
    <ul id="navbar" class="nav navbar-nav navbar-right">
    <?php if(Auth::check()): ?>
        <li><a href="#">Messages <span class="badge">1</span></a></li>
        <li><a href="#">Notification <span class="badge">34</span></a></li>
        <li class="navImage">
          <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="avatar">
        </li>
        <li class="dropdown"><a id="dropdownMenu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo nl2br(e(Auth::user()->name)); ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/profile">My Profile</a></li>
              <li><a href="#">Account Settings</a></li>
              <hr id="dropdownLine">
              <li><a href="/logout">Sign Out</a></li>
            </ul>
        </li>
    <?php endif; ?>
    </ul>
  </div>
</div>