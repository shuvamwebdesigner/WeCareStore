<?php
session_start();
error_reporting(0);
include('includes/config.php');


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>WCOS | Shipping Query</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/title_logo.png">

	</head>
	    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<div style="background-color: #f0ffff;">
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li>Help</li>
				<li class='active'>Shipping</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div id="brands-carousel" class="logo-slider wow fadeInUp" style="margin-left: 1%; margin-right: 1%;">
	<h3 class="section-title">Shipping</h3>
	<p><b>What are the delivery charges?</b></p>

<p>Delivery charge varies with each Seller.<br>

Sellers incur relatively higher shipping costs on low value items. In such cases, charging a nominal delivery charge helps them offset logistics costs. Please check your order summary to understand the delivery charges for individual products.<br>

For Products listed as F-Assured a Rs 40 charge for delivery per item is applied if the order value is less than Rs 500. While, orders of Rs 500 or above are delivered free.<br>
</p>
<p><b>Why does the delivery date not correspond to the delivery timeline of X-Y business days?</b></p>

<p>It is possible that the Seller or our courier partners have a holiday between the day your placed your order and the date of delivery, which is based on the timelines shown on the product page. In this case, we add a day to the estimated date. Some courier partners and Sellers do not work on Sundays and this is factored in to the delivery dates.
</p>
<p><b>What is the estimated delivery time?</b></p>

<p>Sellers generally procure and ship the items within the time specified on the product page. Business days exclude public holidays and Sundays.<br>

Estimated delivery time depends on the following factors:<br>

The Seller offering the product<br>
Product's availability with the Seller<br>
The destination to which you want the order shipped to and location of the Seller.<br></p>
<p><b>Are there any hidden costs (sales tax, octroi etc) on items sold by Sellers on We Care Store?</b></p>

<p>There are NO hidden charges when you make a purchase on We Care Store. List prices are final and all-inclusive. The price you see on the product page is exactly what you would pay.<br>

Delivery charges are not hidden charges and are charged (if at all) extra depending on the Seller's shipping policy.<br></p>

<p><b>Why does the estimated delivery time vary for each seller?</b></p>

<p>You have probably noticed varying estimated delivery times for sellers of the product you are interested in. Delivery times are influenced by product availability, geographic location of the Seller, your shipping destination and the courier partner's time-to-deliver in your location.<br>

Please enter your default pin code on the product page (you don't have to enter it every single time) to know more accurate delivery times on the product page itself.<br></p>

<p><b>Seller does not/cannot ship to my area. Why?</b></p>

<p>Please enter your pincode on the product page (you don't have to enter it every single time) to know whether the product can be delivered to your location.<br>

If you haven't provided your pincode until the checkout stage, the pincode in your shipping address will be used to check for serviceability.<br></p>

<p>Whether your location can be serviced or not depends on<br>

Whether the Seller ships to your location<br>
Legal restrictions, if any, in shipping particular products to your location<br>
The availability of reliable courier partners in your location<br>
At times Sellers prefer not to ship to certain locations. This is entirely at their discretion.<br></p>

<p><b>Why is the CoD option not offered in my location?</b></p>

<p>Availability of CoD depends on the ability of our courier partner servicing your location to accept cash as payment at the time of delivery.<br>

Our courier partners have limits on the cash amount payable on delivery depending on the destination and your order value might have exceeded this limit. Please enter your pin code on the product page to check if CoD is available in your location.<br></p>

<p><b>I need to return an item, how do I arrange for a pick-up?</b></p>

<p>Returns are easy. Contact Us to initiate a return. You will receive a call explaining the process, once you have initiated a return.<br>

Wherever possible Ekart Logistics will facilitate the pick-up of the item. In case, the pick-up cannot be arranged through Ekart, you can return the item through a third-party courier service. Return fees are borne by the Seller.<br></p>

<p><b>What do the different tags like "In Stock", "Available" mean?</b></p>

'In Stock'<br>
<p>
FFor items listed as "In Stock", Sellers will mention the delivery time based on your location pincode (usually 2-3 business days, 4-5 business days or 4-6 business days in areas where standard courier service is available). For other areas, orders will be sent by Registered Post through the Indian Postal Service which may take 1-2 weeks depending on the location.</p>

'Available'<br>
<p>
The Seller might not have the item in stock but can procure it when an order is placed for the item. The delivery time will depend on the estimated procurement time and the estimated shipping time to your location.
	</p>
</div>
<?php include('includes/brands-slider.php');?>

<?php include('includes/footer.php');?>
</div>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>

</body>
</html>