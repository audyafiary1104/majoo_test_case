<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />

    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" type="text/css" rel="stylesheet">

    <!-- Font CSS -->
    <link href="{{asset('css/gogle_sans_font.css')}}" type="text/css" rel="stylesheet">

    <!--  For icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <!-- Page Title -->
    <title></title>

    <!--
	 Owl-carousel CSS 
	<link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet">
-->

</head>

<body id="page_items" class="upload_item">
    @include('header')

    <!-- Body Wrapper Start -->
    <div class="body_wrapper ">
        <div class="row no-gutters ">
            <!-- Left Sidebar Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                <div class="upload my-2 pt-md-2 px-1 pr-md-0 ">
                    <a class="back-link d-none d-sm-none d-md-block pt-md-3 mb-md-5 px-3 " href="items.html"><i
                            class="zmdi zmdi-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-9 col-lg-9 col-xl-10  mt-2">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Upload an items</h3>
                            <form action="{{route('store.product')}}" method="post" enctype='multipart/form-data'>
                                @csrf
                                <div class="form-group  animate__animated animate__fadeInUp wow">
                                    <label>Item Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="" required="">
                                </div>
                                <div class="row mx-0  animate__animated animate__fadeInUp wow">

                                    <div class="col-12 col-sm-12 col-md-12 px-0">
                                        <div class="form-group">
                                            <label>Item Price (In $)</label>
                                            <input type="number" class="form-control" name="price" required=""
                                                value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group  animate__animated animate__fadeInUp wow">
                                    <label>Choose Items Category</label>
                                    <div class="select_box w-100 d-flex ">
                                        <select class="tokenizer" name="category">
                                            @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <i class="zmdi zmdi-caret-down"></i>
                                    </div>
                                </div>

                                <div class="form-group  animate__animated animate__fadeInUp wow">
                                    <label>Item description</label>
                                    <textarea rows="5" class="form-control py-1 ckeditor" name="description"></textarea>
                                </div>
                                <div class="form-group animate__animated animate__fadeInUp wow">
                                    <label>Opening Stock</label>
                                    <input type="number" name="op_stock" class="form-control" placeholder="" required="">
                                </div>
                                <div class="form-group animate__animated animate__fadeInUp wow">
                                    <label>Purchase Price</label>
                                    <input type="number" name="purchase_price" class="form-control" placeholder="" required="">
                                </div>
                                <div class="text-center  animate__animated animate__fadeInUp wow mb-md-4  px-1 pr-md-0">
                                    <div class="upload-box">
                                        <label for="img" class="img m-0 active">
                                            <i class="zmdi zmdi-image-alt"></i>
                                            <input id="img" name="images" type="file">
                                            <span>Upload <br> items image</span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn py-2">Upload Items </button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Require Javascript Start -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Require Javascript End -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('js/jquery.datetimepicker.full.js')}}"></script>

    <script>
        $("#datetime").datetimepicker();
        $('.ckeditor').ckeditor();

        $(".tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })

        $("#addmore").on('click', function () {
            $('#showmore').append(
                '<div class="row"><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7"><div class="form-group"><input type="text" class="form-control" placeholder="Add option" required=""></div></div><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5"><div class="form-group"><input type="text" class="form-control" placeholder="Add price" required=""></div></div></div>'
            )
        })

    </script>

    <script>
        $("#menu").on("click", function () {
            $("#header").toggleClass("active");
        });

    </script>
    <script>
        new WOW().init();

    </script>

</body>

</html>
