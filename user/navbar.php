<nav class="navbar navbar-expand-lg custom_nav-container">
  <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">


  <?php if(isset($_SESSION['user_id'])): ?>



              <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product.php?product=oil">Oil</a>
          <a class="dropdown-item" href="product.php?product=tea">Tea</a>
          <a class="dropdown-item" href="product.php?product=soap">Soap</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"> contact us</a>
      </li>
       <li>
        <a  href="cart.php"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="currentColor" d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1M18 6H4.27l2.55 6H15c.33 0 .62-.16.8-.4l3-4c.13-.17.2-.38.2-.6a1 1 0 0 0-1-1m-3 7H6.87l-.77 1.56L6 15a1 1 0 0 0 1 1h11v1H7a2 2 0 0 1-2-2a2 2 0 0 1 .25-.97l.72-1.47L2.34 4H1V3h2l.85 2H18a2 2 0 0 1 2 2c0 .5-.17.92-.45 1.26l-2.91 3.89c-.36.51-.96.85-1.64.85Z"/></svg>cart</a>
      </li>
     
        <li class="nav-item dropdown">
        <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 72 72">
            <path fill="#92d3f5"
              d="M17 60.958v-4c0-4.994 5.008-9 10-9q9 7.5 18 0c4.994 0 10 4.006 10             9v4" />
            <path fill="#fadcbc"
              d="M24.936 30.958c0 9 4.937 14 11 14c5.937 0 11.064-5 11.064-14c0-3-1-4-1-4a76.84 76.84 0 0 0-7-6c-4 3-7 4-13 5c0 0-1.064 0-1.064 5Z" />
            <path fill="#a57939"
              d="M46.754 28.74c.2-2.167-9.874-10.396-7.908-8.228s-10.074 4.094-12.683 6.06S26 38.959 26 38.959c-4 0-4-6-4-13s4-14 14-14s14 7 14 14s0 13-4                            13c.41-.097.553-8.05.754-10.218Z" />
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M26 38.958c-4 0-4-6-4-13s4-14 14-14s14                   7 14 14s0 13-4 13m-29 21v-3c0-4.994 5.008-9 10-9q9 7.5 18 0c4.994 0 10 4.006 10 9v3" />
            <path
              d="M42 30.958c0 1.105-.895 1-2 1s-2 .105-2-1a3.118 3.118 0 0 1 1-2c1.105 0             3 .896 3 2m-8 0c0 1.105-.895 1-2 1s-2 .105-2-1c0-1 2.022-2 3.127-2a3.263 3.263 0 0 1 .873 2" />
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M38 38.708a3.042 3.042 0 0 0-4 0" />
            <path fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2"
              d="M24.936 30.958c0 9 4.937 14 11 14c5.937 0 11.064-5   11.064-14c0-3-1-4-1-4a76.84 76.84 0 0 0-7-6c-4 3-9 5-13 5c0 0-1.064 0-1.064 5Z" />
          </svg>
          Hello <?php echo $_SESSION[user_name];  ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="profile.php">profile</a>
          <a class="dropdown-item" href="Logout.php">Logout</a>
        </div>
      </li>

    </ul>




  <?php else: ?>





    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product.php?product=oil">Oil</a>
          <a class="dropdown-item" href="product.php?product=tea">Tea</a>
          <a class="dropdown-item" href="product.php?product=soap">Soap</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"> contact us</a>
      </li>
     

<li class="nav-item">
        <a  href="registeruser.php">     <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 72 72">
            <path fill="#92d3f5"
              d="M17 60.958v-4c0-4.994 5.008-9 10-9q9 7.5 18 0c4.994 0 10 4.006 10             9v4" />
            <path fill="#fadcbc"
              d="M24.936 30.958c0 9 4.937 14 11 14c5.937 0 11.064-5 11.064-14c0-3-1-4-1-4a76.84 76.84 0 0 0-7-6c-4 3-7 4-13 5c0 0-1.064 0-1.064 5Z" />
            <path fill="#a57939"
              d="M46.754 28.74c.2-2.167-9.874-10.396-7.908-8.228s-10.074 4.094-12.683 6.06S26 38.959 26 38.959c-4 0-4-6-4-13s4-14 14-14s14 7 14 14s0 13-4                            13c.41-.097.553-8.05.754-10.218Z" />
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M26 38.958c-4 0-4-6-4-13s4-14 14-14s14                   7 14 14s0 13-4 13m-29 21v-3c0-4.994 5.008-9 10-9q9 7.5 18 0c4.994 0 10 4.006 10 9v3" />
            <path
              d="M42 30.958c0 1.105-.895 1-2 1s-2 .105-2-1a3.118 3.118 0 0 1 1-2c1.105 0             3 .896 3 2m-8 0c0 1.105-.895 1-2 1s-2 .105-2-1c0-1 2.022-2 3.127-2a3.263 3.263 0 0 1 .873 2" />
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M38 38.708a3.042 3.042 0 0 0-4 0" />
            <path fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2"
              d="M24.936 30.958c0 9 4.937 14 11 14c5.937 0 11.064-5   11.064-14c0-3-1-4-1-4a76.84 76.84 0 0 0-7-6c-4 3-9 5-13 5c0 0-1.064 0-1.064 5Z" />
          </svg>
          Login</a>
      </li>
    </ul>



  <?php endif; ?>


  
  
  </div>
</nav>