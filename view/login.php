<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link rel="stylesheet" href="assets/css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<div class="main">
	<input type="checkbox" id="chk" aria-hidden="true">

	<div class="signup">
		
		<form action="index.php?action=login" method="POST">
			<label for="chk" aria-hidden="true">Login</label>
			<input type="email" name="log-email" placeholder="Email" required="">
			<input type="password" name="log-pswd" placeholder="Password" required="">
			<button type="submit" name="login">Login</button>
		</form>
	</div>

	<div class="login">
	<form action="index.php?action=login" method="POST">
			<label for="chk" aria-hidden="true">Sign up</label>
			<input type="text" name="txt" placeholder="User name" required="">
			<input type="email" name="email" placeholder="Email" required="">
			<input type="password" name="pswd" placeholder="Password" required="">
			<button type="submit" name="sign-up">Sign up</button>
		</form>
	</div>
</div>