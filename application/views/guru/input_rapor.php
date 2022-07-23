<div class="container-fluid">

</div>
<main>
    <div class="container mt-3">


        <div class="card">

            <h7 class="card-header"><b>Nilai Rapor [ Nama Santri : ] [ NIS : ] </b></h7>
            <h4>



            </h4>
            <div class="card-body">


                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-bordered" name="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <form action="<?php echo base_url(). 'guru/input_rapor/update_input_rapor'; ?>"
                                    method="post" enctype="multipart/form-data">
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai KKM</th>
                                        <th>Nilai</th>
                                    </tr>
                                    <?php 
	      $no=1;
	      foreach($mapel as $mpl) : ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $mpl->nama_mapel ?></td>
                                        <td><?php echo $mpl->indikator_nilai?></td>
                                        <td><input type="number" name="nilai" id="nilai" onkeyup="b()"
                                                class="form-control" style="width: 11%; margin-left: 300px;" min="0"
                                                max="100" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')"></td>
                                        <input type="text" name="id_mapel"
                                            style="position: absolute; left: 138px; width: 60%"
                                            class="form-control col-sm-8 ml-3" hidden>
                                    </tr>


                            </thead>
                            <?php endforeach; ?>
                        </table>
                        <button type="submit" class="btn btn-primary">Simpan</button>