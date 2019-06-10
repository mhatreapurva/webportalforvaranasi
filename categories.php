<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'sih');
    $nick=$_SESSION['username']; 
    //echo $nick;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body> 
<br> <br> 
<form method="post" action="search.php">
  <input type="text" class="textbox" placeholder="Search" name="search">
  <input title="Search" value="" type="submit" class="button" name="submit-search">
</form>
<br> <br> <br> <br> <br>
<?php
    $db = mysqli_connect('localhost', 'root', '', 'sih');
    $nick=$_SESSION['username']; 
    
 
    $a= $_SESSION['username'];
    $sql = "SELECT * from image   ";
    $s= mysqli_query($db,$sql);
    $ct=0;
    echo'<table width="100%">';
    while ($row = mysqli_fetch_array($s) ) {
       
       echo "\x20\x20\x20";  
       echo'
       
       <div style="display: inline-block; padding-left:30px; "> 
    <div class="card" style="height:500px;width:300px;  ">
    
        <div class="view overlay">
        <img  style="height:250px;width:300px;" class="card-img-top" src='. $row['location'] .' alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
        <div class="card-body">
    
        
        <h4 class="card-title">'.$row['product_cost'].'</h4>
        <h4 class="card-title">'.$row['product_category'].'</h4>
        <h4 class="card-text">'.$row['user_name'].'</h4>
        
        <a href="#" class="btn btn-primary">Add to cart</a>
    
      </div>
    
    </div> 
    </div>
    ';
    }
    
   
?>

</body>
</html>
<style>
body {
  background: url('http://i.hizliresim.com/v4Qykv.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Roboto', Tahoma, Arial, sans-serif;
  line-height: 1.5;
  font-size: 13px;
}

form {
  outline: 0;
  float: left;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

form > .textbox {
  outline: 0;
  height: 42px;
  width: 244px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .button {
  outline: 0;
  background: none;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button:hover {
  background-color: rgba(0, 150, 136, 0.8);
}
</style>