<!DOCTYPE html>
<html>

<head>
    <title>PT. PRIJADI CAHAYA INDONESIA</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{ asset('assets/icomoon.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<style type="text/css">
    body {
        font-family: "Roboto", sans-seriff;
        color: #949393;
        margin: 0;
        max-height: 100vh;
        min-height: 100vh;
        overflow-x: hidden;
    }

    .logo img {
        max-width: 150px;
    }

    a,
    button {
        transition: 0.3s all ease-out;
    }

    a {
        color: #111;
        text-decoration: none;
    }

    a:hover {
        color: #0043ee;
    }

    .row {
        display: flex;
    }

    .div-1 {
        width: 66.66%;
    }

    .div-2 {
        width: 33.33%;
    }

    #body-wrap {
        height: 100vh;
    }

    header#header {
        margin-bottom: 16px;
    }

    .main-content {
        width: 100%;
        color: #fff;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        justify-content: center;
    }

    .main-content h1 {
        font-size: 3em;
        font-weight: 700;
        color: #000;
        margin-bottom: 0;
    }

    .main-content h5 {
        color: #000;
    }

    #countdown-clock {
        font-size: 30px;
        display: flex;
        flex-wrap: wrap;
        margin: 20px 0;
    }

    #countdown-clock .time {
        background-color: #f5f5f5;
        color: #000;
        border-radius: 10px;
        padding: 20px;
        margin-right: 10px;
        margin-bottom: 10px;
        text-align: center;
    }

    #countdown-clock .time>span {
        font-weight: 700;
    }

    #countdown-clock .time small {
        padding-top: 5px;
        font-size: 12px;
        text-transform: uppercase;
        display: block;
    }

    .main-content p {
        font-size: 1.2em;
        color: #666;
        width: 70%;
    }

    #form .form-group {
        display: flex;
        margin: 20px 0;
    }

    input::placeholder {
        color: #949393;
    }

    .form-group input.form-control {
        width: 250px;
        height: 50px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        padding-left: 20px;
        border: none;
        background: #f5f5f5;
    }

    .form-group a.submit-button {
        padding: 18px 30px;
        border-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #0043ee;
        border: none;
        cursor: pointer;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-group a.submit-button:hover {
        background-color: #222630;
    }

    .form-group a.submit-button span {
        font-weight: 700;
        padding-left: 5px;
    }

    #footer .social-links {
        padding-top: 20px;
    }

    #footer .social-links ul {
        display: flex;
        list-style: none;
        padding: 0;
    }

    #footer .social-links li {
        padding-right: 20px;
    }

    #footer .social-links ul a {
        font-size: 1.6em;
        color: #626262;
        text-decoration: none;
    }

    #footer .social-links ul a:hover {
        color: #111;
    }

    .copyright p {
        color: #626262;
    }

    @media (max-width: 999px) {
        #body-wrap .col-4 {
            width: 40%;
            margin-left: -48px;
            z-index: -1;
        }
    }

    @media (max-width: 769px) {
        body {
            overflow-y: auto;
            overflow-x: hidden
        }

        .div-1 {
            width: 100%;
        }

        .div-2 {
            display: none !important;
        }
    }

    @media (max-width: 599px) {

        .main-content .page-title h1 {
            font-size: 30px;
        }

        .main-content .page-title h5 {
            font-size: 14px;
        }

        .main-content ul li {
            font-size: 12px;
        }

        #body-wrap .page-title {
            width: 98%;
        }

        #body-wrap .col-4 {
            width: 100%;
            margin-left: -438px;
            opacity: 0.1;
        }

        #form p {
            font-size: 14px
        }

        #countdown-clock .time {
            padding: 18px;
        }

        #countdown-clock .time .days {
            font-size: 26px;
        }

        #countdown-clock .time .hours {
            font-size: 26px;
        }

        #countdown-clock .time .minutes {
            font-size: 26px;
        }

        #countdown-clock .time .seconds {
            font-size: 26px;
        }

        #countdown-clock .time small {
            font-size: 10px;
        }
    }

    @media (max-width: 540px) {
        #countdown-clock .time {
            padding: 14px;
        }

        #form .form-group {
            flex-wrap: wrap;
        }

        .form-group input.form-control {
            width: 100%;
            margin-bottom: 10px;
            background: #e4edf7;
        }

        .form-group a.submit-button {
            width: 100%;
        }

        #body-wrap .col-4 {
            margin-left: -108px;
        }
    }

    @media (max-width: 410px) {

        #countdown-clock .time .days {
            font-size: 26px;
        }

        #countdown-clock .time small {
            font-size: 10px;
        }
    }
