<?php
session_start();

if(isset($_SESSION['user_id'])) {
?>

<?php include 'header.php';
      include('../database/connection.php');
            $product = ""; 
            
                        if (isset($_GET['product'])) {
                              $product = $_GET['product'];
                        }?>

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
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
    <!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
              <?php echo $product; ?> <span>products</span>
            </h2>
         </div>
         <div class="row">
            <?php
      

                        $query = "SELECT * FROM products WHERE category = '$product'";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) == 0) {
                            echo "<h1>No products to display</h1>";
                            } else {
                      
                        while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $name = $row['name'];
                              $details = $row['detail'];
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
            <?php } 
            }?>
         </div>



         <div class="btn-box">
            <a href="./allproducts.php">
               View All products
            </a>
         </div>
      </div>
   </section>
   <!-- end product section -->
      <!-- footer section -->
      <?php include 'footer.php'; ?>

<?php
} else {
?>

<?php include 'header.php';
      include('../database/connection.php');
            $product = ""; 
            
                        if (isset($_GET['product'])) {
                              $product = $_GET['product'];
                        }?>

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
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
    <!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
              <?php echo $product; ?> <span>products</span>
            </h2>
         </div>
         <div class="row">
            <?php
      

                        $query = "SELECT * FROM products WHERE category = '$product'";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) == 0) {
                            echo "<h1>No products to display</h1>";
                            } else {
                      
                        while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $name = $row['name'];
                              $details = $row['detail'];
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
            <?php } 
            }?>
         </div>



         <div class="btn-box">
            <a href="./allproducts.php">
               View All products
            </a>
         </div>
      </div>
   </section>
   <!-- end product section -->
      <!-- footer section -->
      <?php include 'footer.php'; ?>

<?php
}
?>

