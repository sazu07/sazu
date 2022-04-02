@extends("layouts.website")
@section('contents')


<section class="s-first s-first--bg-green js-space">
        <div class="inner inner--splitted inner--top-140 inner--publisher">
            <div class="s-first__split s-first__split--w-50">
                <ul class="titles owl-carousel owl-carousel--titles swiper-wrapper js-slider" data-type="titles" data-slides="1">
                    <li class="titles__item swiper-slide">
                        <h2 class="s-first__title s-first__title--s-48">We provide you with <strong>Top CPM</strong> rates</h2>
                    </li>
                    <li class="titles__item swiper-slide">
                        <h2 class="s-first__title s-first__title--s-48">We match your site with <strong>top converting offers</strong></h2>
                    </li>
                </ul>

                <!-- <a class="button button--bg-white button--color-green button--rounded button--w-300 button--top-60" href="#">
                    Sign Up FREE                </a> -->
            </div>
            <div class="s-first__split">
                <div class="s-first__browser">
                    <img class="s-first__video-header" src="images/video%2bframe%402x.png" />
                    <video class="s-first__video" src="/video/hilltop-user-panel-promo-new-720p.mp4" type="/hilltopads.com_files/video/mp4" autoplay loop muted preload="true" poster="#"></video>
                </div>
            </div>
        </div>
    </section>
    <div class="texture texture--1"></div>
    <section class="s-geos">
        <div class="inner">
            <h2 class="title title--uppercase">We accept websites from all <span class="text--blue text--regular">GEO</span>’s*</h2>
            <ul class="list">
                <li class="list__item list__item--5 list__item--inline wow jackInTheBox">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-downloads.svg">
                        </div>
                        <div class="item__text">
                            Downloads </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline  wow jackInTheBox">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-fun.svg">
                        </div>
                        <div class="item__text">
                            Entertainment / Fun </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline  wow jackInTheBox">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-ecommerce.svg">
                        </div>
                        <div class="item__text">
                            eCommerce </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline  wow jackInTheBox">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-dating.svg">
                        </div>
                        <div class="item__text">
                            Dating </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline  wow jackInTheBox">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-finance.svg">
                        </div>
                        <div class="item__text">
                            Finance </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-movies.svg">
                        </div>
                        <div class="item__text">
                            <div>
                                Movies </div>
                        </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-social.svg">
                        </div>
                        <div class="item__text">
                            <div>
                                Social </div>
                        </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline wow zoomIn" data-wow-delay="0.3s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-hosting.svg">
                        </div>
                        <div class="item__text">
                            <div>
                                File Hosting </div>
                        </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline wow fadeInRight" data-wow-delay="0.3s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-mp3.svg">
                        </div>
                        <div class="item__text">
                            <div>
                                mp3 </div>
                        </div>
                    </div>
                </li>
                <li class="list__item list__item--5 list__item--inline wow fadeInRight" data-wow-delay="0.3s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/geos/icon_cat-sports.svg">
                        </div>
                        <div class="item__text">
                            <div>
                                Streaming / Sports </div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="s-geos__text">* - Websites with 5K and up unique visitors per day are accepted.</div>
        </div>
    </section>
    <section class="s-reasons">
        <div class="slope slope--top slope--dark slope--large"></div>
        <div class="inner inner--w-1080">
            <h2 class="title title--white">Great reasons to <a class='link link--blue link--bold' href='#'>join</a> HilltopAds</h2>
            <ul class="list list--mb-72">
                <li class="list__item list__item--mb-50 wow flipInX">
                    <div class="item item--image-left item--padding-70">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/reasons/icon_reasons_01.svg">
                        </div>
                        <div class="item__text">
                            HilltopAds is best at pop advertising. We have huge variety of <strong>CPM</strong> offers for your traffic. Request <strong>CPA</strong> / <strong>CPC</strong> offers from your <strong>Personal Manager</strong>. </div>
                    </div>
                </li>
                <li class="list__item list__item--mb-50 wow flipInX" data-wow-delay="0.2s">
                    <div class="item item--image-left item--padding-70">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/reasons/icon_reasons_02.svg">
                        </div>
                        <div class="item__text">
                            We accept websites with <strong>mainstream</strong> and <strong>non-mainstream</strong> content. Be sure to have traffic volume over 5K daily. </div>
                    </div>
                </li>
                <li class="list__item list__item--mb-50 wow flipInX" data-wow-delay="0.4s">
                    <div class="item item--image-left item--padding-70">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/reasons/icon_reasons_03.svg">
                        </div>
                        <div class="item__text">
                            Our offers reach all users as we maintain <strong>up to 100%</strong> fill rate without blocked impressions so you can get higher revenue. </div>
                    </div>
                </li>
                <li class="list__item list__item--mb-50 wow flipInX" data-wow-delay="0.6s">
                    <div class="item item--image-left item--padding-70">
                        <div class="item__image">
                            <img src="{{ asset('contents/website') }}/assets/images/reasons/icon_reasons_04.svg">
                        </div>
                        <div class="item__text">
                            Good rates are everything! Make big money from your website traffic and <strong>get paid weekly</strong> via: <strong>PayPal</strong>, <strong>Bitcoin</strong>, <strong>Wire Transfer</strong>, <strong>Webmoney</strong>, <strong>Capitalist</strong>,
                            <strong>Tether (USDT)</strong> </div>
                    </div>
                </li>
            </ul>
            <div class="line line--dark"></div>
            <h4 class="s-reasons__text">Improve your monetization with HilltopAds!</h4>
            <a class="button button--bg-green button--rounded button--centered button--w-340 wow zoomIn" href="#" data-wow-delay="0.5s">START SELLING TRAFFIC</a>
        </div>
    </section>
    <section class="s-units wow zoomIn">
        <div class="inner">
            <h2 class="title title--uppercase"><a class="link link--blue" href="adformats.html">Our <span class="text--regular text--blue">Ad</span> Units</a></h2>
            <p class="paragraph center light">Monetise your traffic with various high converting ad units that fit your website and device.</p>
            <p class="paragraph center light">Choose between pop ads, banners, in-video ads, native and more. View full list of advertising formats <a class='link' href='adformats.html'>HERE</a>.</p>
        </div>
    </section>
    <div class="line"></div>
    <section class="s-howto">
        <div class="inner inner--w-1080">
            <h2 class="title title--uppercase">How to <b class="text text--green">Start</b>?</h2>
            <div class="s-howto__container">
                <ul class="howto-list wow slideInLeft">
                    <li class="howto-list__item">
                        <div class="howto-step">
                            <div class="hexagon">
                                <div class="hexagon__inner">1</div>
                            </div>
                            <span class="howto-step__title"><b>Sign up</b>! It's Free and Easy!</span>
                        </div>
                    </li>
                    <li class="howto-list__item">
                        <div class="howto-line"></div>
                    </li>
                    <li class="howto-list__item">
                        <div class="howto-step">
                            <div class="hexagon">
                                <div class="hexagon__inner">2</div>
                            </div>
                            <span class="howto-step__title"><b>Fill out</b> Publisher Quiz</span>
                        </div>
                    </li>
                    <li class="howto-list__item">
                        <div class="howto-line"></div>
                    </li>
                    <li class="howto-list__item">
                        <div class="howto-step">
                            <div class="hexagon">
                                <div class="hexagon__inner">3</div>
                            </div>
                            <span class="howto-step__title">Get code and start making <b>money</b>! <img src="{{ asset('contents/website') }}/assets/images/money.png" srcset="/hilltopads.com_files/images/money@2x.png 2x"> <img src="{{ asset('contents/website') }}/assets/images/money.png" srcset="/hilltopads.com_files/images/money@2x.png 2x"> <img src="{{ asset('contents/website') }}/assets/images/money.png" srcset="/hilltopads.com_files/images/money@2x.png 2x"></span>
                        </div>
                    </li>
                    <li class="howto-list__item">
                        <div class="howto-line howto-line--small"></div>
                    </li>
                </ul>
                <ul class="howto-faq wow slideInRight">
                    <li class="howto-faq__item js-faq__item">
                        <a href="#" class="howto-faq__title js-faq__title">
                            How do I start?                        </a>
                        <div class="howto-faq__body">
                            <p class="howto-faq__text">
                                Sign up and fill out the Publisher Quiz under Manager Sites & Zones tab. </p>
                        </div>
                    </li>
                    <li class="howto-faq__item js-faq__item">
                        <a href="#" class="howto-faq__title js-faq__title">
                            How do I get approved?                        </a>
                        <div class="howto-faq__body">
                            <p class="howto-faq__text">
                                Your Personal Manager will review your Quiz application and will contact you via email. HilltopAds approves all website with 5K unique traffic per day. </p>
                        </div>
                    </li>
                    <li class="howto-faq__item js-faq__item">
                        <a href="#" class="howto-faq__title js-faq__title">
                            Where do I find the codes?                        </a>
                        <div class="howto-faq__body">
                            <p class="howto-faq__text">
                                Your Personal Manager will provide you with all necessary codes. </p>
                        </div>
                    </li>
                    <li class="howto-faq__item js-faq__item">
                        <a href="#" class="howto-faq__title js-faq__title">
                            How do I get paid?                        </a>
                        <div class="howto-faq__body">
                            <p class="howto-faq__text">
                                Payments are made weekly after your min. balance of $10 is reached via your preferred payment system: PayPal, Bitcoin, Wire Transfer, Webmoney, Capitalist, Tether (USDT) </p>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="button button--bg-green button--centered button--rounded button--w-340 button--top-60" href="#">Join as Publisher now!</a>
        </div>
    </section>
    <div class="line"></div>
    <section class="s-offers">
        <div class="inner">
            <h2 class="title title--l-margin"><strong class="text text--blue">30.000 Offers</strong> from Top Advertisers</h2>

            <div class="swiper-container">
                <ul class="logos owl-carousel owl-carousel--logos swiper-wrapper js-slider" data-type="logos" data-name="offers" data-slides="4">
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/adsbays.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/adsbays@2x.webp 2x" alt="adsbays">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/aliexpress.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/aliexpress@2x.webp 2x" alt="Aliexpress">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/avazu.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/avazu@2x.webp 2x" alt="Avazu">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/clickdealer.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/clickdealer@2x.webp 2x" alt="Clickdealer">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/golden-goose.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/golden-goose@2x.webp 2x" alt="Golden-goose">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/exoclick.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/exoclick@2x.webp 2x" alt="Exoclick">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/favbet.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/favbet@2x.webp 2x" alt="Favbet">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/iqoption.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/iqoption@2x.webp 2x" alt="Iqoption">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/joy-casino.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/joy-casino@2x.webp 2x" alt="Joy-Casino">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/matomy.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/matomy@2x.webp 2x" alt="Matomy">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/mobIteasy.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/mobIteasy@2x.webp 2x" alt="mobIteasy">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/mobusi.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/mobusi@2x.webp 2x" alt="mobusi">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/mobvista.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/mobvista@2x.webp 2x" alt="mobvista">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/oasis-games.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/oasis-games@2x.webp 2x" alt="oasis-games">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/orderbox.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/orderbox@2x.webp 2x" alt="orderbox">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/stargames.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/stargames@2x.webp 2x" alt="stargames">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/yeahmobi.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/yeahmobi@2x.webp 2x" alt="yeahmobi">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/ytz.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/ytz@2x.webp 2x" alt="ytz">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="/hilltopads.com_files/images/logos/webp/zenads.webp" data-srcset="/hilltopads.com_files/images/logos/2x/webp/zenads@2x.webp 2x" alt="zenads">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="s-dark">
        <div class="slope slope--top slope--dark slope--large"></div>
    </section>


    <div class="texture texture--2"></div>

@endsection