</style>

<body>
    <div id="body-wrap">
        <div class="d-flex align-items-center w-100">
            <div class="div-1" style="height: 100vh">
                <div class="container d-flex flex-column align-items-center justify-content-center"
                    style="height: 100vh">
                    <div>
                        <header id="header">
                            <div class="logo">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                            </div>
                        </header>

                        <div class="main-content">
                            <div class="page-title">
                                <h1>We are launching soon!</h1>

                                <div class="pt-2">
                                    <h5>General Trading Company</h5>
                                    <ul>
                                        <li style="color:#222630">Commodities for Export</li>
                                        <li style="color:#222630">ZEOLITES:</li>
                                        <ul>
                                            <li style="color:#222630">Desiccant/ Silica Gel</li>
                                            <li style="color:#222630">Water Purification Filtration System</li>
                                            <li style="color:#222630">Fertilizer Media</li>
                                            <li style="color:#222630">Nuclear Waste Reprocessing</li>
                                        </ul>
                                        <li style="color:#222630">Cat Litter Manufacturing, Formulation and  Business Consultation</li>
                                        <li style="color:#222630">Sachainchi supplier</li>
                                    </ul>
                                    <h5 class="mt-1">Human Resources Training, Development, and Consulting Company</h5>
                                    <ul>
                                        <li style="color:#222630">Coaching Training</li>
                                        <li style="color:#222630">Leadership Training</li>
                                        <li style="color:#222630">UKM (Indonesian Local) Business Consulting</li>
                                    </ul>
                                </div>

                                <div id="countdown-clock">
                                    <div class="time">
                                        <span class="days"></span>
                                        <small>Days</small>
                                    </div>
                                    <div class="time">
                                        <span class="hours"></span>
                                        <small>Hours</small>
                                    </div>
                                    <div class="time">
                                        <span class="minutes"></span>
                                        <small>Minutes</small>
                                    </div>
                                    <div class="time">
                                        <span class="seconds"></span>
                                        <small>Seconds</small>
                                    </div>
                                </div>
                            </div>
                            <!--page-title-->

                            <form id="form">
                                <p>
                                    You can contact me via WhatsApp, click for more information.
                                </p>

                                <div class="form-group">
                                    <a href="https://wa.me/62811955198" class="submit-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg>
                                        <span>Contact</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--main-content-->

                    <!-- <footer id="footer">
              <div class="social-links">
                <ul>
                  <li>
                    <a href="#"><i class="icon icon-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon icon-github"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon icon-google-plus"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon icon-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon icon-twitter"></i></a>
                  </li>
                </ul>
              </div>

              <div class="copyright">
                <p>
                  Copyright &copy;
                  <a href="https://templatesjungle.com" target="_blank"
                    >TemplateJungle</a
                  >
                  2022.
                  <a
                    href="https://templatesjungle.gumroad.com/l/countdown-free-lightweight-under-construction-template"
                    target="_blank"
                    style="color: #0043ee"
                  >
                    <b> <u> Get Pro </u></b>
                  </a>
                </p>
              </div>
            </footer> -->
                </div>
            </div>
            <!--col-8-->

            <div class="div-2">
                <img src="{{ asset('assets/images/sideimg.jpg') }}" alt="wallpaper" class="sideimg" />
            </div>
        </div>
        <!--row-->
    </div>
    <!--body-wrap-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        function getTimeRemaining(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date());
            const seconds = Math.floor((total / 1000) % 60);
            const minutes = Math.floor((total / 1000 / 60) % 60);
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const days = Math.floor(total / (1000 * 60 * 60 * 24));

            return {
                total,
                days,
                hours,
                minutes,
                seconds,
            };
        }

        function initializeClock(id) {
            const clock = document.getElementById(id);
            const daysSpan = clock.querySelector(".days");
            const hoursSpan = clock.querySelector(".hours");
            const minutesSpan = clock.querySelector(".minutes");
            const secondsSpan = clock.querySelector(".seconds");

            // Set the deadline to April 15, 2024
            let deadline = 'April 15, 2024';

            function updateClock() {
                const t = getTimeRemaining(deadline);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
                minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
                secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            const timeinterval = setInterval(updateClock, 1000);
        }

        // Initialize clock on page load
        document.addEventListener("DOMContentLoaded", function() {
            initializeClock("countdown-clock");
        });
    </script>
</body>

</html>
