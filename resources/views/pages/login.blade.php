@include('layouts.styles')

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Peduli Diri</title>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="/post-login">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="email">NIK</label>
                                        <input id="email" type="text" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <input id="password" type="hidden" class="form-control" name="password"
                                            tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Tolong isi dengan NIK anda
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input id="name" type="text" class="form-control" name="name" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Tolong isi dengan nama lengkap anda
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="mt-5 text-muted text-center">
                                    Belum punya akun ? <a href="/register">Register</a>
                                </div>
                            </div>
                        </div>

                        <div class="simple-footer">
                           Pelajari <a href="https://www.pedulilindungi.id/">Kebijakan Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<script>
    window.onload = function() {
        var src = document.getElementById("email"),
            dst = document.getElementById("password");
        src.addEventListener('input', function() {
            dst.value = src.value;
        });
    };
</script>
