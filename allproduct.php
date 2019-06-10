<?php
/**
 * Created by PhpStorm.
 * User: adity
 * Date: 22-02-2019
 * Time: 11:09
 */
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="styles4.css">

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
    input[type="submit"]{
        /* change these properties to whatever you want */
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
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>
    $(document).ready(function () {
        var table = $('#users').DataTable();
        $('#users tbody').on('click', 'tr', function () {
            console.log(table.row(this).data());
        });
    });
</script>
<![endif]-->

</head>

    </html>

<?php
$db = mysqli_connect('localhost', 'root', '', 'sih');


//$sql = "SELECT product_cost,product_name,location,product_category FROM image WHERE image.user_name=$abc";
$s= mysqli_query($db,"SELECT product_cost,product_name,location,product_category FROM image");
$num_rows = mysqli_num_rows($s);
//echo $num_rows;
$ct=0;
while ($row = mysqli_fetch_array($s) ) {


        echo "<table id='users' style=\"z-index: -1;\">
                     <tr>
                <th> <a href='product.php?data=$row[product_name]'><img  class = 'img1' src='" . $row['location'] . "'></a>
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


}

?>