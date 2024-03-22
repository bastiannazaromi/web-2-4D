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