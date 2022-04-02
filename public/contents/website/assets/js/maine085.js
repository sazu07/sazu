
//start remove connection three.js and animation.js on mobile
if(window.screen.width>765) {

	var scriptLibraryThreeJs = document.createElement('script');
	var scriptAnimationJs = document.createElement('script');

	scriptLibraryThreeJs.src = '/hilltopads.com_files/js/libs/three.js';
	scriptAnimationJs.src = '/hilltopads.com_files/js/animation.js';

	scriptLibraryThreeJs.defer = true;
	scriptAnimationJs.defer = true;
	scriptLibraryThreeJs.async = false;
	scriptAnimationJs.async = false;

	document.body.append(scriptLibraryThreeJs);
	document.body.append(scriptAnimationJs);

}

//end remove connection three.js and animation.js on mobile

var sliders = {};
var $sliders = $('.js-slider');

function initUnitsSlider($slider) {
    $slider.owlCarousel({
        autoplay: true,
        dots: true,
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            600: {
                mouseDrag: false
            }
        }
    });

    $('.js-units-item').on('click', function () {
        $slider.trigger('next.owl.carousel');
    })
}

function initLogosSlider($slider, name, wWidth, slides) {
    if (!sliders[name]) {
        sliders[name] = {}
    }

    if (wWidth >= 1024) {
        if (sliders[name].type === 'owl') return;

        if (sliders[name].type === 'swiper') {
            sliders[name].slider.destroy(true, true)
        }

        sliders[name].type = 'owl';
        sliders[name].slider = $slider.owlCarousel({
            autoplay: true,
            dots: false,
            items: parseInt(slides),
            loop: true,
            margin: 10,
            slideBy: parseInt(slides)
        });
    } else {
        if (sliders[name].type === 'swiper') return;

        if (sliders[name].type === 'owl') {
            sliders[name].slider.owlCarousel('destroy')
        }

        sliders[name].type = 'swiper';
        sliders[name].slider = new Swiper($slider[0].parentNode, {
            autoplay: 3000,
            direction: 'vertical',
            slidesPerGroup: 3,
            slidesPerView: 3
        });
    }
}

function initTitlesSlider($slider, name) {
    if (!sliders[name]) {
        sliders[name] = {}
    }

    sliders[name].slider = $slider.owlCarousel({
        autoplay: true,
        dots: false,
        items: 1,
        loop: true,
        margin: 5,
        slideBy: 1
    });
}

function initSliders() {
    var wWidth = $(window).width();

    $sliders.each(function () {
        var $slider = $(this);

        var sliderType = $slider.attr('data-type'),
            sliderName = $slider.attr('data-name'),
            slides = $slider.attr('data-slides');

        switch (sliderType) {
            case 'units':
                initUnitsSlider($slider);
                break;

            case 'logos':
                initLogosSlider($slider, sliderName, wWidth, slides);
                break;

            case 'titles':
                initTitlesSlider($slider);
                break;
        }
    });
}

initSliders();

$(window).on('resize', initSliders);

$('.js-cut-section').on('mouseover', function () {
    $(this).find('.js-hover-button').addClass('button--hovered')
}).on('mouseout', function () {
    $(this).find('.js-hover-button').removeClass('button--hovered')
});

// faq

$('.js-faq__title').on('click', function (ev) {
    ev.preventDefault();

    var $faqItem = $(this).closest('.js-faq__item');

    $('.js-faq__item').each(function () {
        var $this = $(this);

        if (!$this.is($faqItem)) $this.removeClass('howto-faq__item--active');
    });

    $faqItem.toggleClass('howto-faq__item--active');
});

// slots

var slotSliders = [];

$('.slots__slot .swiper-container').each(function (index, element) {
    slotSliders[index] = new Swiper(element, {
        direction: 'vertical',
        slidesPerView: 3
    });
});

function randomSlots() {
    $(slotSliders).each(function (index, element) {
        var slotIndex = Math.floor(Math.random() * (element.slides.length - 1));
        element.slideTo(slotIndex, 500);
    });
}

var slotInterval = setInterval(randomSlots, 1500);



/**
 * Legal tab navigation
 */

var tabNavButtons = $('.js-show-content');

function chooseTab() {
    var hash = window.location.hash;

    if ($(hash).length === 0)
        hash = $('.js-show-content:eq(0)').attr('href');

    if (!hash || hash === '#') {
        var activeLink = $('.js-show-content:eq(0)'),
            activeTab = $('.js-text-content:eq(0)');
    } else {
        activeLink = $('.js-show-content[href="' + hash + '"]');
        activeTab = $(hash);
    }

    $('.js-text-content').hide();
    activeTab.show();
    tabNavButtons.removeClass('cont-nav__link--active');
    activeLink.addClass('cont-nav__link--active');
}

if (tabNavButtons.length > 0) {
    $(window).on('load hashchange', chooseTab);
}



/**
 * Popup
 */

function showPopup(id) {
    popupVisible = true;
    $('#' + id).show();
    $popupOverlay.addClass('overlay--visible');
}

