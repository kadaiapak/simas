<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="<?= base_url()?>template/src/css/select2.min.css" rel="stylesheet" />
<script src="<?= base_url()?>template/src/js/select2.min.js"></script>
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ajukan skripsi</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?= validation_list_errors(); ?>
                        <form class="form-horizontal form-label-left" method="POST" action="<?= base_url('skripsi/simpan_skripsi'); ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3" for="nim_mahasiswa">NIM</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input readonly type="text" value="<?= $nim; ?>" name="nim_mahasiswa" class="form-control" id="nim_mahasiswa" placeholder="Tuliskan NIM">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3" for="nama_mahasiswa">Nama Mahasiswa</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input readonly type="text" value="<?= $nama; ?>" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Tuliskan Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="periode_pengajuan">Periode Pengajuan</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <select class="form-control <?= validation_show_error('periode_pengajuan') ? 'is-invalid' : null; ?>" name="periode_pengajuan">
                                        <option value="">Pilih Periode</option>
                                        <option value="1">Januari - Juni</option>
                                        <option value="2">Juli - Desember</option>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('periode_pengajuan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="tahun_pengajuan">Tahun Pengajuan</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="number" class="form-control <?= validation_show_error('tahun_pengajuan') ? 'is-invalid' : null; ?>" id="tahun_pengajuan" name="tahun_pengajuan" placeholder="Masukkan tahun">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('tahun_pengajuan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="judul_skripsi">Judul Skripsi <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea class="form-control <?= validation_show_error('judul_skripsi') ? 'is-invalid' : null; ?>" rows="3" name="judul_skripsi" id="judul_skripsi" placeholder="Isikan judul skripsi"></textarea>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('judul_skripsi'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="deskripsi_skripsi">Deskripsi skripsi<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea class="form-control <?= validation_show_error('deskripsi_skripsi') ? 'is-invalid' : null;; ?>" rows="3" name="deskripsi_skripsi" placeholder="Jelaskan singkat mengenai skripsi skripsi yang dipilih"></textarea>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('deskripsi_skripsi'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="konsentrasi_bidang">Konsentrasi Bidang <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea class="form-control <?= validation_show_error('konsentrasi_bidang') ? 'is-invalid' : null; ?>" rows="3" placeholder="Isikan konsentrasi bidang" name="konsentrasi_bidang" id="konsentrasi_bidang"></textarea>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('konsentrasi_bidang'); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="formFile">Data Dukung</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control <?= validation_show_error('data_dukung') ? 'is-invalid' : null; ?>" type="file" id="formFile" name="data_dukung">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('data_dukung'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="formFile">Data Dukung</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control <?= validation_show_error('data_dukung') ? 'is-invalid' : null; ?>" type="file" id="formFile" name="data_dukung">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('data_dukung'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="formFile">Data Dukung</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control <?= validation_show_error('data_dukung') ? 'is-invalid' : null; ?>" type="file" id="formFile" name="data_dukung">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('data_dukung'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3" for="formFile">Data Dukung</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input class="form-control <?= validation_show_error('data_dukung') ? 'is-invalid' : null; ?>" type="file" id="formFile" name="data_dukung">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('data_dukung'); ?>
                                    </div>
                                </div>
                            </div>
             
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <a href="<?= base_url('/skripsi'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save" style="margin-right: 5px;"></i>Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   $(document).ready(function() {
    $('#nama_pembimbing').select2();
});
$(document).ready(function() {
    $('#nama_dosen_pa').select2();
});
</script>
<?= $this->endSection(); ?>
