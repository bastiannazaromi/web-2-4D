<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?= $title; ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('jadwal'); ?>">Data Jadwal Tayang</a></li>
						<li class="breadcrumb-item active">Tambah JAdwal</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-6">
					<div class="card card-secondary">
						<div class="card-header">
							<h3 class="card-title">Form Tambah Jadwal</h3>
						</div>
						<div class="card-body">
							<form action="<?= base_url('jadwal/store'); ?>" method="post">
								<div class="form-group">
									<label>Nama Cinema</label>
									<select name="idCinema" class="form-control">
										<option value="">-- Pilih Cinema --</option>
										<?php foreach ($cinema as $cin) : ?>
											<option value="<?php echo $cin->id; ?>"><?php echo $cin->namaCinema; ?></option>
										<?php endforeach; ?>
									</select>
									<span class="text-danger"><?php echo form_error('idCinema'); ?></span>
								</div>
								<div class="form-group">
									<label>Judul Film</label>
									<select name="idFilm" class="form-control">
										<option value="">-- Pilih Judul Film --</option>
										<?php foreach ($film as $fil) : ?>
											<option value="<?php echo $fil->id; ?>"><?php echo $fil->judul . ' - ' . $fil->genre; ?></option>
										<?php endforeach; ?>
									</select>
									<span class="text-danger"><?php echo form_error('idFilm'); ?></span>
								</div>
								<button type="submit" class="btn btn-success">Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>