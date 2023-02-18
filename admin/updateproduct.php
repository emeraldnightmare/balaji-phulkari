<?php include 'header.php';
// Include the database connection file
include('../database/connection.php');

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get the product ID from the form
    $id = $_POST['id'];

    // Get the product information from the form fields
    $name = $_POST['name'];
    $details = $_POST['detail'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    // Check if an image file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Set the target directory to store the image file
        $target_dir = "uploads/";
        // Set the target file path with a unique file name
        $target_file = $target_dir . uniqid() . '_' . basename($_FILES['image']['name']);
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Update the product information in the database with the image file path
            $query = "UPDATE products SET name = '$name', detail = '$details', rate = '$price', category = '$category', image_path = '$target_file' WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $message = "Product information updated successfully.";
            } else {
                $message = "Error updating product information: " . mysqli_error($conn);
            }
        } else {
            $message = "Error uploading image file: " . $_FILES['image']['error'];
        }
    } else {
        // Update the product information in the database without the image file path
        $query = "UPDATE products SET name = '$name', detail = '$details', rate = '$price', category = '$category' WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $message = "Product information updated successfully.";
        } else {
            $message = "Error updating product information: " . mysqli_error($conn);
        }
    }
}

// Retrieve the product information based on the ID passed through the button
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);
}
?>



<body>
  <!-- partial:index.partial.html -->
  <input type="checkbox" name="" id="menu-toggle">
  <div class="overlay"><label for="menu-toggle">
    </label></div>

  <?php include 'sidebar.php'; ?>


  <div class="main-content">
    <?php include 'head.php'; ?>
   
     
 

    <main>
   
      <section>
      
<form class="whatsapp-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <div>
    <?php if (isset($message)) { ?>
      <h2><?php echo $message; ?></h2>
    <?php } ?>
  </div>
  <div class="datainput">
    <input class="validate" id="wa_name" name="name" required="" type="text" value="<?php echo $product['name']; ?>">
    <span class="highlight"></span><span class="bar"></span>
    <label>Enter product name</label>
  </div>
  <div class="datainput">
    <textarea id="wa_textarea" placeholder="" maxlength="5000" row="1" required="" name="detail"><?php echo $product['detail']; ?></textarea>
    <span class="highlight"></span><span class="bar"></span>
    <label>Enter product detail</label>
  </div>
  <div class="datainput">
    <input class="validate" id="wa_number" name="price" required="" type="number" value="<?php echo $product['rate']; ?>">
    <span class="highlight"></span><span class="bar"></span>
    <label>Enter product rate</label>
  </div>
  <div class="datainput">
    <select id="wa_select" name="category" required>
      <option hidden selected value="default">Select Category</option>
      <option value="oil" <?php if ($product['category'] == 'oil') { echo 'selected'; } ?>>Oil</option>
      <option value="tea" <?php if ($product['category'] == 'tea') { echo 'selected'; } ?>>Tea</option>
      <option value="soap" <?php if ($product['category'] == 'soap') { echo 'selected'; } ?>>Soap</option>
    </select>
  </div>
  <div class="datainput">
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
  <div>
    <button class="btn btn-success" type="submit" value="Submit" name="submit">Update Product</button>
  </div>
</form>

      </section>
    </main>
  </div>
  <!-- partial -->
  <?php include 'footer.php'; ?>