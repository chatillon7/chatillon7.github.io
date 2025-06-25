<?php require "../header.php"; ?>
<?php require "../config.php"; ?>
	<div class="container">
<!-- Avatar Konu -->
		<div class="row mb-4 mt-4">
			<div class="col-sm-2">
				<div class="card text-center">
					<div class="card-header" style="overflow: hidden;">
						<a href="../users"><img src="<?php echo APPURL; ?>/assets/img/logo.png" class="rounded"/></a>
					</div>
						<p class="card-text mb-1 text-center">
							<span><a href="../users">@@isim</a></span>
						</p>
				</div>
			</div>
<!-- Konu -->
			<div class="col-sm-10">
				<div class="card">
					<div class="card-body">
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"><a href="../topics/edit"><i class="bi bi-pencil-square"></i></a></span>
						<h3 class="card-title">@baslik</h3>
						<hr></hr>
						<p class="card-text">
							@icerik...
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-4 mt-4">
<!-- Avatar Yorum -->
			<div class="col-sm-2">
				<div class="card text-center">
					<div class="card-header" style="overflow: hidden;">
						<a href="../users"><img src="<?php echo APPURL; ?>/assets/img/logo.png" class="rounded"/></a>
					</div>
						<p class="card-text mb-1 text-center">
							<span><a href="../users">@@isim</a></span>
						</p>
				</div>
			</div>
<!-- Yorum -->
			<div class="col-sm-10">
				<div class="card">
					<div class="card-body">
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><a href="../replies/delete"><i class="bi bi-trash-fill"></i></a></span>
						<p class="card-text">
							@yorum_icerik...
						</p>
					</div>
				</div>
			</div>
    </div>
<!-- Oturum Gerekli -->
		<div class="row mb-4 mt-4">
			<div class="col-sm-12">
				<div class="card text-center">
					<div class="card-body">
						<blockquote class="blockquote mb-0">
							<footer class="blockquote-footer mt-1"><cite title="Source Title">Bu konuya yanıt verebilmeniz için oturum açmanız gerekiyor.</cite></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
<!-- Oturum Var -->
		<div class="row mb-4 mt-4">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<p class="card-text">
							<label for="topicText" class="form-label">Yanıt:</label>
							<textarea class="form-control" id="topicText" rows="3" placeholder="Yanıt metni giriniz..."></textarea>
						</p>
							<hr></hr>
						<a href="#" class="btn btn-success"><i class="bi bi-send-fill"></i></a>
					</div>
				</div>
			</div>
		</div>
<?php require "../footer.php"; ?>