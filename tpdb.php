<?php

    session_start();
    $username=$_SESSION['username'];
    echo $username;

$file_get = $_FILES['foto']['name'];
$temp = $_FILES['foto']['tmp_name'];
$db = mysqli_connect('localhost', 'root', '', 'sih');

$file_to_saved = $file_get; //Documents folder, should exist in       your host in there you're going to save the file just uploaded
move_uploaded_file($temp, $file_to_saved);


$product_name=$_POST['product_name']    ;
$product_category=$_POST['product_category'];
$upload_dir="C:\xampp\htdocs\phplessons\images/";
$product_cost=$_POST['product_cost'];
$target = "images/".basename($file_get);
$targetfile = $target;


$source_file = realpath($_FILES["foto"]["name"]);

$destination_path="images/";

rename($source_file, $destination_path . pathinfo($source_file, PATHINFO_BASENAME));






$name = basename($_FILES["foto"]["name"]);
if (move_uploaded_file($_FILES['foto']['tmp_name'], "$upload_dir/$name")) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}
$product_description=$_POST['product_description'];
$sql = "INSERT INTO `image` (user_name,product_name,product_category,product_cost,product_description,image,location) VALUES(
     '$username','$product_name','$product_category','$product_cost','$product_description',' $file_to_saved','$target')";

if(!mysqli_query($db,$sql))
{
    echo "<script>alert('Thank you');
   window.location.href='tp.php';</script>";

}
else
{
    echo "<script>alert('Thank you');
   window.location.href='tp.php';</script>";

}

?>