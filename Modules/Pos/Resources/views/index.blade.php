@extends('pos::layouts.master')
@section('content')
   
<div class="body_wrapper">
        <!-- Order Section Start -->
        <div class="order_section">
            <div class="order_item_container">
                <div id="no-order" class="no-order active p-4 p-sm-4 p-md-4 p-lg-5">
                    <div class="banner_img">
                        <img src="{{asset('images/img_noorder.png')}}" class="img-fluid">
                    </div>
                    <h2>You've no <br>order in process from <br>Counter Desk.</h2>
                    <h3>Click on any item or Add Order Button <br>to create order</h3>

                </div>
                <!-- Tab Items Start -->
                <div id="item_list" class="item_list">
                    <div class="order_header">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <h2>Item</h2>
                            </div>
                            <div class="col-2 text-center">
                                <h2>Price</h2>
                            </div>
                            <div class="col-3 text-center">
                                <h2>Qnt.</h2>
                            </div>
                            <div class="col-3 text-right">
                                <h2>Total($)</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Food List Start -->
                    <ul id="list">
                        
                      
                    </ul>
                    <!-- Food List End -->

                    <div class="order_footer">
                        
                        <div class="amount_payble">
                            <h2 class="d-flex text-right">
                                <span class="text">Amount to Pay</span>
                                <span class="mr-0 ml-auto" id="total"></span>
                            </h2>
                        </div>

                        <div class="btn_box">
                            <div class="row no-gutter mx-0">
                                <button type="button" class="btn col-6 Cancel" id="cancel_order"><a href="#">Cancel</a></button>
                                <button type="button" class="btn col-6 place_order" id="place-order"><a href="#">Place Order</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Items End -->


                <!-- Tab Items Start -->
                <div id="amount_to_Pay" class="amount_to_Pay">
                    <form class="px-4 py-3" method="post" id="form_pos" action="{{route('store.pos')}}">
                        @csrf
                    <h4 class="pt-3 mb-3">Amount to Pay <strong>$46.00</strong></h4>
                        <div class="form-group mb-4 pb-2">
                            <label>Select Payment Method</label>
                            <div class="row no-gutters align-items-center">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="custom-control custom-radio">
                                        <input checked type="radio" id="cash" value="cash" name="payment" class="custom-control-input">
                                        <label class="custom-control-label" for="cash"><span class="ml-2">Cash</span></label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="card" value="card"  name="payment" class="custom-control-input">
                                        <label class="custom-control-label" for="card"><span class="ml-2">Card</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group mb-4 pb-2">
                            <label>Order type</label>
                            <div class="row no-gutters align-items-center">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="custom-control custom-radio">
                                        <input checked type="radio" id="takeaway"value="takeaway" name="OrderType" class="custom-control-input">
                                        <label class="custom-control-label" for="takeaway"><span class="ml-2">Takeaway</span></label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="dine-in" value="dine-in"  name="OrderType" class="custom-control-input">
                                        <label class="custom-control-label" for="dine-in"><span class="ml-2">Dine-in</span></label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label>Customer Info (Optional)</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                    
                        <div class="order_footer bg-white">
                        <div class="btn_box">
                            <input type="hidden" name="product" id="product_input">
                            <div class="row no-gutter mx-0">
                                <button type="button" class="btn col-6 Cancel" id="edit_order"><a href="#">Cancel</a></button>
                                <button type="submit" class="btn col-6 place_order" id="submit">Submit</button>
                            </div>
                    </form>

                        </div>
                    </div>
                </div>
                <!-- Tab Items end -->
            </div>
        </div>
        <!-- Order Section End -->

        <!-- Food Item Section Start -->
        <div class="item_section mt-4 mt-md-0">
            <div class="item_section_header">
                <div class="tab_btn_container">
                    <div class="nav nav-tabs owl-carousel">
                    <div class="tab nav-item animate__animated {{ (!request()->get('cat') ? 'active' : '') }} animate__zoomIn wow" data-wow-duration=".5s" role="presentation">
                            <a href="/pos" class="nav-link">
                                <img src="{{asset('images/ic_fastfood.png')}}">
                                <h5>All</h5>
                            </a>
                        </div>
                        @foreach($category as $cat)
                        <div class="tab nav-item animate__animated animate__zoomIn wow {{ (request()->get('cat') == $cat->id ? 'active' : '') }}" data-wow-duration=".5s" role="presentation">
                            <a href="?cat={{$cat->id}}"class="nav-link">
                                <img src="{{asset('images/ic_fastfood.png')}}">
                                <h5>{{$cat->name}}</h5>
                            </a>
                        </div>
                      @endforeach
                    </div>
                </div>

                <form class="search_box animate__animated animate__zoomIn wow">
                    <div class="form-group d-flex">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="zmdi zmdi-search"></i></div>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Items">
                        <button type="button" class="btn"><a href="#">Search</a></button>
                    </div>
                </form>
            </div>
            <div class="tab-content">
                <div class="row no-gutters">
                @foreach($product as $prod)

                    <div class="col col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="item animate__animated animate__zoomIn wow add_product" data-id="{{json_encode($prod)}}">
                            <div class="item_img center_img">
                                <img src="{{asset('images/'.$prod->images)}}" class="crop_img">
                            </div>
                            <div class="text_box">
                                <h2>{{$prod->name}}</h2>
                                <h2>description : {{$prod->description}}</h2>
                                <h2>Stock : {{$prod->stock}}</h2>
                                
                                <h3 class="d-flex">
                                    <img src="{{asset('images/ic_veg.png')}}">&nbsp;
                                    $ {{$prod->price}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </div>

        <!-- Food Item Section End -->
    </div>
    <!-- Body Wrapper End -->

    <!-- Require Javascript Start -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

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
        var total = 0
        var product = []
        function List(data){         
            total += parseInt(data.price)
        var myvar = '<li>'+
'                            <div class="row">'+
'                                <div class="col-4">'+
'                                    <h2>'+data.name+'</h2>'+
'                                </div>'+
'                                <div class="col-2 text-center">'+
'                                    <h3>'+data.price+'</h3>'+
'                                </div>'+
'                                <div class="col-3 text-center">'+
'                                    <h3 class="d-flex align-items-center">'+
'                                        <strong>1</strong>'+
'                                    </h3>'+
'                                </div>'+
'                                <div class="col-3 text-right">'+
'                                    <h4>'+data.price+'</h4>'+
'                                </div>'+
'                            </div>'+
'                        </li>';
	return myvar

        }
        $("#cancel_order").on("click", function() {
            $('#list').html('')
            $('#total').text(0)
            product = []

            $("#no-order").toggleClass("active");
            $("#item_list").removeClass("active");
        });
        $(".add_product").on("click", function() {
            product.push($(this).data('id'))
            var list = List($(this).data('id'))
            $('#list').append(list)
            $('#total').text(total)
            $("#item_list").toggleClass("active");
            $("#no-order").removeClass("active");
        });
        $("#place-order").on("click", function() {
            $("#amount_to_Pay").toggleClass("active");
            $('#product_input').val(JSON.stringify(product))
            $("#item_list").removeClass("active");
        });
        $("#edit_order").on("click", function() {
            $("#item_list").toggleClass("active");
            $("#amount_to_Pay").removeClass("active");
        });
   
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

    <!-- Require Javascript End -->
