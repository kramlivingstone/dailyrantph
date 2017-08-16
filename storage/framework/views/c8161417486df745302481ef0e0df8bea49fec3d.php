<div class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
     
        <a href="/feed" class="navbar-brand"><img src="<?php echo nl2br(e(asset('images/dailyrantsph.png'))); ?>">
        </a>
   
    </div>
    <ul id="navbar" class="nav navbar-nav navbar-right">
    <?php if(Auth::check()): ?>
        <li><a href="#">Messages <span class="badge">1</span></a></li>
        <li><a href="#"><i class="fa fa-bell-o fa-lg"></i> <span class="badge">34</span></a></li>
        <li class="navImage">
          <img src="/avatar/<?php echo nl2br(e(Auth::user()->path)); ?>" alt="avatar">
        </li>
        <li class="dropdown"><a id="dropdownMenu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo nl2br(e(Auth::user()->name)); ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/profile/<?php echo nl2br(e(Auth::user()->id)); ?>">My Profile</a></li> 
              <hr id="dropdownLine">
              <li><a href="/logout">Sign Out</a></li>
            </ul>
        </li>
    <?php endif; ?>
    </ul>
  </div>
</div>