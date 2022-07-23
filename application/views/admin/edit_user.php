<!-- <div class="container-fluid">
    <h3>Edit Data User</h3>

    <?php foreach ($user as $usr) : ?>

    <form method="post" action="<?php echo base_url('admin/data_user/update')?>">

        <div class="row">
            <dt for="inputNama" class="col-sm-2 col-form-label">Nama</dt>
            <div class="col-sm-5 mb-3">
                <input type="text" name="nama" class="form-control" value="<?php echo $usr->nama ?>">
            </div>
        </div>

        <div class="row">
            <dt for="inputEmail" class="col-sm-2 col-form-label">Email</dt>
            <div class="col-sm-5 mb-3">
                <input type="email" name="email" class="form-control" value="<?php echo $usr->email ?>">
            </div>
        </div>

        <div class="row">
            <dt for="inputNama" class="col-sm-2 col-form-label">Nama</dt>
            <div class="col-sm-5 mb-3">
                <input type="hidden" name="id_usr" class="form-control" value="<?php echo $usr->id_usr ?>">
                <input type="password" name="password" class="form-control" value="<?php echo $usr->password ?>">
            </div>
        </div>

        <div class="row">
            <dt for="inputHakAkses" class="col-sm-2 col-form-label">Hak Akses</dt>
            <div class="col-sm-5 mb-3">
                <select class="form-control" name="hak_akses" value="<?php echo $usr->hak_akses?>">
                    <option><?php echo $usr->hak_akses ?></option>
                    <option>Admin</option>
                    <option>Pembina</option>
                    <option>Walikelas</option>
                    <option>Orang Tua</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 mr-2 ">Simpan</button>
        <a href="<?php echo base_url('admin/user') ?>">
            <div class="btn btn-sm btn-danger mt-3">Kembali</div>
        </a>
    </form>
    <?php endforeach; ?>
</div> -->