function hidePopup() {
    popupVisible = false;
    $popupOverlay.removeClass('overlay--visible');
    $popups.hide();
    $successMessage.closest('.popup-success').removeClass('popup-success');
}

var popupVisible = false,
    $popupOverlay = $('#popupOverlay'),
    $popups = $('js-popup'),
    $showPopupButton = $('.js-show-popup'),
    $closePopupButton = $('.js-close-popup'),
    $successMessage = $('#successMessage');

$showPopupButton.on('click', function (ev) {
    ev.preventDefault();
    var popupId = $(this).attr('data-popup');
    showPopup(popupId);
});
$closePopupButton.on('click', function (ev) {
    ev.preventDefault();
    hidePopup();
});
$popupOverlay.on('click', function (ev) {
    if ($(ev.target).closest('.js-popup').length === 0) hidePopup()
});
$(window).on('keydown', function (ev) {
    if (popupVisible && ev.keyCode === 27) hidePopup();
});

$(document).on('click', '.feedbackRequest', function () {
    var jqElement = $(this);
    var requestType = jqElement.data('requestType');
    var jqFeedbackBlock = $('#sendMessage');

    if (jqFeedbackBlock.length === 1) {
        var jqRequestType = jqFeedbackBlock.find('#requestType');

        if (jqRequestType.length === 1) {
            jqRequestType.val(requestType);
        }
    }
});


/**
 * Forms
 */

function sendForm(form) {
    if (form.data('ready') === false) return alert('You made too many clicks. Please, try to send your message again.');

    var options = {};
    if (form.data('ajax-options')) {
        Object.assign(options, form.data('ajax-options'));
    }

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        formReadyTimeout: null,
        beforeSend: function () {
            this.formNotReady();
            $('.ajax-errors').empty().siblings().remove();
        },
        success: function (data) {
            switch (data.status) {
                case 'success':
                    setTimeout(function() { $('#message-close').focus(); }, 10);
                    $('html, body').scrollTop(0);
                    form.closest('.js-popup-success').addClass('popup-success');
                    this.addMessages(data.messages);
                    if (options.onSuccess) window[options.onSuccess].call(this, form, data);
                    if (data.redirect) {
                        document.location.href = data.redirect;
                        return;
                    }
                    break;
                case 'error':
                    this.addErrors(data.errors);
	                if (typeof grecaptcha !== 'undefined') {
		                var grecaptchaLength = $('.g-recaptcha').length;
		                for (var i = 0; i < grecaptchaLength; i++) {
							grecaptcha.reset(i);
		                }
	                }
                    break;
                default:
                    this.addErrors();
            }
            if (typeof grecaptcha !== 'undefined') grecaptcha.reset();
            this.afterSend();
        },
        error: function () {
            this.addErrors();
            this.afterSend();
        },
        afterSend: function () {
            this.formReady();
        },
        formReady: function () {
            form.data('ready', true);
            clearTimeout(this.formReadyTimeout);
            form.removeClass('submitting');
        },
        formNotReady: function () {
            form.data('ready', false);
            var self = this;
            this.formReadyTimeout = setTimeout(function() {
                self.tooLong();
            }, 1000 * 30);
            form.addClass('submitting');
        },
        addErrors: function (errors) {
            if (typeof errors !== 'undefined' && Object.keys(errors).length > 0) {
                $.each(errors, function(key, errorMessages) {
                    if (key === 'captcha') {
                        var $gRecaptcha = $('.g-recaptcha');
                        if (! $gRecaptcha.parent().is(':visible')) {
                            $gRecaptcha.parent().show();
                        }
                    }

                    $.each(errorMessages, function(messageKey, messageText) {
                        form.find('.ajax-errors').clone().removeClass('ajax-errors').text(messageText).appendTo(form.find('.ajax-field-errors'));
                    });
                });
            } else {
                form.find('.ajax-errors').text('Unknown error. Please, contact us: ts@hilltopads.com');
            }
        },
        addMessages: function (messages) {
            if (typeof messages !== 'undefined' && messages.length > 0) {
                $.each(messages, function(messageIndex, messageText) {
                    var ajaxMessages = form.closest('.s-popup').find('.ajax-messages');
                    ajaxMessages.find('.ajax-message').clone().removeClass('ajax-message').text(messageText).prependTo(ajaxMessages);
                });
            }
        },
        tooLong: function () {
            this.formReady();
            this.addErrors([{'toolong': 'Failed to send a message. Please check your connection and try again or contact us: ts@hilltopads.com'}]);
        }
    });
}

var $forms = $('.js-form');

$forms.parsley();
$forms.each(function () {
    var jForm = $(this);
    jForm.on('submit', function (ev) {
        ev.preventDefault();
        jForm.parsley().whenValidate().done(function () {
            sendForm(jForm);
        });
    });
});



// Selects

$('.js-select').each(function () {
    $(this).select2({
        escapeMarkup: function (text) { return text; },
        minimumResultsForSearch: -1
    });
});

