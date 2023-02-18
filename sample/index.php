<?php
session_start();

if(isset($_SESSION['user_id'])) {
     echo $_SESSION['user_name'] ;
} else {

    ?>

    <h1>hello there<h1>
<?php
}
?>
