<?php

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $error = User::signup($username, $password, $email, $phone);
    $signup = true;
}
?>

<?php
if ($signup) {
    if ($error == true) {
        ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Success</h1>
		<p class="lead">Now you can login from <a href="/login.php">here</a>.</p>
	</div>
</main>
<?php
    } else {
        ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Fail</h1>
		<p class="lead">Something went wrong</p>
	</div>
</main>
<?php
    }
} else {
    ?>
<main class="form-signup">
	<form method="post" action="signup.php">
		<img class="mb-4" src="https://tse1.mm.bing.net/th?id=OIP.L9XuvOf901XsK2m6i8cXeQHaGZ&pid=Api&P=0" height:
			fit-content>
		<h1 class="h3 mb-3 fw-normal">Signup here</h1>
		<div class="form-floating">
			<input name="username" type="username" class="form-control" id="floatingInputUsername"
				placeholder="username">
			<label for="floatingInputUsername">Username</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="phone" class="form-control" id="floatingInputPhone" placeholder="phone">
			<label for="floatingInputUsername">Phone</label>
		</div>
		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInputEmail"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign up</button>
	</form>
</main>
<?php
}
?>