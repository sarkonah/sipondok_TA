<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">

                </div>
                <div class="sidebar-brand-text mx-3">Si Pondok</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu Akademik</h6>
                        <a class="collapse-item" href="<?= base_url('admin/data_santri') ?>">Santri</a>
                        <!-- Berisi data nama santri, nis, alamat, data orang tua, nope orang tua, kelas santri, status santri, tgl masuk -->
                        <a class="collapse-item" href="<?= base_url('admin/data_kelas') ?>">Kelas</a>
                        <!-- Untuk menambahkan santri ke kelas, dan jumlah santri per kelas -->
                        <a class="collapse-item" href="<?= base_url('admin/data_walikelas') ?>">Staff Pengajar</a>
                        <!-- Data Wali Kelas, nama , nope, alamat, kelas yg jadi wali -->
                        <a class="collapse-item" href="<?= base_url('admin/data_pembina') ?>">Pembina</a>
                        <!-- Nama, nope, dom, jabatan -->
                        <a class="collapse-item" href="<?= base_url('admin/data_indikator') ?>">Mata Pelajaran</a>
                        <!-- Bikin KKM nilai sama keterangan) -->
                        <a class="collapse-item" href="<?= base_url('admin/data_rapor') ?>">Rapor</a>
                        <!-- Rapor per santri (karena ga ada kenaikan per semester) -->
                        <!-- Saran pengaduan -->
                        <a class="collapse-item" href="<?= base_url('admin/data_janji') ?>">Janji
                            Temu</a>
                        <!-- Untuk Buat Jadwal Janji temu, nanti isinya, hari sama nama pembina terus ada wa gateway nya -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Sistem</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sistem</h6>
                        <a class="collapse-item" href="<?= base_url('admin/data_user') ?>">User</a>
                    </div>
                </div>
            </li>



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login/logout')?> ">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto align-items-center">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a> -->
                            <!-- Dropdown - User Information -->
                            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#logout"><b>Logout</b>
                                <i class="fas fa-power-off "></i>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="modal fade" id="logout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Keluar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <span>
                            Apakah Anda yakin ingin keluar ?
                        </span>
                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-sm btn-primary col-2 mr-2" type="button" class="close" data-dismiss="modal" >Tidak</button>
                            <button class="btn btn-sm btn-danger col-2 ml-2" onclick="window.location.href='<?=base_url(('login/logout'))?>'">Iya</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>