<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Janji Temu</h1>


    <!-- DataTales Pembina -->

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Domisili</th>
                            <th class="text-center" colspan="1">Aksi</th>
                        </tr>
                        <?php
                $no = 1;
                foreach ($janji as $jnj) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $jnj->nama_guru?> </td>
                            <td><?php echo $jnj->status ?></td>
                            <td><?php echo $jnj->dom_guru ?></td>
                            <td align="center" style="width: 50">
                                <a href="#" class="btn btn-primary btn-circle">
                                    <i class="fab fa-whatsapp lg"></i>
                        </tr>
                        <?php endforeach; ?>
            </div>
            </thead>
        </div>
    </div>

    <!-- Data Table Guru -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Domisili</th>
                            <th class="text-center" colspan="1">Aksi</th>
                        </tr>
                        <?php
                $no = 1;
                foreach ($janji as $jnj) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $jnj->nama_guru?> </td>
                            <td><?php echo $jnj->status ?></td>
                            <td><?php echo $jnj->dom_guru ?></td>
                            <td align="center" style="width: 50">
                                <a href="#" class="btn btn-primary btn-circle">
                                    <i class="fab fa-whatsapp lg"></i>
                        </tr>
                        <?php endforeach; ?>
            </div>
            </thead>
        </div>
    </div>
</div>
</div>
</div>