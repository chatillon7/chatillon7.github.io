<?php
session_start();
define("APPURL", "http://localhost/forum");
?>
<?php require "../../config.php"; ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>
		Oturum Aç
	</title>
	
	<link href="<?php echo APPURL; ?>/assets/img/favicon.png" rel="icon">	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center vh-100">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Kaydol
						</h3>
						<hr></hr>
						<form>
						<p class="card-text">
							<input name="firstname" class="form-control mb-3" placeholder="Ad">
							<input name="surname" class="form-control mb-3" placeholder="Soyad">
							<input type="email" name="email" class="form-control mb-3" placeholder="E-Posta">
							<input name="username" class="form-control mb-3" placeholder="Kullanıcı Adı">
							<input type="password" name="password" class="form-control mb-3" placeholder="Parola">
							<input type="password" name="cpassword" class="form-control mb-3" placeholder="Tekrar Parola">
							<a href="<?php echo APPURL; ?>/politika.pdf" class="form-text">Şartlarınızı, koşullarınızı ve sözleşmenizi okudum, kabul ediyorum.</a>
						</p>
							<hr></hr>
							<a href="<?php echo APPURL; ?>" class="btn btn-secondary">Ana Sayfaya Dön</a>
							<button type="submit" name="submit" class="btn btn-outline-light">Oturum Aç</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

