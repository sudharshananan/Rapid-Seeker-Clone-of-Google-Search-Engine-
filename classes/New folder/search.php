<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  Email='$email' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['detsuid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<?php
include("config.php");
include("classes/SiteResultsProvider.php");
include("classes/ImageResultsProvider.php");
include("classes/SitesResulgtsProvider.php");
 include("classes/SiteResultsProviderD.PHP");
include("classes/SitesResulgtsProviderz.PHP");
 if(isset($_GET["term"])){
        $term = $_GET["term"];
    }else{
        exit("please letter search > 0");
    }
    $type = isset($_GET["type"]) ? $_GET["type"] : "sites";
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
?>


<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="headerContent">
                <div class="logoContainer">
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="Google Title">
                    </a>
                </div>
                <div class="searchContainer">
                    <form action="search.php" method="get">
                        <div class="searchBarContainer">
                            <input type="hidden" name="type" value="<?php echo $type; ?>">
                            <input type="text" class="searchBox" name="term" value="<?php echo $term; ?>">
                            <button class="searchButton"><img src="assets/images/icons/search.png"></button>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>




</body>

        </div>
							
                    </form>
                </div>

			





<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 	
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
	
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  height: 100%; /* Full height */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<div align="right">
 

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>
<div id="id01" class="modal">

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	


	<div class="row">
			<h2 align="center">RapdiSeeker Login</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" id="" name="login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email"  required="true">
							</div>	
							 
							 
							<div class="form-group">
								
							</div>
							 
							<div class="form-group">
								
								<input class="form-control" placeholder="Password" name="password" type="password"  required="true" ID="PSWD">
								<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("PSWD");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
							</div>
							<div class="checkbox">
								<button type="submit" value="login" name="login" class="btn btn-primary">login</button><span style="padding-left:250px">
     <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="register.php" class="btn btn-primary">Register</a></a></span>

 
								<a href="register.php" class="btn btn-primary"> v7Register</a></span>
							</div>
    </div>
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>






















			
            </div>
			
		
			
            <div class="tabsContainer">
                <ul class="tabList">
                    <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
                        <a href="<?php echo "search.php?term=$term&type=sites"; ?>">
                            All
                        </a>
                    </li>
                   
				<li class="<?php echo $type == 'site' ? 'active' : '' ?>">
                        <a href="<?php echo "search.php?term=$term&type=site"; ?>">
                            Books
                        </a>
                    </li>
                    

                    
				<li class="<?php echo $type == 'VIDEO' ? 'active' : '' ?>">
                        <a href="<?php echo "search.php?term=$term&type=VIDEO"; ?>">
                            Videos
                        </a>
                    </li>
				
				
            <li class="<?php echo $type == 'map' ? 'active' : '' ?>">
                        <a href="<?php echo "search.php?term=$term&type=map"; ?>">
                            map
                        </a>
						
                    </li>

		<li>
		<a href="fir.html">map</a>
		</li>
		
                </ul>
            </div>
        </div>
        <div class="mainResultsSection">
            <?php
                if($type == "sites"){
                    $resultsProvider = new SiteResultsProvider($con);
                    $pageLimit = 20;
                }else{
                    $resultsProvider = new ImageResultsProvider($con);
                    $pageLimit = 30;
                }

                $numResults = $resultsProvider->getNumResults($term);
                echo "<p class='resultsCount'>About $numResults results</p>";
                echo $resultsProvider->getResultsHtml($page, $pageLimit, $term);
        




		?>


        <div class="mainResultsSection">
            <?php
                if($type == "VIDEO"){
                    $resultsProvider = new SiteResultsProviderD($con);
                    $pageLimit = 20;
                }else{
                    $resultsProvider = new ImageResultsProvider($con);
                    $pageLimit = 30;
                }

                $numResults = $resultsProvider->getNumResults($term);
               
                echo $resultsProvider->getResultsHtml($page, $pageLimit, $term);
        




        




		?>




  <div class="mainResultsSection">
            <?php
                if($type == "site"){
                    $resultsProvider = new SitesResulgtsProvider($con);
                    $pageLimit = 20;
                }else{
                    $resultsProvider = new ImageResultsProvider($con);
                    $pageLimit = 30;
                }

$numResults = $resultsProvider->getNumResults($term);
           echo $resultsProvider->getResultsHtml($page, $pageLimit, $term);
        





		?>

 <div class="mainResultsSection">
            <?php
			
			
			
			
			
			
					
		


	
	
                if($type == "map"){
					$resultsProvider = new SitesResulgtsProviderz($con);
                    $pageLimit = 20;
                }else{
                    $resultsProvider = new ImageResultsProvider($con);
                    $pageLimit = 30;
                }

$numResults = $resultsProvider->getNumResults($term);
           echo $resultsProvider->getResultsHtml($page, $pageLimit, $term);
		   ?>
	
					
				
		

		
				
   






        </div>
        <div class="paginationContainer">
            <div class="pageButtons">
                <div class="pageNumberContainer">
                    
                </div>
                <?php
                $pagesToShow = 10; // s? page hi?n th? t?i da
                $pageSize = 20; //s? bài trên trang
                $numPages = ceil($numResults / $pageSize); // s? trang b?ng làm tròn s? ( s? bài vi?t chia co s? bài trên trang )
                $pageLefts = min($pagesToShow, $numPages); //s? trang còn l?i b?ng s? nh? nh?t gi?a pha d? hi?n th? và s? trang
                $currentPage = $page - floor( $pagesToShow / 2 ); //trang hi?n t?i b?ng $page get tr? cho làm tròn s? xu?ng ( page hi?n th? chia 2 )
                if($currentPage < 1){ //n?u page hi?n tai nh? hon 1 thì set page hi?n t?i b?ng 1
                    $currentPage = 1;
                }
                if($currentPage + $pageLefts > $numPages + 1) { // n?u page hi?n t?i c?ng v?i s? trang còn l?i nh? hon t?ng s? trang c?ng 1
                    $currentPage = $numPages + 1 - $pageLefts; // thì s? trang hi?n t?i b?ng t?ng s? trang + 1 - s? trang còn l?i
                }
                while($pageLefts != 0 && $currentPage <= $numPages) { // n?u s? trang còn l?i ko b?ng 0 và s? trang hi?n t?i nh? hon ho?c b?ng t?ng s? trang
                    if($currentPage == $page){
                        echo "<div class='pageNumberContainer'>
                            <img src='assets/images/LOGO.png'>
                            <span class='pageNumber'>$currentPage</span>
                          </div>";
                    }else{
                        echo "<div class='pageNumberContainer'>
                                  <a href='search.php?term=$term&type=$type&page=$currentPage'>
                                    <img src='assets/images/page.png'>
                                    <span class='pageNumber'>$currentPage</span>
                                  </a>
                              </div>";
                    }
                    $currentPage++;
                    $pageLefts--;
                }

                ?>
            </div>
        </div>
    </div>












    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html> 