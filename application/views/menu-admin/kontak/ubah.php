<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DATA</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $sopd['id'] ?>">
							<div class="form-group">
								<label>Sangat Memuaskan</label>
								<input type="text" class="form-control" name="sp" value="<?= $sopd['sp'] ?>">
								<small class="form-text text-danger"><?= form_error('sp'); ?></small>
							</div>
							<div class="form-group">
								<label>Memuaskan</label>
								<input type="text" class="form-control" name="p" value="<?= $sopd['p'] ?>">
								<small class="form-text text-danger"><?= form_error('p'); ?></small>
							</div>
							<div class="form-group">
								<label>Cukup Memuaskan</label>
								<input type="text" class="form-control" name="cp" value="<?= $sopd['cp'] ?>">
								<small class="form-text text-danger"><?= form_error('cp'); ?></small>
							</div>
							<div class="form-group">
								<label>Kurang Memuaskan</label>
								<input type="text" class="form-control" name="kp" value="<?= $sopd['kp'] ?>">
								<small class="form-text text-danger"><?= form_error('kp'); ?></small>
							</div>
							<div class="form-group">
								<label>Tidak Memuaskan</label>
								<input type="text" class="form-control" name="tp" value="<?= $sopd['tp'] ?>">
								<small class="form-text text-danger"><?= form_error('tp'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>kepuasan">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>