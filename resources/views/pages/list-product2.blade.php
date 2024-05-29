@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('header')
    @include('template.header')
@endsection

@section('content')
    <div style="min-height: calc(100vh - 340.5px);">
        <div class="landing-hero-v2 flex-column d-flex justify-content-center align-items-center gap-3">
            <div class="hero-title">List Product</div>
            <div class="hero-bradcrumb">
                <a href="{{ route('landing') }}">Home /</a>
                <p class="fw-light mb-0">List Product</p>
            </div>
        </div>
        <div class="container mb-5">
            <div class="product-catalogue mt-5" id="product">
                <div class="best-selling-product-title">EXPORT COMMODITIES</div>
                <div class="product-catalogue-navbar">
                    <div class="row best-selling-card-group mb-2 mb-sm-5">
                        @foreach ($products as $product)
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="product-card" onclick="window.location.href = '{{ URL::to('/general-trading/product/detail/' . $product['id']) }}';">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/images/data/' . $product['image_1']) }}" alt="">
                                    </div>
                                    <div class="card-title px-2">
                                        @if (session('locale') == 'id')
                                            {{ $product['title'] }}
                                        @else
                                            {{ $product['title_en'] }}
                                        @endif
                                    </div>
                                    <div class="card-subtitle px-2">
                                        @if (session('locale') == 'id')
                                            <?php
                                            $desc = $product['desc'];
                                            if (strlen($desc) > 100) {
                                                $desc = substr($desc, 0, 97) . '...';
                                            }
                                            echo $desc;
                                            ?>
                                        @else
                                            <?php
                                            $desc = $product['desc_en'];
                                            if (strlen($desc) > 100) {
                                                $desc = substr($desc, 0, 97) . '...';
                                            }
                                            echo $desc;
                                            ?>
                                        @endif
                                    </div>
                                    <a class="card-detail-button text-decoration-none"
                                        href="{{ URL::to('/general-trading/product/detail/' . $product['id']) }}">
                                        @lang('messages.DETAILS')
                                    </a>
                                </div>
                            </div>
                        @endforeach
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
    <script>
        $(document).ready(function() {
            $('.nav-item .nav-link').on('click', function() {
                // Remove 'nav-active' class from all nav links
                $('.nav-item .nav-link').removeClass('nav-active');

                // Add 'nav-active' class to the clicked nav link
                $(this).addClass('nav-active');
            });
        });
    </script>
@endsection
