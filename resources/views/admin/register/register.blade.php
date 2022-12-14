
<!doctype html>
<html lang="en" class="minimal-theme">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('AdminAsset')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('AdminAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('AdminAsset')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('AdminAsset')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('AdminAsset')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('AdminAsset')}}/assets/css/pace.min.css" rel="stylesheet" />

    <title>Register</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="{{asset('AdminAsset')}}/assets/images/error/login-img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title text-center">Register</h5>
                                <form class="form-body" action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">User Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="text" name="name" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="User Name">
                                            </div>
                                        </div> <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="email" name="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
                                            </div>
                                        </div> <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Enter Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="password" name="password" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" name="password_confirmation" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="{{asset('AdminAsset')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('AdminAsset')}}/assets/js/pace.min.js"></script>


</body>
</html>
