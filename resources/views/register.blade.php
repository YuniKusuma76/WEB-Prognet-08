<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iFamilyCard - Register</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <img class="wave" src="img/wave.png">
    <div class="container">
	  <div class="img">
		<img src="img/foto3.svg">
	  </div>
	<div class="login-content">
		<form action="/register" method="post">
			@csrf
			<h2 class="title">iFamilyCard</h2>
			<div class="input-div one">
				<div class="i">
					<i class="fas fa-user"></i>
				</div>
				<div class="div">
					<h5>Name</h5>
					<input type="text" class="input" id="name" name="name">
				</div>
			</div>
			<div class="input-div one">
				<div class="i">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="div">
					<h5>E-mail</h5>
					<input type="email" class="input" id="email" name="email">
				</div>
			</div>
			<div class="input-div pass">
				<div class="i">
					<i class="fas fa-lock"></i>
				</div>
				<div class="div">
					<h5>Password</h5>
					<input type="password" class="input" id="password" name="password">
				</div>
			</div>
			<div class="input-div pass">
				<div class="i">
					<i class="fas fa-lock"></i>
				</div>
				<div class="div">
					<h5>Confirm Password</h5>
					<input type="password" class="input" id="confirm_password" name="confirm_password">
				</div>
			</div>
			<a href="/" id="daftarLink">Sign In Here!</a>
			<input type="submit" class="btn" value="Sign in" name="masuk" id="masukBtn">
		</form>
	</div>
</div>
    <script type="text/javascript" src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Alert --}}
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ $message }}"
            });
        </script>
    @endif
</body>
</html>