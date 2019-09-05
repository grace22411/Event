<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
	<link rel="stylesheet" href="css/style3.css" >
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
     <link type="text/css" rel="stylesheet" href="assets/css/materialize/css/materialize.min.css"  media="screen,projection"/> 
     <script src="js/jquery-1.11.1.min.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  

  <ul id="dropdown1" class="dropdown-content">
	  <li><a href="profile.html">Profile</a></li>
	  <li class="divider"></li>
	  <li><a href="#!">Edit Account</a></li>
	  <li class="divider"></li>
	  <li><a href="login.html">Log Out</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper">
			  <div class="logo"><h1><span class="first">EVENT</span><span class="second">collection</span></h1></div>
			  
			  <a href="#" data-activates="mobile-demo" class="right button-collapse"><i class="material-icons">menu</i></a>
			  <ul class="navbar right hide-on-med-and-down">
				<li><a href="#"><input placeholder="search" type="search" ></a></li> 
				<li><a href="#" class="btn btn-floating pulse">
				 <i class="fa fa-bell"></i></a></li> 
				 <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>
			  </ul>
			  
			  <ul class="side-nav" id="mobile-demo">
				<li id="about"><a href="#">SERVICES</a></li>
			  </ul>
			</div>
  		</nav>