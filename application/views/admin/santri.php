<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Santri</h1>

    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_santri">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Santri</span>
    </a>


    <?=$this->session->flashdata('santri')?>
    <!-- DataTables -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="No: activate to sort column descending" aria-sort="ascending">No
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="NIS: activate to sort column descending" aria-sort="ascending"
                                style="width: 149.467px;">NIS</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Nama Santri: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Nama Santri </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Kelas Santri: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Kelas Santri</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Tanggal Masuk: activate to sort column descending"
                                aria-sort="ascending" style="width: 149.467px;">Tahun Masuk</th>
                            <th class="text-center" colspan="4">Aksi</th>

                            <?php
                            $no = 1;
                            foreach ($santri as $snt) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $snt->nis ?></td>
                            <td><?php echo $snt->nama_santri ?></td>
                            <td>
                                <?php if ($snt->id_kelas == '1') {
                                    echo 'Bacaan';
                                } elseif ($snt->id_kelas == '2') {
                                    echo 'Lambatan';
                                } elseif ($snt->id_kelas == '3') {
                                    echo 'Cepatan';
                                } ?>
                            </td>
                            <td><?php echo $snt->tahun_masuk ?></td>
                            <td align="center" style="width: 50">
                                <!-- <a href="<?php echo base_url('admin/data_santri/edit_santri') ?>" -->
                                <div class="btn btn-sm btn-primary btn" data-toggle="modal"
                                    data-target="#edit_santri<?= $snt->id_santri ?>">
                                    <i class="fa fa-edit"></i>Edit
                            </td>
                            <td>
                                <?php echo anchor('admin/data_santri/detail_santri/' . $snt->id_santri, '<div
                                    class="btn btn-warning btn-sm"><i class="fa fa-search-plus"></i> Detail</div>') ?>
                            </td>
                            <td align="center" style="width: 40">
                                <div class="btn btn-sm btn-danger btn" data-toggle="modal"
                                    data-target="#hapus_santri<?= $snt->id_santri ?>"><i class="fa fa-trash"></i> Hapus
                                </div>
                            </td>
                            <td align="center" style="width: 50">
                                <div class="btn btn-sm btn-primary btn" data-toggle="modal"
                                    data-target="#edit_kelas<?= $snt->id_santri ?>">
                                    <i class="fa fa-edit"></i>Edit Kelas
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        </tr>
                    </thead>

                    <!-- Modal Tambah Santri -->
                    <div class="modal fade" id="tambah_santri" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class=" modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Santri</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('admin/data_santri/tambah_santri') ?>"
                                        method="post" enctype="multipart/form-data">

                                        <div class="mb-6">
                                            <label for="Nama" class="form-label">Nama Santri </label>
                                            <input type="text" class="form-control" name="nama_santri" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="mb-6">
                                            <label for="Nama" class="form-label">No Induk Santri </label>
                                            <input type="text" class="form-control" name="nis" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>



                                        <div class="col-mb-6">
                                            <label for="Tempatlahir" class="form-label">Tempat Lahir </label>
                                            <input type="text" class="form-control" name="tempat_lahir" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="Tanggallahir" class="form-label">Tanggal Lahir
                                            </label>
                                            <input type="date" class="form-control" name="tanggal_lahir" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="gender" class="form-label">Jenis Kelamin
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="gender">
                                                <option>Putra</option>
                                                <option>Putri</option>
                                            </select>
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="statussantri" class="form-label">Status Santri
                                            </label>
                                            <select class="form-control" aria-label=".form-select-sm example"
                                                name="status_santri">
                                                <option>Kiriman</option>
                                                <option>Person</option>
                                            </select>
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="alamat_santri" class="form-label">Alamat
                                            </label>
                                            <input type="text" class="form-control" name="alamat_santri" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>


                                        <div class="col-mb-6">
                                            <label for="nama_ortu" class="form-label">Nama Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="nama_ortu" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nope_ibu" class="form-label">No HP Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="nope_ortu" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="alamat_ortu" class="form-label">Alamat Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="alamat_ortu" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>



                                        <div class="col-mb-6">
                                            <label for="Tanggalmasuk" class="form-label">Tanggal
                                                Masuk Pondok
                                            </label>
                                            <input type="date" class="form-control" name="tgl_masuk" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="Tanggalmasuk" class="form-label">Tahun
                                                Masuk Pondok
                                            </label>
                                            <input type="text" class="form-control" name="tahun_masuk" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <br>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div class="container-fluid">
                            </form>
                        </div>
                    </div>

                    <!-- Modal Edit santri -->
                    <?php foreach ($santri as $snt) : ?>
                    <div class="modal fade" id="edit_santri<?= $snt->id_santri ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class=" modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Santri</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url() . 'admin/data_santri/update_santri'; ?>"
                                        method="post" enctype="multipart/form-data">


                                        <div class="mb-6">
                                            <label for="nis_santri" class="form-label">NIS </label>
                                            <input type="hidden" name="id_santri" class="form-control"
                                                value="<?php echo $snt->id_santri ?>">
                                            <input type="text" class="form-control" name="nis"
                                                value="<?php echo $snt->nis ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="mb-6">
                                            <label for="nama_santri" class="form-label">Nama Santri </label>
                                            <input type="text" class="form-control" name="nama_santri"
                                                value="<?php echo $snt->nama_santri ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>




                                        <div class="col-mb-6">
                                            <label for="Tempatlahir" class="form-label">Tempat Lahir </label>
                                            <input type="text" class="form-control" name="tempat_lahir"
                                                value="<?php echo $snt->tempat_lahir ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="Tanggallahir" class="form-label">Tanggal Lahir
                                            </label>
                                            <input type="date" class="form-control" name="tanggal_lahir"
                                                value="<?php echo $snt->tanggal_lahir ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="status_santri" class="form-label">Status Santri
                                            </label>
                                            <select class="form-control" name="status_santri"
                                                value="<?php echo $snt->status_santri ?>"
                                                aria-label=".form-select-sm example">

                                                <option value="1">Person</option>
                                                <option value="2">Kiriman</option>
                                            </select>
                                        </div>
                                        <div class="col-mb-6">
                                            <label for="Tanggalmasuk" class="form-label">Tanggal
                                                Masuk Pondok
                                            </label>
                                            <input type="date" class="form-control" name="tgl_masuk"
                                                value="<?php echo $snt->tgl_masuk ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="col-mb-6">
                                            <label for="Tanggalkeluar" class="form-label">Tanggal
                                                Keluar Pondok
                                            </label>
                                            <input type="date" class="form-control" name="tgl_keluar"
                                                value="<?php echo $snt->tgl_keluar ?>">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nama_ortu" class="form-label">Nama Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="nama_ortu"
                                                value="<?php echo $snt->nama_ortu ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="nope_ibu" class="form-label">No HP Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="nope_ortu"
                                                value="<?php echo $snt->nope_ortu ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="col-mb-6">
                                            <label for="alamat_ortu" class="form-label">Alamat Orang Tua
                                            </label>
                                            <input type="text" class="form-control" name="alamat_ortu"
                                                value="<?php echo $snt->alamat_ortu ?>" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div class="container-fluid">
                            </form>
                        </div>
                    </div>

                    <div class="modal fade" id="edit_kelas<?= $snt->id_santri ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class=" modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                                </div>
                                <form action="<?=base_url('admin/data_santri/tambah_history_kelas')?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group d-none">
                                            <label for="my-input">Id santri</label>
                                            <input id="my-input" class="form-control" value="<?= $snt->id_santri ?>"
                                                type="text" name="id_santri">
                                        </div>
                                        <div class="form-group">
                                            <?php $kelas = $this->db->get('kelas')->result_array();?>
                                            <label for="my-input">Kelas</label>
                                            <select name="id_kelas" class="form-control">
                                                <?php foreach($kelas as $kls): ?>
                                                <option <?= $snt->id_kelas == $kls['id_kelas'] ? 'selected' : ''?>
                                                    value="<?= $kls['id_kelas']?>"><?= $kls['nama_kelas']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Tahun</label>
                                            <input id="my-input" class="form-control" type="text" name="tahun" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Hapus Santri -->
    <?php foreach ($santri as $snt) : ?>
    <div class=" modal fade" id="hapus_santri<?= $snt->id_santri ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Santri
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin akan menghapus data ini?</p>

                    <div class="modal-footer">

                        <?php echo anchor('admin/data_santri/hapus_santri/' . $snt->id_santri, '<div class="btn btn-danger btn">Hapus</div>') ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>