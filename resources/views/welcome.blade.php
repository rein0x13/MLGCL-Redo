<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MLGCL PORTAL</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('login/images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('login/css/style.css') }}" rel="stylesheet">
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-5">
                    <div class="form-input-content">
                        <div class="card card-login">
                            <div class="card-header">
                                <div class="nav-header position-relative  text-center w-100">
                                    <div class="brand-logo">
                                        <a href="index.html">
                                            <b class="logo-abbr">D</b>
                                            <span class="brand-title"><b>MLGCL PORTAL</b></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-3">
                                <img class="rounded-circle" src=" " width="80" height="80" alt="logo">
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group mb-4">
                                        <input type="text" name="email" class="form-control rounded-0 bg-transparent" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" name="password" class="form-control rounded-0 bg-transparent" placeholder="Password">
                                    </div>
                                    <div class="form-group ml-3 mb-5">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="label-checkbox ml-2 mb-0" for="checkbox1">Remember Password</label>
                                    </div>
                                    <button class="btn btn-primary btn-block border-0" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="{{ asset('login/plugins/common/common.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('login/js/custom.min.js') }}"></script>
    <script src="{{ asset('login/js/settings.js') }}"></script>
    <script src="{{ asset('login/js/quixnav.js') }}"></script>
</body>


</html>