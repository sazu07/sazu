<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/website') }}/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body class="body body--fixed-header">

    <div class="loader loader-hidden">
        <svg id="loader-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><style>.loader__path{-webkit-animation: rotateCircle 2s linear infinite both;animation: rotateCircle 2s linear infinite both;-webkit-transform-origin: 50%;-ms-transform-origin: 50%;transform-origin: 50%}@-webkit-keyframes rotateCircle{to{-webkit-transform: rotate(360deg);transform: rotate(360deg)}}@keyframes rotateCircle{to{-webkit-transform: rotate(360deg);transform: rotate(360deg)}}@-webkit-keyframes rotateCircleReverse{to{-webkit-transform: rotate(-360deg);transform: rotate(-360deg)}}@keyframes rotateCircleReverse{to{-webkit-transform: rotate(-360deg);transform: rotate(-360deg)}}</style></defs><path class="loader__path" fill="#00B7B2" d="M93.05 24.55c-14-23.8-44.7-31.6-68.5-17.6a49.93 49.93 0 0 0-17.6 68.5l7.32-4.3a41.45 41.45 0 1 1 71.38-42.18l7.4-4.42z"/><path class="loader__path" fill="#2E2F39" d="M54.1 62.27a12.84 12.84 0 0 1-16.37-8.16 12.84 12.84 0 0 1 8.16-16.37l-2.2-6.5A19.8 19.8 0 1 0 56.3 68.77l-2.2-6.5z" style="-webkit-animation:rotateCircleReverse 1s linear infinite both;animation:rotateCircleReverse 1s linear infinite both"/><path class="loader__path" fill="#38B0E4" d="M69.13 79.37c16.25-10.57 20.8-32.25 10.24-48.5s-32.25-20.8-48.5-10.24l4.55 6.98c12.4-8.03 28.94-4.58 36.97 7.82s4.58 28.94-7.82 36.97l4.55 6.97z"/></svg>
    </div>

    <div class="notice" data-notice-id="site-cookie" hidden>
        <div class="notice__icon">
            <svg width="37" height="36" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor" fill-rule="nonzero"><path d="M18.76 36c-4.948 0-9.578-1.911-13.039-5.385-3.433-3.445-5.28-8-5.2-12.823a1.49 1.49 0 0 1 .377-.964 1.59 1.59 0 0 1 .785-.482 4.845 4.845 0 0 0 3.123-2.457 1.53 1.53 0 0 1 1.891-.716c3.356 1.257 6.555-1.27 6.555-4.455l-.03-.267-.033-.25a1.486 1.486 0 0 1 .363-1.144 1.534 1.534 0 0 1 1.096-.516c2.179-.073 4.048-1.578 4.547-3.658.384-1.603 2.056-2.592 3.73-2.212C31.212 2.572 37 9.736 37 18.093 37 27.968 28.818 36 18.76 36zM3.58 18.873c.188 3.627 1.696 7.018 4.309 9.639C10.774 31.407 14.635 33 18.76 33c8.381 0 15.2-6.687 15.2-14.907 0-6.954-4.821-12.916-11.724-14.5l-.102.019c-.678 2.865-2.997 5.073-5.868 5.73-.324 4.002-3.726 7.158-7.86 7.158a7.672 7.672 0 0 1-1.57-.165 7.914 7.914 0 0 1-3.256 2.538z"/><ellipse cx="22.56" cy="12.75" rx="2.28" ry="2.25"/><ellipse cx="11.92" cy="21.75" rx="2.28" ry="2.25"/><ellipse cx="24.08" cy="24.75" rx="2.28" ry="2.25"/><ellipse cx="18.76" cy="18" rx="1.52" ry="1.5"/><ellipse cx="15.72" cy="27" rx="1.52" ry="1.5"/><ellipse cx="14.2" cy="1.5" rx="1.52" ry="1.5"/><ellipse cx="7.36" cy="8.25" rx="2.28" ry="2.25"/><ellipse cx="27.88" cy="18" rx="1.52" ry="1.5"/></g></svg>
            <svg class="close" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path d="M9.414 8l6.293-6.293A1 1 0 1014.293.293L8 6.586 1.707.293A1 1 0 00.293 1.707L6.586 8 .293 14.292a1 1 0 001.414 1.415L8 9.414l6.293 6.293a1 1 0 101.414-1.415L9.414 8z" fill="#677583"/></svg>
        </div>
        <p class="notice__text">This website uses cookies to ensure you get the best experience on our website.</p>
        <p class="notice__text"><a class="link" href="page/cookies.html">Learn more</a></p>
        <button class="notice__button button button--bg-blue button--rounded uppercase js-notice-close">Got it</button>
    </div>

    <div class="overlay overlay--hidden js-popup-success" id="popupOverlay">
        <div class="popup popup--w-700 js-popup" id="sendMessage">
            <a class="popup__close js-close-popup" href="#">close</a>
            <div class="popup__success" id="successMessage">
                <div class="popup__center">
                    <h3 class="popup__text popup__text--large">Your message was successfully sent.</h3>
                    <p class="popup__text">Thank you! Our manager will reply you soon.</p>
                </div>
                <a class="button button--bg-blue button--rounded button--w-300 button--centered js-close-popup" id="message-close" href="#">Close</a>
            </div>
            <div class="popup__title">
                Send us a message </div>
            <div class="popup__body">
                <form class="form js-form js-message-form" id="message" name="message" action="#" method="post" data-parsley-errors-container="#message-errors" data-parsley-error-class="error">
                    <div class="form__row form__row--with-column">
                        <div class="form__column" id="message-field-name">
                            <label class="form__label">
                                Name                            </label>
                            <div class="form__error" id="message-error-name"></div>
                            <input class="input" type="text" placeholder="Your Name" name="name" required data-parsley-errors-container="#message-error-name" data-parsley-class-handler="#message-field-name">
                        </div>
                        <div class="form__column" id="message-field-email">
                            <label class="form__label">
                                Email                            </label>
                            <div class="form__error" id="message-error-email"></div>
                            <input class="input" type="email" placeholder="name@example.com" name="email" required data-parsley-errors-container="#message-error-email" data-parsley-class-handler="#message-field-email">
                        </div>
                    </div>
                    <div class="form__row form__row--with-column">
                        <div class="form__column" id="message-field-site">
                            <label class="form__label">
                                Your site                            </label>
                            <div class="form__error" id="message-error-site"></div>
                            <input class="input" type="url" placeholder="#" name="website" required data-parsley-type-message="Please enter a valid URL" data-parsley-errors-container="#message-error-site" data-parsley-class-handler="#message-field-site">
                        </div>
                        <div class="form__column form__column--empty"></div>
                    </div>
                    <div class="form__row" id="message-field-text">
                        <label class="form__label">Message</label>
                        <div class="form__error" id="message-error-text"></div>
                        <textarea class="textarea" placeholder="Your Message" name="message" rows="5" minlength="20" required data-parsley-minlength-message="Your message is too short. Tell us more!" data-parsley-required-message="Message is also required.." data-parsley-errors-container="#message-error-text"
                            data-parsley-class-handler="#message-field-text"></textarea>
                    </div>
                    <div class="form__row form__row--with-column">
                        <div class="form__column form__column--empty form__column--center">
                            <div class="g-recaptcha" data-sitekey="6Le3tBgUAAAAABd6o36bOBKOeiRNNDLA_orwU1AU"></div>
                            <div class="ajax-field-errors">
                                <div class="text text--error ajax-errors" id="message-errors"></div>
                            </div>
                        </div>
                        <div class="form__column form__submit-box">
                            <input id="requestType" type="hidden" name="requestType">
                            <button class="button button--bg-blue" type="submit">
                                Send message                            </button>
                            <span class="loader loader--button"><svg><use xlink:href="#loader-svg"></use></svg></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <header class="header header--fixed">
        <!-- <a class="logo" href="index.html">
            <img src="hilltopads.com_files/images/logo.png" srcset="/hilltopads.com_files/images/2x/logo@2x.png 2x" alt="logo">
        </a> -->
        <div class="hamburger js-toggle-nav">
            <div class="hamburger__line"></div>
            <div class="hamburger__line"></div>
            <div class="hamburger__line"></div>
        </div>
        <div class="header__right" id="headerNav">
            <nav class="nav nav--horizontal">
                <a class="nav__item nav__item--blue" href="publishers.html">
                    Publisher                </a>
                <a class="nav__item nav__item--blue" href="advertiser.html">
                    Advertiser                </a>



            </nav>
            <!-- <a class="button button--b-blue button--rounded button--small" href="https://user.hilltopads.com/signup">
                SIGN UP            </a> -->
        </div>
    </header>

    <div class='adblock-notification hidden'>
        <img class="adblock-notification__img" src="hilltopads.com_files/images/adblock-notify.svg" alt="adBlock-notify">
        <div class='adblock-notification__text'><strong>Ad-blocking solution may corrupt some of the functionality.</strong> Please, turn off your ad-blocking extension to use this site correctly.</div>
    </div>


    @yield('contents')




    <footer class="footer">
        <div class="inner">
            <ul class="list list--justify">
                <li class="list__item">
                    <ul class="socials">
                        <li class="socials__item">
                            <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank">
                                <i class="icon-vk"></i>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="#" rel="noreferrer noopener" target="_blank">
                                <i class="icon-telegram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="contacts">
                        <li class="contacts__item contacts__item--bold">HILLTOP ADS LTD.</li>
                        <li class="contacts__item">London, Spaces Liverpool Street Station, New Broad Street House</li>
                        <li class="contacts__item">35 New Broad St, London, United Kingdom, EC2M 1NH</li>
                        <li class="contacts__item">+44 (20) 3287-5909</li>
                    </ul>
                </li>
                <li class="list__item">
                    <nav class="nav nav--vertical nav--inline">
                        <a class="nav__item" href="page/adformats.html">Ad formats</a>
                        <a class="nav__item" href="page/advertiser.html">Advertisers</a>
                        <a class="nav__item" href="page/publishers.html">Publishers</a>
                        <a class="nav__item" href="#">Registration</a>
                        <a class="nav__item " href="#">Blog</a>
                    </nav>
                    <nav class="nav nav--vertical nav--inline">
                        <a class="nav__item" href="files/HilltopAdsMediaKit.pdf" target="_blank">Media Kit</a>
                        <a class="nav__item" href="page/legal.html#termsofuse">Terms and Conditions</a>
                        <a class="nav__item" href="page/legal.html#privacypolicy">Privacy Policy</a>
                        <a class="nav__item js-show-popup feedbackRequest" href="#" data-popup="sendMessage" data-request-type="report_abuse">Report Abuse</a>
                        <a class="nav__item js-show-popup feedbackRequest" href="#" data-popup="sendMessage" data-request-type="send_message">Contact us</a>
                    </nav>
                </li>
            </ul>
        </div>
    </footer>

    <div class="line"></div>

    <div class="copyrights">
        &copy; 2013–2022 . All Rights Reserved.
    </div>


    <script src="{{ asset('contents/website') }}/assets/js/libs/jquery.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/libs/owl.carousel.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/libs/swiper.min.js"></script>
    <script src="{{ asset('contents/website') }}/assetsjs/libs/wow.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/libs/parsley.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/maine085.js?v=1647014125"></script>

    <script type="text/javascript">
        window._chatlio = window._chatlio || [];
        ! function() {
            var t = document.getElementById("chatlio-widget-embed");
            if (t && window.ChatlioReact && _chatlio.init) return void _chatlio.init(t, ChatlioReact);
            for (var e = function(t) {
                    return function() {
                        _chatlio.push([t].concat(arguments))
                    }
                }, i = ["configure", "identify", "track", "show", "hide", "isShown", "isOnline", "page", "open", "showOrHide"], a = 0; a < i.length; a++) _chatlio[i[a]] || (_chatlio[i[a]] = e(i[a]));
            var n = document.createElement("script"),
                c = document.getElementsByTagName("script")[0];
            n.id = "chatlio-widget-embed", n.src = "../w.chatlio.com/w.chatlio-widget.js", n.async = !0, n.setAttribute("data-embed-version", "2.3")
            n.setAttribute('data-widget-options', '{"embedSidebar": true}')
            n.setAttribute('data-widget-id', '865499f4-8839-46ce-766a-6dedba335802')
            document.addEventListener('chatlio.ready', () => {

                _chatlio.show()
            }, false)
            c.parentNode.insertBefore(n, c)
        }()
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72282110-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function()

            {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "../mc.yandex.ru/metrika/tag.js", "ym");

        ym(45585063, "init",

            {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true
            }
        );
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/45585063" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script type="text/javascript">
        ! function() {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = "../vk.com/js/api/openapi3636.js?169", t.onload = function()

            {
                VK.Retargeting.Init("VK-RTRG-1142496-3FvYM"), VK.Retargeting.Hit()
            }, document.head.appendChild(t)
        }();
    </script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1142496-3FvYM" style="position:fixed; left:-999px;" alt=""/></noscript>

    <script type="text/javascript" src="js/fingerprint.js"></script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1258330930929966'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1258330930929966&amp;ev=PageView&amp;noscript=1"
/></noscript>
    <!--    -->
</body>

<!-- Mirrored from hilltopads.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 05:37:49 GMT -->

</html>


</html>