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
<body>

<div id='cssmenu' style='position:fixed'  id="head">
    <div class="company-logo" >
        <h1>SPACE FOR COMPANY LOGO</h1>
    </div>
    <ul>

        <li id="1" onclick="changeclass(this.id)" ><a href='#'   >Home</a></li>
        <li><a href='#top-ones'>Top Artisans</a></li>
        <li><a href='#categories'>Categories</a></li>
        <li><a href='#'>Enquiry</a></li>
        <li><a href='#'>About Us</a></li>
        <li><a href='Sign In.html' id="login">Login/Register</a></li>
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
<div class="w3-section" >

    <img class="mySlides" src="https://png.pngtree.com/thumb_back/fw800/back_pic/03/70/17/5357b5b77a0f80c.jpg" style="width:100%">
    <img class="mySlides" src="https://images.pexels.com/photos/248159/pexels-photo-248159.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width:100%">
    <img class="mySlides" src="https://pbs.twimg.com/profile_images/779305023507271681/GJJhYpD2_400x400.jpg" style="width:100%">
</div>

<div class="top-ones" style="padding-top:150px ; padding-left: 10px;height: 750px;">
    <h1 style="color: #47c9af;" >TOP ONES</h1>

</div>












</div>
<div class="categories" id='categories' style="height:750px"z>
    <h1 style="color: #47c9af;" >Categories</h1>
    <center>
        <a class="et_pb_button" title="Relevant Title" href="#">
            <img class="adi" border="0" src="woodenart.jpg" width="100px" height="100px">
            WOODEN ART</a>
        <a class="et_pb_button" title="Relevant Title" href="#">
            <img class="adi" border="0" src="saree.jpg" width="100px" height="100px">HANDLOOM</a>
        <a class="et_pb_button" title="Relevant Title" href="#">
            <img class="adi" border="0" src="paint2.jpg" width="100px" height="100px">PAINTINGS</a>
        <a class="et_pb_button" title="Relevant Title" href="#">
            <img class="adi" border="0" src="craft.jpg" width="100px" height="100px">CRAFT ITEMS</a>
    </center>
</div>
<footer class="ct-footer">
    <div class="container">

        <ul class="ct-footer-list text-center-sm">

            <li>
                <h2 class="ct-footer-list-header">Services</h2>
                <ul>
                    <li>
                        <a href="">Design</a>
                    </li>
                    <li>
                        <a href="">Marketing</a>
                    </li>
                    <li>
                        <a href="">Sales</a>
                    </li>
                    <li>
                        <a href="">Programming</a>
                    </li>
                    <li>
                        <a href="">Support</a>
                    </li>
                </ul>
            </li>

            <li>
                <h2 class="ct-footer-list-header">Contact Us</h2>
                <ul>
                    <li>
                        <a href="">WebCorpCo Blog</a>
                    </li>
                    <li>
                        <a href="">Hackathons</a>
                    </li>
                    <li>
                        <a href="">Videos</a>
                    </li>
                    <li>
                        <a href="">News Releases</a>
                    </li>
                    <li>
                        <a href="">Newsletters</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">About</h2>
                <ul>
                    <li>
                        <a href="">FAQ</a>
                    </li>
                    <li>
                        <a href="">Our Board</a>
                    </li>
                    <li>
                        <a href="">Our Staff</a>
                    </li>

                </ul>
            </li>
        </ul>

    </div>
    <div class="ct-footer-post">
        <div class="container">
            <div class="inner-left">
                <ul>
                    <li>
                        <a href="">FAQ</a>
                    </li>

                </ul>
            </div>
            <div class="inner-right">
                <p>Copyright © 2016 WebCorpCo.&nbsp;<a href="">Privacy Policy</a></p>
                <p><a class="ct-u-motive-color" href="" target="_blank">Web Design</a> by AZUKARIN on <a href="" target="_blank">SIH BANTAI</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>