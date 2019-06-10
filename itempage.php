<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

echo "<script>Sign In.html";
echo $_SESSION['username'];
?>


</body>
</html>