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
    <!-- Header Start -->
    @include('header')
    <div class="header_spacebar"></div>
    <!-- Header End -->

    <!-- Body Wrapper Start -->
    <div class="body_wrapper ">
        <div class="row no-gutters ">
            <!-- Left Sidebar Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                <div class="upload my-2 pt-md-2 px-1 pr-md-0 ">
                    <a class="back-link d-none d-sm-none d-md-block pt-md-3 mb-md-5 px-3 " href="/roles"><i
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
                    <form method="post" action="{{route('store.roles')}}">

                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Create Roles</h3>
                                @csrf
                                <div class="form-group  animate__animated animate__fadeInUp wow">
                                    <label>Roles Name</label>
                                    <input type="text" class="form-control" placeholder="" required="" value=""
                                        name="name">
                                </div>
                                <div class="upload_an_items p-4">
                                    <h3 class="mt-0 mb-5">Add Permision (master Roles)</h3>
                                    <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1s">
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Create Roles</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="create_roles" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Edit Roles</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="edit_roles" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Delete Roles</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="delete_roles" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">view Roles</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="view_roles" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upload_an_items p-4">
                                    <h3 class="mt-0 mb-5">Add Permision (Report)</h3>
                                    <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1s">
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Dashboard</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="dashboard" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Stock Report</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="stock_report" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                                <div class="upload_an_items p-4">
                                    <h3 class="mt-0 mb-5">Add Permision (Master Users)</h3>
                                    <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1s">
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Create Users</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="create_users" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Edit Users</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="edit_users" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">View Users</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="view_users" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Delete Users</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="delete_users" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upload_an_items p-4">
                                    <h3 class="mt-0 mb-5">Add Permision (Category Product)</h3>
                                    <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1s">
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Create Category Product</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="create_category" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Edit Category Product</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="edit_category" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">View Category Product</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="view_category" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center px-4 pb-4">
                                            <h3 class="mb-0">Delete Category Product</h3>
                                            <div class="toggle_box align-items-center d-flex ml-auto">
                                                <h4>Yes</h4>
                                                <label class="switch mb-0">
                                                    <input type="checkbox" value="delete_category" name="permision[]">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 second-box">

                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Add Permision (Transaction)</h3>
                            <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                data-wow-duration="1s">
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Create Transaction</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="create_transaction" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Delete Transactions</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="delete_transaction" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">View Transaction</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="view_transaction" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">view pos</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="view_pos" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Add Permision (Master Customer)</h3>
                            <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                data-wow-duration="1s">
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Create Customer</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="create_customer" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Edit Customer</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="edit_customer" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Delete Customer</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="delete_customer" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">View Customer</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="view_customer" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Add Permision (Master Suplier)</h3>
                            <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                data-wow-duration="1s">
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Create Suplier</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="create_suplier" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Edit Suplier</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="edit_suplier" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Delete Suplier</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="delete_suplier" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">View Suplier</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="view_suplier" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Add Permision (Access Api)</h3>
                            <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                data-wow-duration="1s">
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Access Api</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="api" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="upload_an_items p-4">
                            <h3 class="mt-0 mb-5">Add Permision (Master Product)</h3>
                            <div class="upload_an_items item_in_stock animate__animated animate__fadeInUp wow"
                                data-wow-duration="1s">
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Create Product</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="create_product" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Delete Product</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="delete_product" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">View Product</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="view_product" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-4 pb-4">
                                    <h3 class="mb-0">Edit Product</h3>
                                    <div class="toggle_box align-items-center d-flex ml-auto">
                                        <h4>Yes</h4>
                                        <label class="switch mb-0">
                                            <input type="checkbox" value="edit_product" name="permision[]">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <button type="file" class="btn py-2">Upload Items </button>

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
