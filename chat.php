<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send'])) 
{
	
if(strlen($_SESSION['login'])==0)
    {   
		header('location:login.php');
	}
	else{
		$uid=$_SESSION['id'];
		$fuser=$_SESSION['username'];
		$tuser=admin;
		$msg=$_POST['chat_message'];
		mysqli_query($con,"insert into chat(userid,FormUser,ToUser,Message) values('$uid','$fuser','$tuser','$msg')");
		header('location:chat.php');
	}
}
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

	    <title>WCOS | Help Center | Chat Us</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/chat.css">
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
				<li class='active'>Chat Us</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div id="brands-carousel" class="logo-slider wow fadeInUp" style="margin-left: 1%; margin-right: 1%;">
	<h3 class="section-title">Chat Us</h3>
	<div class="new_section">
	<div class="chat_container">
		<div class="chat_header">
			<h3>WebChat &nbsp;
				<?php
					$query=mysqli_query($con,"select * from admin");
					while($row=mysqli_fetch_array($query))
					{
				?>
					<i style="color: #00ff00;">(&nbsp;<?php echo $row['username'];?> )</i>
				<?php } ?>
			</h3>
			
		</div>
		<div class="chat_body">
			<?php
			$query=mysqli_query($con,"select * from chat");
			while($row=mysqli_fetch_array($query))
				{
					if($row['FormUser']==$_SESSION['username'] && $row['ToUser']=='admin')
					{
		?>
		<p class="user_message"><?php echo $row['Message'];?></p>
		<?php } 
		else{
			if($row['ToUser']==$_SESSION['username']){
		?>
		<h7 style="color: white;"><?php echo $row['FormUser'];?></h7>
		<p class="message"><?php echo $row['Message'];?></p>
		<?php } 
			} 
		} ?>
		</div>
		<div class="chat_footer">
			<form method="post">
				<input type="text" name="chat_message" required>
				<button type="submit" name="send">SEND</button>
			</form>
		</div>
	</div>
	</div>
</div><!-- /.logo-slider -->
	
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