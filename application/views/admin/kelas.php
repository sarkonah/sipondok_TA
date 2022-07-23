<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <!-- <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal"
                data-target="#tambah_kelas">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Kelas</span>
            </a> -->

            <table class="table table-bordered table-striped table-hover">
                <tr>

                    <th>Kelas</th>
                    <th>Nama Walikelas</th>
                    <th colspan="1"> AKSI</th>
                </tr>
                <?php

                foreach ($kelas as $kls) : ?>
                <tr>
                    <td><?php echo $kls->nama_kelas ?></td>
                    <!-- <td>
                        <?php if ($list_kls->id_kelas == '1') {
                            echo 'Pegon Bacaan';
                        } elseif ($list_kls->id_kelas == '2') {
                            echo 'Lambatan';
                        } elseif ($list_kls->id_kelas == '3') {
                            echo 'Cepatan';
                        }
                        ?>
                        </td> -->
                    <td><?= $kls->nama ?></td>
                    <td align="center" style="width: 50">
                        <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal"
                            data-target="#edit_kelas<?= $kls->id_kelas ?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </div>
    <?php foreach ($kelas as $usr) : ?>
    <div class="modal fade" id="edit_kelas<?= $usr->id_kelas ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas
                    </h5>
                </div>
                <form action="<?php echo base_url('admin/data_kelas/update_kelas/' . $usr->id_kelas); ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-6">
                            <label for="Nama" class="form-label">Kelas </label>
                            <input type="text" class="form-control" name="kelas" value="<?php echo $usr->nama_kelas ?>"
                                required oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                oninput="setCustomValidity('')" disabled>
                        </div>
                        <br>
                        <div class="mb-6">
                            <label for="Nama" class="form-label">Wali Kelas</label>
                            <select name="wali" id="" class="form-control">
                                <?php foreach ($wali as $wa) : ?>
                                <option value="<?= $wa->id_user ?> "><?= $wa->nama ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>