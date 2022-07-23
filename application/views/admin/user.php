<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data User</h1>

    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_user">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah User</span>
    </a>

    <?= $this->session->flashdata('popup_user') ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Hak Akses</th>
                            <th class="text-center" colspan="2">Aksi</th>

                        </tr>
                        <?php
                        $no = 1;
                        foreach ($user as $usr) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $usr->nama ?></td>
                            <td><?php echo $usr->email ?></td>
                            <td><?php echo $usr->password ?></td>
                            <td>
                                <?php if ($usr->hak_akses == 'admin') {
                                        echo 'Admin';
                                    } elseif ($usr->hak_akses == 'walikelas') {
                                        echo 'Walikelas';
                                    } ?>
                            </td>
                            <td align="center" style="width: 50">
                                <!-- <a href="<?php echo base_url('admin/data_user/edit_user') ?>" -->
                                <div class="btn btn-sm btn-primary btn" data-toggle="modal"
                                    data-target="#edit_user<?= $usr->id_user ?>">
                                    <i class="fa fa-edit"></i>Edit
                            </td>
                            <td align="center" style="width: 40">
                                <div class="btn btn-sm btn-danger btn" data-toggle="modal"
                                    data-target="#hapus_user<?= $usr->id_user ?>"><i class="fa fa-trash"></i> Hapus
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </thead>
                </div>

                <!-- Modal Tambah User -->
                <div class="modal fade" id="tambah_user" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class=" modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() . 'admin/data_user/tambah_user'; ?>" method="post"
                                    enctype="multipart/form-data">

                                    <div class="mb-6">
                                        <label for="Nama" class="form-label">Nama Lengkap </label>
                                        <input type="text" class="form-control" name="nama" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                                    <div class="col-mb-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                                    <div class="col-mb-6">
                                        <label for="password" class="form-label">Password
                                        </label>
                                        <input type="text" class="form-control" name="password" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                                    <div class="col-mb-6">
                                        <label for="gender" class="form-label">Hak Akses
                                        </label>
                                        <select class="form-control" aria-label=".form-select-sm example"
                                            name="hak_akses">
                                            <!-- <option selected>Hak Akses</option> -->
                                            <option value="1">Admin</option>
                                            <!-- <option value="2">Pembina</option> -->
                                            <option value="2">Walikelas</option>
                                            <!-- <option value="3">Orang Tua</option> -->
                                        </select>
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

                <!-- Modal Edit User -->
                <?php foreach ($user as $usr) : ?>
                <div class="modal fade" id="edit_user<?= $usr->id_user ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class=" modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() . 'admin/data_user/update_user'; ?>" method="post"
                                    enctype="multipart/form-data">

                                    <div class="mb-6">
                                        <label for="Nama" class="form-label">Nama Lengkap </label>
                                        <input type="text" class="form-control" name="nama"
                                            value="<?php echo $usr->nama ?>" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                                    <div class="col-mb-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="<?php echo $usr->email ?>" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                                    <div class="col-mb-6">
                                        <label for="password" class="form-label">Password
                                        </label>
                                        <input type="hidden" name="id_user" class="form-control"
                                            value="<?php echo $usr->id_user ?>">
                                        <input type="text" class="form-control" name="password"
                                            value="<?php echo $usr->password ?>" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput="setCustomValidity('')">
                                    </div>

                                    <div class="col-mb-6">
                                        <label for="gender" class="form-label">Hak Akses
                                        </label>
                                        <select class="form-control" aria-label=".form-select-sm example"
                                            name="hak_akses" value="<?php echo $usr->id_user ?>">
                                            <!-- <option selected>Hak Akses</option> -->
                                            <option>Admin</option>
                                            <option>Walikelas</option>
                                            <!-- <option>Pembina</option> -->
                                            <!-- <option>Ortu</option> -->
                                        </select>
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
                <?php endforeach ?>

                <!-- Modal Hapus User -->
                <?php foreach ($user as $usr) : ?>
                <div class=" modal fade" id="hapus_user<?= $usr->id_user ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus User
                                </h5>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin akan menghapus data ini?</p>

                                <div class="modal-footer">

                                    <?php echo anchor('admin/data_user/hapus_user/' . $usr->id_user, '<div class="btn btn-danger btn">Hapus</div>') ?>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>