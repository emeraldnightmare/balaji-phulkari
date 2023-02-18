<?php  session_start();  ?>
<header>
  <div class="header-wrapper">
    <label for="menu-toggle">
      <span class="las la-bars"></span>
    </label>
    <div class="header-title">
      <h1>Welcome, <?php echo $_SESSION['username']  ?></h1>
    </div>
  </div>
  <div class="header-action">
      <a href="insert.php">
        <button class="btn btn-main">
          <span class="las la-plus-circle"></span>
          Insert Item
        </button>
      </a>
  </div>



</header>