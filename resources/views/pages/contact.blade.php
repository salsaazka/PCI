@extends('template.index')

@section('title', 'PT. PRIJADI CAHAYA INDONESIA')

@section('header')
    @include('template.header')
@endsection

@section('content')
<div style="min-height: calc(100vh - 340.5px);">
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
