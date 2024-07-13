<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
 <!-- page content -->
 <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Nomor Surat</h3>
                <div style="margin-bottom: 10px;">
                    <a href="<?= base_url("nomor-surat/tambah"); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus-square" style="margin-right: 5px;"></i>Input Nomor Surat Departemen</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Semua Nomor Surat Terpakai</h2>
                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Surat</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1 ?>
                                        <?php foreach($semuaNomorSurat as $sns): ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $sns['no_surat']; ?></td>
                                                <td><?= tanggal_indo($sns['created_at']); ?></td>
                                                <td><?= $sns["status"] == "5" ? "<span class='badge badge-success'>Terpakai</span>" : ($sns["status"] == "4" ? "<span class='badge badge-danger'>Batal</span>" : ($sns["status"] == "3" ? "<span class='badge badge-warning'>Menunggu diproses Kadep</span>" : null)) ; ?></td>
                                                <td><?= $sns['keterangan']; ?></td>
                                                <td>
                                                        <a href="<?= base_url('nomor-surat/detail/'.$sns['uuid']); ?>" class="btn btn-primary btn-sm" ><i class="fa fa-file-text-o" style="margin-right: 5px;"></i>Detail</a>
                                                </td>
                                            <?php $no++ ?>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
