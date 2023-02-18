<?php include 'header.php';


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
                <div class="container">
                <h1>Hello...</h1>
                <style>
                * {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                    }


                    h2 {
                    text-align: center;
                    font-size: 30px;
                    margin-bottom: 2rem;
                    }

                    h3.heading {
                    text-align: center;
                    margin-top: 2rem;
                    margin-bottom: 2rem;
                    }

                    .select {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    }
                    .select select {
                    margin: 1rem auto;
                    }

                    .cards {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-wrap: wrap;
                    margin: 10px auto;
                    max-width: 1000px;
                    }
                    .cards .card {
                    width: 300px;
                    max-width: 300px;
                    margin: 12px;
                    padding: 1.5rem;
                    color: #fff;
                    border-radius: 5px;
                    box-shadow: 7px 6px 26px -17px black;
                    cursor: pointer;
                    transition: 0.3s all;
                    }
                    .cards .card h3 {
                    font-size: 40px;
                    }
                    .cards .card p {
                    font-size: 20px;
                    }
                    .cards .card:nth-child(1) {
                    background-color: #3498db;
                    }
                    .cards .card:nth-child(2) {
                    background-color: #e74c3c;
                    }
                    .cards .card:nth-child(3) {
                    background-color: #2ecc71;
                    }
                    .cards .card:nth-child(4  ) {
                    background-color: #4c7360;
                    }
                    .cards .card:hover {
                    transform: translateY(-4px);
                    }

                </style>

                <!-- partial:index.partial.html -->
<?php
include('../database/connection.php');
        $oil = "SELECT * FROM products where category = 'oil' ";
            $tea = "SELECT * FROM products where category = 'tea' ";
        $soap = "SELECT * FROM products where category = 'soap' ";
        $msg = "SELECT * FROM `user_messages`";

if ($result = mysqli_query($conn, $oil)) {
    // Return the number of rows in result set
    $rowoil = mysqli_num_rows( $result );
 }
 if ($result = mysqli_query($conn, $soap)) {
    // Return the number of rows in result set
    $rowsoap = mysqli_num_rows( $result );
 }
if ($result = mysqli_query($conn, $tea)) {
    // Return the number of rows in result set
    $rowtea = mysqli_num_rows( $result );
 }


if ($result = mysqli_query($conn, $msg)) {
    // Return the number of rows in result set
    $rowmsg = mysqli_num_rows( $result );
 }

?>



<div class="cards">
  <div class="card">
    <h3 id="cases"><?php  echo  $rowoil;  ?></h3>
    <p>Total oil products</p>
  </div>
  <div class="card">
    <h3 id="deaths"><?php  echo  $rowtea;  ?></h3>
    <p>Total Tea products</p>
  </div>
  <div class="card">
    <h3 id="recovered"><?php  echo  $rowsoap;  ?></h3>
    <p>Total Soap products</p>
  </div>
  <div class="card">
    <h3 id="seprate"><?php  echo  $rowmsg;  ?></h3>
    <p>Total messages</p>
  </div>
</div>
                </div>
            </section>
        </main>
</div>
<!-- partial -->
<?php include 'footer.php'; ?>
