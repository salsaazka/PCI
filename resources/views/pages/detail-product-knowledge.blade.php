@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('css')

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.css">

    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--App Css-->
    <link rel="stylesheet" href="./assets/css/app.css">

    {{-- <!--CSS Assets this page-->
    <link rel="stylesheet" href="./assets/css/detailProduct.css"> --}}
@endsection

@section('header')
    @include('template.header')
@endsection

@section('content')
    <div class="container w-75 mx-auto d-block" style="margin-bottom: 90px">
        {{-- @foreach ($data as $item) --}}

        <div class="first-line">

            <div class="articel-header mb-5 pt-5">
                <a class="d-flex align-items-center gap-1 text-decoration-none"
                    href="{{ route('product-knowledge-page') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#dc3545"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    <i class="text-danger">@lang('messages.kembali')</i>
                </a>
                <h1 class="mb-3 mt-1">
                    @if (session('locale') == 'id')
                        {{ $data->title }}
                    @else
                        {{ $data->title_en }}
                    @endif
                </h1>
                <div class="row row-cols-auto">
                    <div class="col">
                        <i class="bi bi-calendar"><span
                                class="mx-2">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('Y-m-d') }}</span></i>
                    </div>
                    {{-- <div class="col">
                        <i class="bi bi-folder"><span class="mx-2">Digital Marketing</span></i>
                    </div> --}}
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/images/data/' . $data->image) }}" alt="">
            </div>
        </div>
        <div class="article-content">
            <p class="fw-light my-4">
                @if (session('locale') == 'id')
                    {{ $data->desc }}
                @else
                    {{ $data->desc_en }}
                @endif
            </p>
        </div>
    </div>
    {{-- @endforeach --}}
    </div>
@endsection

@section('footer')
    @include('template.footer')
@endsection
