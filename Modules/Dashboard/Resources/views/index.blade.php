@extends('dashboard::layouts.master')

@section('content')
<div class="body_wrapper pt-0">
        <div class="container-fluid  align-items-start p-0">
            <div class="page_title">
                <div class="row align-items-center mx-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p-0">
                        <div class="title_inner d-flex">
                            <h1 class="d-flex align-items-center">Dashboard
                                <!--                            <span class="ml-4">$987.50</span>-->
                            </h1>
                            <!--                            <button type="button" class="btn"><a href="upload_item.html">Add New</a></button>-->
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="right-dasboard text-white">
            
                <div class="total_box">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="chart-area py-5 py-sm-5 py-md-5 py-lg-5 px-5 d-flex align-items-center animate__animated animate__zoomIn wow" data-wow-duration="1s">
                                        <img src="images/ic_energy.png" class="img-fluid">
                                        <div class="text_box">
                                            <h3>Total Orders</h3>
                                            <h2>{{$stock->total_tx}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="chart-area py-5 py-sm-5 py-md-5  py-lg-5 px-lg-3 px-xl-5 px-5  d-flex align-items-center animate__animated animate__zoomIn wow" data-wow-duration="1s">
                                        <img src="images/ic_Serving.png" class="img-fluid">
                                        <div class="text_box">
                                            <h3>Revenue</h3>
                                            <h2>${{$stock->total_profit}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="chart-area py-5 py-sm-5 py-md-5 py-lg-5 px-5  d-flex align-items-center animate__animated animate__zoomIn wow" data-wow-duration="1s">
                                        <img src="images/ic_fastfood.png" class="img-fluid">
                                        <div class="text_box">
                                            <h3>Items Sold</h3>
                                            <h2>{{$stock->total_sell}}</h2>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Body Wrapper End -->

    <!-- Require Javascript Start -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        new Chart(document.getElementById("doughnut-chart"), {
            type: 'doughnut',
            legend: {
                position: 'bottom'
            },
            data: {
                labels: ["Fast Food (26%)", "Italian (10%)", "Main Course (26%)", "Starter (9%)", "Beverages (12%)", "Indian (16%)", "Dessert (32%)", "Other (6%)"],
                datasets: [{
                    //                    label: "Population (millions)",   
                    backgroundColor: ["#EB1E1E", "#009946", "#F09514", "#8E37E7", "#F02899", "#898989", "#03B8FF", "#3337F0"],
                    data: [26, 10, 26, 9, 12, 16, 32, 6],
                    borderWidth: [0, 0, 0, 0, 0, 0, 0, 0]
                }]
            },
            options: {
                legend: {
                    display: false,
                    position: 'top',
                    labels: {
                        fontColor: "#000080",
                    }
                },
                responsive: {
                    display: true,
                }

            }
        });
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 20,
            nav: false,
            dot: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1200: {
                    items: 8
                }
            }
        })
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        $("#menu").on("click", function() {
            $("#header").toggleClass("active");
        });
    </script>

@endsection
