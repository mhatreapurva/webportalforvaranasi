<?php
//session_start();
/**
 * Created by PhpStorm.
 * User: adity
 * Date: 18-02-2019
 * Time: 15:34
 */
$db = mysqli_connect('localhost', 'root', '', 'sih');

$Firstname = "";
$Lastname = "";
$state= "";
$district= "";
$Password = "";
$Email = "";
$nickname = "";

$gender= "";


if(!$db)
{
    echo 'not connected';

}
if(isset($_POST['submit']))
{
    $Firstname = $_POST['user_name'];
    $Lastname = $_POST['user_surname'];

    $Email = $_POST['user_email'];



    $state=$_POST['user_state'];
   
    $type = $_POST['user_type'];

    $nickname = $_POST['user_nick'];

    $gender= $_POST['user_gender'];
    $intrest=$_POST['user_interest'];
    $address=$_POST['user_address'];;
    $hobbies=$_POST['user_hobbies'];;
    $contact=$_POST['user_contact'];;
    $city=$_POST['user_city'];;
    $skill=$_POST['user_skill'];;
    $desc=$_POST['user_desc'];
    $password=$_POST['user_password'];

       
    $sql = "INSERT INTO `user_register` (user_name,user_surname,user_state,user_gender,user_password,user_email,user_type,user_nick,user_interest,user_hobbies,user_address,user_contact,user_city,user_skill,user_desc) VALUES(
 '$Firstname','$Lastname','$state','$gender','$password','$Email','$type','$nickname','$intrest','$hobbies','$address','$contact','$city','$skill','$desc')";

    if(!mysqli_query($db,$sql))
    {
        echo "<script>alert('Thank you for Registration');
   window.location.href='Sign In.html';</script>";

    }
    else
    {
        echo "<script>alert('Thank you for Registration');
   window.location.href='Sign In.html';</script>";

    }
}
?>