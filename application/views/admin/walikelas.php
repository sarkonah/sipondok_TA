<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Staff Pengajar</h1>
    <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#tambah_walikelas">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Staff Pengajar</span>
    </a>

    <!-- DataTales  -->
    <?php echo $this->session->flashdata('staff');  ?>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Nomor HP</th>
                        <th>Domisili</th>
                        <th class="text-center" colspan="2">AKSI</th>
                    </tr>
                    <?php 
      $no=1;
      foreach($guru as $gr) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $gr->nama_guru ?></td>
                        <td><?php echo $gr->status ?></td>
                        <td><?php echo $gr->nope_guru ?></td>
                        <td><?php echo $gr->dom_guru ?></td>
                        <td align="center">
                            <a href="#" class=" btn btn-primary btn-circle" data-toggle="modal"
                                data-target="#edit_guru<?= $gr->id_guru?>">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pen"></i>
                                </span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="#" class=" btn btn-primary btn-circle" data-toggle="modal"
                                data-target="#hapus_guru<?= $gr->id_guru?>">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
            </div>
            </table>

            <!-- Modal Tambah Staff Pengajar -->
            <div class="modal fade" id="tambah_walikelas" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Staff Pengajar</h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('admin/data_walikelas/tambah_guru'); ?>" method="post"
                                enctype="multipart/form-data">

                                <div class="mb-6">
                                    <label for="Nama" class="form-label">Nama Lengkap </label>
                                    <input type="text" class="form-control" name="nama_guru" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="mb-6">
                                    <label for="Domisili" class="form-label">Domisili</label>
                                    <input type="text" class="form-control" name="dom_guru" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="mb-6">
                                    <label for="No HP" class="form-label">No HP</label>
                                    <input type="text" class="form-control" name="nope_guru" required
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

            <!-- Modal Detail Walikelas -->
            <!-- <div class="modal fade" id="detail_walikelas" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Walikelas</h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url() . 'admin/data_walikelas/detail_walikelas'; ?>"
                                method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <table class="table">

                                        <tr>
                                            <th>Nama</th>
                                            <th>Domisili </th>
                                            <th>Nomer HP </th>
                                            <th>Status </th>
                                        </tr>
                                        <?php  
                                        $no=1;
                                        foreach($guru as $detail_walikelas) : ?>
                                        <tr>
                                            <td> <?php echo $detail_walikelas->nama_guru ?></td>
                                            <td> <?php echo $detail_walikelas->dom_guru ?></td>
                                            <td> <?php echo $detail_walikelas->nope_guru ?></td>
                                            <td> <?php echo $detail_walikelas->status ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                        </div>

                    </div> <br>
                </div> -->

            <!-- Modal Edit Pengajar -->
            <?php foreach ($guru as $gr) : ?>
            <div class="modal fade" id="edit_guru<?= $gr->id_guru?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Staff Pengajar</h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('admin/data_walikelas/update_guru'); ?>" method="post"
                                enctype="multipart/form-data">

                                <div class="mb-6">
                                    <label for="Nama" class="form-label">Nama Lengkap </label>
                                    <input type="text" class="form-control" name="nama_guru"
                                        value="<?php echo $gr->nama_guru ?>" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="mb-6">
                                    <label for="Domisili" class="form-label">Domisili</label>
                                    <input type="text" class="form-control" name="dom_guru"
                                        value="<?php echo $gr->dom_guru ?>" required
                                        oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="mb-6">
                                    <label for="No HP" class="form-label">No HP</label>
                                    <input type="hidden" name="id_guru" class="form-control"
                                        value="<?php echo $gr->id_guru ?>">
                                    <input type="text" class="form-control" name="nope_guru"
                                        value="<?php echo $gr->nope_guru ?>" required
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
            <?php endforeach; ?>

            <!-- Modal Hapus Pengajar -->
            <?php foreach($guru as $gr) : ?>
            <div class=" modal fade" id="hapus_guru<?= $gr->id_guru?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Staff Pengajar
                            </h5>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin akan menghapus data ini?</p>

                            <div class="modal-footer">

                                <?php echo anchor('admin/data_walikelas/hapus_guru/' .$gr->id_guru, '<div class="btn btn-danger btn">Hapus</div>') ?>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>


        </div>
    </div>
</div>