
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>EventGuy</title>
		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- Material Design Bootstrap -->
		<link href=<?=base_url()."css/mdb.min.css"?> rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href=<?=base_url()."css/style.css"?> rel="stylesheet">


		<!-- SCRIPTS -->
		<!-- JQuery -->
		<script type="text/javascript" src=<?=base_url()."js/jquery-3.3.1.min.js"?> ></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src=<?=base_url()."js/popper.min.js"?> ></script>
		

	</head>

	<body>

		<nav class="navbar sticky-top navbar-expand-lg navbar-dark"  style="background-color: #563d7c;">
		  <a class="navbar-brand" href="<?=base_url()?>">
		    <img src="<?=base_url().'images/logo.png'?>" width="54" height="33" class="d-inline-block align-top border border-white" alt="">
		  </a>
		  <a class="navbar-brand" href="<?=base_url()?>">EventGuy</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?=base_url()?>">Events<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" id="about" href=<?=base_url()."pages/home/about"?>>About Us</a>
		      </li>
		    </ul>

			
			<form class="form-inline mr-5">
			  <div class="md-form my-0">
			    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			    <button class="btn btn-sm btn-outline-light" type="submit">Search</button>
			  </div>
			</form>
			  
		

