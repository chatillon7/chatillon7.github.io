<?php require "../../header.php"; ?>
<?php require "../../config.php"; ?>
	<div class="container">
		<div class="row mb-4 mt-4">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Konuyu Düzenle
						</h3>
						<hr></hr>
						<p class="card-text">
						<form>
							<label for="topicTitle" class="form-label">Konu Başlığı:</label>
							<input class="form-control" id="topicTitle" value="@baslik" disabled>
							<br>
							<label for="topicCategory" class="form-label">Konu Kategorisi:</label>
							<select class="form-control" id="topicCategory" value="@baslik" disabled>
								<option selected>@kategori</option>
							</select>
							<br>
							<label for="topicText" class="form-label">Konu:</label>
							<textarea class="form-control" id="topicText" rows="6">@icerik...</textarea>
							<br>
						</form>
						</p>
							<hr></hr>
						<a href="#" class="btn btn-success"><i class="bi bi-floppy-fill"></i></a>
						<a href="#" class="btn btn-secondary"><i class="bi bi-x-lg"></i></a>
						<a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php require "../../footer.php"; ?>