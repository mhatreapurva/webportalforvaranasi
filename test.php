<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'sih');
  if(isset($_SESSION['username'])){
    echo "<script type='text/javascript'>location.href = 'test-login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>

    <title>Home Page</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	
	<link rel="stylesheet" type="text/css" href="test.css">
	
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Human Welfare Association Varanasi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="E:\SIH'\test.html">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#Artists">Top Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#products">Shop Products</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Sign In.html">Login/Register</a>
        </li>
		
		 </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/O7fzqFEfLlo/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->

<div class="container" id="Artists">
<section class="py-5">
    <h1 class="font-weight-light"> Top 100 Artists </h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in. 
                     Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <button type="button" class="btn btn-outline-primary" style="float: right;"> View All </button>
</section>
</div>

<div class="container" id="categories"> 
<section class="py-5">
   <h1 class="font-weight-light">Categories</h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a></h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in. 
                     Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <button class="btn btn-outline-primary" style="float: right;"> <a href="E:\SIH'\cards.html"> Explore More </a> </button>
</section>
</div>


<div class="container" id="products"> 
<section class="py-5">
   <h1 class="font-weight-light">Our Products</h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a></h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in. 
                     Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="E:\SIH'\sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <button class="btn btn-outline-primary" style="float: right;"> <a href="allproduct.php"> Explore More </a> </button>
</section>
</div>


<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left bg-dark text-white">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 bg-dark text-white">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
  <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-dark text-white">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> Team Azukarin</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
	
</body>
</html>