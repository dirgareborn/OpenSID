<?php $this->load->view('global/validasi_form'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><?= ($program) ? 'Ubah' : 'Tambah'?> Program Bantuan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid'); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('program_bantuan'); ?>"> Daftar Program Bantuan</a></li>
			<li class="active">Tambah Program Bantuan</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="box box-info">
			<div class="box-header with-border">
				<a href="<?= site_url('program_bantuan'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Program Bantuan"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar Program Bantuan</a>
			</div>
			<form id="validasi" class="form-horizontal" action="<?= $form_action; ?>" method="POST">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-3 control-label">Sasaran Program</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="sasaran" <?= ($program['jml_peserta'] <= 1) ? : 'disabled'?>>
								<option value="">Pilih Sasaran</option>
									<?php foreach ($list_sasaran AS $key => $value): ?>
										<option value="<?= $key; ?>" <?= selected($program['sasaran'], $key); ?>><?= $value; ?></option>
									<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nama Program</label>
						<div class="col-sm-8">
							<input name="nama" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Nama Program" type="text" value="<?= $program['nama']; ?>"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="ndesc">Keterangan</label>
						<div class="col-sm-8">
							<textarea id="ndesc" name="ndesc" class="form-control input-sm required" placeholder="Isi Keterangan" rows="8"><?= $program['ndesc']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="asaldana">Asal Dana</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="asaldana" id="asaldana">
								<option value="">Asal Dana</option>
								<?php foreach ($asaldana AS $key => $value): ?>
										<option value="<?= $value; ?>" <?= selected($program['asaldana'], $value); ?>><?= $value; ?></option>
									<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="tgl_post">Rentang Waktu Program</label>
						<div class="col-sm-4">
							<div class="input-group input-group-sm date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input class="form-control input-sm pull-right required" id="tgl_1" name="sdate" placeholder="Tgl. Mulai" type="text" value="<?= date("d/m/Y", strtotime($program["sdate"])); ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group input-group-sm date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input class="form-control input-sm pull-right required" id="tgl_2" name="edate" placeholder="Tgl. Akhir" type="text" value="<?= date("d/m/Y", strtotime($program["edate"])); ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
					<button type='submit' class="btn btn-social btn-flat btn-info btn-sm pull-right confirm"><i class="fa fa-check"></i> Simpan</button>
				</div>
			</form>
		</div>
	</section>
</div>

