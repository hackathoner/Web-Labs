<html>
	<head>
		<title>TJ Guides</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">TJ Guides</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Math <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Geometry</a></li>
		            <li><a href="#">Algebra 2/Trig</a></li>
		            <li><a href="#">Precalculus</a></li>
		            <li><a href="#">Calculus AB</a></li>
		            <li><a href="#">Calculus BC</a></li>
		            <li><a href="#">Multivariable Calculus</a></li>
		            <li><a href="#">Linear Algebra</a></li>
		            <li><a href="#">AMT</a></li>
		            <li><a href="#">Differential Equations</a></li>
		          </ul>
        		</li>
        		<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Science<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Biology</a></li>
		            <li><a href="#">Chemistry</a></li>
		            <li><a href="#">Physics</a></li>
		            <li><a href="#">Geosystems</a></li>
		            <li><a href="#">AP Biology</a></li>
		            <li><a href="#">AP Chemistry</a></li>
		            <li><a href="#">AP Physics</a></li>
		            <li><a href="#">DNA Science</a></li>
		            <li><a href="#">Organic Chemistry</a></li>
		            <li><a href="#">Bio-Nanotechnology</a></li>
		          </ul>
        		</li>

        		<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">History<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">World History</a></li>
		            <li><a href="#">AP US History</a></li>
		            <li><a href="#">US/VA History</a></li>
		            <li><a href="#">AP Government</a></li>
		            <li><a href="#">AP European History</a></li>
		            <li><a href="#">Law and Society</a></li>
		            <li><a href="#">Religious Studies</a></li>
		            <li><a href="#">History of Science and Ideas</a></li>
		          </ul>
        		</li>
				<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">English<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">English 9</a></li>
		            <li><a href="#">English 10</a></li>
		            <li><a href="#">English 11</a></li>
		            <li><a href="#">AP Literature</a></li>
		            <li><a href="#">AP Language</a></li>
		          </ul>
        		</li>
		        <li class="dropdown"><a href="#">Other</a></li>
			 </ul>
		     <div class="divider"></div>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="login.php">Log in</a></li>
		        <li><a h
		        ref="signup.php">Sign up</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<div class="jumbotron">
		 <div class="container">
		  <h1 class="title">TJ Guides</h1>
		  <p class="title">An online repository for study guides from past TJ students</p>
		  	<div class="form-group col-md-6 col-md-offset-3">
			  <input class="form-control search-form" id="focusedInput" type="text" value="Start searching!">
			</div>
		  </div>
		</div>

		<!-- <section id="footer">

		</section>
 -->
	</body>
</html>


<?php
	require 'vendor/autoload.php';
	use Parse\ParseClient;
	ParseClient::initialize('p2j14hndp186bSPx3Wvab5qbIKypRrtshmXcqgnc', 'h7hGHUj1IulfKW55Dc7HFgtthblt4K5CvzkhIvxV', 's9Y1uBwoCM8UvRliOJbJks00qDoSGS1N6tPQI4TC');
	use Parse\ParseObject;
 

?>