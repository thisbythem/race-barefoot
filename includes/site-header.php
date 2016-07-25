<header class="site-header">
  <div class="container">

    <a href="/"><?php echo file_get_contents("img/rb-logo-2.svg"); ?></a>

    <a href="#" id="toggle" class="toggle-button mobile-nav-toggle"><span></span></a>

    <div class="sub-section">
      <nav class="site-nav">
        <a href="race-detail.php">Race Detail</a>
        <a href="search-results.php">Search Results</a>
        <a href="add-race.php">Add Race</a>
      </nav>

      <div class="drop-nav-wrap">
        <a href="#" id="toggle" class="toggle-button"><span></span></a>
        <ul class="drop-nav" id="drop-nav">
          <li><a href="/">Sample Link</a></li>
          <li><a href="/">Sample Link</a></li>
          <li><a href="/">Sample Link</a></li>
        </ul>
      </div>

      <div class="user-login-wrap">

        <div class="account-actions">
          <a href="login-page.php" class="login-btn">Login</a>
          <a href="login-page.php" class="signup-btn">Sign Up</a>
        </div>

        <div class="account-logged-in">
          <div class="user-info-wrap">
            <span>Tracy pompom winnebago davenport</span>
            <a href="#" class="user-action-link">Logout</a>
          </div>
          <a href="#" class="user-avatar-wrap"> <img src="../img/default-avatar.png" class="user-avatar"/> </a>
        </div>

      </div>

    </div>
  </div>
</header>

<script type="text/javascript" src="js/toggle.js"></script>
