
<!DOCTYPE html>
<html>
<head><link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Raleway', sans-serif;
  color: black;
}
button {
  background-color: white;
  color: black;
  size: 20px;
  border: 2px solid aqua;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  border-radius: 8px;
  padding: 10px 40px;
}

button:hover {
  background-color: black;
  color: aqua;
}

.split {
    height: 85%;
  width: 50%;
  position: fixed;
  z-index: 1;

}

.left {
  left: 0;
  background-color: white;
}

.right {
  right: 0;
  background-color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 300px;
  border-radius: 0%;
}


.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

/*.flip-card:hover .flip-card-inner {
  transform: rotateY(360deg);
}*/

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color:blue;
  color: blue;
  transform: rotateY(180deg);
  z-index: 1;
}

.header{
    height: 20%;
    background-color: black;
}
h3{
    align-items: center;
    text-align: center;
    padding: 2.5%;
}
</style>
</head>
<script>
    $(document).ready(function () {
        var table = $('#users').DataTable();
        $('#users tbody').on('click', 'tr', function () {
            console.log(table.row(this).data());
        });
    });
</script>

<script>
   function f() {
       
   }
</script>
<body>
<?php

$data = $_GET["data"];

$db = mysqli_connect('localhost', 'root', '', 'sih');
$sql1="SELECT product_cost FROM image WHERE product_name ='$data'";
$result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$cost = $row1['product_cost'];
$sql1="SELECT product_name FROM image WHERE product_name ='$data'";
$result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$name = $row1['product_name'];
$sql1="SELECT product_description FROM image WHERE product_name ='$data'";
$result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$description = $row1['product_description'];
$sql1="SELECT product_category FROM image WHERE product_name ='$data'";
$result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$category = $row1['product_category'];
$sql1="SELECT location FROM image WHERE product_name ='$data'";
$result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image = $row1['location'];
$sql1="SELECT user_name FROM image WHERE product_name ='$data'";
$result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$user = $row1['user_name'];


?>

<div class="split left">
  <div class="centered">
        <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">

                        <?php

                        echo '<img src="'.$image.'" style="width:300px;height:300px;> ';
                        ?>
                    </div>
                    <div class="flip-card-back">
                        <?php

                        echo $name;
                        ?>
                    </div>
                </div>
            </div>
  </div>
</div>


<div class="split right" >
  <div class="centered" >
    <h2><?php echo $name?></h2>
    <p>price : <?php echo $cost?></p>
    <p> MADE BY <?php echo $user?></p>
    <hr>
    <br>
    <p>     <?php echo $description?>
        </p>
        <button onclick="f()" ><a href='justcart1.php?variable1=<?php echo $name;?>' >ADD TO CART</a></button>
        <br><br>
        <button>ADD TO WISHLIST</button>
        <br><br>
        <button>BUY NOW</button>
  </div>

</div>




  
</body>
</html>