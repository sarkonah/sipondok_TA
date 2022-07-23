<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Mata Pelajaran</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php 
      $no=1;
      foreach($mapel as $mpl) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php if ($mpl->id_kelas == '1')
                                    {echo'Bacaan';}
                                elseif ($mpl->id_kelas == '2')
                                    {echo'Lambatan';} 
                                elseif ($mpl->id_kelas == '3')
                                    {echo'Cepatan';}
                                   ?>
                        </td>
                        <td>
                            <?php echo anchor('admin/data_indikator/detail_indikator/'.$mpl->id_kelas,'<div
                                    class="btn btn-warning btn-sm"><i class="fa fa-search-plus"></i> Detail</div>') ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tr>
                    </tr>

            </div>
        </div>

    </div>