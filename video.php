

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE >
<!-- <html lang="zxx"> -->
<?php
if(isset($_POST["submit"]))
{
$id=$_POST["id"];

$url=$_POST["name"];
	$title=$_POST["T1"];
	$description=$_POST["T2"];
	$keywords=$_POST["T3"];
  $clicks=$_POST["T4"];
	
	if($id!="" &&$url!="" && $title!="" && $description!="" && $keywords!="" && $clicks!="")
	{
		mysql_connect("localhost","root","");
		mysql_select_db("google");
		$q="insert into videos values('$id','$url','$title','$description','$keywords','$clicks')";
        mysql_query($q);

		echo   "<center> <h1> <font color='GREEN'> **your upload has been sucessfull !** </font> </h1> </center>	";
	}
	else
	{
		echo  " <center> <h1> <font color='RED'>TRY AGAIN</font> </h1> </center>"; 
	}
	}


?>

 
<head>
	
	<!-- //for-mobile-apps -->
	<link href="css11/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--banner slider  -->
	<link href="css11/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link href="css11/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css11/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
</head>
<script type="text/javascript">
        now = new Date();
        randomNum = '';
        randomNum += Math.round(Math.random() * 3);
        randomNum += Math.round(Math.random() * 3);
        randomNum += now.getTime();
        window.onload = function () {
            document.getElementById("txt_usrid").value = randomNum.substr(0,5);
        }
    </script>
<body background="tems.png">

	
<div class="w3ls-section">
		<div class="container">
			<div class="register-top">
				<div class="col-md-5 col-sm-5 register-left">
					<img src="orderl.jpg" alt="" class="img-responsive" />
				</div>
				<div class="col-md-7 col-sm-7 register-right">
					<form action="#" method="post" class="banner_form">
						<h6>Upload videos</h6>

				<div class="sec-right">
							<label class="contact-form-text">id</label>
							<input placeholder="." name="id" type="text" required="" tooltip="User Id" id="txt_usrid" value= "" readonly >
						
						
						
				
						</div>
		

		
		<div class="sec-right">
							<label class="contact-form-text">URL</label>
							<input placeholder="your url" name="name" type="text" required="">
						</div>
						<div class="sec-left">
							<label class="contact-form-text">TITLE</label>
							<input placeholder="your title" name="T1" type="text" required="">
						</div>
						
						<div class="sec-left">
							<label class="contact-form-text">DESCRIPTION</label>
							<input placeholder="wirte some description" name="T2" type="text" required="">
						</div>
						
						<div class="sec-left">
							<label class="contact-form-text">KEYWORDS</label>
							<input placeholder="" name="T3" type="text" required="">
						</div>
						
						<div class="sec-left">
							<label class="contact-form-text">CLICK COUNT</label>
							<input placeholder="***" name="T4" type="text" required value="0" readonly >
						</div>
						
					
						<input type="submit" value="Submit" name="submit">
						<input type="submit"  onclick="goBack()" value="back" name="BACK">
				


<script>
function goBack() {
  window.history.back();
}
</script>
					
					</form>
				
				</div>
				<div class="clearfix"></div>
			</div>
		</div>




