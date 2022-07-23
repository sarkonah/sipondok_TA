<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Santri
        </div>
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"> <?php echo $detail_santri->nama_santri ?></h4>
                    <table class="table">
                        <tr>
                            <th>NIS Santri</th>
                            <td> <?php echo $detail_santri->nis_santri ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>
                                <?php if ($detail_santri->id_kelas == '1') {
                                    echo 'Pegon Bacaan';
                                } elseif ($detail_santri->id_kelas == '2') {
                                    echo 'Lambatan';
                                } elseif ($detail_santri->id_kelas == '3') {
                                    echo 'Cepatan';
                                } elseif ($detail_santri->id_kelas == '4') {
                                    echo 'Screening Test';
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td> <?php echo $detail_santri->gender ?></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td> <?php echo $detail_santri->tempat_lahir ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td> <?php echo $detail_santri->tanggal_lahir ?></td>
                        </tr>
                        <tr>
                            <th>Alamat santri</th>
                            <td> <?php echo $detail_santri->alamat_santri ?></td>
                        </tr>
                        <tr>
                            <th>Status Santri</th>
                            <td> <?php echo $detail_santri->status_santri ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td> <?php echo $detail_santri->tgl_masuk ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal keluar</th>
                            <td> <?php echo $detail_santri->tgl_keluar ?></td>
                        </tr>
                        <tr>
                            <th>Nama Orang Tua</th>
                            <td> <?php echo $detail_santri->nama_ortu ?></td>
                        </tr>
                        <!-- <tr>
                            <th>Nama Ibu</th>
                            <td> <?php echo $detail_santri->nama_ibu ?></td>
                        </tr> -->
                        <tr>
                            <th>Nomor HP Orang Tua</th>
                            <td> <?php echo $detail_santri->nope_ortu ?></td>
                        </tr>
                        <tr>
                            <th>Alamat Orang Tua</th>
                            <td> <?php echo $detail_santri->alamat_ortu ?></td>
                        </tr>
                        <!-- <tr>
                            <th>Nama Wali</th>
                            <td> <?php echo $detail_santri->nama_wali ?></td>
                        </tr>
                        <tr>
                            <th>Nomor HP Wali</th>
                            <td> <?php echo $detail_santri->nope_wali ?></td>
                        </tr>
                        <tr>
                            <th>Alamat Wali</th>
                            <td> <?php echo $detail_santri->alamat_wali ?></td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- <div class="card-deck">
        <div class="card">
            <div class="card-header">
                Data Orang Tua
            </div>
            <div class="card-body">
                <table class="table">

                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Data Rapor
            </div>
            <div class="card-body">


            </div>
        </div>
    </div> -->
</div>