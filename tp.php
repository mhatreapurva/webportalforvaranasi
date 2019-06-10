
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'sih');
$nick=$_SESSION['username']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#4").hide();
        $("#123").hide();
        $("#12").show();
        $("#abc").click(function(){
            $("#12").show();
            $("#4").hide();
            $("#123").hide();

        });
        $("#abc2").click(function(){
            $("#12").hide();

            $("#123").hide();
            $("#4").show();


        });
        $("#abc1").click(function(){
            $("#12").hide();

            $("#123").show();
            $("#4").hide();

        });


    });
</script>
<style>

    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 50%;
        margin-top: 6px;

    }

    #4{
        padding-bottom:120px ;
        max-width: 40px;
    }
    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: green;
        border: none;
        color: white;
        text-align: center;
        font-size: 28px;
        padding: 15px;
        width: 200px;
        position: relative;
        bottom: -20px;
        left:900px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
    table{
        position: static;
        display: inline-table;
        font-weight: bold;
        font-family:'Roboto', sans-serif;
        width: 120px;
        margin-top: 10px;
        margin-left:12px;
        margin-right:12px;
        background-color:white;
        color:black;
        font-family: 'Roboto', sans-serif;
        font-size:15px;
        border-radius: 3px;
        z-index: -1;
    }
    .img1{
        position: relative;
        width: 230px;
        height: 187px;
        object-fit:cover;
        margin: 10px;
        border-radius:1px;

    }
    table tr{
        padding:10px;
    }
#4{
  max-height: 1900px;
}
    table:hover{
        transform: scale(1.05);
        transition:transform 0.2s ease-in;
        box-shadow: 5px 2px 20px grey;
        background-color: deepskyblue;
        color:red;
        visibility: visible;
    }
</style>
<style>
    input[type="submit"]{
        
        background-color: #555;
        color: #fff;
        border-radius: 10px;
    }
</style>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="styles4.css">
<title>CSS MenuMaker</title>
<meta charset=utf-8 />
<title>JS Bin</title>

</head>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<body>

<div id='cssmenu' style='position:fixed'>
    <div class="company-logo" >
        <h1>SPACE FOR COMPANY LOGO</h1>
    </div>
    <ul>

        <li id="1" onclick="changeclass(this.id)" ><a href='#'   id="abc">Profile</a></li>
        <li><a href='#top-ones' id="abc1" >Upload</a></li>
        <li><a href='#categories' id="abc2" >Your Products</a></li>


        
    </ul>
</div>
<br>

<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div id="12">

        <?php
        $sql1="SELECT user_name FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $username = $row1['user_name'];

        $sql1="SELECT user_state FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userstate = $row1['user_state'];

        $sql1="SELECT user_gender FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usergender = $row1['user_gender'];

        $sql1="SELECT user_email FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $useremail = $row1['user_email'];

        $sql1="SELECT user_nick FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usernick = $row1['user_nick'];

        $sql1="SELECT user_hobbies FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userhobby= $row1['user_hobbies'];

        $sql1="SELECT user_address FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $useradd = $row1['user_address'];


        $sql1="SELECT user_contact FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usercontact = $row1['user_contact'];

        $sql1="SELECT user_desc FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userdesc = $row1['user_desc'];

        $sql1="SELECT user_gender FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $usergender = $row1['user_gender'];

        $sql1="SELECT user_interest FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userint = $row1['user_interest'];

        $sql1="SELECT user_skill FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userskill = $row1['user_skill'];

        $sql1="SELECT user_city FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $userrcity = $row1['user_city'];

        $sql1="SELECT user_location FROM user_register WHERE user_nick ='$nick'";
        $result1 =mysqli_query($db,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $target = $row1['user_location'];


        ?>
        <div id = "details"style=" position:relative;z-index:-1; text-align: justify;max-width:500px;  font-size: 16px; font-family: Courier;font-weight:bold; left:450px; ">
            <?php
            echo "Userame: " .$usernick . "<br><br>";

            echo "Name: " .$username . "<br><br>";

            echo "Email: " .$useremail . "<br><br>";
            echo "Gender: " .$usergender .  "<br><br>";
            echo "Address: " .$useradd . "<br><br>";
            echo "Hobby: " .$userhobby . "<br><br>";
            echo "Interest: " .$userint .  "<br><br>";
            echo "Skills: " .$userskill .  "<br><br>";
            echo "Contact: " .$usercontact .  "<br><br>";
            echo "City: " .$userrcity.  "<br><br>";
            echo "Description: " .$userdesc.  "<br><br>";

            ?>
    </div>
    </div>


<div id="123">
    <div id="row">
        <div id="column" class="column1">
            <img id="blah" src="images/abc.jpg" alt="abc.jpg"  style="width:308px;height:308px;right:81px;padding-left: 90px;padding-right: -80px;"/>


        </div>

        <div id="column2" class="column2">
            <form name="form" action="tpdb.php" method="POST" id="form1" enctype="multipart/form-data">

                Product Name:<br>        <br>

                <input type="text"  name="product_name" placeholder="Enter Name of Product" ><br>        <br>
                Product  Category:<br>        <br>
                <select id="states" class="form-control" name="product_category">
                    <option value="HANDLOOM">HANDLOOM</option>
                    <option value="PAINTINGS">PAINTINGS</option>
                    <option value=" WOODEN ART"> WOODEN ART</option>
                    <option value="CRAFT ITEMS">CRAFT ITEMS</option>


                </select>
                <br>
                <input type="file" name="foto"  onchange="readURL(this)"  style="position:relative; right :480px; top: 150px;  ";>

                <br>
                Product cost:<br>        <br>
                <input type="text" name="product_cost" placeholder="Enter Price">        <br>        <br>
                Description In short:<br>        <br>
                <textarea type="text" name="product_description" placeholder="Enter Description" style="height:200px"></textarea>   <br>
                <button type="submit" name="upload" form="form1" value="Submit" style=" background-color: #555;
            color: #fff;
            border-radius: 10px;">Submit</button>
            </form>
        </div>

    </div>
</div>
    <a href="itempage.php">LOGOUT</a>
    <div id="4" >
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'sih');
$abc= $_SESSION['username'] ;

        
        $s= mysqli_query($db,"SELECT product_cost,product_name,location,product_category FROM image WHERE image.user_name='$abc'");
        $num_rows = mysqli_num_rows($s);

$ct=0;
        while ($row = mysqli_fetch_array($s) ) {

            if ($ct != 5) {
                echo "<table id='users' style=\"z-index:-1;\">
                     <tr>
                <th> <a href='product.php?data=$row[product_name]'><img  class = 'img1' src= ".$row['location']."></a>
                </th>
                </tr>
            <td   style='text-align:center'> Name:$row[product_name]</td>
                </tr>
                <tr>
                <td style='text-align:center'>Price: $row[product_cost]</td>
                </tr>
                <tr>
                <td style='text-align:center'>Category: $row[product_category]</td>
                </tr>
                </table>
                <script></script>
                
                
                 <script data-require=\"jquery\" data-semver=\"2.1.4\" src=\"http://code.jquery.com/jquery-2.1.4.min.js\"></script>
  <script>
 
  onload = function() {
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('users ').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
            alert(this.rowIndex + 1);
        }
    }
}
  </script>
                
                
                ";
                $ct = $ct + 1;
            }
        }

        ?>
        <button class="button" onclick="window.location.href='artistproduct.php'" style=" position:relative; vertical-align:middle;  left:900px;"><span>View All </span>
    </div>
</body>
</html>
