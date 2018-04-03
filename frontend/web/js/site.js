$('document').ready( function() {
    /* ------------------------------------------------- */
    /* -------------------- navbar --------------------- */
    /* ------------------------------------------------- */
    var firstSection = $('section:first').offset().top;
    var navbar = $('.navbar');
    $(window).scroll(function () {
        if ($(this).scrollTop() > firstSection && !navbar.hasClass('fixed-navbar')) {
            navbar.addClass('fixed-navbar');
        } else if($(this).scrollTop() < firstSection && navbar.hasClass('fixed-navbar')) {
            navbar.removeClass('fixed-navbar');
        }
    });

    /* ------------------------------------------------- */
    /* ---------------- menu dropdowns ----------------- */
    /* ------------------------------------------------- */
    var dropdown = $('.menu__dropdown');
    var dropdownLists = $('.menu__dropdown-list');
    dropdown.on('click', function(e) {
        e.preventDefault();
        var dropdownListId = $(this).attr('href');
        var dropdownList = $(dropdownListId);

        if (!dropdownLists.hasClass('is-animating')) {
            if(!dropdownList.hasClass('is-shown')) {
                dropdownLists.each(function () {
                    if ($(this).hasClass('is-shown')) {
                        hideMenuDropDownList(dropdown, $(this));
                    }
                });
                showMenuDropDownList($(this), dropdownList);
            } else {
                hideMenuDropDownList(dropdown, dropdownList);
            }
        }
    });
    /* ------------------------------------------------- */
    /* --------------- animate positioning -------------- */
    /* ------------------------------------------------- */
    var url = window.location.pathname;
    if (url === '/index') {
        $('.inner-anchor').on('click', function (e) {
            e.preventDefault();
            var sectionId = $(this).attr('href').split('#')[1];
            var yCoor = $('#' + sectionId).offset().top;
            var parent = $(this).parent();
            $('html, body').stop().animate({scrollTop: yCoor}, 1000);

            if (parent.hasClass('menu__dropdown-list')) {
                hideMenuDropDownList(dropdown, parent);
            }
        });
    }

    /* ------------------------------------------------- */
    /* --------------- learn more button --------------- */
    /* ------------------------------------------------- */
    $('#learn-more-btn').on('click', function (e) {
        e.preventDefault();
        $('html, body').stop().animate({scrollTop: firstSection}, 1000);
    });

} );

function showMenuDropDownList (dropdown, dropdownList) {
    dropdown.addClass('active');
    dropdownList.addClass('is-animating').addClass('is-shown').animate({
        "top" : "75",
        "opacity" : "1"
    }, 300, function () {
        $(this).removeClass('is-animating');
    });
}

function hideMenuDropDownList (dropdown, dropdownList) {
    dropdown.removeClass('active');
    dropdownList.addClass('is-animating').animate({
        "top" : "115",
        "opacity" : "0"
    }, 300, function() {
        $(this).removeClass('is-shown').removeClass('is-animating');
    });
}