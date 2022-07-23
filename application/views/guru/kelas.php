<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <?php echo $this->session->flashdata('message_nominator');  ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No </th>
                            <th class=" text-center">NIS</th>
                            <th class="text-center">Nama Santri </th>
                            <th class="text-center">Kelas Santri</th>
                            <th class=" text-center">Aksi</th>
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
                                }
                                ?>
                            </td>
                            <td align="center" style="width: 50">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#inputRapor<?php echo $snt->id_santri ?>">
                                    <i class="fa fa-pen"></i>
                                    Input Rapor
                                </button>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal input rapor -->
<?php foreach ($santri as $snt) : ?>
<div class="modal fade" id="inputRapor<?php echo $snt->id_santri ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Rapor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="table-responsive">
                    <table class="table table-bordered" name="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <form action="<?php echo base_url() . 'guru/input_rapor/tambah'; ?>" method="post"
                                enctype="multipart/form-data">
                                <tr>
                                    <th style="width: 10%;">No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai KKM</th>
                                    <th style="width: 15%;">Nilai</th>
                                </tr>
                                <?php
                                    $no = 1;
                                    foreach ($pelajaran as $mpl) : ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $mpl->nama_mapel ?></td>
                                    <td><?php echo $mpl->nilai_ratarata ?></td>
                                    <td><input type="number" name="nilai[]" id="nilai" onkeyup="b()"
                                            class="form-control" min="0" max="100" required
                                            oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                            oninput=" setCustomValidity('')">
                                    </td>
                                    <input type="text" name="id_mapel[]" value="<?php echo $mpl->id_mapel ?>" hidden>

                                </tr>

                                <?php endforeach; ?>
                                <input type="text" name="id_kelas" value="<?php echo $snt->id_kelas ?>">
                                <input type="text" name="tahun" value="<?php foreach ($tahun_now as $thn) {
                                                                                    if ($snt->id_santri == $thn->id_santri) {
                                                                                        echo $thn->tahun;
                                                                                    }
                                                                                } ?>">

                                <input type="text" name="id_santri" value="<?php echo $snt->id_santri ?>">

                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>