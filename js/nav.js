/*====================================
=            ON DOM READY            =
====================================*/
(function() {
    ('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });
});


/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/
function toggleNav() {
    if (('#siteWrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        ('#siteWrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        ('#siteWrapper').addClass('show-nav');
    }

    //$('#site-wrapper').toggleClass('show-nav');
}
