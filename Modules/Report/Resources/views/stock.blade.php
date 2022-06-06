@extends('product::layouts.master')

@section('content')
<div class="body_wrapper">
    <div class="page_title">
        <div class="row align-items-center mx-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p-0">
                <div class="title_inner d-flex">
                    <h1 class="d-flex align-items-center">Stock Report
                    </h1>
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
    <div class="right_sidebar">
        <!-- Tab Content Start -->
        <div class="tab-content">
            <div class="">
                <!-- Order List Start -->
                <div class="order_list">
                    <div class="list_header d-flex">
                        <!--                            <h2 class="text-center order_num Code">Code</h2>-->
                        <h2 class="text-left Name">item Name</h2>
                        <h2 class="text-center Amount Category">total sell</h2>
                        <h2 class="text-center Table Price">stock</h2>
                        <h2 class="text-center Table Price">Total Sell Price</h2>
                        <h2 class="text-left Action">Total Stock By Purchase Price</h2>
                    </div>

                    <ul>
                        @foreach($stock as $pr)
                        <li class="d-flex animate__animated animate__fadeInUp wow">
                            <!--                                <h3 class="text-center order_num Code">18754</h3>-->
                            <h3 class="text-left Name"><strong>{{$pr->name}}</strong></h3>
                            <h3 class="text-center Amount Category">{{$pr->total_sell}}</h3>
                            <h3 class="text-center Table Price">{{$pr->stock}}</h3>
                            <h3 class="text-center Table Price">${{$pr->total_profit}}</h3>
                            <h3 class="text-center Table Price">${{$pr->stock_price_purchase}}</h3>
                           
                        </li>
                      @endforeach
                    </ul>
                </div>
                <!-- Order List End -->

                <!-- Tab Footer start -->
                <div class="tab_footer">
                    <div class="row no-gutter align-items-center">
                        <div class="col-12 col-md-12 col-lg-4 pb-3">
                            <h2>Showing 1 to 10 of 126 item</h2>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8 pb-3">
                            <div class="row align-items-center">

                                <nav class="navigation col-12 col-sm-12 col-md-12" aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                                    class="zmdi zmdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="zmdi zmdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Footer End -->
            </div>
            <!-- Food Items Tab Content End -->
        </div>
        <!-- Tab Content End -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{asset('js/wow.min.js')}}"></script>

<!--
    <script>
        $("#datetime").datetimepicker();
    </script>
-->
<script>
    new WOW().init();

</script>
<script>
    $("#menu").on("click", function () {
        $("#header").toggleClass("active");
    });

</script>
@endsection
