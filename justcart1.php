<?php
/**
 * Created by PhpStorm.
 * User: adity
 * Date: 22-02-2019
 * Time: 11:57
 */

session_start();
if (isset($_SESSION['username'])){
    $u=$_SESSION['username'];

    $data12 = $_GET["variable1"];

    $db = mysqli_connect('localhost', 'root', '', 'sih');

echo $data12;
    $sql = "INSERT INTO `justcart` (user_name,product_name) VALUES(
 '$u','$data12')";

    if(!mysqli_query($db,$sql))
    {
        echo "<script>alert('Try Again');
   window.location.href='allproduct.php';</script>";

    }
    else
    {
        echo "<script>alert('Done');
   window.location.href='allproduct.php';</script>";


    }


}
else{
    echo "<script>alert('LOGIN IN FIRST');
   window.location.href='Sign In.html';</script>";
}