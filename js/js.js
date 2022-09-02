$('.nav-link').click(function (e) {
    e.preventDefault;
    var lien = $(this);
    var sectionID = lien.attr('href');
    var positionSectionTop = $(sectionID).offset().top;
    $('html,body').animate({
        scrollTop: positionSectionTop
    }, 1000, 'swing');
});

var headerMince = false;
$(window).scroll(function () {
    var y_position = window.pageYoffset;
    var y_menu = 150;
    if (y_position > y_menu && !headerMince) {
        $('#main-header').addClass('headerMince');
        headerMince = true;
    } else if (y_position < y_menu && headerMince) {
        $('#main-header').removeClass('headerMince');
        headerMince = false;
    }

})

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

$('.nav-link').click(function (e) {
    e.preventDefault;
    var lien = $(this);
    var sectionID = lien.attr('href');
    var positionSectionTop = $(sectionID).offset().top;
    $('html, body').animate({
        scrollTop: positionSectionTop
    }, 1000, 'swing');
});

var headerMince = false;
$(window).scroll(function () {
    var y_position = window.pageYOffset;
    var y_menu = 150;
    if (y_position > y_menu && !headerMince) {
        $('#main-header').addClass("headerMince");
        headerMince = true;
    } else if (y_position < y_menu && headerMince) {
        $('#main-header').removeClass("headerMince");
        headerMince = false;
    }
})


var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else
        for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener("click", function () {
            this.classList.toggle("is-active");
        }, false);
    });
}

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    } /* Adapté de ceci: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_mobile_navbar */
}

window.addEventListener("DOMContentLoaded", init, false);

function init() {
    document.getElementById("monForm").addEventListener('submit', valider, false);

}