function checkPublisherGuidelines() {
    if ($('#signup-field-who select').val() === 'publisher') {
        $('#signup-publisher-guidelines').show();
    } else {
        $('#signup-publisher-guidelines').hide();
    }
}

checkPublisherGuidelines();

//Traffic source selector
$('#signup-field-who').on('select2:select', function (e) {
    var data = e.params.data;
    var isVisible = data.id && data.id == 'publisher';
    var $element = $('#signup-field-traffic');
    var hidden = $element.hasClass('hidden');

    if (isVisible && hidden) {
        $element.removeClass('hidden');
    } else if (!isVisible && !hidden) {
        $element.addClass('hidden');
    }

    checkPublisherGuidelines();
});

// nav

var $toggleNav = $('.js-toggle-nav'),
    $headerNav = $('#headerNav');

$toggleNav.on('click', function () {
    $(this).toggleClass('hamburger--rotated');
    $headerNav.toggleClass('header__right--visible');
});

// wow

function initWow() {
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }
}

initWow();


// function get value by name of Cookie
function getCookie(name) {
    var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

var domainHost = document.domain;

function extractDomain(url) {
    var domain;
    //find & remove protocol (http, ftp, etc.) and get domain
    if (url.indexOf("://") > -1) {
        domain = url.split('/')[2];
    } else {
        domain = url.split('/')[0];
    }
    //find & remove port number
    domain = domain.split(':')[0];
return domain;
}

function getRootHostName(url) {
    var parts = extractDomain(url).split('.');
    var partsLength = parts.length - 2;
    //parts.length-2 assuming root hostname is of type abc.xyz
    for (i = 0; i < partsLength; i++) {
        parts.shift(); //remove sub-domains one by one
    }
    var rootDomain = parts.join('.');
    return rootDomain;
}

$('[data-notice-id]').each(function() {
    var notice = $(this),
        noticeId = notice.attr('data-notice-id');
    notice.find('.js-notice-close').on('click', function() {
        notice.hide();
        document.cookie = "noticeId=true; domain="+ getRootHostName(domainHost) +"; path=/; expires=";
    });

    notice.find('.notice__icon .close').on('click', function() {
        notice.hide();
        document.cookie = "noticeId=true; domain="+ getRootHostName(domainHost) +"; path=/; expires=";
    });

    try {
        if (getCookie('noticeId')) notice.hide();
        else notice.show();
    } catch (error) {
        notice.show();
        console.info(error);
    }
});



// views password sign user

if (document.querySelector('.form__views-pwd-for-input') !== null) {

	var btnPwdViewToggle = document.querySelector('.form__views-pwd-for-input');
	var inputViewPwd = document.querySelector('.input__views-pwd');

	btnPwdViewToggle.addEventListener('click', function () {
		if (inputViewPwd.getAttribute("type") === "password") {
			inputViewPwd.setAttribute("type", "text");
			btnPwdViewToggle.classList.add('_active');
		} else {
			inputViewPwd.setAttribute("type", "password");
			btnPwdViewToggle.classList.remove('_active');
		}
	});
};

// end views password sign user

// add recaptcha on click

var btnCaptchaObject = document.querySelectorAll('.feedbackRequest');

btnCaptchaObject.forEach(function (element){
		element.addEventListener("click", function addEvent() {
			if(document.head.querySelector('#captchaId') === null) {

				var captchaObject = document.createElement('script');

				captchaObject.src = 'https://www.google.com/recaptcha/api.js';
				captchaObject.id = "captchaId";

				document.head.appendChild(captchaObject);
				}
			}, false)
});

// end add recaptcha on click

(async () => {
	if ('loading' in HTMLImageElement.prototype) {
		const images = document.querySelectorAll("img.lazyload");
		images.forEach(img => {
			img.src = img.dataset.src;
			img.srcset = img.dataset.srcset;
		});
	} else {
		// Динамический импорт библиотеки LazySizes
		const lazySizesLib = await import('/hilltopads.com_files/js/libs/lazysizes.min.js');
		// Инициализация LazySizes (чтение data-src & class=lazyload)
		lazySizes.init(); // lazySizes применяется при обработке изображений, находящихся на странице.
	}
})();



const testAd     = document.createElement('div');
testAd.innerHTML = '&nbsp;';
testAd.className = 'ad-wrapper ' +
	// AdBlock for Safari without safe ad
	'youradhere ';
// Opera Mini AdBlocker iOS, Opera AdBlocker
testAd.setAttribute('ad-id', 'googlead');
// UC Browser iOS, Opera AdBlocker (duplicates)
testAd.id                  = 'div-gpt-ad-123456789-0';
testAd.style.position      = 'fixed';
testAd.style.top           = '200%';
testAd.style.pointerEvents = 'none';
document.body.appendChild(testAd);
window.setTimeout(function() {
	if (!!testAd && testAd.offsetHeight === 0) {
		$('.adblock-notification').removeClass('hidden');
	}
	testAd.remove();
}, 100);

