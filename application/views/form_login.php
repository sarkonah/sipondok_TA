<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">
                <br>
                <br>
                <br><a></a>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <form action="<?php echo base_url('login/login_user') ?>" class="user"
                                        method="post">
                                        <?php echo $this->session->flashdata('pesan_login') ?>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Email" name="email" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                            <?php echo form_error('email', '<div class="text-danger small ml-3">','</div'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                placeholder="Masukkan Password" name="password" required
                                                oninvalid="this.setCustomValidity('Data wajib diisi!')"
                                                oninput="setCustomValidity('')">
                                            <?php echo form_error('password', '<div class="text-danger small ml-3">','</div'); ?>
                                        </div>

                                        <div class="form-group ml-3">
                                            <input type="checkbox" id="show-password">
                                            <label for="show-hide">Show Password</label>
                                            <script
                                                src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
                                            </script>
                                            <script>
                                            $(document).ready(function() {
                                                $('#show-password').click(function() {
                                                    if ($(this).is(':checked')) {
                                                        $('#password').attr('type', 'text');
                                                    } else {
                                                        $('#password').attr('type', 'password');
                                                    }
                                                });
                                            });
                                            </script>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block"><i
                                                class="fas fa-sign-in-alt"></i> Login</button>
                                        <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                           Login
                                       </a> -->
                                        <hr>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>