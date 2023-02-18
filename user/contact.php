
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
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
         <?php
  // Include the database connection file
  include('../database/connection.php');

  // Check if the form has been submitted
  if (isset($_POST['submit'])) {
    // Get the form data and sanitize it to prevent SQL injection attacks
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['details']);

    // Construct the SQL query to insert the data into the user_messages table
    $query = "INSERT INTO user_messages (user_name, user_phone, user_subject, user_message) VALUES ('$name', '$phone', '$subject', '$message')";

    // Execute the query and check if it was successful
    if (mysqli_query($conn, $query)) {
      // If successful, display a success message
      echo "Message sent successfully!";
    } else {
      // If unsuccessful, display an error message
      echo "Error sending message: " . mysqli_error($connection);
    }
  }
?>
 
                     <form  method="post">
                  
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="tel" placeholder="Enter your phone number" name="phone" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required name="details"></textarea>
                           <input type="submit" value="Submit" name="submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

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
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
         <?php
  // Include the database connection file
  include('../database/connection.php');

  // Check if the form has been submitted
  if (isset($_POST['submit'])) {
    // Get the form data and sanitize it to prevent SQL injection attacks
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['details']);

    // Construct the SQL query to insert the data into the user_messages table
    $query = "INSERT INTO user_messages (user_name, user_phone, user_subject, user_message) VALUES ('$name', '$phone', '$subject', '$message')";

    // Execute the query and check if it was successful
    if (mysqli_query($conn, $query)) {
      // If successful, display a success message
      echo "Message sent successfully!";
    } else {
      // If unsuccessful, display an error message
      echo "Error sending message: " . mysqli_error($connection);
    }
  }
?>
 
                     <form  method="post">
                  
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="tel" placeholder="Enter your phone number" name="phone" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required name="details"></textarea>
                           <input type="submit" value="Submit" name="submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

      <!-- footer section -->
      <?php include 'footer.php'; ?>

<?php
}
?>
