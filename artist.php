<?php
include_once 'header.php';


?>
<?php
include_once '../loginsystem/includes/dbh.inc.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);//Just for fun total count of community
$resultCheck = mysqli_num_rows($result);
echo "<h3 class='welcome'>"."Welcome back, ".$_SESSION["u_first"]."</h3>";
#Catching Stored data to push to front end.

echo "<head><style href='https://fonts.googleapis.com/css?family=Roboto' ></style></head>

    <form method='post' action='upload.php'>
    <button class='upload' type='submit'>+</button>
    </form>";//UploaD wORKS

echo'<form  method="POST" action="search.php">
    <center>
    <input  type="textbox" class="search" id="searchbar" placeholder="Search.." name="searchbook">
    <input type="submit" class="search" value="Go" name="search" id="hello">
    </center>
    </form>';

echo'<form  method="POST" action="bucket.php">
    <center>
    <input type="submit" class="search" value="List" name="search" id="list" >
    </center>
    </form>';


echo'<form  method="POST"  action="bucket.php" class="bookbook" >
    <center>
    <input  type="textbox" class="book"  placeholder=":-)" name="bookbook">
    <input type="submit" value="Book" class="book">
    </center>
    </form>';
echo'<form  method="POST"  action="Profile.php" class="bookbook" >
    <center>
    
    <input type="submit" value="Profile" class="book">
    </center>
    </form>';
if(isset($_POST['bookbook'])){
    $temp = $_POST['bookbook'];
    $_SESSION['bookingid'] = $_POST['bookbook'];
    echo $temp;
}
echo "<center><div>";

if (isset($_POST['submit'])){
    $name=$_POST['bookname'];
    $subject=$_POST['subject'];
    $isbn=$_POST['isbn'];
    $sem=$_POST['sem'];
    $orgprice=$_POST['orgprice'];
    $sellingprice=$_POST['sellingprice'];

    $discount = ($_POST['orgprice']-$_POST['sellingprice'])/($_POST['orgprice']) * 100;
    $user=$_SESSION['u_id'];

    mysqli_query($conn,"INSERT INTO book(book_isbn,book_org_price,book_price,book_discount,user_id,book_subject,book_name,sem) VALUES($isbn,$orgprice,$sellingprice,$discount,$user,'$subject','$name',$sem)");

}
//Search Query Starts here.
if (isset($_POST['search'])){
    $letter = $_POST['searchbook'];
    //Letter caught successfully
    //echo $letter;
    //mysqli_query($conn,"INSERT INTO book(book_isbn,book_org_price,book_price,book_discount,user_id,book_subject,book_name,sem) VALUES($isbn,$orgprice,$sellingprice,$discount,$user,'$subject','$name',$sem)");
    $fetch1 = mysqli_query($conn, "SELECT * FROM book WHERE book_name LIKE '$letter%'" );
    while ($row = mysqli_fetch_array($fetch1)){
        echo "<table><tr>
                <th><img class = 'book-cover' src='images/".$row['image']."'  ></th>
                </tr>
                <tr>
                <td style='text-align:center'>Name:$row[book_name]</td>            
                </tr>
                <tr>
                <td style='text-align:center'>Price: $row[book_org_price]</td>            
                </tr>
                
                <tr>
                <td style='text-align:center'>Fresh Price: $row[book_price]</td>            
                </tr>
                
                <tr>
                <td style='text-align:center'>Booking Id: $row[book_id]</td>
                </tr>
                <tr>
                <form method='POST' action='bookmate.php'>
                <td style='text-align:center' ><button id='$row[user_first]' class='purchase' type='submit' name='submitbucket' >+</button></td>
                </form>
                </tr>
                </table>";
    }
}

