<?php

session_start();
$error=''; 
$connection = mysqli_connect('localhost', 'root', '', 'sih');


if (isset($_POST['submit'])) {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = " invalid Details";
        echo($error);
    }
    else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];

        $sql = "SELECT * FROM  `user_register` WHERE user_password='$password' AND user_nick='$username' AND user_type='$user_type' ";
        $query = mysqli_query($connection, $sql);
        $rows = mysqli_num_rows($query);



        if ($rows == 1) {
                       if ($user_type == "Artist") {
                           $_SESSION['username'] = $username;
                               echo "<script>
   window.location.href='test-login.php';</script>";


            

        } else {
                           $_SESSION['username'] = $username;
            echo "<script>alert('LOGIN SUCCESSFULLY');
   window.location.href='userprofile.php';</script>";
        }
    }
        else {
            echo "<script>alert(' LOGIN failed.');
   window.location.href='test.php';</script>";

        }
       
    }
}
?>

