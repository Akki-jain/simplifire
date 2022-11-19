<?php
 session_start();
 ?>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="script.js" defer></script>
</head>
<body >
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signing.php" method="POST" class="form">
			<h1>Create Account</h1>
			<!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div class="progress-step progress-step-active"></div>
        <div class="progress-step"></div>
        <div class="progress-step"></div>
        <div class="progress-step"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <input type="text" name="username" id="username" placeholder="Username"/>
        </div>
        <div class="input-group">
          <input type="text" name="pass" id="pass" placeholder="Password" />
        </div>
        <div class="input-group">
          <input type="text" name="cpass" id="cpass" placeholder="Confirm Password" />
        </div>
        <div class=""><br>
          <a href="#" class="bt btn-next width-50 ml-auto" style="border-radius: 30px; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 12px 45px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Next</a>
        </div>
      </div>
      <div class="form-step">
      	<div class="input-group">
          <input type="text" name="name" id="name" placeholder="Name" />
        </div>
        <div class="input-group">
          <input type="text" name="phone" id="phone" placeholder="Phone Number" />
        </div>
        <div class="input-group">
          <input type="text" name="email" id="email" placeholder="Email ID" />
        </div>
        <div class="input-group">
          <input type="date" name="dob" id="dob" />
        </div>
        <div class="btns-group">
          <a href="#" class="bt btn-prev" style="border-radius: 30px; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 12px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Previous</a>
          <a href="#" class="bt btn-next" style="border-radius: 30px; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 12px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Next</a>
        </div>
      </div>
      <div class="form-step"> 
      	<div class="input-group">
          <input type="text" name="category" id="category" placeholder="Category" />
        </div>
        <div class="input-group">
          <input type="number" name="hnum" id="hnum" placeholder="House Number" />
        </div>
        <div class="input-group">
          <input type="text" name="building" id="building" placeholder="Building" />
        </div>
        <div class="btns-group">
          <a href="#" class="bt btn-prev" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 12px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Previous</a>
          <a href="#" class="bt btn-next" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 12px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <input type="text" name="street" id="street" placeholder="Street" />
        </div>
        <div class="input-group">
          <input type="text" name="city" id="city" placeholder="City" />
        </div>
        <div class="input-group">
          <input type="text" name="state" id="state" placeholder="State" />
        </div>
        <div class="input-group">
          <input type="text" name="pincode" id="pincode" placeholder="Pincode" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 14px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Previous</a>
          <button class="test" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 0; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px; height: 44px;margin-top: 15px;">Sign Up</button>
        </div>
      </div>
		</form>
	</div>
	<div class="form-container sign-in-container">
    <a href="history.back()" style="padding-left: 10px; padding-top: 30px; font-size:20px;"> <i class="fa fa-close"></i></a>
		<form action="sign.php" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<a href="forgot.php">Forgot your password?</a>
			<button name="login" value="Sign In" class="btn btn-primary" style="border-radius: 30px; background-color: #FF7527; color: white; font-size: 12px; font-weight: bold; padding: 14px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
				<img src="signin.svg" style="width: 240px;height: 240px;">
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Are you a New User!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button><br>
				<img src="signup.svg" style="width: 220px;height: 172px;">
			</div>
		</div>
	</div>
</div>

<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => 
	{
	container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => 
	{
	container.classList.remove("right-panel-active");
	});
</script>

</body>
<?php
  include('connect.php');
  if(isset($_POST['login']))
  {
    $customer_email = $_POST['username'];
    $customer_pass = $_POST['password'];
    $select_customer = "select * from user_details where username= '$customer_email' AND password='$customer_pass'";
    $run_customer = mysqli_query($con,$select_customer);
    $check_customer = mysqli_num_rows($run_customer);
    if($check_customer==0)
    {
      echo "<script>alert('password or email is wrong')</script>";
      exit();
    }
    if($check_customer==1)
    {
      $_SESSION['customer_email']=$customer_email;
      echo "<script>alert('You are Logged In')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
?>