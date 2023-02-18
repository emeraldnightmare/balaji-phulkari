<?php
include('../database/connection.php');
session_start();
$_SESSION['username'] = $_POST["username"];




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT role FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user["role"] == "admin") {

            header("Location: admin.php");
            exit;
        } else {
            // Perform actions for a non-admin user
            $error = true;

        }
    } else {
        $error = true;
    }
}
?>
<script>
    
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>pradeepbalaji</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./index.css">

    
   <link rel="apple-touch-icon" sizes="180x180" href="../user/images/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="../user/images/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="../user/images/favicon/favicon-16x16.png">
   <link rel="manifest" href="../user/images/favicon/site.webmanifest">

</head>

<body>
    <!-- partial:index.partial.html -->

    <body>
        <div id="form-main-wrapper">
            <div class="form-container">
                <div class="admin-avtar">
                    <h1>Admin Sign In</h1>
                </div>

                <div class="signin-status d-none">
                    <p id="status-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>



                <div class="form-wrapper">
                    <div class="form-con form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="field-con">
                                <label for="name">Name: </label>
                                <input type="name" id="name" name="username" />
                            </div>
                            <div class="field-con">
                                <label for="passkey">Password: </label>
                                <input type="password" id="passkey" name="password" />
                            </div>

                            <div class="flex form-btn-con">
                                <div class="sub-btn-wrap">
                                    <input type="submit" class="form-submit" value="Sign In" />
                                </div>
                            </div>

                            <?php if (isset($error) && $error) { ?>

                                <div class="error-message">Invalid username or password</div>
                            <?php } ?>
                        </form>

                    </div>
                </div>

                <div class="form-con add-links">
                    <a href="#" title="">Forget password?</a>
                    <a href="#" title="Back to pradeepbalaji ">Back to Site</a>
                </div>
            </div>


        </div>
        <!-- partial -->

    </body>

</html>