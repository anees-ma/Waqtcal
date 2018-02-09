// JavaScript Document

var $ = jQuery.noConflict();

// Customs tree menu script
$(".dropdown-tree-a").click(function() { //use a class, since your ID gets mangled
    $(this).parent('.dropdown-tree').toggleClass("open-tree active"); //add the class to the clicked element
});


// NEW TREE MENU


$(function() {
    var navTree = $('.nav-tree li:has(ul)');
    var navTreeA = navTree.addClass('parent_li').find(' > a');

    navTreeA.each(function() {

        if ($(this).hasClass("child-has-open")) {

        } else {
            $(this).addClass("child-has-close");
            var navTreeAchildren = $(this).parent('li.parent_li').find(' > ul > li');
            navTreeAchildren.hide();
        }

    });


    $('.nav-tree li.parent_li > a').on('click', function(e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).addClass('child-has-close').removeClass('child-has-open');

        } else {
            children.show('fast');
            $(this).addClass('child-has-open').removeClass('child-has-close');
        }
        e.stopPropagation();
    });
});

// slideout navigation


$(document).ready(function() {

    $(".open-menu").click(function() {



        //            if ($(".menu").addClass("mob-menu")) {

        $(".open-menu").css({

            display: "none"

        });

        $(".close-menu").css({

            display: "block"

        });

        $("body").css("overflow", "hidden");

        $(".card-bar").css({

            display: "block"

        });

        $(".card-bar2").css({

            display: "none"

        });

        $(".menu").css({

            left: "0px"

        });

        $(".topHeader").css({

            right: "-242px"

        });



        /*}*/

    });



    $(".close-menu").click(function() {

        /*if ($(".menu").removeClass("mob-menu")) {*/

        $(".close-menu").css({

            display: "none"

        });

        $(".open-menu").css({

            display: "block"

        });

        $("body").css("overflow", "scroll");

        /* $("main").css({

         left: "0px",

         position: "inherit"

         });*/

        $(".menu").css({

            left: "-265px"

        });

        $(".topHeader").css({

            right: "-242px"

        });



        /* }*/

    });



});
