<?php require "../../header.php"; ?>
<?php require "../../config.php"; ?>
	<div class="container">
		<div class="row mb-4 mt-4">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Konu Oluştur
						</h3>
						<hr></hr>
						<p class="card-text">
						<form>
							<label for="topicTitle" class="form-label">Konu Başlığı:</label>
							<input class="form-control" id="topicTitle" placeholder="Başlık giriniz...">
							<br>
							<label for="topicCategory" class="form-label">Konu Kategorisi:</label>
							<select class="form-control" id="topicCategory">
								<option selected disabled>Kategori seçiniz...</option>
								<option>@kategori</option>
							</select>
							<br>
							<label for="topicText" class="form-label">Konu:</label>
							<textarea class="form-control" id="topicText" rows="6" placeholder="Metin giriniz..."></textarea>
							<br>
						</form>
						</p>
							<hr></hr>
						<a href="#" class="btn btn-success"><i class="bi bi-send-fill"></i></a>
						<a href="#" class="btn btn-secondary"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php require "../../footer.php"; ?>