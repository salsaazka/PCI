<footer>
    <div class="footer-container shadow pt-4">
        <div class="footer-social-media-container">
            <div>
                <div class="footer-title">@lang('messages.ExploreOurPage')</div>
                <ul class="footer-list-group">
                    <li class="footer-list">@lang('messages.HOME')</li>
                    <li class="footer-list">@lang('messages.PRODUCTS')</li>
                    <li class="footer-list">@lang('messages.PRODUCTKNOWLEDGE')</li>
                    <li class="footer-list">@lang('messages.CONTACTUS')</li>
                </ul>
            </div>
            <div>
                <div class="footer-title">Social Media</div>
                <?php
                $contact = DB::table('contacts')->get();
                $watsapp = collect($contact)->where('title', 'Whatsapp')->first();
                $email = collect($contact)->where('title', 'Email')->first();
                $instagram = collect($contact)->where('title', 'Instagram')->first();
                $tiktok = collect($contact)->where('title', 'Tiktok')->first();
                $facebook = collect($contact)->where('title', 'Facebook')->first();

                $waNumber = $watsapp->contact;
                $massage = 'Halo! Saya tertarik dengan produk Anda.';
                $waLink = 'https://wa.me/' . $waNumber . '?text=' . urlencode($massage);

                $emailTo = $email->contact;
                $emailSubject = 'Pertanyaan Tentang Produk';
                $emailBody = 'Halo! Saya ingin mengetahui lebih banyak tentang produk Anda.';
                $emailLink = 'mailto:' . $emailTo . '?subject=' . rawurlencode($emailSubject) . '&body=' . rawurlencode($emailBody);

                $fbLink = 'https://www.facebook.com/' . $facebook->contact;
                $igLink = 'https://www.instagram.com/' . $instagram->contact;
                $tiktokLink = 'https://www.tiktok.com/@' . $tiktok->contact;
                ?>
                <ul class="footer-list-group">
                    <li style="cursor: pointer" class="footer-list" onclick="window.location.href='{{ $igLink }}', '_blank'">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.196 4.22656C10.2878 4.22656 12.0144 5.95312 12.0144 8.04492C12.0144 10.1699 10.2878 11.8633 8.196 11.8633C6.071 11.8633 4.37765 10.1699 4.37765 8.04492C4.37765 5.95312 6.071 4.22656 8.196 4.22656ZM8.196 10.5352C9.55733 10.5352 10.653 9.43945 10.653 8.04492C10.653 6.68359 9.55733 5.58789 8.196 5.58789C6.80147 5.58789 5.70577 6.68359 5.70577 8.04492C5.70577 9.43945 6.83468 10.5352 8.196 10.5352ZM13.0437 4.09375C13.0437 4.5918 12.6452 4.99023 12.1472 4.99023C11.6491 4.99023 11.2507 4.5918 11.2507 4.09375C11.2507 3.5957 11.6491 3.19727 12.1472 3.19727C12.6452 3.19727 13.0437 3.5957 13.0437 4.09375ZM15.5671 4.99023C15.6335 6.21875 15.6335 9.9043 15.5671 11.1328C15.5007 12.3281 15.2351 13.3574 14.3718 14.2539C13.5085 15.1172 12.446 15.3828 11.2507 15.4492C10.0222 15.5156 6.33663 15.5156 5.10811 15.4492C3.9128 15.3828 2.8835 15.1172 1.98702 14.2539C1.12374 13.3574 0.858114 12.3281 0.791708 11.1328C0.725302 9.9043 0.725302 6.21875 0.791708 4.99023C0.858114 3.79492 1.12374 2.73242 1.98702 1.86914C2.8835 1.00586 3.9128 0.740234 5.10811 0.673828C6.33663 0.607422 10.0222 0.607422 11.2507 0.673828C12.446 0.740234 13.5085 1.00586 14.3718 1.86914C15.2351 2.73242 15.5007 3.79492 15.5671 4.99023ZM13.9733 12.4277C14.3718 11.4648 14.2722 9.14062 14.2722 8.04492C14.2722 6.98242 14.3718 4.6582 13.9733 3.66211C13.7077 3.03125 13.2097 2.5 12.5788 2.26758C11.5827 1.86914 9.2585 1.96875 8.196 1.96875C7.1003 1.96875 4.77608 1.86914 3.81319 2.26758C3.14913 2.5332 2.65108 3.03125 2.38546 3.66211C1.98702 4.6582 2.08663 6.98242 2.08663 8.04492C2.08663 9.14062 1.98702 11.4648 2.38546 12.4277C2.65108 13.0918 3.14913 13.5898 3.81319 13.8555C4.77608 14.2539 7.1003 14.1543 8.196 14.1543C9.2585 14.1543 11.5827 14.2539 12.5788 13.8555C13.2097 13.5898 13.7409 13.0918 13.9733 12.4277Z"
                                fill="black" />
                        </svg>
                        Instagram
                    </li>
                    <li style="cursor: pointer" class="footer-list" onclick="window.location.href='{{ $fbLink }}', '_blank'">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.3844 8.88501C17.3844 13.0022 14.3629 16.4221 10.4117 17.0198V11.2756H12.3375L12.7027 8.88501H10.4117V7.35767C10.4117 6.6936 10.7438 6.06274 11.773 6.06274H12.8023V4.03735C12.8023 4.03735 11.8727 3.87134 10.943 3.87134C9.0836 3.87134 7.85508 5.03345 7.85508 7.09204V8.88501H5.76328V11.2756H7.85508V17.0198C3.90391 16.4221 0.915627 13.0022 0.915627 8.88501C0.915627 4.33618 4.60117 0.650635 9.15 0.650635C13.6988 0.650635 17.3844 4.33618 17.3844 8.88501Z"
                                fill="black" />
                        </svg>
                        Facebook
                    </li>
                    <li style="cursor: pointer" class="footer-list" onclick="window.location.href='{{ $tiktokLink }}', '_blank'">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.6335 7.19775H15.6003C14.073 7.19775 12.6784 6.73291 11.5495 5.90283V11.8462C11.5495 14.8345 9.12569 17.2251 6.13741 17.2251C3.14913 17.2251 0.758505 14.8345 0.758505 11.8462C0.758505 8.85791 3.14913 6.43408 6.13741 6.43408C6.40304 6.43408 6.63546 6.46729 6.90108 6.50049V9.48877C6.63546 9.38916 6.40304 9.35596 6.13741 9.35596C4.77608 9.35596 3.64718 10.4849 3.64718 11.8462C3.64718 13.2075 4.77608 14.3364 6.13741 14.3364C7.49874 14.3364 8.62765 13.2075 8.62765 11.8462V0.225098H11.5495C11.5495 0.258301 11.5495 0.258301 11.5495 0.291504C11.5495 0.523926 11.5495 0.756348 11.6159 0.98877C11.8151 2.08447 12.4792 3.04736 13.4089 3.64502C14.0398 4.07666 14.8034 4.30908 15.6003 4.30908C15.6003 4.30908 15.6003 4.30908 15.6335 4.30908V7.19775Z"
                                fill="black" />
                        </svg>
                        Tiktok
                    </li>
                </ul>
            </div>
            <div>
                <div class="footer-title">@lang('messages.ContactUs')</div>
                <ul class="footer-list-group">
                    <li style="cursor: pointer" class="footer-list" onclick="window.location.href='{{ $waLink }}', '_blank'">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.152 12.5645C17.4176 12.6973 17.6168 12.9961 17.6168 13.3281C17.6168 13.3613 17.6168 13.4277 17.6168 13.4941L16.8199 16.9473C16.7203 17.3125 16.4215 17.5449 16.0563 17.5449C7.52305 17.5449 0.650002 10.6719 0.650002 2.13867C0.650002 1.77344 0.882423 1.47461 1.24766 1.375L4.70078 0.578125C4.76719 0.578125 4.8336 0.544922 4.8668 0.544922C5.19883 0.544922 5.49766 0.744141 5.63047 1.04297L7.22422 4.76172C7.25742 4.86133 7.29063 4.96094 7.29063 5.06055C7.29063 5.32617 7.15781 5.55859 6.9918 5.69141L4.96641 7.35156C6.19492 9.94141 8.25352 12 10.8434 13.2285L12.5035 11.2031C12.6363 11.0371 12.8688 10.9043 13.1012 10.9043C13.234 10.9043 13.3336 10.9375 13.4332 10.9707L17.152 12.5645Z"
                                fill="black" />
                        </svg>
                        {{ $watsapp->contact }}
                    </li>
                    <li style="cursor: pointer" class="footer-list" onclick="window.location.href='{{ $emailLink }}', '_blank'">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.318 4.72681C17.4508 4.6272 17.65 4.72681 17.65 4.89282V11.6663C17.65 12.5627 16.9195 13.26 16.0563 13.26H2.24375C1.34727 13.26 0.650002 12.5627 0.650002 11.6663V4.89282C0.650002 4.72681 0.816017 4.6272 0.94883 4.72681C1.7125 5.32446 2.67539 6.05493 6.06211 8.51196C6.75938 9.01001 7.95469 10.1057 9.15 10.1057C10.3121 10.1057 11.5406 9.01001 12.2047 8.51196C15.5914 6.05493 16.5543 5.32446 17.318 4.72681ZM9.15 9.01001C8.35313 9.04321 7.25742 8.04712 6.69297 7.64868C2.27695 4.46118 1.94492 4.16235 0.94883 3.36548C0.749611 3.23267 0.650002 3.00024 0.650002 2.73462V2.10376C0.650002 1.24048 1.34727 0.51001 2.24375 0.51001H16.0563C16.9195 0.51001 17.65 1.24048 17.65 2.10376V2.73462C17.65 3.00024 17.5172 3.23267 17.318 3.36548C16.3219 4.16235 15.9898 4.46118 11.5738 7.64868C11.0094 8.04712 9.91367 9.04321 9.15 9.01001Z"
                                fill="black" />
                        </svg>
                        {{ $email->contact }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">Copyright © 2024. All rights reserved</div>
</footer>
