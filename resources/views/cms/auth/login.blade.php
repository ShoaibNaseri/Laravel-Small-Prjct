<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AWJU | Login to Admin Panel</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('cms/css/main.d810cf0ae7f39f28f336.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('<?php echo asset('cms/assets/images/originals/city.jpg') ?>');"></div>
                                        <div class="slider-content">
                                            <h3>Admin Panel</h3>
                                            <p>You can easily manage the website content and contacts in the admin panel graphic user interface. please login first.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"style=" height: 206px;
    width: 256px; background: url({{asset('front/img/logo.png')}});"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Welcome back,</span>
                                <span>Please sign in to access the admin panel.</span>
                            </h4>
                            <div class="divider row"></div>
                            <div>
                                <form action="{{route('admin.login.submit')}}" method="post" autocomplete="off">
                                @csrf
                                    <div class="form-row">
                                      @if(session('login') == 'failed')
                                      <h4>
                                        <span class="text-danger">The login credentials were incorrect, please try again.</span>
                                      </h4>
                                      @endif
                                      <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="username" class="">Username</label>
                                                <input name="username" id="username" placeholder="Username here..."
                                                    type="text" class="form-control" value="{{session('username')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class="">Password</label>
                                                <input name="password" id="examplePassword"
                                                    placeholder="Password here..." type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('cms/js/main.d810cf0ae7f39f28f336.js')}}"></script>
</body>

</html>
