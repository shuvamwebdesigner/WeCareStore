<?php
session_start();
include('include/config.php');
if(isset($_POST['send'])) 
{
	$uid=$_SESSION['id'];
	$fuser=admin;
	$tuser=Shuvam;
	$msg=$_POST['chat_message'];
	mysqli_query($con,"insert into chat(userid,FormUser,ToUser,Message) values('$uid','$fuser','$tuser','$msg')");
	header('location:chat_customer.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Chat Section</title>
	<link rel="stylesheet" type="text/css" href="css/admin_chat.css">
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<?php include('include/sidebar.php');?>	
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Admin Chat Section</h3>
							</div>
							<div class="module-body">
								<?php
									$query=mysqli_query($con,"select * from users");
									while($row=mysqli_fetch_array($query))
									{
								?>
								<ul>
									<?php if($row['status']==1){ ?>
									<li style="color: green;"><a href="admin_chat.php"><?php echo $row['name'];
									$id=$row['id'];
									?>
									</a></li>
								<?php } 
								else
									{
								?>
								<li style="color: red;"><?php echo $row['name'];?></li>
								</ul>
							<?php } } ?>
						</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>