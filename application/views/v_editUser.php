<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title><?php echo $title; ?></title>
</head>

<body>
	<div class="container">
		<h1><?php echo $title; ?></h1>

		<div class="row mb-3">
			<div class="col-lg-6">
				<form action="<?= base_url('user/update'); ?>" method="post">
					<input type="hidden" name="id" value="<?php echo $user->id; ?>">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>">
						<span class="text-danger"><?php echo form_error('username'); ?></span>
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $user->nama; ?>">
						<span class="text-danger"><?php echo form_error('nama'); ?></span>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>">
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>
					<div class="form-group">
						<label>Tahun</label>
						<input type="text" name="tahun" class="form-control" value="<?php echo $user->tahun; ?>">
						<span class="text-danger"><?php echo form_error('tahun'); ?></span>
					</div>
					<button type="submit" class="btn btn-success">Simpan</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>