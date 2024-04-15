@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('header')
    @include('template.header')
@endsection

@section('content')
    <div style="min-height: calc(100vh - 340.5px);">
        <div class="landing-hero-v2 flex-column d-flex justify-content-center align-items-center gap-3">
            <div class="hero-title">List Artikel</div>
            <div class="hero-bradcrumb">
                <a href="{{ route('landing') }}">Home /</a>
                <p class="fw-light mb-0">List Artikel</p>
            </div>
        </div>
        <div class="container mb-5">
            <div class="product-catalogue mt-5" id="product">
                <div class="product-catalogue-navbar">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show" id="catalogue-1" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card" onclick="window.location.href = '{{Route('detail-artikel')}}';">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="catalogue-2" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}" alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/card-example-image.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title">
                                            Sacha inchi
                                        </div>  
                                        <div class="card-subtitle">
                                            In a world dominated by modern medicine, the age-old wisdom
                                        </div>
                                        <div class="card-detail-button">
                                            DETAILS
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
