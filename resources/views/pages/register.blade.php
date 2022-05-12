@include('layouts.styles')

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Peduli Diri</title>
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
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="/simpanUser" class="needs-validation">
                                  {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input id="nik" type="text" class="form-control" name="nik" tabindex="3"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Tolong isi dengan NIK anda
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Tolong isi dengan Email anda
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="control-label">Nama Lengkap</label>
                                        <input id="name" type="text" class="form-control" name="name" tabindex="2"
                                            required>
                                        <div class="invalid-feedback">
                                            Tolong isi dengan nama lengkap anda
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Register
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="simple-footer">
                           <p >Copy Right 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
