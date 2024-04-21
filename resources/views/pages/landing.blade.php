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
                <div class="d-flex align-items-center me-2 me-sm-5">
                    <img src="{{ asset('assets/images/exclusive.svg') }}" alt="">
                    <div class="badge-text">
                        Best Seller
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/images/best-product.svg') }}" alt="">
                    <div class="badge-text">
                        Top Products
                    </div>
                </div>
            </div>
            <div class="hero-description mt-3">
                We supply best quality zeolites-based products for various applications.
                We export Indonesian Robusta Green Bean Coffee and Yellow Corn.
                We grow for other export commodities.
            </div>
            <button class="hero-button mt-4" onclick="window.location.href = '{{ route('list-product') }}'">
                Browse Product
            </button>
        </div>
        <img src="{{ asset('assets/images/hero-image.webp') }}" alt="container ship" class="hero-image">

    </div>
    <?php
    $waa = collect($contact)->where('title', 'Whatsapp')->first();
    $waaNumber = $waa['contact'];
    $massage = 'Halo! Saya tertarik dengan produk Anda.';
    $waaLink = 'https://wa.me/' . $waaNumber . '?text=' . urlencode($massage);
    ?>
    <div id="contact-us-hover">
        <div class="me-2" id="contact-us-text">Contact Us</div>
        <a href="{{ $waaLink }}" id="contact-us-image">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.9317 43.8635C34.0443 43.8635 43.8635 34.0443 43.8635 21.9317C43.8635 9.81918 34.0443 0 21.9317 0C9.81918 0 0 9.81918 0 21.9317C0 34.0443 9.81918 43.8635 21.9317 43.8635Z"
                    fill="#49E670" />
                <path
                    d="M29.2676 26.0289C28.9526 26.7794 27.6927 27.53 26.7477 27.6801C26.1177 27.8302 25.1728 27.9803 22.338 26.7794C18.5583 25.2784 16.196 21.676 16.0385 21.5258C15.881 21.2256 14.6211 19.5745 14.6211 17.9234C14.6211 16.2722 15.566 15.3716 15.881 15.0714C16.196 14.7712 16.6684 14.6211 17.1409 14.6211C17.2984 14.6211 17.4559 14.6211 17.6134 14.6211C17.9284 14.6211 18.2433 14.6211 18.4008 15.2215C18.7158 15.972 19.5032 17.6232 19.5032 17.7733C19.6607 17.9234 19.6607 18.2236 19.5032 18.3737C19.3458 18.6739 19.3458 18.6739 19.0308 18.9741C18.8733 19.1242 18.7158 19.2743 18.5583 19.5745C18.4008 19.7246 18.2433 20.0248 18.4008 20.325C18.5583 20.6252 19.3458 21.8261 20.4482 22.7267C21.8656 23.9275 22.968 24.2277 23.4405 24.5279C23.7554 24.678 24.0704 24.678 24.3854 24.3778C24.7004 24.0776 25.0153 23.6273 25.3303 23.177C25.6453 22.8768 25.9603 22.7267 26.2752 22.8768C26.5902 23.0269 28.4801 23.7774 28.7951 24.0776C29.1101 24.2277 29.4251 24.3778 29.4251 24.5279C29.4251 24.5279 29.4251 25.2784 29.2676 26.0289Z"
                    fill="#FAFAFA" />
                <path
                    d="M8.99499 35.0543L8.92102 35.27L9.13739 35.1979L15.0091 33.2407C17.1523 34.549 19.4605 35.2036 21.9318 35.2036C29.2316 35.2036 35.2036 29.2316 35.2036 21.9318C35.2036 14.632 29.2316 8.65991 21.9318 8.65991C14.632 8.65991 8.65991 14.632 8.65991 21.9318C8.65991 24.5672 9.47729 27.2022 10.9504 29.351L8.99499 35.0543ZM15.4027 31.2068L15.3617 31.1862L15.3181 31.2001L11.9107 32.2843L12.992 29.0405L13.014 28.9744L12.9647 28.9251L12.6436 28.604C11.3417 26.6477 10.5304 24.3696 10.5304 21.9318C10.5304 15.5791 15.5791 10.5304 21.9318 10.5304C28.2845 10.5304 33.3332 15.5791 33.3332 21.9318C33.3332 28.2845 28.2845 33.3332 21.9318 33.3332C19.6511 33.3332 17.5364 32.6818 15.7476 31.3808L15.74 31.3754L15.7317 31.3712L15.4027 31.2068Z"
                    fill="white" stroke="white" stroke-width="0.225641" />
            </svg>
        </a>
    </div>

    <div class="d-flex flex-column justify-content-center mb-4 mb-sm-5" id="about">
        <div class="product-title mt-5 mb-3">
            Comprehensive Solutions for Your <br> Business Growth!
        </div>
        <div class="d-flex justify-content-center gap-2 gap-sm-5 mt-4">
            <div>
                <p class="product-subtitle">{{ DB::table('products')->count() }} Variant</p>
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

    <div class="container best-product-catalogue">
        <div class="d-flex justify-content-between align-items-center">
            <div class="best-selling-product-title">ZEOLITES-BASED</div>
            {{-- <a href="{{ URL::to('/general-trading/product') }}"
                class="d-flex view-all-product-link justify-content-end align-items-center">
                <span class="me-2 d-none d-sm-block">View All Products</span>
                <svg width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.5 6.99997C0.5 6.80106 0.579018 6.61029 0.71967 6.46964C0.860322 6.32899 1.05109 6.24997 1.25 6.24997H18.9395L14.219 1.53097C14.0782 1.39014 13.9991 1.19913 13.9991 0.999971C13.9991 0.800807 14.0782 0.609801 14.219 0.468971C14.3598 0.328141 14.5508 0.249023 14.75 0.249023C14.9492 0.249023 15.1402 0.328141 15.281 0.468971L21.281 6.46897C21.3508 6.53864 21.4063 6.6214 21.4441 6.71252C21.4819 6.80364 21.5013 6.90132 21.5013 6.99997C21.5013 7.09862 21.4819 7.1963 21.4441 7.28742C21.4063 7.37854 21.3508 7.4613 21.281 7.53097L15.281 13.531C15.1402 13.6718 14.9492 13.7509 14.75 13.7509C14.5508 13.7509 14.3598 13.6718 14.219 13.531C14.0782 13.3901 13.9991 13.1991 13.9991 13C13.9991 12.8008 14.0782 12.6098 14.219 12.469L18.9395 7.74997H1.25C1.05109 7.74997 0.860322 7.67095 0.71967 7.5303C0.579018 7.38965 0.5 7.19888 0.5 6.99997Z"
                        fill="black" />
                </svg>
            </a> --}}
        </div>

        {{-- change later as best selling products should get the data by transaction count --}}
        <div class="row best-selling-card-group mt-3 mb-2 mb-sm-5">
            @for ($i = 0; $i < 4 && $i < count($bestSellingProducts); $i++)
                <?php $product = $bestSellingProducts[$i]; ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/images/data/' . $product['image_1']) }}" alt="">
                        </div>
                        <div class="card-title">
                            {{ $product['title'] }}
                        </div>
                        <div class="card-price">
                            Rp. {{ $product['price'] }}
                        </div>
                        <div class="card-subtitle px-2">
                            <?php
                            $desc = $product['desc'];
                            if (strlen($desc) > 100) {
                                $desc = substr($desc, 0, 97) . '...';
                            }
                            echo $desc;
                            ?>
                        </div>
                        <a class="card-detail-button text-decoration-none"
                            href="{{ URL::to('/general-trading/detail/' . $product['id']) }}">
                            DETAILS
                        </a>
                    </div>
                </div>
            @endfor

        </div>

        <div class="product-mini-gallery d-flex gap-1 d-flex">
            <div class="large-gallery-container">
                <div class="image-overlay-container">
                    <img src="{{ asset('assets/images/data/' . $productGrids[0]['image']) }}" alt="Cat Litter"
                        class="image-overlay-image-small">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); border-radius: 12px">
                    </div>
                    <div class="image-overlay-text">
                        <div class="image-overlay-product-title">{{ $productGrids[0]['title'] }}</div>
                        <a class="shop-now-btn text-white">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="small-gallery-container">
                <div class="image-overlay-container-small">
                    <img src="{{ asset('assets/images/data/' . $productGrids[1]['image']) }}" alt="Cat Litter"
                        class="image-overlay-image-small">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); border-radius: 12px">
                    </div>
                    <div class="image-overlay-text">
                        <div class="image-overlay-product-title">{{ $productGrids[1]['title'] }}</div>
                        <a class="shop-now-btn text-white">Belanja Sekarang</a>
                    </div>
                </div>
                <div class="image-overlay-container-small">
                    <img src="{{ asset('assets/images/data/' . $productGrids[2]['image']) }}" alt="Cat Litter"
                        class="image-overlay-image-small">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); border-radius: 12px">
                    </div>
                    <div class="image-overlay-text">
                        <div class="image-overlay-product-title">{{ $productGrids[2]['title'] }}</div>
                        <a class="shop-now-btn text-white">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-catalogue mt-5" id="product">
            <div class="best-selling-product-title">EXPORT COMMODITIES</div>
            <div class="product-catalogue-navbar">
                <div class="row best-selling-card-group mb-2 mb-sm-5">
                    @foreach ($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="product-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/images/data/' . $product['image_1']) }}" alt="">
                                </div>
                                <div class="card-title">
                                    {{ $product['title'] }}
                                </div>
                                <div class="card-price">
                                    Rp. {{ $product['price'] }}
                                </div>
                                <div class="card-subtitle">
                                    <?php
                                    $desc = $product['desc'];
                                    if (strlen($desc) > 100) {
                                        $desc = substr($desc, 0, 97) . '...';
                                    }
                                    echo $desc;
                                    ?>
                                </div>
                                <a class="card-detail-button text-decoration-none"
                                    href="{{ URL::to('/general-trading/detail/' . $product['id']) }}">
                                    DETAILS
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="px-3 px-lg-5">
        <div class="featured-product-container">
            @foreach ($banner as $banner)
                <div class="d-flex flex-column flex-sm-row gap-4 justify-content-around">
                    <div class="featured-product-image">
                        <img src="{{ asset('assets/images/data/' . $banner['image']) }}" alt="">
                    </div>
                    <div class="featured-product-text-group">
                        <div class="featured-product-subtitle">TOP PRODUCT</div>
                        <div class="featured-product-title">{{ $banner['title'] }}</div>
                        <div class="featured-product-description">{{ $banner['desc'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="social-media-container mb-5" id="contact">
        <div class="social-media-title">
            Get in Touch
        </div>
        <div class="d-flex gap-4 flex-column align-items-center flex-sm-row justify-content-center">
            <?php
            $wa = collect($contact)->where('title', 'Whatsapp')->first();
            $waNumber = $wa['contact'];
            $massage = 'Halo! Saya tertarik dengan produk Anda.';
            $waLink = 'https://wa.me/' . $waNumber . '?text=' . urlencode($massage);
            ?>
            <div class="social-media-card" onclick="window.location.href='{{ $waLink }}', '_blank'">
                <div class="social-media-icon">
                    <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.9344 4.125C26.5594 6.75 28.1844 10.1875 28.1844 13.9375C28.1844 21.5625 21.8094 27.8125 14.1219 27.8125C11.8094 27.8125 9.55938 27.1875 7.49688 26.125L0.184376 28L2.12188 20.8125C0.934376 18.75 0.246876 16.375 0.246876 13.875C0.246876 6.25 6.49688 0 14.1219 0C17.8719 0 21.3719 1.5 23.9344 4.125ZM14.1219 25.4375C20.4969 25.4375 25.8094 20.25 25.8094 13.9375C25.8094 10.8125 24.4969 7.9375 22.3094 5.75C20.1219 3.5625 17.2469 2.375 14.1844 2.375C7.80938 2.375 2.62188 7.5625 2.62188 13.875C2.62188 16.0625 3.24688 18.1875 4.37188 20.0625L4.68438 20.5L3.49688 24.75L7.87188 23.5625L8.24688 23.8125C10.0594 24.875 12.0594 25.4375 14.1219 25.4375ZM20.4969 16.8125C20.8094 17 21.0594 17.0625 21.1219 17.25C21.2469 17.375 21.2469 18.0625 20.9344 18.875C20.6219 19.6875 19.2469 20.4375 18.6219 20.5C17.4969 20.6875 16.6219 20.625 14.4344 19.625C10.9344 18.125 8.68438 14.625 8.49688 14.4375C8.30938 14.1875 7.12188 12.5625 7.12188 10.8125C7.12188 9.125 7.99688 8.3125 8.30938 7.9375C8.62188 7.5625 8.99688 7.5 9.24688 7.5C9.43438 7.5 9.68438 7.5 9.87188 7.5C10.1219 7.5 10.3719 7.4375 10.6844 8.125C10.9344 8.8125 11.6844 10.5 11.7469 10.6875C11.8094 10.875 11.8719 11.0625 11.7469 11.3125C11.1219 12.625 10.3719 12.5625 10.7469 13.1875C12.1219 15.5 13.4344 16.3125 15.4969 17.3125C15.8094 17.5 15.9969 17.4375 16.2469 17.25C16.4344 17 17.1219 16.1875 17.3094 15.875C17.5594 15.5 17.8094 15.5625 18.1219 15.6875C18.4344 15.8125 20.1219 16.625 20.4969 16.8125Z"
                            fill="#241F33" />
                    </svg>
                </div>
                <div class="social-media-card-title">
                    Let's Talk
                </div>
                <div class="social-media-card-subtitle">
                    With me via whatsapp
                </div>
            </div>
            <?php
            $mail = collect($contact)->where('title', 'Email')->first();
            $email = $mail['contact'];
            $emailSubject = 'Pertanyaan Tentang Produk';
            $emailBody = 'Halo! Saya ingin mengetahui lebih banyak tentang produk Anda.';
            $emailLink = 'mailto:' . $email . '?subject=' . rawurlencode($emailSubject) . '&body=' . rawurlencode($emailBody);
            ?>
            <div class="social-media-card" onclick="window.location.href='{{ $emailLink }}', '_blank'">
                <div class="social-media-icon">
                    <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 3.58008C0 2.65182 0.368749 1.76158 1.02513 1.1052C1.6815 0.448827 2.57174 0.0800781 3.5 0.0800781H24.5C25.4283 0.0800781 26.3185 0.448827 26.9749 1.1052C27.6313 1.76158 28 2.65182 28 3.58008V17.5801C28 18.5083 27.6313 19.3986 26.9749 20.055C26.3185 20.7113 25.4283 21.0801 24.5 21.0801H3.5C2.57174 21.0801 1.6815 20.7113 1.02513 20.055C0.368749 19.3986 0 18.5083 0 17.5801V3.58008ZM3.5 1.83008C3.03587 1.83008 2.59075 2.01445 2.26256 2.34264C1.93437 2.67083 1.75 3.11595 1.75 3.58008V3.95983L14 11.3098L26.25 3.95983V3.58008C26.25 3.11595 26.0656 2.67083 25.7374 2.34264C25.4092 2.01445 24.9641 1.83008 24.5 1.83008H3.5ZM26.25 6.00033L18.011 10.9441L26.25 16.0138V6.00033ZM26.1905 18.0333L16.3205 11.9591L14 13.3503L11.6795 11.9591L1.8095 18.0316C1.90894 18.404 2.12855 18.7331 2.43423 18.9679C2.73991 19.2027 3.11455 19.33 3.5 19.3301H24.5C24.8852 19.3301 25.2597 19.2031 25.5653 18.9686C25.871 18.7342 26.0907 18.4054 26.1905 18.0333ZM1.75 16.0138L9.989 10.9441L1.75 6.00033V16.0138Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="social-media-card-title">
                    Contact Me
                </div>
                <div class="social-media-card-subtitle">
                    For further business
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
