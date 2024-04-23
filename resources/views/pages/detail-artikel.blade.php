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
                        <i class="bi bi-calendar"><span class="mx-2">12th Jan 2024</span></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-folder"><span class="mx-2">Digital Marketing</span></i>
                    </div>
                </div>
            </div>
            {{-- @foreach ($data['image_array'] as $image) --}}
                <img class="w-100" src="{{ asset('assets/images/data/' .$data->image) }}" alt="" style="width:100%">
            </div>
            {{-- @endforeach --}}
            <div class="article-content">
                <p class="fw-bold fs-5 mb-4">
                    {{ $data->desc }}
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ut nam deleniti eveniet voluptate dolorum 
                    consectetur quibusdam soluta cupiditate, inventore, earum quam aliquid pariatur labore nihil repellendus 
                    maiores, ipsa dolorem similique temporibus facere! Cumque tempora explicabo vitae dignissimos recusandae 
                    sequi culpa enim, mollitia quasi laborum ea, tenetur deleniti reprehenderit dolorum illum maiores. Distinctio 
                    totam impedit saepe magnam consequuntur id, enim voluptatibus modi veritatis, quos perferendis voluptas? 
                    Asperiores nesciunt eaque consectetur.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ut nam deleniti eveniet voluptate dolorum 
                    consectetur quibusdam soluta cupiditate, inventore, earum quam aliquid pariatur labore nihil repellendus 
                    maiores, ipsa dolorem similique temporibus facere! Cumque tempora explicabo vitae dignissimos recusandae 
                    sequi culpa enim, mollitia quasi laborum ea, tenetur deleniti reprehenderit dolorum illum maiores. Distinctio 
                    totam impedit saepe magnam consequuntur id, enim voluptatibus modi veritatis, quos perferendis voluptas? 
                    Asperiores nesciunt eaque consectetur.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ut nam deleniti eveniet voluptate dolorum 
                    consectetur quibusdam soluta cupiditate, inventore, earum quam aliquid pariatur labore nihil repellendus 
                    maiores, ipsa dolorem similique temporibus facere! Cumque tempora explicabo vitae dignissimos recusandae 
                    sequi culpa enim, mollitia quasi laborum ea, tenetur deleniti reprehenderit dolorum illum maiores. Distinctio 
                    totam impedit saepe magnam consequuntur id, enim voluptatibus modi veritatis, quos perferendis voluptas? 
                    Asperiores nesciunt eaque consectetur.
                </p>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection

@section('footer')
    @include('template.footer')
@endsection
    