<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Rapor</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('admin/data_rapor') ?>" method="post">
                <label for="">tahun</label>
                <div class="d-md-flex mb-3">

                    <select name="tahun" class="form-control col-md-2 " id="tahun">
                        <?php foreach ($list_tahun as $thn) { ?>
                        <?php if ($tahun == $thn['tahun']) { ?>
                        <option value="<?= $thn['tahun'] ?>" selected><?= $thn['tahun'] ?></option>
                        <?php } else { ?>
                        <option value="<?= $thn['tahun'] ?>"><?= $thn['tahun'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Get</button>

                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1">No
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="NIS: activate to sort column descending" aria-sort="ascending">
                                NIS</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Nama Santri: activate to sort column descending"
                                aria-sort="ascending">Nama Santri </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                colspan="1" aria-label="Kelas Santri: activate to sort column descending"
                                aria-sort="ascending">Kelas Santri</th>
                            <th class="text-center" colspan="1">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($rapor as $rp) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $rp->nis ?></td>
                        <td><?php echo $rp->nama_santri ?></td>
                        <td>
                            <?php if ($rp->id_kelas == '1') {
                                    echo 'Bacaan';
                                } elseif ($rp->id_kelas == '2') {
                                    echo 'Lambatan';
                                } elseif ($rp->id_kelas == '3') {
                                    echo 'Cepatan';
                                } elseif ($rp->id_kelas == '4') {
                                    echo 'Screening Test';
                                } ?>
                        </td>
                        <td align="center">
                            <a href="data_rapor/detail_rapor/<?= $rp->id_santri ?>/<?= $rp->tahun ?>" target="_blank"
                                class=" btn btn-primary btn-circle">
                                <span class="icon text-white-50">
                                    <i class="fas fa-print"></i>
                                </span>
                            </a>
                        </td>

                        <!-- <td align="center">
                            <a href="#" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#wa">
                                <i class="bi bi-send-fill"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                </svg> -->
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</div>



<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Modal Print Rapor -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" id="rapor" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rapor</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <embed src="  <?php echo base_url() ?>assets/img/3.png" frameborder="0" width="100%" height="600px">
            </div>
        </div>
    </div>
</div>