<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'sih');
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
echo "<script type='text/javascript'>location.href = 'test.php';</script>";
?>

</body>
</html>