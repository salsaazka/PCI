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

            <div class="articel-header mb-5">
                <p class="mb-3"></p>
                <h1 class="mb-3">{{ $data->title }}</h1>
                <div class="row row-cols-auto">
                    <div class="col">
                        <i class="bi bi-calendar"><span class="mx-2">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('Y-m-d') }}</span></i>
                    </div>
                    {{-- <div class="col">
                        <i class="bi bi-folder"><span class="mx-2">Digital Marketing</span></i>
                    </div> --}}
                </div>
            </div>
            {{-- @foreach ($data['image_array'] as $image) --}}
                <img class="w-100" src="{{ asset('assets/images/data/' .$data->image) }}" alt="" style="max-height: 500px">
            </div>
            {{-- @endforeach --}}
            <div class="article-content">
                <p class="fw-light my-4">
                    {{ $data->desc }}
                </p>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection

@section('footer')
    @include('template.footer')
@endsection
