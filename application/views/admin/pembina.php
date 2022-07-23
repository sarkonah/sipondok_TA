<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Pembina</h1><!-- DataTales Example -->
    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_pembina">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Pembina</span>
    </a>


    <?php echo $this->session->flashdata('notif_pembina');  ?>

    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Pembina</th>
                    <th>Status</th>
                    <th>Nomor HP</th>
                    <th>Domisili</th>
                    <th class="text-center" colspan="3">AKSI</th>
                </tr>
                <?php
                $no = 1;
                foreach ($pembina as $pmb) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pmb->nama_pembina ?></td>
                    <td><?php echo $pmb->status ?></td>
                    <td><?php echo $pmb->nope_pembina ?></td>
                    <td><?php echo $pmb->dom_pembina ?></td>
                    <td align="center">
                        <a href="#" class=" btn btn-primary btn-circle" data-toggle="modal"
                            data-target="#edit_pembina<?= $pmb->id_pembina ?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                    </td>
                    <td align="center">
                        <a href="#" class=" btn btn-primary btn-circle" data-toggle="modal"
                            data-target="#hapus_pembina<?= $pmb->id_pembina ?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                        </a>
                    </td>
                    <td align="center">
                        <a href="#" class=" btn btn-primary btn-circle" data-toggle="modal"
                            data-target="#wa<?= $pmb->id_pembina ?>">
                            <span class="icon text-white-50">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </a>
                    </td>
                </tr>

                <?php endforeach; ?>
        </div>
        </table>

        <!-- Modal Tambah Pembina -->
        <div class=" modal fade" id="tambah_pembina" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            <div class="modal-dialog modal-lg">
                <div class=" modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pembina</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('admin/data_pembina/tambah_pembina'); ?>" method="post"
                            enctype="multipart/form-data">

                            <div class="mb-6">
                                <label for="Nama" class="form-label">Nama Lengkap </label>
                                <input type="text" class="form-control" name="nama_pembina" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="Domisili" class="form-label">Domisili</label>
                                <input type="text" class="form-control" name="dom_pembina" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="No HP" class="form-label">No HP</label>
                                <input type="text" class="form-control" name="nope_pembina" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="jabatan" class=" form-label">Status</label>
                                <input type="text" class="form-control" name="status" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </div class="container-fluid">

            </div>
        </div>



        <!-- Modal Edit Pembina -->
        <?php foreach ($pembina as $pmb) : ?>
        <div class=" modal fade" id="edit_pembina<?= $pmb->id_pembina ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg">
                <div class=" modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pembina</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() . 'admin/data_pembina/update_pembina'; ?>" method="post"
                            enctype="multipart/form-data">

                            <div class="mb-6">
                                <label for="Nama" class="form-label">Nama Lengkap </label>
                                <input type="text" class="form-control" name="nama_pembina"
                                    value="<?php echo $pmb->nama_pembina ?>" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="Domisili" class="form-label">Domisili</label>
                                <input type="text" class="form-control" name="dom_pembina"
                                    value="<?php echo $pmb->dom_pembina ?>" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="No HP" class="form-label">No HP</label>
                                <input type="hidden" name="id_pembina" class="form-control"
                                    value="<?php echo $pmb->id_pembina ?>">
                                <input type="text" class="form-control" name="nope_pembina"
                                    value="<?php echo $pmb->nope_pembina ?>" required
                                    oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-6">
                                <label for="jabatan" class=" form-label">Status</label>
                                <input type="text" class="form-control" name="status" value="<?php echo $pmb->status ?>"
                                    required oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>

        <!-- Modal Hapus Pembina -->
        <?php foreach ($pembina as $pmb) : ?>
        <div class=" modal fade" id="hapus_pembina<?= $pmb->id_pembina ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Pembina
                        </h5>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin akan menghapus data ini?</p>

                        <div class="modal-footer">

                            <?php echo anchor('admin/data_pembina/hapus_pembina/' . $pmb->id_pembina, '<div class="btn btn-danger btn">Hapus</div>') ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=" modal fade" id="wa<?= $pmb->id_pembina ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class=" modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kirim Pesan Pembina</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('kirim_pesan/send_message/') ?>" method="POST"
                            enctype="multipart/form-data">
                            <span>
                                Nomor WhatsApp
                            </span>
                            <input type="text" name="nomor" class="form-control" value="<?= $pmb->nope_pembina ?>">
                            <span>
                                pesan
                            </span>
                            <textarea type="text" name="pesan" class="form-control"
                                placeholder="Masukkan Pesan"></textarea>
                            <div class="d-flex justify-content-end mt-3">
                                <button class="btn btn-danger btn-sm mr-1" type="button"
                                    data-dismiss="modal">Batal</button>
                                <button class="btn btn-success btn-sm ml-1" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>