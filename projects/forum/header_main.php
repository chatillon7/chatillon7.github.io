<?php
session_start();
define("APPURL", "http://localhost/forum");
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>
		Forum
	</title>
	
	<link href="<?php echo APPURL; ?>/assets/img/favicon.png" rel="icon">		
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar fixed-top sticky-top navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo APPURL; ?>">
		<img src="<?php echo APPURL; ?>/assets/img/logo.png" width="32" height="32" alt="" class="d-inline-block align-text-top">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo APPURL; ?>">Ana Sayfa</a>
        </li>
        <li class="nav-item dropdown">
		  <a class="nav-link" role="button" data-bs-toggle="dropdown"  data-bs-auto-close="true" aria-expanded="false">Kategori</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo APPURL; ?>/categories/">@kategori</a></li>
			</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo APPURL; ?>/about">Hakkımızda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
            Hesabım
          </a>
          <ul class="dropdown-menu">
			<form class="p-3" id="ulogin-form" action="" method="post">
				<div class="mb-3">
					<input name="username" class="form-control" placeholder="Kullanıcı Adı">
				</div>
				<div class="mb-3">
					<input type="password" name="password" class="form-control" placeholder="Parola">
				</div>
					<button type="submit" name="submit" class="btn btn-outline-light">Oturum Aç</button>
			</form>
			<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo APPURL; ?>/auth/register">Henüz bir hesabın yok mu? <b>Kaydol</b></a>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Ne aramak istersiniz?" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>