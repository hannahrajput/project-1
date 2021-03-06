<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			margin: 0;
			color: #6a6f8c;
			background: #c8c8c8;
			font: 600 16px/18px 'Open Sans', sans-serif;
		}

		*,
		:after,
		:before {
			box-sizing: border-box
		}

		.clearfix:after,
		.clearfix:before {
			content: '';
			display: table
		}

		.clearfix:after {
			clear: both;
			display: block
		}

		a {
			color: inherit;
			text-decoration: none
		}

		.login-wrap {
			width: 100%;
			margin: auto;
			margin-top: 50px;
			max-width: 525px;
			min-height: 700px;
			position: relative;
			background: url(download1.jpg) no-repeat center;
			box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
		}

		.login-html {
			width: 100%;
			height: 100%;
			position: absolute;
			padding: 90px 70px 50px 70px;
			background: rgba(40, 57, 101, .7);
		}

		.login-html .sign-in-htm,
		.login-html .sign-up-htm {
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			position: absolute;
			transform: rotateY(180deg);
			backface-visibility: hidden;
			transition: all .4s linear;
		}

		.login-html .sign-in,
		.login-html .sign-up,
		.login-form .group .check {
			display: none;
		}

		.login-html .tab,
		.login-form .group .label,
		.login-form .group .button {
			text-transform: uppercase;
		}

		.login-html .tab {
			font-size: 22px;
			margin-right: 15px;
			padding-bottom: 5px;
			margin: 0 15px 10px 0;
			display: inline-block;
			border-bottom: 2px solid transparent;
		}

		.login-html .sign-in:checked+.tab,
		.login-html .sign-up:checked+.tab {
			color: #fff;
			border-color: #1161ee;
		}

		.login-form {
			min-height: 345px;
			position: relative;
			perspective: 1000px;
			transform-style: preserve-3d;
		}

		.login-form .group {
			margin-bottom: 15px;
		}

		.login-form .group .label,
		.login-form .group .input,
		.login-form .group .button {
			width: 100%;
			color: #fff;
			display: block;
		}

		.login-form .group .input,
		.login-form .group .button {
			border: none;
			padding: 15px 20px;
			border-radius: 25px;
			background: rgba(255, 255, 255, .1);
		}

		.login-form .group input[data-type="password"] {
			text-security: circle;
			-webkit-text-security: circle;
		}

		.login-form .group .label {
			color: #aaa;
			font-size: 12px;
		}

		.login-form .group .button {
			background: #1161ee;
		}

		.login-form .group label .icon {
			width: 15px;
			height: 15px;
			border-radius: 2px;
			position: relative;
			display: inline-block;
			background: rgba(255, 255, 255, .1);
		}

		.login-form .group label .icon:before,
		.login-form .group label .icon:after {
			content: '';
			width: 10px;
			height: 2px;
			background: #fff;
			position: absolute;
			transition: all .2s ease-in-out 0s;
		}

		.login-form .group label .icon:before {
			left: 3px;
			width: 5px;
			bottom: 6px;
			transform: scale(0) rotate(0);
		}

		.login-form .group label .icon:after {
			top: 6px;
			right: 0;
			transform: scale(0) rotate(0);
		}

		.login-form .group .check:checked+label {
			color: #fff;
		}

		.login-form .group .check:checked+label .icon {
			background: #1161ee;
		}

		.login-form .group .check:checked+label .icon:before {
			transform: scale(1) rotate(45deg);
		}

		.login-form .group .check:checked+label .icon:after {
			transform: scale(1) rotate(-45deg);
		}

		.login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
			transform: rotate(0);
		}

		.login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
			transform: rotate(0);
		}

		.hr {
			height: 2px;
			margin: 60px 0 50px 0;
			background: rgba(255, 255, 255, .2);
		}

		.foot-lnk {
			text-align: center;
			color: white;
		}

		.btn-google {
			color: white;
			background-color: #ea4335;
		}

		.btn-facebook {
			color: white;
			background-color: #3b5998;
		}

		.btn {
			font-size: 80%;
			width: 100%;
			border-radius: 5rem;
			letter-spacing: .1rem;
			font-weight: bold;
			padding: 1rem;
			transition: all 0.2s;
		}
	</style>
	
</head>

<body>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">SignIn</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">SignUp</label>
			<form class="login-form">
				<div>
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="lname">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="lpassword">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In" onclick="lbut(event)">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</div>
			</form>
			<form name="Signup">
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input  type="text" class="input" name="Username" id="Username" required>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input type="password" class="input" data-type="password" id="Password" name="Password" required>
					</div>
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input type="password" class="input" data-type="password" name="Confirmpassword" id="Confirmpassword" required>
					</div>
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input type="email" class="input" id="Email" name="Email" required>
						
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign Up" name="butsignup" onclick="signup(event)">

					</div>
					<h4 style="color:white; text-align:center;">OR</h4>
					<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
							class="fab fa-google mr-2"></i> Sign in with Google</button>
					<br><br>
					<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
							class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</div>
			</form>
			
		</div>
	</div>
	</div>

	<script>
		async function lbut(e){
			e.preventDefault();
			alert("hii");
			var name = document.getElementById("lname");
			var pass = document.getElementById("lpassword");
			console.log(name);
			console.log(pass);

		}
		async function signup(e) {
			e.preventDefault();
			// alert("hiii");

			var Username = document.getElementById("Username").value;
			
			var Password = document.getElementById("Password").value;
			
			var Confirmpassword = document.getElementById("Confirmpassword").value;
			
			var Email = document.getElementById("Email").value;
			
			

			// var form = document.getElementsByName("Signup");
			
			try{
				const data = new FormData();
				data.append('Username',Username);
				data.append('Password',Password);
				data.append('Confirmpassword',Confirmpassword);
				data.append('Email',Email);

				let res = await fetch("code.php", {
					method: 'post',
					body: data,
				});
				let json = await res.text();
				if (json == 1) {
					alert("insert successfull");

				} else {
					alert("error in signup");
				}
			}
			catch(e){
				console.log(e);
			}
			
		}

	</script>
</body>

</html>