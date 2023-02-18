<?php
session_start();

if(isset($_SESSION['user_id'])) {
?>

<?php include 'header.php'; 
include('../database/connection.php');?>

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

                <div class="container">
 <link rel="stylesheet" href="css/customproduct.css">
                    <div class="grid product">
          <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM products WHERE ID = $id";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $details = $row['detail'];
                $rates = $row['rate'];
                $path = "../admin/" . $row['image_path'];
            }
    ?>






                <div class="column-xs-12 column-md-7">
                    <div class="product-gallery">
                        <div class="product-image">
                        </div>
                        <ul class="product-image">
                            <li class="image-item"> <img class="active" src="<?php echo $path; ?>">
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="column-xs-12 column-md-5">
                    <h1><?php echo $name; ?></h1>
                    <h2> ₹<?php echo $rates; ?></h2>
                    <div class="description">
                        <p><?php echo $details; ?></p>
                    </div>
                                         <a class="add-to-cart" href="tel:7014147310">Contact US</a>
                                         <a class="add-to-cart" href="">Add to cart</a>


                </div>
                    </div>
                    <div class="grid related-products">
                <div class="column-xs-12">
                    <h3>You may also like</h3>
                </div>
                <?php
    

                $query = "SELECT * FROM products ORDER BY RAND() LIMIT 3";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $price = $row['rate'];
                        $path = "../admin/" . $row['image_path'];
                ?>
            

                        <div class="column-xs-12 column-md-4" onclick="window.location.href = 'detailimage.php?id=<?php echo $id; ?>'">
                            <img src="<?php echo $path; ?>" height="250px" width="250px">
                            <h4><?php echo $name; ?></h4>
                            <p class="price">$<?php echo $price; ?></p>
                        </div>


                <?php
                    }
                } else {
                    echo "No products found";
                }
                ?>

            </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end product section -->
    <!-- footer section -->
    <?php include 'footer.php'; ?>
<?php
}
?>

