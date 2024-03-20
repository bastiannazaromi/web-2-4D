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
		<h1>Hello, world!</h1>

		<div class="row mb-3">
			<div class="col-lg-4">
				<a href="<?= base_url('user/add'); ?>" class="btn btn-primary btn-sm">Tambah</a>
			</div>
		</div>

		<?php if ($this->session->flashdata('sukses')) : ?>
			<div class="alert alert-success" role="alert">
				<?= $this->session->flashdata('sukses'); ?>
			</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('error')) : ?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->flashdata('error'); ?>
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-xl-6">
				<table class="table table-bordered table-striped">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Email</th>
						<th>Tahun</th>
						<th>Action</th>
					</tr>
					<?php foreach ($user as $i => $usr) : ?>
						<tr>
							<td><?php echo $i + 1; ?></td>
							<td><?php echo $usr->nama; ?></td>
							<td><?php echo $usr->username; ?></td>
							<td><?php echo $usr->email; ?></td>
							<td><?php echo $usr->tahun; ?></td>
							<td>
								<a href="<?= base_url('user/edit/' . $usr->id); ?>" class="btn btn-warning btn-sm">Edit</a>
								<a href="<?= base_url('user/delete/' . $usr->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin data akan dihapus ?')">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>