//Search query bends here
?>
<?php
/*$select_query="Select book_id from book";
$select_query_run =     mysqli_query($conn,$select_query);
echo "<select name='category' class='id'>";
while ($select_query_array=   mysqli_fetch_array($select_query_run) )
{
   echo "<option id='$select_query_array[book_id]' onClick='getbook(this.id)' >".$select_query_array["book_id"]."</option>";
}
echo "</select>";
echo $select_query_array["book_id"];*/
?>
<?php
{
    $fetch = mysqli_query($conn, "SELECT book.*, users.user_first FROM book LEFT JOIn users ON book.user_id = users.user_id" );
    while ($row = mysqli_fetch_array($fetch)){
        if($row['verified']==1000){
            echo "<table><tr>
            <th><img onclick='searchbook()' class = 'book-cover' src='images/".$row['image']."' ></th>
            </tr>
            <tr>
            <td style='text-align:center'>Name:$row[book_name]</td>            
            </tr>
            <tr>
            <td style='text-align:center'>Price: $row[book_org_price]</td>            
            </tr>
            
            <tr>
            <td style='text-align:center'>Fresh Price: $row[book_price]</td>            
            </tr>
            <tr>
            <td style='text-align:center'>Uploaded by: $row[user_first]</td>            
            </tr>
            <tr>
            <td style='text-align:center'><img class='verify' src='images/verified_badgy.jpg'></td>
            </tr>
            <tr>
            <td style='text-align:center'>Booking Id: $row[book_id]</td>
            </tr>
            </table>";}
        else{
            echo "<table><tr>
                <th><img class = 'book-cover' src='images/".$row['image']."' ></th>
                </tr>
                <tr>
                <td style='text-align:center' id='extrainfo'>Name:$row[book_name]</td>            
                </tr>
                <tr>
                <td style='text-align:center' id='extrainfo'>Price: $row[book_org_price]</td>            
                </tr>
                
                <tr>
                <td style='text-align:center' id='extrainfo'>Fresh Price: $row[book_price]</td>            
                </tr>
                <tr>
                <td style='text-align:center' id='extrainfo'>Uploaded by: $row[user_first]</td>            
                </tr>
                <tr>
                <td style='text-align:center'>Booking Id: $row[book_id]</td>
                </tr>
                
                </table>";
        }
    }
    echo "</div></center>";
    echo"<h2>Bookmate Inc. All Rights Reserved</h2>";
}
if (isset($_POST['submitbucket'])){
    $newvar = $test;
    echo $newvar;
}



?>

<?php
echo' <script type="text/javascript">
    function getbook(x){
        alert("Hello World");
    }
</script>';
?>

<?php
include_once 'footer.php';
?>

<style >
    h3 {
        position:absolute;
        left: 0px;
        top: -30px;
        padding: 15px 5px;
        font-weight: bold;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        color: white;
    }
    .upload{
        background-color: grey;
        border-radius: 10px;
        font-size: 20px;
        color: white;
        font-weight: bold;
        outline-style: none;
        border-radius: none;
        font-family: 'Roboto', sans-serif;
    }
    img{
        position: relative;
        width: 200px;
        height: 267px;
        object-fit:cover;
        margin: 10px;
        border-radius:5px;

    }
    h1{
        color: red;
        text-align: center;
        font-weight: bold;
        font-size:40px;
        font-family:'Roboto', sans-serif;
    }
    #adjust{
        position: relative;
        top: 20px;
        left: -190px;
    }
    h2{
        color: black;
        text-align: center;
        font-weight: bold;
        font-size:15px;
        font-family:'Roboto', sans-serif;
    }

    table{
        position: relative;
        display: inline-table;
        font-weight: bold;
        font-family:'Roboto', sans-serif;
        width: 250px;
        margin-top: 30px;
        margin-left:12px;
        margin-right:12px;
        background-color:white;
        color:black;
        font-family: 'Roboto', sans-serif;
        font-size:15px;
        border-radius: 10px;

    }
    table tr{
        padding:10px;
    }
    body{
        background-color: #262626;

    }
    table:hover{
        transform: scale(1.2);
        transition:transform 0.2s ease-in;
        box-shadow: 5px 2px 20px grey;
        background-color: #ff3333;
        color:white;
        visibility: visible;
    }
    .verify{
        position: relative;
        height: 20px;
        width: 20px;

    }
    .search{

        text-align: center;
        margin:1px;
        border:none;
        outline:none;
        font-family: 'Roboto', sans-serif;
        top:-110px;
        border-radius:10px;
        font-weight:bold;



    }
    .upload{
        position: relative;
        background-color:#ff3333;
        outline: none;
        border:none;
        font-weight:bold;
        font-family: 'Roboto', sans-serif;
        border-radius:50%;
        font-size:30px;
        top: 10px;
        left:5px;
        width: 50px;
        height:50px;
    }
    .upload:hover{
        background-color:#a30303;
    }
    .purchase{
        color:white;
        font-family: 'Roboto', sans-serif;
        border-radius: 10px;
        height: 20px;
        width: 20px;
        background-color:  #47d147;
        text-align: center;
        padding: 1px;
        border: none;
        outline: none;
    }
    #searchbar{
        height: 30px;
        width: 400px;
    }
    #hello{
        height: 30px;
        width: 50px;
        background-color: white;
    }
    #hello:hover{
        background-color: darkred;
    }

    .id{
        position: relative;
        float:right;

        top: -190px;
    }
    #list{
        position: relative;
        top:-158px;
        left: 280px;
        height: 30px;
        color:white;
        background-color:white;
        width: 80px;
        color:black;

    }
    #list:hover{
        background-color: #a30303;
    }
    .bookbook{

        text-align: center;
        top: -205px;
        left: 440px;


    }
    .book{
        position: relative;
        text-align: center;
        border-radius: 10px;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        border:none;
        outline:none;
        font-size: 20px;
        background-color:white;
        color:black;
        width: 100px;
        height: 30px;
        left: 0px;
        margin: 0 auto;
    }
    #book{
        position: relative;
        text-align: center;
        border-radius: 10px;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        border:none;
        outline:none;
        font-size: 20px;
        background-color:white;
        color:black;
        width: 100px;
        height: 30px;
        left: -470px
    }
</style>

