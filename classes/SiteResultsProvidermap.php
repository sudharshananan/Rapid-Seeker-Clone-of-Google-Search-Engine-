<?php
class SiteResultsProvidermap{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function getNumResults($term){
        $query = $this->con->prepare("SELECT COUNT(*) as total from sites 
                                        WHERE title LIKE :term
                                        OR url LIKE :term
                                        OR description LIKE :term
                                        OR keywords LIKE :term 
                                        ");
        $searchTerm = "%" . $term . "%";
        $query->bindParam(":term", $searchTerm);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row["total"];
    }
    public function getResultsHtml($page, $pageSize, $term) {
        $fromLimit = ($page - 1) * $pageSize;
        //ex: $pageSize = 20
        //page 1 : ( 1 - 1 ) * 20 = 0
        //page 2 : ( 2 - 1 ) * 20 = 20
        //page 3 : ( 3 - 1 ) * 20 = 40

        $query = $this->con->prepare("SELECT * 
										 FROM sites WHERE title LIKE :term 
										 OR url LIKE :term 
										 OR keywords LIKE :term 
										 OR description LIKE :term
										 ORDER BY clicks DESC
										 LIMIT :fromLimit, :pageSize 
										 ");

        $searchTerm = "%". $term . "%";
        $query->bindParam(":term", $searchTerm);
        $query->bindParam(":fromLimit", $fromLimit, PDO::PARAM_INT);
        $query->bindParam(":pageSize", $pageSize, PDO::PARAM_INT);
        $query->execute();
        $resultsHtml = "<div class='siteResults'>";

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $url = $row["url"];
            $title = $row["title"];
            $description = $row["description"];

            $title = $this->trimField($title, 120);
            $description = $this->trimField($description, 230);
            $resultsHtml .= "<div class='resultContainer'>
								<h3 class='title'>
									<a class='result' href='$url' data-linkId='$id'>
										$title
									</a>
								</h3>
								<span class='url'>$url</span>
								<span class='description'>$description</span>
							</div>";

        }
        $resultsHtml .= "</div>";

        return $resultsHtml;
    }
    private function trimField($string, $characterLimit){
        $dots = strlen($string) > $characterLimit ? "..." : "";
        return substr($string, 0, $characterLimit) . $dots;
		
		
		
		
		
		
		
		
		
		
		
		
		


<html lang="zxx">

<head>
	
	<!--
	 for-mobile-apps -->
	<m    $address=$_POST["address"];
 
	<eta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="A2Z Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">-->
	<!--<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">-->
	<style>
       #map {
        height: 400px;
        width: 100%;
       }
   </style>
</head>

<body>-
	
						
					

	<!-- register -->

	<div class="w3ls-section banner-single" id="register">
		<div class="container track_box">
			<h4 class="main-title">Searching Location !</h4>
			<div class="about-inner-main">
				
				<div id="map"></div>
					<!-- <form action="#" method="post" class="banner_form">
						<p>Please fill your details as mentioned below </p>
						<div class="sec-left">
							<label class="contact-form-text">name</label>
							<input placeholder="your name " name="t1" type="text" required="">
						</div>
						<div class="sec-right">
							<label class="contact-form-text">email</label>
							<input placeholder="xxx@xx.com " name="t2" type="email" required="">
						</div>
						<div class="sec-left">
							<label class="contact-form-text">mobileno</label>
							<input placeholder=" XXXXXX" name="t3" type="text" required="">
						</div>
						<div class="form-tx">
							<label class="contact-form-text">address</label>
							<textarea placeholder="your address" name="t4"required></textarea>
						</div>
						<div class="form-select sec-left">
							<label class="contact-form-text">from</label>
							<select name="t5">
								<option value="0">---- SELECT ----</option>
								<option value="1">cuddalore</option>
								<option value="2">pondy</option>
								<option value="3">chidhambram</option>
								<option value="4">chennai</option>
								<option value="5">selam</option>
								<option value="6">Other</option>
							</select>
						</div>
						<div class="form-select sec-right">
							<label class="contact-form-text">to</label>
							<select name="t6">
								<option value="0">---- SELECT ----</option>
								<option value="1">pondy</option>
								<option value="2">cuddalore</option>
								<option value="3">chidhambram</option>
								<option value="4">chennai</option>
								<option value="5">selam</option>
							</select>
						</div>
						<div class="clearfix"></div>
						<div class="form-select">
							<label class="contact-form-text">selectplan</label>
							<select name="t7">
								<option value="0">---- SELECT ----</option>
								<option value="1">daily pass (free)</option>
								<option value="2">normal coach $25</option>
								<option value="3">ultra delux $50</option>
								<option value="4">legent delux $100</option>
							</select>
						</div>
						<div class="wthree-text">
							<ul>
								<li>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span> I accept the terms and conditions</span>
									</label>
								</li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<input type="submit" name="submit" value="Submit">
					</form> -->
				
               <div id="map"></div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!-- //register -->
	<!-- footer -->
		<div class="cpy-text">
			<p>© 2018 ADS. All rights reserved | Design by
				<a href="http://w3layouts.com/">ADS project</a>
			</p>
		</div>

	</div>
	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			  $(".track_box").hide();
			
				$("#show").click(function(){
    $(".track_box").show();
});

			/*

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
 <script>
 	$(document).ready(function() {
    $("#txtboxToFilter").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
      function initMap() {
       var myCenter = new google.maps.LatLng(11.7700,79.7137); 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myCenter
        });
        var marker = new google.maps.Marker({
          position: myCenter,
         animation: google.maps.Animation.BOUNCE

        });
         marker.setMap(map);
      }
    </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFYkWABt_1pjcV3Oq4xX6LAlHUCrc9xQc&callback=initMap">
    </script>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>

	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			  $(".track_box").hide();
			
				$("#show").click(function(){
    $(".track_box").show();
});

			/*

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
 <script>
 	$(document).ready(function() {
    $("#txtboxToFilter").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
      function initMap() {
       var myCenter = new google.maps.LatLng(11.7700,79.7137); 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myCenter
        });
        var marker = new google.maps.Marker({
          position: myCenter,
         animation: google.maps.Animation.BOUNCE

        });
         marker.setMap(map);
      }
		</script>
	  <script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFYkWABt_1pjcV3Oq4xX6LAlHUCrc9xQc&callback=initMap">
		</script>




}
?>
