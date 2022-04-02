@extends("layouts.website")
@section('contents')


<section class="s-first s-first--bg-gradient s-first--formats">
        <div class="inner inner--w-1080 inner--top-200 inner--top-200-mobile-100 center">
            <h2 class="s-first__title">Ad Formats</h2>
            <p class="s-first__subtitle s-first__subtitle--large">HilltopAds constantly updates its ad formats inventory while following the new trends in digital advertising. We offer several high converting advertising units that comply with the latest BetterAds policy and act as a perfect AdSense alternative.
            </p>
            <ul class="formats-list">
                <li class="formats-list__item">
                    <a href="#pushnotifications" class="formats-list__link">Push Notifications</a>
                </li>
                <li class="formats-list__item">
                    <a href="#videoads" class="formats-list__link">Video Ads</a>
                </li>
                <li class="formats-list__item">
                    <a href="#nativeads" class="formats-list__link">Native Ads</a>
                </li>
                <li class="formats-list__item">
                    <a href="#pops" class="formats-list__link">Pops</a>
                </li>
                <li class="formats-list__item">
                    <a href="#directlinks" class="formats-list__link">Direct links</a>
                </li>
                <li class="formats-list__item">
                    <a href="#displaybanners" class="formats-list__link">Display banners</a>
                </li>
            </ul>
        </div>
    </section>

    <div class="texture texture--1"></div>

    <section class="s-format wow fadeInRight">
        <div class="s-format__hash" id="pushnotifications"></div>
        <div class="inner">
            <h2 class="s-format__title title title--uppercase m-b-40">In-Page Push notifications</h2>
            <p class="paragraph light center">New but already successful digital ad format is added to our inventory. Push notification provide high conversion by being displayed as alerts.</p>
            <div class="s-format__columns s-format__columns--mobile-column m-t-50">
                <div class="s-format__column">
                    <p class="s-format__h3">Despite being a brand new ad format it has a lot of benefits that could amp up your ad campaign in no time:</p>
                    <ul class="s-format__list light">
                        <li class="s-format__list-item">Real traffic with user's consent to receive push notifications.</li>
                        <li class="s-format__list-item">Native to website content and users interest.</li>
                        <li class="s-format__list-item">Ads delivered instantly to any device and can be modified.</li>
                        <li class="s-format__list-item">Highest CTR because push notifications displayed when user is not browsing apps or website.</li>
                    </ul>
                </div>
                <div class="s-format__column center">
                    <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/pushes.svg" alt="Push notifications format at HilltopAds">
                </div>
            </div>
        </div>
    </section>

    <div class="line line--s-format"></div>

    <section class="s-format wow fadeInLeft">
        <div class="s-format__hash" id="videoads"></div>
        <div class="inner">

            <h2 class="s-format__title title title--uppercase">VAST/VPAID Video ads</h2>
            <p class="paragraph light center">Popular among video platforms, engaging and relevant pre-rolls and in-video ads can blend into the video content for easy monetisation.</p>

            <div class="s-format__columns s-format__columns--mobile-column m-t-50">
                <div class="s-format__column center">
                    <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/videoads.svg" alt="Video ad format at HilltopAds">
                </div>
                <div class="s-format__column">
                    <p class="paragraph light">Videos and games are the main online entertainment niches so take advantage of these platforms on desktop and mobile devices to advertise your products or monetize your video content. Choose between pre-roll and in-video ads to create
                        high converting campaigns and earn profit.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="line line--s-format"></div>

    <section class="s-format wow fadeInRight">
        <div class="s-format__hash" id="nativeads"></div>
        <div class="inner">

            <h2 class="s-format__title title title--uppercase"><strong class="text--blue">NEW!</strong> Native Ads</h2>
            <p class="paragraph light center">Take advantage of our Native Ads builder that helps to place ads on the website that completely blend with its design. This format is very effective for building audience engagement for advertisers and publishers.</p>
            <div class="s-format__columns s-format__columns--mobile-column m-t-50">
                <div class="s-format__column">
                    <h3 class="s-format__h3">Why should you try Native Ads at HilltopAds?</h3>
                    <ul class="s-format__list light">
                        <li class="s-format__list-item">Generate high revenue with ads that blend into the website</li>
                        <li class="s-format__list-item">Easy to set up with the help of Personal Manager</li>
                        <li class="s-format__list-item">Native Ads click rates are 8 times higher than regular banner</li>
                        <li class="s-format__list-item">Uses a mix of images and text</li>
                        <li class="s-format__list-item">Responsive designs for all devices (mobile, desktop, tablet)</li>
                    </ul>
                </div>
                <div class="s-format__column">
                    <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/trynative.svg" alt="Native ad format at HilltopAds">
                </div>
            </div>
        </div>
    </section>

    <div class="line"></div>

    <section class="s-format wow fadeInLeft">
        <div class="s-format__hash" id="pops"></div>
        <div class="inner">
            <h2 class="s-format__title title title--uppercase">Pops</h2>
            <p class="paragraph light center">Choose your pop advertising format for best monetization of big traffic volumes sites.</p>

            <div class="s-format__columns s-format__columns--mobile-column m-t-50">
                <div class="s-format__column">
                    <div class="s-format__tiles">
                        <div class="s-format__tile">
                            <div class="s-format__tile-image">
                                <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/pops-popunder.svg" alt="Popunder ad format at HilltopAds">
                            </div>
                            <div class="s-format__tile-title title--uppercase">Popunder</div>
                        </div>
                        <div class="s-format__tile">
                            <div class="s-format__tile-image">
                                <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/pops-popup.svg" alt="Popup ad format at HilltopAds" width="160">
                            </div>
                            <div class="s-format__tile-title title--uppercase">Popup</div>
                        </div>
                    </div>
                </div>
                <div class="s-format__column s-format__column--70">
                    <p class="paragraph light">CPM based, this ad format is the most popular among affiliates because of the higher payouts than traditional display ads. Popunder or site-under landing page appear hidden behind the main browsing window and is shown after the browser
                        window is closed or minimized. Popup ads are served primarily on mobile devices whereas popunders are for desktop.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="line line--s-format"></div>

    <section class="s-format wow fadeInRight">
        <div class="s-format__hash" id="directlinks"></div>
        <div class="inner">
            <h2 class="s-format__title title title--uppercase">Direct links</h2>
            <p class="paragraph light center">Direct links is one of the most flexible ad format as it can be used anywhere on the website. When code is provided, it fits best into the website's content and used with Call to Action buttons, 404 pages and text links.</p>
            <div class="s-format__columns s-format__columns--mobile-column m-t-50">
                <div class="s-format__column s-format__column--pad-right">
                    <p class="paragraph light">Advertisers who are looking for high volume of cheap traffic use direct links to boost their sites' traffic. For publishers, this format is beneficial to be used as a blind link as it is CPC based.</p>
                    <p class="paragraph light">By using your own creative methods or redirects, you make yourself available for websites of brands and advertisers that are willing to pay premium prices.</p>
                </div>
                <div class="s-format__column">
                    <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/direct-links.svg" alt="Direct links ad format at HilltopAds">
                </div>
            </div>
        </div>
    </section>

    <div class="line line--s-format"></div>

    <section class="s-format wow fadeInLeft">
        <div class="s-format__hash" id="displaybanners"></div>
        <div class="inner">
            <h2 class="s-format__title title title--uppercase">Display banners</h2>
            <p class="paragraph light center">Pick from top converting banner sizes for desktop and mobile devices. HilltopAds supports iFrame for HTML banners as well.</p>
            <div class="s-format__columns s-format__columns--mobile-column m-t-50">
                <div class="s-format__column center">
                    <img class="s-format__image" src="{{ asset('contents/website') }}/assets/images/display-banners.svg" alt="Display banners ad format at HilltopAds">
                </div>
                <div class="s-format__column">
                    <ul class="s-format__sizes">
                        <li class="s-format__size">
                            <div class="s-format__size-icon">
                                <img src="{{ asset('contents/website') }}/assets/images/icon-desktop.svg" alt="" class="s-format__image">
                            </div>
                            <div class="s-format__size-title">Desktop</div>
                            <div class="s-format__size-format">160x160</div>
                            <div class="s-format__size-format">300x250</div>
                            <div class="s-format__size-format">728x90</div>
                        </li>
                        <li class="s-format__size">
                            <div class="s-format__size-icon">
                                <img src="{{ asset('contents/website') }}/assets/images/icon-mobile.svg" alt="" class="s-format__image">
                            </div>
                            <div class="s-format__size-title">Mobile</div>
                            <div class="s-format__size-format">300x50</div>
                            <div class="s-format__size-format">300x250</div>
                            <div class="s-format__size-format">300x100</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="line line--s-format"></div>

    <div class="s-format s-format--footer">
        <div class="inner">
            <a class="button button--rounded button--bg-blue button--w-340 button--centered wow zoomIn" href="https://user.hilltopads.com/signup" data-wow-delay="0.4s">
                <span>Join <span class="text--regular">HilltopAds!</span></span>
            </a>
        </div>
    </div>

    <section class="s-dark">
        <div class="slope slope--top slope--dark slope--large"></div>
    </section>


    <div class="texture texture--2"></div>
@endsection
