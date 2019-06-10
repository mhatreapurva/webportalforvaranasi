
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'sih');
$nick=$_SESSION['username']; ?>
<!doctype html>
<html lang=''>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>CSS MenuMaker</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#cart").hide();
        $("#details").show();
        $("#cart1").hide();

        $("#a").click(function(){
            $("#details").show();
            $("#cart").hide();
            $("#cart1").hide();
            $("#cart").hide();
        });
        $("#b").click(function(){
            $("#cart").show();
            $("#details").hide();
            $("#cart1").hide();

        });
        $("#c").click(function(){

        });


    });
</script>
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
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="styles4.css">
<body>

<div id='cssmenu' style='position:fixed'  id="head">
    <div class="company-logo" >
        <h1>SPACE FOR COMPANY LOGO</h1>
    </div>
    <ul>


        <li><a href='#a' id="a">Your Profile</a></li>
        <li><a href='#b' id="b">CART</a></li>

        <!-- <li><a href='#'>Sign Up</a></li> -->
    </ul>
</div>
<br>
<!-- <div class="featured">

</div> -->
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
    <br>
    <br>
    <div id="column" class="column1">



    </div>

    <div id = "details" style=" position:relative;z-index:-1; font-size: 16px; font-family: Courier;font-weight:bold; left:550px; ">
        <img id="blah" src="<?php echo $target ?>" alt="abc.jpg" style="width:308px;height:308px;right:81px;padding-left: 90px;padding-right: -80px;"/>

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

<div id="cart">
    <?php

    $db = mysqli_connect('localhost', 'root', '', 'sih');


    //$sql = "SELECT product_cost,product_name,location,product_category FROM image WHERE image.user_name=$abc";
    $s= mysqli_query($db,"SELECT i.product_cost,i.product_name,i.location,i.product_category FROM image i, justcart j WHERE j.product_name=i.product_name AND j.user_name='$usernick' ");
    $num_rows = mysqli_num_rows($s);
    //echo $num_rows;
    $ct=0;
    while ($row = mysqli_fetch_array($s) ) {

    if ($ct != 4) {
    echo "<table id='users' style=\"z-index:-1;\">
        <tr>
            <th> 
                <a href='product.php?data=$row[product_name]'>
                    <img  class = 'img1' src='" . $row['location'] . "'>
                </a>
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








</div>

<div id="#123">
</div>


</div>






</body>
</html>

<style>
   #column{
       position: fixed;
   }
    #details{
        color: black;
    }
</style>

<style>
    table{
        position: relative;
        display: inline-table;
        font-weight: bold;
        font-family:'Roboto', sans-serif;
        width: 180px;
        margin-top: 10px;
        margin-left:12px;
        margin-right:12px;
        background-color:white;
        color:black;
        font-family: 'Roboto', sans-serif;
        font-size:15px;
        border-radius: 3px;

    }
    .img1{
        position: relative;
        width: 330px;
        height: 187px;
        object-fit:cover;
        margin: 10px;
        border-radius:1px;

    }
    table tr{
        padding:10px;
    }

    table:hover{
        transform: scale(1.05);
        transition:transform 0.2s ease-in;
        box-shadow: 5px 2px 20px grey;
        background-color: deepskyblue;
        color:red;
        visibility: visible;}
    #head{
        position:static;
        background-color: white;
        backface-visibility: visible;
        background-position: unset;
    }
</style>
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
        width: 250px;
        height: 350px;
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
