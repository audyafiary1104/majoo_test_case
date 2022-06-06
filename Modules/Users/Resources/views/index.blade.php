@extends('users::layouts.master')

@section('content')
<div class="body_wrapper">
    <div class="page_title">
        <div class="row align-items-center mx-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p-0">
                <div class="title_inner d-flex">
                    <h1 class="d-flex align-items-center">Users
                        <!--                            <span class="ml-4">$987.50</span>-->
                    </h1>
                    <button type="button" class="btn"><a data-toggle="modal" data-target="#add_people">Add
                            New</a></button>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 d-flex">
                <form
                    class="search_box col-12 col-sm-12 col-md-12 col-lg-8 col-xl-7 p-0 px-lg-3 mt-3 mt-lg-0 pb-3 pb-md-0 ml-auto">
                    <div class="form-group d-flex">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="zmdi zmdi-search"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Right Sidebar Start -->
    <div class="right_sidebar">
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <!-- Food Items Tab customers Start -->
            <div>
                <!-- Order List Start -->
                <div class="order_list">
                    <div class="list_header d-flex">
                        <h2 class="text-left Name">Name</h2>
                        <h2 class="text-left email">Email Address</h2>
                        <h2 class="text-left email">Roles</h2>
                        <h2 class="text-left Action people">Action</h2>
                    </div>

                    <ul>
                        @foreach($users as $user)
                        <li class="d-flex  animate__animated animate__fadeInUp wow">
                            <h3 class="text-left Name"><strong>{{$user->name}}</strong></h3>
                            <h3 class="text-left email">{{$user->email}}</h3>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <h3 class="text-left email">{{$v}}</h3>
                                @endforeach
                            @endif
                            <div class="btn_container d-flex ">
                                <button type="button" class="btn">
                                    <a href="{{route('users.delete',['id' => $user->id])}}"><i class="zmdi zmdi-delete"></i></a>
                                </button>
                                <button type="button" class="btn edit" data-url="{{route('users.update',['id' => $user->id])}}">
                                    <a><i class="zmdi zmdi-edit"></i></a>
                                </button>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
                <!-- Order List End -->

                <!-- Tab Footer start -->

                <!-- Tab Footer End -->
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
    <!-- Right Sidebar End -->
</div>
<!-- Body Wrapper End -->


<!-- Add people  Modal Start  -->
<div class="modal fade add_category_model add_expenses receipt_model px-0" id="add_people" tabindex="-1" role="dialog"
    aria-labelledby="receipt_modelTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header px-0">
                <h2 class="col-11 mx-auto">Add Users</h2>
            </div>
            <div class="modal-body p-0">
                <form class="pt-2 pt-sm-2 pt-md-4" method="post" action="{{route('users.create')}}">
                    @csrf
                    <div class="col-11 mx-auto form_container">
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration=".5s">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration="1s">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                            <div class="select_box d-flex">
                                <select name="role">
                                    <option value="">Select Roles</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer animate__animated animate__fadeInUp wow" data-wow-duration="1s">
                        <div class="row no-gutters w-100">
                            <div class="col-6"> <button type="file" class="btn Cencel" data-dismiss="modal"><a
                                        href="#">Cencel</a></button></div>
                            <div class="col-6"> <button type="submit" class="btn">Add People</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Add people Modal End  -->
<!-- Add people  Modal Start  -->
<div class="modal fade add_category_model add_expenses receipt_model px-0" id="edit_people" tabindex="-1" role="dialog"
    aria-labelledby="receipt_modelTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header px-0">
                <h2 class="col-11 mx-auto">Edit Users</h2>
            </div>
            <div class="modal-body p-0">
                <form class="pt-2 pt-sm-2 pt-md-4 " id="update_cat"method="post">
                    @csrf
                    <div class="col-11 mx-auto form_container">
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration=".5s">
                            <label>Full Name</label>
                            <input type="text" name="name"  class="form-control" value="">
                        </div>
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration="1s">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>
                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" value="">
                        </div>

                        <div class="form-group animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                            <div class="select_box d-flex">
                                <select name="role">
                                    <option value="">Select Roles</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer animate__animated animate__fadeInUp wow" data-wow-duration="1s">
                        <div class="row no-gutters w-100">
                            <div class="col-6"> <button type="file" class="btn Cencel" data-dismiss="modal"><a
                                        href="#">Cencel</a></button></div>
                            <div class="col-6"> <button type="submit" class="btn">Add People</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Add people Modal End  -->
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
<script src="{{asset('js/jquery.datetimepicker.full.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    $("#datetime").datetimepicker();

</script>
<script>
    $("#menu").on("click", function () {
        $("#header").toggleClass("active");
    });
    $('.edit').on("click", function () {
        $('#update_cat').attr('action',$(this).data('url'))
        $('#edit_people').modal('show')
    });
</script>
<script>
    new WOW().init();

</script>
@endsection
