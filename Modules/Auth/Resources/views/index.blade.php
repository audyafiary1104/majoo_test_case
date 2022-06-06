<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" type="text/css" rel="stylesheet">

    <!-- Font CSS -->
    <link href="{{asset('css/gogle_sans_font.css')}}" type="text/css" rel="stylesheet">

    <!--  For icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Page Title -->
    <title>Login</title>
</head>

<body id="page_sign_in">
    <div class="container-fluid px-0 px-md-3 px-lg-4">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                <div class="logo_box mx-auto text-center">
                    <img src="images/logo.png" class="img-fluid">
                </div>
                <div class="banner_img">
                    <img src="images/img_signin.png" class="img-fluid">
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-7 col-lg-7">

                <form class="col-12 col-lg-10 mx-auto" method="post" action="{{route('auth.login')}}">

                    @csrf
                    <div class="form-inner w-100">

                        <div class="col-12 col-md-12 col-lg-9 col-xl-9  m-auto px-4">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <h2>Login to your Account</h2>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Password">
                            </div>

                            <button type="submit" class="btn rounded-pill">Login</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Require Javascript Start -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    @include('sweetalert::alert')

</body>

</html>

</html>
