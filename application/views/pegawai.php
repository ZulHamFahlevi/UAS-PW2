<div class="content-wrapper">
    <section class="content">
        <table class="table">
            <h1>Data Pegawai</h1>
            <?php echo $this->session->flashdata('message'); ?>
            <nav class="navbar navbar-default">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
                        class="fa fa-plus"></i> Tambah Data Pegawai </button>
                <a class="btn btn-danger" href="<?php echo base_url('pegawai/print') ?>"><i class="fa fa-print"> Print
                    </i></a>
                <!-- <a class="btn btn-info" href="<?php echo base_url('pegawai/tampil_grafik') ?>"><i
                        class="fa fa-chart-area"> Grafik </i></a> -->
                <div class="dropdown d-inline">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i fa fa-download> Export</i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="<?php echo base_url('pegawai/pdf1') ?>">PDF</a></li>
                        <li><a href="<?php echo base_url('pegawai/exportExcel') ?>">EXCEL</a></li>
                    </ul>
                </div>
                <div class="navbar-form">
                    <?php echo form_open('pegawai/search') ?>
                    <input type="text" name="keyword" class="form" placeholder="Search">
                    <button type="submit" class="btn btn-success"> Cari </button>
                    <?php echo form_close() ?>
                </div>
            </nav>
        </table>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA Pegawai</th>
                <th>NIP</th>
                <th>ALAMAT</th>
                <th>TANGGAL LAHIR</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            $no = 1;
            foreach ($pegawai as $pgw) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pgw->nama ?></td>
                <td><?php echo $pgw->nip++ ?></td>
                <td><?php echo $pgw->alamat++ ?></td>
                <td><?php echo $pgw->tgl_lahir++ ?></td>
                <td><?php echo anchor(
                            'pegawai/detail/' . $pgw->id,
                            '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>'
                        ) ?>
                </td>
                <td onclick="javascript: return confirm('Anda Yakin Hapus?')">
                    <?php echo anchor('pegawai/hapus/' . $pgw->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                </td>
                <td>
                    <?php echo anchor('pegawai/edit/' . $pgw->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <nav aria-label="...">
            <ul class="pagination" style="justify-content : center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary">
        Launch demo modal
    </button> -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PEGAWAI</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('pegawai/tambah_aksi') ?>
                    <!-- <form method="post" action="<?php echo base_url() . 'pegawai/tambah_aksi' ?>"> -->
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control datepicker">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <!-- </form> -->
                    <?php echo form_close(); ?>
                </div>
                <!-- <div class="modal-footer">

                </div> -->
            </div>
        </div>
    </div>
</div>