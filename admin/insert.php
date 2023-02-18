<?php include 'header.php';

include('../database/connection.php');

if (isset($_POST['submit'])) {
  $product_name = $_POST['name'];
  $product_detail = $_POST['details'];
  $product_rate = $_POST['price'];
  $category = $_POST['category'];



  // Specify the directory where the uploaded file should be saved
  $upload_dir = "uploads/";

// Check if the directory exists and create it if it doesn't
if (!file_exists($upload_dir)) {
  mkdir($upload_dir, 0777, true);
}
  // Check if an image was uploaded
  if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));

    $extensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($file_ext, $extensions) === false) {
      echo "Extension not allowed, please choose a JPG, JPEG, PNG, or GIF file.";
      exit();
    }

    if ($file_size > 2097152) {
      echo "File size must be exactly or less than 2 MB";
      exit();
    }

    // Save the uploaded file to the specified directory
    $upload_path = $upload_dir . $file_name;
    if (move_uploaded_file($file_tmp, $upload_path)) {
      $image = $upload_path;
    } else {
      echo "Error uploading file.";
      exit();
    }
  } else {
    $image = null;
  }
  $sql = "INSERT INTO products (name, detail, rate, category, image_path) 
          VALUES ('$product_name', '$product_detail', '$product_rate', '$category', '$image')";

  if (mysqli_query($conn, $sql)) {
    $message = "Record inserted successfully";
  } else {
    $message = "Error inserting record: " . mysqli_error($conn);
  }
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
            <input class="validate" id="wa_name" name="name" required="" type="text" value="">
            <span class="highlight"></span><span class="bar"></span>
            <label>Enter product name</label>
          </div>
          <div class="datainput">
            <textarea id="wa_textarea" placeholder="" maxlength="5000" row="1" required="" name="details"></textarea>
            <span class="highlight"></span><span class="bar"></span>
            <label>Enter product detail</label>
          </div>
          <div class="datainput">
            <input class="validate" id="wa_number" name="price" required="" type="number" value="">
            <span class="highlight"></span><span class="bar"></span>
            <label>Enter product rate</label>
          </div>
       <div class="datainput">
  <select id="wa_select" name="category" required>
    <option hidden selected value="default">Select Category</option>
    <option value="oil">Oil</option>
    <option value="tea">Tea</option>
    <option value="soap">Soap</option>
  </select>
</div>

          <div class="datainput">

            <input type="file" class="form-control-file" id="image" name="image" required>

            <!-- <input type="file" id="wa_image" name="image">
            <label>add image</label> -->
          </div>
    
          <div>
            <button class="btn btn-success" type="submit" value="Submit" name="submit">submit</button>

          </div>

          
        </form>
      </section>
    </main>
  </div>
  <!-- partial -->
  <?php include 'footer.php'; ?>