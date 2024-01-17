// ********** Owl carousel ***************//
var owl = $(".owl-carousel-main");
owl.owlCarousel({
    loop: true,
    nav: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 2000,
    animateOut: 'fadeOut',
    responsive: {
        0: {
            items: 1,
        },
    },
});
owl.on("mousewheel", ".owl-stage", function (e) {
    if (e.deltaY > 0) {
        owl.trigger("next.owl");
    } else {
        owl.trigger("prev.owl");
    }
    e.preventDefault();
});
owl.on('changed.owl.carousel', function (event) {
    carousel_index = event.page.index;
    var a = $(".main-carousel-col").find('[data-para-index');

    $(a).each(function (i, e) {
        // console.log($(this).attr('data-para-index'));
        if (carousel_index == $(this).attr('data-para-index')) {
            $(this).css('color', 'green')
            $(this).prev().find('i').addClass('text-success')
            $(this).addClass('font-EurostileBold')
        } else {
            $(this).css('color', '')
            $(this).prev().find('i').removeClass('text-success')
            $(this).removeClass('font-EurostileBold')
        }
    })
})


// ********** video play button ***************//

$(".video-play-btn").on('click', function () {
    $(".my-modal-container").addClass('show');
})
$(".close-btn").on('click', function () {
    $(".my-modal-container").removeClass('show');
    $('iframe').attr('src', $('iframe').attr('src'));
});


// ********** Career Tour Privider ***************//

var owl2 = $(".owl-carousel-career");
owl2.owlCarousel({
    loop: true,
    nav: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 2000,
    URLhashListener: true,
    animateOut: 'fadeOut',
    stagePadding: 0,
    singleItem: true,
    responsive: {
        0: {
            items: 1,
        },
    },
});
owl2.on("mousewheel", ".owl-stage", function (e) {
    if (e.deltaY > 0) {
        owl2.trigger("next.owl");
    } else {
        owl2.trigger("prev.owl");
    }
    e.preventDefault();
});

owl2.on('changed.owl.carousel', function (event) {
    carousel_index = event.page.index;
    var a = $(".benefit-col").find('[data-para-index');

    $(a).each(function (i, e) {
        // console.log($(this).attr('data-para-index'));
        if (carousel_index == $(this).attr('data-para-index')) {
            $(this).css('color', 'orange')
            $(this).prev().find('i').addClass('text-warning')
            $(this).addClass('font-EurostileBold')
        } else {
            $(this).css('color', '')
            $(this).prev().find('i').removeClass('text-warning')
            $(this).removeClass('font-EurostileBold')
        }
    })
})
// ********************* //

var owl3 = $(".owl-carousel-question");
owl3.owlCarousel({
    loop: true,
    nav: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 2000,
    URLhashListener: true,
    animateOut: 'fadeOut',
    stagePadding: 0,
    singleItem: true,
    responsive: {
        0: {
            items: 1,
        },
    },
});
owl3.on("mousewheel", ".owl-stage", function (e) {
    if (e.deltaY > 0) {
        owl3.trigger("next.owl");
    } else {
        owl3.trigger("prev.owl");
    }
    e.preventDefault();
});

owl3.on('changed.owl.carousel', function (event) {
    carousel_index = event.page.index;
    var a = $(".question-col").find('[data-para-index');

    $(a).each(function (i, e) {
        // console.log($(this).attr('data-para-index'));
        if (carousel_index == $(this).attr('data-para-index')) {
            $(this).css('color', 'orange')
            $(this).prev().find('i').addClass('text-warning')
            $(this).addClass('font-EurostileBold')
        } else {
            $(this).css('color', '')
            $(this).prev().find('i').removeClass('text-warning')
            $(this).removeClass('font-EurostileBold')
        }
    })
})
// ********** FAQ Section ***************//

$('.faq-card .card-header').on('click', function () {
    // $('a', this).toggleClass('text-light', '');
    // $('a', this).toggleClass('border-light', '');
    // $($('i', this)).toggleClass('fa-arrow-up', 'fa-arrow-down');
    if ($('.collapse').hasClass('show')) {
        // $('.faq-card a').removeClass('text-light');
        // $('.faq-card a').removeClass('border-light');
        // $('.faq-card a i').removeClass('fa-arrow-up');
        $('.collapse').collapse('hide');
    }
    // $('.collapse').collapse('hide');
})


