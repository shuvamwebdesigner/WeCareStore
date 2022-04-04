<?php
session_start();
include('include/config.php');
if(isset($_POST['send'])) 
{
	$query=mysqli_query($con,"select * from users where status=1");
					while($row=mysqli_fetch_array($query))
					{
						$_SESSION['username']=$row['name'];
						$_SESSION['userid']=$row['id'];
			}
	$uid=$_SESSION['userid'];
	$fuser=admin;
	$tuser=$_SESSION['username'];
	$msg=$_POST['chat_message'];
	mysqli_query($con,"insert into chat(userid,FormUser,ToUser,Message) values('$uid','$fuser','$tuser','$msg')");
	header('location:admin_chat.php');
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

<div class="new_section">
	<div class="chat_container">
		<div class="chat_header">
			<h3>WebChat</h3>
			
		</div>
		<div class="chat_body">
			<?php
			$query=mysqli_query($con,"select * from chat");
			while($row=mysqli_fetch_array($query))
				{
					if($row['FormUser']=='admin' && $row['ToUser']==$_SESSION['username'])
					{
		?>

		<p class="user_message"><?php echo $row['Message'];?></p>
		<?php } 
		elseif($row['FormUser']==$_SESSION['username']){
		?>
		<h7 style="color: white;"><?php echo $row['FormUser'];?></h7>
		<p class="message"><?php echo $row['Message'];?></p>
		<?php } 
			}  ?>
		</div>
		<div class="chat_footer">
			<form method="post">
				
				<input type="text" name="chat_message" required>
				<button type="submit" name="send">SEND</button>
			</form>
		</div>
	</div>
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