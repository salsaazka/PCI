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
                <div class="product-catalogue-navbar">
                    <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                        <ul class="nav nav-tabs product-nav gap-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#catalogue-1" aria-selected="true"
                                    role="tab">Semua</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#catalogue-2" aria-selected="false"
                                    role="tab" tabindex="-1">Category 1</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#catalogue-3" aria-selected="false"
                                    role="tab" tabindex="-1">Category 2</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#catalogue-4" aria-selected="false"
                                    role="tab" tabindex="-1">Category 3</a>
                            </li>
                        </ul>
                        <input type="text" placeholder="Search" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show" id="catalogue-1" role="tabpanel">
                            <div class="row">
                                {{-- to do : map by category --}}
                                @foreach ($products as $product)
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/data/'.$product['image_1']) }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            {{$product['title']}}
                                        </div>
                                        <div class="card-price">
                                            Rp. {{$product['price']}}
                                        </div>
                                        <div class="card-subtitle">
                                            {{$product['desc']}}
                                        </div>
                                        <a class="card-detail-button text-decoration-none" href="{{ URL::to('/general-trading/detail/'.$product['id'])}}">
                                            DETAILS
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
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
