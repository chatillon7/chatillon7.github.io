<?php require "header_main.php"; ?>
<?php require "config.php"; ?>
	<div class="container text-center">
		<div class="row mb-4 mt-4">
			<div class="col-sm-12">
				carousel
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div style="text-align: left;" class="list-group">
					<a href="/forum/topics" class="list-group-item list-group-item-action">
						<span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-secondary">@kategori</span>
						<div class="d-flex w-100 justify-content-between">
							<h5>@baslik</h5>
							<small>@isim/@tarih</small>
						</div>
<!--	 style="display: block;text-overflow: ellipsis;width: 100%;overflow: hidden; white-space: nowrap;"	 -->
							<p class="mb-1">@icerik...</p>
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">@+1</span>
					</a>
				</div>
			</div>
<?php require "footer.php"; ?>