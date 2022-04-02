@extends("layouts.website")
@section('contents')

<section class="s-first s-first--bg-gradient s-first--centered js-space">
        <div class="inner inner--w-1080 inner--top-140">
            <div class="swiper-container">
                <ul class="titles owl-carousel owl-carousel--titles swiper-wrapper js-slider" data-type="titles" data-slides="1">
                    <li class="titles__item swiper-slide">
                        <h2 class="s-first__title">Make big money from your website!</h2>
                        <h3 class="s-first__subtitle">Monetize your website traffic with best converting offers. Get high eCPMs!</h3>
                    </li>
                    <!--                    <li class="titles__item swiper-slide">-->
                    <!--                        <h2 class="s-first__title">Over 100M impressions… Daily!</h2>-->
                    <!--                        <h3 class="s-first__subtitle">Get big volumes of impressions on desktop, mobile and tablet</h3>-->
                    <!--                    </li>-->
                    <li class="titles__item swiper-slide">
                        <h2 class="s-first__title">Easy Self-Service Platform for Advertisers!</h2>
                        <h3 class="s-first__subtitle">Launch your campaigns in minutes with our fully optimised self-serve system.</h3>
                    </li>
                </ul>
            </div>

            <a href="publishers.html" class="button button--bg-white button--color-green button--rounded button--inline button--w-240 button--m-right">
                Publishers            </a>
            <a href="advertiser.html" class="button button--bg-white button--color-blue button--rounded button--inline button--w-240">
                Advertisers            </a>
        </div>
    </section>

    <div class="texture texture--1"></div>

    <section class="s-features">
        <div class="inner">
            <h2 class="title title--uppercase">Ad Network <span class="text--blue text--regular">Features</span></h2>

            <ul class="list">
                <li class="list__item list__item--6 list__item--inline wow zoomIn" data-wow-delay="0.2s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="95px" height="104px" viewBox="0 0 95 104"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-1"></use></svg>
                        </div>
                        <div class="item__text">
                            CPM <br> (CPA per request) </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow zoomIn" data-wow-delay="0.2s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="96px" height="72px" viewBox="0 0 96 72"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-2"></use></svg>
                        </div>
                        <div class="item__text">
                            Traffic from direct publishers </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow zoomIn" data-wow-delay="0.2s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="80px" height="91px" viewBox="0 0 80 91"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-3"></use></svg>
                        </div>
                        <div class="item__text">
                            Advanced targeting </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow zoomIn" data-wow-delay="0.2s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="98px" height="86px" viewBox="0 0 98 86"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-4"></use></svg>
                        </div>
                        <div class="item__text">
                            No blocked impressions </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow zoomIn" data-wow-delay="0.2s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="80px" height="90px" viewBox="0 0 80 90"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-5"></use></svg>
                        </div>
                        <div class="item__text">
                            Real-time detailed statistics </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow zoomIn" data-wow-delay="0.2s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="92px" height="80px" viewBox="0 0 92 80"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-6"></use></svg>
                        </div>
                        <div class="item__text">
                            eCPM real-time optimization </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow bounceIn" data-wow-delay="0.6s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="97px" height="92px" viewBox="0 0 97 92"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-7"></use></svg>
                        </div>
                        <div class="item__text">
                            Self-Service for advertisers </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow bounceIn" data-wow-delay="0.6s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="90px" height="81px" viewBox="0 0 90 81"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-8"></use></svg>
                        </div>
                        <div class="item__text">
                            24/7 qualified support </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow bounceIn" data-wow-delay="0.6s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="68px" height="100px" viewBox="0 0 68 100"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-9"></use></svg>
                        </div>
                        <div class="item__text">
                            Custom solutions for valued partners </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow bounceIn" data-wow-delay="1s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="90px" height="90px" viewBox="0 0 90 90"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-10"></use></svg>
                        </div>
                        <div class="item__text">
                            Own adserver solution </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow bounceIn" data-wow-delay="1s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="88px" height="94px" viewBox="0 0 88 94"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-11"></use></svg>
                        </div>
                        <div class="item__text">
                            Ad networks rotation for publishers </div>
                    </div>
                </li>
                <li class="list__item list__item--6 list__item--inline wow bounceIn" data-wow-delay="1s">
                    <div class="item item--image-top">
                        <div class="item__image">
                            <svg width="100px" height="77px" viewBox="0 0 100 77"><use href="{{ asset('contents/website') }}/assets/images/features/icons.svg#icon-12"></use></svg>
                        </div>
                        <div class="item__text">
                            No financial transaction fees </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="s-cut">
        <div class="s-cut__part s-cut__part--green js-cut-section wow slideInLeft" data-wow-delay="0.5s">
            <h2 class="s-cut__title"><strong>Monetize</strong> your site</h2>

            <ul class="list">
                <li class="list__item list__item--mb-23 list__item--with-arrow">
                    Monetize up to 30% more effectively than before </li>
                <li class="list__item list__item--mb-23 list__item--with-arrow">
                    Get paid weekly via <strong>Bitcoin</strong>, <strong>ePayService</strong>, <strong>Paxum</strong>, <strong>PayPal</strong>, <strong>USDT</strong>, <strong>Webmoney</strong>, <strong>Wire Transfer</strong> </li>
                <li class="list__item list__item--mb-23 list__item--with-arrow">
                    Monetize web and mobile traffic. <strong>All niches are welcome!</strong> </li>
                <li class="list__item list__item--with-arrow">
                    Clean ads only </li>
            </ul>

            <a class="button button--bg-white button--rounded button--small button--w-180 button--top-60 js-hover-button" href="page/publishers.html">LEARN MORE</a>
            <div class="slope slope--bottom slope--green"></div>
        </div>
        <div class="s-cut__part s-cut__part--blue js-cut-section wow slideInRight" data-wow-delay="0.5s">
            <div class="slope slope--top slope--blue"></div>
            <h2 class="s-cut__title"><strong>Advertise</strong> your brand</h2>
            <ul class="list">
                <li class="list__item list__item--mb-23 list__item--with-arrow">
                    High quality unique traffic covering ALL GEO's! </li>
                <li class="list__item list__item--mb-23 list__item--with-arrow">
                    Deeper targeting than in other networks: <strong>Carriers</strong>, <strong>OS</strong>, <strong>Browser</strong>, <strong>Device</strong> and more. </li>
                <li class="list__item list__item--mb-23 list__item--with-arrow">
                    Own Adserver and RTB solution </li>
                <li class="list__item list__item--with-arrow">
                    All traffic scanned and verified </li>
            </ul>
            <a class="button button--bg-white button--rounded button--small button--w-180 button--top-60 js-hover-button" href="page/advertiser.html">LEARN MORE</a>
        </div>
    </section>

    <section class="s-units">
        <div class="inner">
            <h2 class="title title--uppercase">Our <span class="text--regular text--blue">Ad</span> Units</h2>
            <p class="paragraph light center">We provide best performing formats to match the latest industry and technology trends – choose your best fitting one or try them all!<a class="link" href="page/adformats.html"> View all our Ad Formats</a>:</p>
            <ul class="formats-list formats-list--blue m-t-30">
                <li class="formats-list__item">
                    <a class="formats-list__link" href="page/adformats.html#nativeads">Native Ads</a>
                </li>
                <li class="formats-list__item">
                    <a class="formats-list__link" href="page/adformats.html#videoads">Video Ads</a>
                </li>
                <li class="formats-list__item">
                    <a class="formats-list__link" href="page/adformats.html#pushnotifications">Push Notifications</a>
                </li>
                <li class="formats-list__item">
                    <a class="formats-list__link" href="page/adformats.html#pops">Pops</a>
                </li>
                <li class="formats-list__item">
                    <a class="formats-list__link" href="page/adformats.html#directlinks">Direct links</a>
                </li>
                <li class="formats-list__item">
                    <a class="formats-list__link" href="page/adformats.html#displaybanners">Display banners</a>
                </li>
            </ul>
        </div>
    </section>

    <div class="line"></div>

    <section class="s-join">
        <div class="inner">
            <h2 class="title title--l-margin">Ready to <a class="link link--blue link--bold" href="#">Join</a> Best Popunder Network?</h2>
            <div class="swiper-container">
                <ul class="logos owl-carousel owl-carousel--logos swiper-wrapper js-slider" data-name="partners" data-type="logos" data-slides="5">
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/exoclick.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/exoclick@2x.webp 2x" alt="Exoclick">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/msales.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/msales@2x.webp 2x" alt="mSales">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/ytz.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/ytz@2x.webp 2x" alt="YTZ">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/nextad.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/nextad@2x.webp 2x" alt="NextAd">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/golden-goose.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/golden-goose@2x.webp 2x" alt="Golden-goose">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/adsimilis.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/adsimilis@2x.webp 2x" alt="AdSimilis">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/dafabet.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/dafabet@2x.webp 2x" alt="Dafabet">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/zenads.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/zenads@2x.webp 2x" alt="Zenads">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/1xbet.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/1xbet@2x.webp 2x" alt="1-xbet">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/favbet.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/favbet@2x.webp 2x" alt="Favbet">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/shakes-mobi.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/shakes-mobi@2x.webp 2x" alt="Shakes.mobi">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/billymob.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/billymob@2x.webp 2x" alt="billymob">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/mobvista.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/mobvista@2x.webp 2x" alt="Mobvista">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/adsbays.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/adsbays@2x.webp 2x" alt="Adsbays">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/avazu.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/avazu@2x.webp 2x" alt="Avazu">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/gamespipe.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/gamespipe@2x.webp 2x" alt="Gamespipe">
                    </li>
                    <li class="logos__item swiper-slide">
                        <img class="logos__image lazyload" loading="lazy" data-src="{{ asset('contents/website') }}/assets/images/logos/webp/cpamatica.webp" data-srcset="{{ asset('contents/website') }}/assets/images/logos/2x/webp/cpamatica@2x.webp 2x" alt="CPAmatica">
                    </li>
                </ul>
            </div>
            <a class="button button--rounded button--gradient button--w-340 button--centered button--top-60 wow zoomIn" href="#" data-wow-delay="0.5s">
                <span>Join <span class="text--regular">HilltopAds</span>!</span>
            </a>
        </div>
    </section>

    <section class="s-contacts">
        <div class="inner">
            <h2 class="title title--white title--small">Have Questions?<strong>Contact us!</strong></h2>

            <ul class="list">
                <li class="list__item list__item--inline list__item--3 wow rotateInDownLeft" data-wow-delay="0.2s">
                    <div class="s-contacts__subtitle">Text Us</div>

                    <ul class="list">
                        <li class="list__item list__item--mb-23">
                            <a class="s-contacts__item s-contacts__item--mail" href="mailto:support@hilltopads.com">
                                <span>support@hilltopads.com</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="list__item list__item--inline list__item--3 wow rotateInDownLeft" data-wow-delay="0.6s">
                    <div class="s-contacts__subtitle">Call Us</div>

                    <ul class="list">
                        <li class="list__item list__item--mb-23">
                            <a class="s-contacts__item s-contacts__item--us" href="skype:+19092975909?call">
                                <span>
                                    <span class="text--gray">USA</span> +1 (909) 297-5909
                                </span>
                            </a>
                        </li>
                        <li class="list__item list__item--mb-23">
                            <a class="s-contacts__item s-contacts__item--uk" href="skype:+442032875909?call">
                                <span>
                                    <span class="text--gray">UK</span> +44 (20) 3287-5909
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="list__item list__item--inline list__item--3 wow rotateInDownLeft" data-wow-delay="1s">
                    <div class="s-contacts__subtitle">Send us a message from the site</div>

                    <a class="button button--b-blue button--color-white button--rounded button--small button--message button--dark-active js-show-popup feedbackRequest" href="#" data-popup="sendMessage" data-request-type="send_message">send message</a>
                </li>
            </ul>
        </div>
    </section>


    <div class="texture texture--2"></div>
@endsection
