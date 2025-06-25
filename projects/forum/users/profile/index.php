<?php require "../../header.php"; ?>
<?php require "../../config.php"; ?>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center mt-4">
			<div class="col-sm-5">
				<div class="card border-0 bg-transparent text-center mb-2">
					<div class="card-text-body">
						<img src="<?php echo APPURL; ?>/assets/img/logo.png" class="rounded" style="width: 96px;"/>
					</div>
				</div>
			</div>
		</div>
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-sm-5">
				<div class="card text-center">
					<div class="card-header">
						<h3 class="mb-0">@isim</h3>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Başlatılan Konu Sayısı: <span class="badge rounded-pill text-bg-secondary">@1</span></li>
						<li class="list-group-item">Verilen Yanıt Sayısı: <span class="badge rounded-pill text-bg-secondary">@1</span></li>
						<li class="list-group-item">Kullanıcı Yetkisi:  <span class="text-info">@kullanıcıtürü</span></li>
						<li class="list-group-item">Son Görülme: <span class="text-secondary">@songörülme</span></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
<?php require "../../footer.php"; ?>