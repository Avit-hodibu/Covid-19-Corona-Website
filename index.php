<!DOCTYPE html>
<html>
<head>
	<title>coronago</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php';?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/rajeshdai.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>RAJESH DAI</h3>
        <p>corona is afraid of rajesh dai</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/besar.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>DR. KP OLI</h3>
        <p>how to deal with corona virus</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/nepalihoni.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>DR. KP OLI</h3>
        <p>nepalese people have great immunity power to fight with corona that other peoples</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
<div class="py-5">
	<h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12" >
			<div class="card">
  <img class="card-img-top" src="images/update.jpg" alt="">
  <div class="card-body">
    <h4 class="card-title">LIVE COUNTDOWN</h4>
    <p class="card-text">we show you the live update of corona virus from all over the world </p>
    <a href="stats.php" class="btn btn-primary">to watch</a>
  </div>
</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12" >
			<div class="card">
  <img class="card-img-top" src="images/doctorbot.jpg" alt="">
  <div class="card-body">
    <h4 class="card-title">HEALTH CHECK-UP</h4>
    <p class="card-text">You can confirm that are in danger of covid-19 or not in free. Hope you check on your health</p>
    <a href="checkup.php" class="btn btn-primary">check-up</a>
  </div>
</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12" >
			<div class="card">
  <img class="card-img-top" src="images/who.jpg" alt="">
  <div class="card-body">
    <h4 class="card-title">ADVICE FROM WHO</h4>
    <p class="card-text">You can reduce your chances of being infected or spreading COVID-19 by taking some simple precautions.</p>
    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="btn btn-primary">to watch</a>
  </div>
</div>
		</div>
		
	</div>
	
</div>
</section>



<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/covid.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">Information about corona</h2>
			<p class="py-3">Coronago’s Medical Affairs team focuses on ensuring Coronago’s content, products, and services uphold the highest standards of medical integrity. Our dedicated team also manages our extensive clinician network, which provides medical review for all clinical content. Covering the full spectrum of medicine, Coronago’s physicians, nurses, public health experts, and patient advocates help ensure that the information you receive is accurate, evidence based, current, and trustworthy.
			</p>
			<a href="about.php" class="btn btn-success">For More</a>
		</div>

	</div>
</div>
</section>

<?php include 'footer.php';?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>