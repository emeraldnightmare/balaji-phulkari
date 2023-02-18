        <?php
                session_start();
                include('../database/connection.php');
                if(isset($_POST['register'])){
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                // Validate password
                if (strlen($password) < 6 || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)) {
                    echo "Password must be at least 6 characters with at least 1 uppercase letter, 1 number, and 1 special character.";
                    return;
                }

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO registered_users(name,phone,email,password) VALUES ('$name','$phone','$email','$hashed_password')";
                if(mysqli_query($conn, $sql)){
                    $_SESSION['user_id'] = mysqli_insert_id($conn);
                    $_SESSION['user_name'] = $name;
                         header('Location:index.php');
                    // Redirect user to dashboard or homepage
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                }
          

          
                if(isset($_POST['login'])){
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $sql = "SELECT * FROM registered_users WHERE email='$email' LIMIT 1";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_assoc($result);
                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['name'];
                     header('Location:index.php');
                    // Redirect user to dashboard or homepage
                } else {
                    echo "Incorrect email or password";
                }
                }
                ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pradeep balaji Enterprises</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Handlee|Josefin+Sans:300,600&amp;display=swap'><link rel="stylesheet" href="./registeruser.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="card-wrap">
    <div class="card border-0 shadow card--welcome is-show" id="welcome">
      <div class="card-body">
        <h2 class="card-title">WELCOME</h2>
        <p>Welcome to the login page</p>
        <div class="btn-wrap"><a class="btn btn-lg btn-register js-btn" data-target="register">REGISTER</a><a class="btn btn-lg btn-login js-btn" data-target="login">LOGIN</a></div>
      </div>
    </div>
    <div class="card border-0 shadow card--register" id="register">
      <div class="card-body">
        <h2 class="card-title">Create Account</h2>
        <p class="card-text">Enter your personal details<br/>and start journey with us</p>

                <form method="post">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" name="name" required="required"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" placeholder="phone" name="phone" required="required"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" name="email" required="required"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Password" name="password" required="required"/>
                </div>
                <button class="btn btn-lg" name="register">REGISTER</button>
                </form>
      </div>
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
    </div>
    <div class="card border-0 shadow card--login" id="login">
      <div class="card-body">
        <h2 class="card-title">Welcome Back!</h2>
        <p>To keep connected with us<br/>please login with your personal info</p>


        <form method="post">
        <div class="form-group">
            <input class="form-control" type="email" placeholder="Email" name="email" required="required"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" placeholder="Password" name="password" required="required"/>
        </div>
        <p><a href="#">Forgot your password?</a></p>
        <button class="btn btn-lg" name="login">LOGIN</button>
        </form>

      </div>
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="./registeruser.js"></script>

</body>
</html>