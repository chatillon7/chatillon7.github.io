<?php require "../../../header.php"; ?>
<?php require "../../../config.php"; ?>
	<div class="container">
		<div class="row mb-4 mt-4">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Profili Düzenle
						</h3>
						<hr></hr>
						<p class="card-text">
						<form>
						<div class="input-group mb-3">
							<span class="input-group-text" id="firstname">Ad</span>
							<input name="firstname" class="form-control" placeholder="@isim" aria-describedby="firstname" disabled>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="surname">Soyad</span>
							<input name="surname" class="form-control" placeholder="@soyad" aria-describedby="surname" disabled>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="email">E-Posta</span>
							<input type="email" name="email" class="form-control" placeholder="@eposta" aria-describedby="email" disabled>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="username">Kullanıcı Adı</span>
							<input name="username" class="form-control" placeholder="@takma" aria-describedby="username">
						</div>
						<div class="input-group mb-3">
							<input type="file" name="avatar" class="form-control" aria-describedby="avatar">
							<span class="input-group-text" id="avatar"><i class="bi bi-person-bounding-box"></i></span>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="password">Parola</span>
							<input type="password" name="password" class="form-control" placeholder="*********" aria-describedby="password">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="cpassword">Tekrar Parola</span>
							<input type="password" name="cpassword" class="form-control"  placeholder="*********" aria-describedby="cpassword">
						</div>
						</form>
						</p>
							<hr></hr>
						<a href="#" class="btn btn-success"><i class="bi bi-floppy-fill"></i></a>
						<a href="#" class="btn btn-secondary"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php require "../../../footer.php"; ?>