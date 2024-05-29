@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('header')
    @include('template.header')
@endsection

@section('content')
    <div style="min-height: calc(100vh - 340.5px);">
        <div class="landing-hero-v2 flex-column d-flex justify-content-center align-items-center gap-3">
            <div class="hero-title">List @lang('messages.productKnowledge')</div>
            <div class="hero-bradcrumb">
                <a href="{{ route('landing') }}">Home /</a>
                <p class="fw-light mb-0">List @lang('messages.productKnowledge')</p>
            </div>
        </div>
        <div class="container mb-5">
            <div class="product-catalogue mt-5" id="product">
                <div class="product-catalogue-navbar">
                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="product-card"
                                    onclick="window.location.href = '{{ URL::to('/general-trading/product-knowledge/detail/' . $item['id']) }}';">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/images/data/' . $item['image']) }}" alt="">
                                    </div>
                                    <div class="card-title">
                                        @if (session('locale') == 'id')
                                            {{ $item['title'] }}
                                        @else
                                            {{ $item['title_en'] }}
                                        @endif
                                    </div>
                                    <div class="card-subtitle p-2">
                                        @if (session('locale') == 'id')
                                            <?php
                                            $desc = $item['desc'];
                                            if (strlen($desc) > 100) {
                                                $desc = substr($desc, 0, 97) . '...';
                                            }
                                            echo $desc;
                                            ?>
                                        @else
                                            <?php
                                            $desc = $item['desc_en'];
                                            if (strlen($desc) > 100) {
                                                $desc = substr($desc, 0, 97) . '...';
                                            }
                                            echo $desc;
                                            ?>
                                        @endif
                                    </div>
                                    <div class="card-detail-button">
                                        <a href="/general-trading/product-knowledge/detail/{{ $item->id }}"
                                            class="btn btn-light">@lang('messages.DETAILS')</a>
                                    </div>
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
