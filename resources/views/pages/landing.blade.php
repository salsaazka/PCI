@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('header')
    @include('template.header')
@endsection

@section('content')
    <div class="landing-hero d-flex justify-content-center align-items-center gap-5">
        <div class="d-flex flex-column">
            <div class="hero-title">General Trading</div>
            <div class="hero-badges d-flex align-items-center mt-5">
                <div class="d-flex align-items-center me-5">
                    <img src="{{asset('assets/images/exclusive.svg')}}" alt="">
                    <div class="badge-text">
                        Best Seller
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{asset('assets/images/best-product.svg')}}" alt="">
                    <div class="badge-text">
                        Top Products
                    </div>
                </div>
            </div>
            <div class="hero-description mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                industry. Lorem Ipsum has been the industry's standard dummy <br>
                text ever since the 1500s.
            </div>
            <button class="hero-button mt-4">
                Browse Product
            </button>
        </div>
        <img src="{{ asset('assets/images/hero-image.webp') }}" alt="container ship" class="hero-image">

    </div>

    <div id="contact-us-hover">
        <div class="me-2" id="contact-us-text">Contact Us</div>
        <a href="https://wa.me/62811955198" id="contact-us-image">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.9317 43.8635C34.0443 43.8635 43.8635 34.0443 43.8635 21.9317C43.8635 9.81918 34.0443 0 21.9317 0C9.81918 0 0 9.81918 0 21.9317C0 34.0443 9.81918 43.8635 21.9317 43.8635Z" fill="#49E670"/>
                <path d="M29.2676 26.0289C28.9526 26.7794 27.6927 27.53 26.7477 27.6801C26.1177 27.8302 25.1728 27.9803 22.338 26.7794C18.5583 25.2784 16.196 21.676 16.0385 21.5258C15.881 21.2256 14.6211 19.5745 14.6211 17.9234C14.6211 16.2722 15.566 15.3716 15.881 15.0714C16.196 14.7712 16.6684 14.6211 17.1409 14.6211C17.2984 14.6211 17.4559 14.6211 17.6134 14.6211C17.9284 14.6211 18.2433 14.6211 18.4008 15.2215C18.7158 15.972 19.5032 17.6232 19.5032 17.7733C19.6607 17.9234 19.6607 18.2236 19.5032 18.3737C19.3458 18.6739 19.3458 18.6739 19.0308 18.9741C18.8733 19.1242 18.7158 19.2743 18.5583 19.5745C18.4008 19.7246 18.2433 20.0248 18.4008 20.325C18.5583 20.6252 19.3458 21.8261 20.4482 22.7267C21.8656 23.9275 22.968 24.2277 23.4405 24.5279C23.7554 24.678 24.0704 24.678 24.3854 24.3778C24.7004 24.0776 25.0153 23.6273 25.3303 23.177C25.6453 22.8768 25.9603 22.7267 26.2752 22.8768C26.5902 23.0269 28.4801 23.7774 28.7951 24.0776C29.1101 24.2277 29.4251 24.3778 29.4251 24.5279C29.4251 24.5279 29.4251 25.2784 29.2676 26.0289Z" fill="#FAFAFA"/>
                <path d="M8.99499 35.0543L8.92102 35.27L9.13739 35.1979L15.0091 33.2407C17.1523 34.549 19.4605 35.2036 21.9318 35.2036C29.2316 35.2036 35.2036 29.2316 35.2036 21.9318C35.2036 14.632 29.2316 8.65991 21.9318 8.65991C14.632 8.65991 8.65991 14.632 8.65991 21.9318C8.65991 24.5672 9.47729 27.2022 10.9504 29.351L8.99499 35.0543ZM15.4027 31.2068L15.3617 31.1862L15.3181 31.2001L11.9107 32.2843L12.992 29.0405L13.014 28.9744L12.9647 28.9251L12.6436 28.604C11.3417 26.6477 10.5304 24.3696 10.5304 21.9318C10.5304 15.5791 15.5791 10.5304 21.9318 10.5304C28.2845 10.5304 33.3332 15.5791 33.3332 21.9318C33.3332 28.2845 28.2845 33.3332 21.9318 33.3332C19.6511 33.3332 17.5364 32.6818 15.7476 31.3808L15.74 31.3754L15.7317 31.3712L15.4027 31.2068Z" fill="white" stroke="white" stroke-width="0.225641"/>
            </svg>
        </a>
    </div>

    <div class="d-flex flex-column justify-content-center mb-5">
        <div class="product-title mt-5 mb-3">
            Comprehensive Solutions for Your <br> Business Growth!
        </div>
        <div class="d-flex justify-content-center gap-5 mt-4">
            <div>
                <p class="product-subtitle">80 Variant</p>
                <p class="product-small-subtitle">of Goods</p>
            </div>
            <div>
                <p class="product-subtitle">150 Distributor</p>
                <p class="product-small-subtitle">Around the World</p>
            </div>
            <div>
                <p class="product-subtitle">4.9</p>
                <p class="product-small-subtitle">Users Rating</p>
            </div>
        </div>
    </div>

@endsection

@section('footer')
@endsection

@section('script')
@endsection