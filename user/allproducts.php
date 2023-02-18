
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

      <!-- end inner page section -->


   <!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Our <span>products</span>
            </h2>
         </div>
         <div class="row">
            <?php
            include('../database/connection.php');
            $query = "SELECT * FROM products ORDER BY RAND() LIMIT 15 ";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
               $id = $row['id'];
               $name = $row['name'];
               $rates = $row['rate'];
               $path = "../admin/" . $row['image_path'];
               ?>

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">

                           <a href="detailimage.php?id=<?php echo $id; ?>" class="option2">
                              View product
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?php echo $path; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        <?php echo $name; ?>
                        </h5>
                        <h6>
                        <span>&#8377;</span> <?php echo $rates; ?>
                        </h6>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>



      
      </div>
   
   </section>
   <!-- end product section -->

     
     
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

      <!-- end inner page section -->


   <!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Our <span>products</span>
            </h2>
         </div>
         <div class="row">
            <?php
            include('../database/connection.php');
            $query = "SELECT * FROM products ORDER BY RAND() LIMIT 15 ";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
               $id = $row['id'];
               $name = $row['name'];
               $rates = $row['rate'];
               $path = "../admin/" . $row['image_path'];
               ?>

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">

                           <a href="detailimage.php?id=<?php echo $id; ?>" class="option2">
                              View product
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?php echo $path; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        <?php echo $name; ?>
                        </h5>
                        <h6>
                        <span>&#8377;</span> <?php echo $rates; ?>
                        </h6>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>



      
      </div>
   
   </section>
   <!-- end product section -->

     
     
      <!-- footer section -->
      <?php include 'footer.php'; ?>

<?php
}
?>

