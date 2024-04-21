@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('css')
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap/bootstrap.css')}}">

    <!--Slick CSS-->
    <link rel="stylesheet" href="{{asset('/assets/css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick/slick-theme.css')}}">

    <!--App Css-->
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">

    <!--CSS Assets this page-->
    <link rel="stylesheet" href="{{asset('/assets/css/detailProduct.css')}}">
@endsection

@section('header')
    @include('template.header')
@endsection


@section('content')
    <div id="mainContent">
        <div class="container mb-5">
            <div class="row first-line">
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="card box-shadow">
                        <div class="descripsi-product">
                            <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                <b>Item Name : <span class="primary-text">{{$product['title']}}</span></b>
                                <div class="desc-section">
                                    <b>Description :</b>
                                    <p class="text-desc">
                                        {{$product['desc']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="wrapper-summary">
                        <div class="card">
                            <div class="wrapper-image-product">
                                <div class="view-Images">
                                    @foreach($product['image_array'] as $image)
                                        <div class="images-product">
                                            <img src="{{asset('assets/images/data/'.$image)}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="nav-images">
                                    @foreach($product['image_array'] as $image)
                                        <div class="images-nav">
                                            <img src="{{asset('assets/images/data/'.$image)}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <h4>Summary</h4>
                            <div class="detail-summary">
                                <div class="total-order">
                                    <p>Your Order</p>
                                    <p><span id="qty">1</span> Item</p>
                                </div>
                                <div class="total-price">
                                    <p>Price</p>
                                    <p>RP <span id="cart-price">{{$product['price']}}</span></p>
                                </div>
                            </div>
                            <button class="button button-primary w-100" id="order-button">
                                <img src="{{asset('/assets/img/icon/shopping-cart-white.svg')}}" alt="">
                                <span id="order-text">Continue to Marketplace</span>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('template.footer')
@endsection


@section('script')
    <!--Vendor-->
    <!--Jquery-->
    <script src="{{ asset('/assets/js/jquery.min.js')}}"></script>
    <!--Bootstrap-->
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--Slick Js-->
    <script src="{{ asset('/assets/js/slick/slick.min.js')}}"></script>
    <script src="{{ asset('/assets/js/slick/slick.js')}}"></script>

    <!--Slick Images Product-->
    <script>
         $('.view-Images').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            adaptiveHeight: true,
            infinite: false,
            useTransform: true,
            speed: 400,
            asNavFor: '.nav-images',
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });

        $('.nav-images')
            .on('init', function(event, slick) {
                $('.nav-images .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
                slidesToShow: 5,
                slidesToScroll: 5,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                asNavFor: '.view-Images',
            });

        $('.view-Images').on('afterChange', function(event, slick, currentSlide) {
            $('.nav-images').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.nav-images .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.nav-images .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
        });

        $('.nav-images').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');

            $('.view-Images').slick('slickGoTo', goToSingleSlide);
        });
    </script>

    <!--Quantity Input-->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var productId = "{{$product['id']}}";
        var productTitle = "{{$product['title']}}";
        var contactNum = "{{$contact}}";
        var price = {{$product['price']}};
        var minOrder = {{$product['min_order']}};
        var marketplaceUrl = "{{$product['marketplace_url']}}"

        var QtyInput = (function () {
        var $qtyInputs = $(".quantity-product");

        if (!$qtyInputs.length) {
            return;
        }

        var $inputs = $qtyInputs.find(".product-quantity");
        var $countBtn = $qtyInputs.find(".quantity-count");
        var qtyMin = parseInt($inputs.attr("min"));
        var qtyMax = parseInt($inputs.attr("max"));

        $inputs.change(function () {
            var $this = $(this);
            var $minusBtn = $this.siblings(".quantity-count--minus");
            var $addBtn = $this.siblings(".quantity-count--add");
            var qty = parseInt($this.val());

            if (isNaN(qty) || qty <= qtyMin) {
                $this.val(qtyMin);
                $minusBtn.attr("disabled", true);
            } else {
                $minusBtn.attr("disabled", false);

                if(qty >= qtyMax){
                    $this.val(qtyMax);
                    $addBtn.attr('disabled', true);
                } else {
                    $this.val(qty);
                    $addBtn.attr('disabled', false);
                }
            }
        });

        $countBtn.click(function () {
            var operator = this.dataset.action;
            var $this = $(this);
            var $input = $this.siblings(".product-quantity");
            var qty = parseInt($input.val());
            var qtyClass = document.getElementById('qty');

            if (operator == "add") {
                qty += 1;
                if (qty >= qtyMin + 1) {
                    $this.siblings(".quantity-count--minus").attr("disabled", false);
                }

                if (qty >= qtyMax) {
                    $this.attr("disabled", true);
                }
            } else {
                qty = qty <= qtyMin ? qtyMin : (qty -= 1);

                if (qty == qtyMin) {
                    $this.attr("disabled", true);
                }

                if (qty < qtyMax) {
                    $this.siblings(".quantity-count--add").attr("disabled", false);
                }
            }

            if (qty > minOrder) {
                let waLink = `https://wa.me/${contactNum}?text=Halo! Saya tertarik dengan produk Anda, Produk: ${productTitle} Quantity: ${qty}`;

                $('#order-button').off().on('click', () => {
                    window.open(waLink, '_blank');
                    recordTransaction(productId, qty);
                });

                $('#order-text').html('Continue to WhatsApp');
            } else {

                $('#order-button').off().on('click', () => {
                    window.open(marketplaceUrl, '_blank');
                    recordTransaction(productId, qty);
                });

                $('#order-text').html('Continue to Marketplace');
            }

            qtyClass.innerHTML = qty;
            $('#cart-price').html(price * qty);
            $input.val(qty);
        });
    })();

    function recordTransaction (productId, quantity) {
        $.ajax({
            type: "POST",
            url: "/record-transaction",
            data: {
                productId, quantity
            },
            success: function(data) {
                console.log("Response:", data);
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }

    </script>
@endsection
