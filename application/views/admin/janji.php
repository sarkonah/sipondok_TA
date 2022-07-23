<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Data Pembina
        </div>
        <div class="row g-0">

            <div class="card-body">
                <h4 class="card-title"> </h4>
                <div class="table-responsive">
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
                                <a href="https://api.whatsapp.com/send/?phone=6285784018007&text&type=phone_number&app_absent=0"
                                    class="btn btn-primary btn-circle">
                                    <i class="fab fa-whatsapp lg"></i>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- <div class="card">
        <div class="card-header">
            Data Guru
        </div>
        <div class="row g-0">

            <div class="card-body">
                <h4 class="card-title"> </h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Domisili</th>
                            <th class="text-center" colspan="1">Aksi</th>
                        </tr>
                        <?php
                            $no = 1;
                            foreach ($join as $jn) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $jn->nama_pembina?> </td>
                            <td><?php echo $jn->status ?></td>
                            <td><?php echo $jn->dom_pembina ?></td>
                            <td align="center" style="width: 50">
                                <a href="#" class="btn btn-primary btn-circle">
                                    <i class="fab fa-whatsapp lg"></i>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
</div>