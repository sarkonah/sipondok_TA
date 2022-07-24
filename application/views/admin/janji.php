<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Data Pembina
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th class=" text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Domisili</th>
                    <th class="text-center" colspan="1">Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($pembina as $pmb) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pmb->nama_pembina?> </td>
                    <td><?php echo $pmb->status ?></td>
                    <td><?php echo $pmb->dom_pembina ?></td>
                    <td align="center" style="width: 50">
                        <a href="#" class=" btn btn-primary btn-circle" data-toggle="modal"
                            data-target="#wa<?= $pmb->id_pembina ?>">
                            <span class="icon text-white-50">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
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
    </div>

</div>