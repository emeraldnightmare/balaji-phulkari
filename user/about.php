
<?php
session_start();

if(isset($_SESSION['user_id'])) {
?>

<?php include 'header.php'; ?>

   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
         <div class="container">
         <?php include 'navbar.php'; ?>
         </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>About us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->

      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
                <div class="box">
                    <div class="arrival_bg_box">
                        <img src="./images/oil.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <p style="margin-top: 20px;margin-bottom: 30px;margin-left:20px;   font-weight: 500;">        
                               Welcome to Balaji Enterprises, where we're passionate about providing best quality FMCG products to our B2B customers. Our                                                              company was founded with the goal of “Vocal for Local” by providing each and every household benefit of “premium quality”                                                           FMCG goods at reasonable prices. <br> Our team of experts is constantly working to stay ahead of the curve, using the latest                                                             technology and innovations to improve our products and customer services. We're committed to providing the highest level of                                                             customer service, and we always go above and beyond to make sure that our customers are completely satisfied.
                             </p>                        
                        </div>
                    </div>
                </div>
         </div>
      </section>
        <section class="inner_page_head" style="background-color:#fff;">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                    <a aria-label="Chat on WhatsApp" href="https://wa.me/9571420072"> <img alt="Chat on WhatsApp" src="./images/WhatsAppButtonGreenLarge.svg" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      <!-- footer section -->
      <?php include 'footer.php'; ?>

<?php
} else {
?>

<?php include 'header.php'; ?>

   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
         <div class="container">
         <?php include 'navbar.php'; ?>
         </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>About us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->

      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
                <div class="box">
                    <div class="arrival_bg_box">
                        <img src="./images/oil.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <p style="margin-top: 20px;margin-bottom: 30px;margin-left:20px;   font-weight: 500;">        
                               Welcome to Balaji Enterprises, where we're passionate about providing best quality FMCG products to our B2B customers. Our                                                              company was founded with the goal of “Vocal for Local” by providing each and every household benefit of “premium quality”                                                           FMCG goods at reasonable prices. <br> Our team of experts is constantly working to stay ahead of the curve, using the latest                                                             technology and innovations to improve our products and customer services. We're committed to providing the highest level of                                                             customer service, and we always go above and beyond to make sure that our customers are completely satisfied.
                             </p>                        
                        </div>
                    </div>
                </div>
         </div>
      </section>
        <section class="inner_page_head" style="background-color:#fff;">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                    <a aria-label="Chat on WhatsApp" href="https://wa.me/9571420072"> <img alt="Chat on WhatsApp" src="./images/WhatsAppButtonGreenLarge.svg" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      <!-- footer section -->
      <?php include 'footer.php'; ?>

<?php
}
?>




