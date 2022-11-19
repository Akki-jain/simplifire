<?php
	include 'connect.php';
?>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="script.js" defer></script>
</head>
<body>
	<div class="form-container sign-in-container">
		<form action="forgot.php" method="POST">
			<h1>Forgot Password</h1>
		    <input type="text" placeholder="Enter Registered Email ID" name="mail" />
			<input type="submit" name="forget" value="Submit" class="btn btn-primary" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 14px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">
		</form>
		<?php
		if(isset($_POST['mail']))
		{
			$mail=$_POST['mail'];
			$sql="SELECT * FROM user_details WHERE email= '$mail'";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
			echo $row['password'];
		}
	?>
	</div>
</body>