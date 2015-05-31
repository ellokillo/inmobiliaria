

$(function() {
    var $menu = $('#ldd_menu');
    $menu.children('li').each(function() {
        var $this = $(this);
        var $span = $this.children('span');
        $span.data('width', $span.width());

        $this.bind('mouseenter', function() {
            $menu.find('.ldd_submenu').stop(true, true).hide();
            $span.stop().animate({'width': '400px'}, 300, function() {
                $this.find('.ldd_submenu').slideDown(300);
            });
        }).bind('mouseleave', function() {
            $this.find('.ldd_submenu').stop(true, true).hide();
            $span.stop().animate({'width': $span.data('width') + 'px'}, 300);
        });
    });
});

$(function() {
    $('.idiomas').delay(2000).fadeIn(800);
    var $ac_background = $('#ac_background'),
            $ac_bgimage = $ac_background.find('.ac_bgimage'),
            $ac_loading = $ac_background.find('.ac_loading'),
            $ac_content = $('#ac_content'),
            $title = $ac_content.find('h1'),
            $menu = $ac_content.find('.ac_menu'),
            $mainNav = $menu.find('ul:first'),
            $menuItems = $mainNav.children('li'),
            totalItems = $menuItems.length,
            $ItemImages = new Array();
    $menuItems.each(function(i) {
        $ItemImages.push($(this).children('a:first').attr('href'));
    });
    $ItemImages.push($ac_bgimage.attr('src'));


    var Menu = (function() {
        var init = function() {
            loadPage();
            initWindowEvent();
        },
                loadPage = function() {
                    $ac_loading.show();//show loading status image
                    $.when(loadImages()).done(function() {
                        $.when(showBGImage()).done(function() {
                            //hide the loading status image
                            $ac_loading.hide();
                            $.when(slideOutMenu()).done(function() {
                                $.when(toggleMenuItems('up')).done(function() {
                                    initEventsSubMenu();
                                });
                            });
                        });
                    });
                },
                showBGImage = function() {
                    return $.Deferred(
                            function(dfd) {
                                //adjusts the dimensions of the image to fit the screen
                                adjustImageSize($ac_bgimage);
                                $ac_bgimage.fadeIn(1000, dfd.resolve);
                            }
                    ).promise();
                },
                slideOutMenu = function() {
                    /* calculate new width for the menu */
                    var new_w = $(window).width() - $title.outerWidth(true);
                    return $.Deferred(
                            function(dfd) {
                                //slides out the menu
                                $menu.stop()
                                        .animate({
                                            width: new_w + 'px'
                                        }, 700, dfd.resolve);
                            }
                    ).promise();
                },
                toggleMenuItems = function(dir) {
                    return $.Deferred(
                            function(dfd) {
                                $menuItems.each(function(i) {
                                    var $el_title = $(this).children('a:first'),
                                            marginTop, opacity, easing;
                                    if (dir === 'up') {
                                        marginTop = '0px';
                                        opacity = 1;
                                        easing = 'easeOutBack';
                                    }
                                    else if (dir === 'down') {
                                        marginTop = '60px';
                                        opacity = 0;
                                        easing = 'easeInBack';
                                    }
                                    $el_title.stop()
                                            .animate({
                                                marginTop: marginTop,
                                                opacity: opacity
                                            }, 200 + i * 200, easing, function() {
                                                if (i === totalItems - 1)
                                                    dfd.resolve();
                                            });
                                });
                            }
                    ).promise();
                },
                initEventsSubMenu = function() {
                    $menuItems.each(function(i) {
                        var $item = $(this), // the <li>
                                $el_title = $item.children('a:first'),
                                el_image = $el_title.attr('href'),
                                $sub_menu = $item.find('.ac_subitem'),
                                $ac_close = $sub_menu.find('.ac_close');
                        $el_title.bind('click.Menu', function(e) {
                            $.when(toggleMenuItems('down')).done(function() {
                                openSubMenu($item, $sub_menu, el_image);
                            });
                            return false;
                        });
                        $ac_close.bind('click.Menu', function(e) {
                            closeSubMenu($sub_menu);
                            return false;
                        });
                    });
                },
                openSubMenu = function($item, $sub_menu, el_image) {
                    $sub_menu.stop()
                            .animate({
                                height: '400px',
                                marginTop: '-200px'
                            }, 400, function() {
                                showItemImage(el_image);
                            });
                },
                showItemImage = function(source) {
                    if ($ac_bgimage.attr('src') === source)
                        return false;

                    var $itemImage = $('<img src="' + source + '" alt="Background" class="ac_bgimage"/>');
                    $itemImage.insertBefore($ac_bgimage);
                    adjustImageSize($itemImage);
                    $ac_bgimage.fadeOut(1500, function() {
                        $(this).remove();
                        $ac_bgimage = $itemImage;
                    });
                    $itemImage.fadeIn(1500);
                },
                closeSubMenu = function($sub_menu) {
                    $sub_menu.stop()
                            .animate({
                                height: '0px',
                                marginTop: '0px'
                            }, 400, function() {
                                //show items
                                toggleMenuItems('up');
                            });
                },
                initWindowEvent = function() {
                    $(window).bind('resize.Menu', function(e) {
                        adjustImageSize($ac_bgimage);
                        var new_w = $(window).width() - $title.outerWidth(true);
                        $menu.css('width', new_w + 'px');
                    });
                },
                adjustImageSize = function($img) {
                    var w_w = $(window).width(),
                            w_h = $(window).height(),
                            r_w = w_h / w_w,
                            i_w = $img.width(),
                            i_h = $img.height(),
                            r_i = i_h / i_w,
                            new_w, new_h,
                            new_left, new_top;

                    if (r_w > r_i) {
                        new_h = w_h;
                        new_w = w_h / r_i;
                    }
                    else {
                        new_h = w_w * r_i;
                        new_w = w_w;
                    }

                    $img.css({
                        width: new_w + 'px',
                        height: new_h + 'px',
                        left: (w_w - new_w) / 2 + 'px',
                        top: (w_h - new_h) / 2 + 'px'
                    });
                },
                /* preloads a set of images */
                loadImages = function() {
                    return $.Deferred(
                            function(dfd) {
                                var total_images = $ItemImages.length,
                                        loaded = 0;
                                for (var i = 0; i < total_images; ++i) {
                                    $('<img/>').load(function() {
                                        ++loaded;
                                        if (loaded === total_images)
                                            dfd.resolve();
                                    }).attr('src', $ItemImages[i]);
                                }
                            }
                    ).promise();
                };

        return {
            init: init
        };
    })();

    /*
     call the init method of Menu
     */
    Menu.init();
});
function changePlusSigne(element) {
    var attr = $(element).attr("class");
    if (attr.indexOf('fa-plus-square-o') > -1) {
        $(element).removeClass('fa-plus-square-o');
        $(element).addClass('fa-minus-square-o');
    } else {
        $(element).removeClass('fa-minus-square-o');
        $(element).addClass('fa-plus-square-o');
    }
}
function mixArrayValues(value1, value2) {
    var valueToReturn = "";
    if ((value1 != "" && value1 != 'undefined') && (value2 != "" && value2 != 'undefined')) {
        var splitedValues1 = value1.split(",");
        var splitedValues2 = value2.split(",");

        for (i = 0; i < splitedValues1.length; i++) {
            for (a = 0; a < splitedValues2.length; a++) {
                valueToReturn += splitedValues1[i] + splitedValues2[a] + ", ";
            }
        }

        valueToReturn = valueToReturn.substring(0, valueToReturn.length - 2);

        return valueToReturn;

    } else if (value1 != "" && (value2 == "" && value2 != 'undefined')) {
        return value1;
    } else {
        return value2;
    }
}

function filterHouses() {

    var typeHousesValues = "";
    var paxValues = "";
    var tonwsValues = "";

    var typeHousesCheckeds = $('[name="typeHouse"]:checked');
    var paxCheckeds = $('[name="pax"]:checked');
    var townsCheckeds = $('[name="town"]:checked');
    //recorremos los checks de los tipo de casa
    for (i = 0; i < typeHousesCheckeds.length; i++) {
        typeHousesValues += $(typeHousesCheckeds[i]).attr('data-filter');

        if (typeHousesCheckeds.length > 0 && i < (typeHousesCheckeds.length - 1)) {
            typeHousesValues += ',';
        }
    }

    for (i = 0; i < paxCheckeds.length; i++) {
        paxValues += $(paxCheckeds[i]).attr('data-filter');

        if (paxCheckeds.length > 0 && i < (paxCheckeds.length - 1)) {
            paxValues += ',';
        }
    }

    for (i = 0; i < townsCheckeds.length; i++) {
        tonwsValues += $(townsCheckeds[i]).attr('data-filter');

        if (townsCheckeds.length > 0 && i < (townsCheckeds.length - 1)) {
            tonwsValues += ',';
        }
    }

    filterValue = mixArrayValues(typeHousesValues, paxValues);
    filterValue = mixArrayValues(filterValue, tonwsValues);

    return filterValue;
}

$(document).ready(function() {
    /*
     $("img.lazy").lazyload();
     
     
     var s = $("#filterLayout");
     var pos = s.offset().top;
     $(window).scroll(function() {
     var windowpos = $(window).scrollTop();
     
     if (windowpos >= pos) {
     s.addClass("stick");
     s.removeClass("filterLayout");
     } else {
     s.addClass("filterLayout");
     s.removeClass("stick");
     }
     });
     */

    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });


    // Cargamos los colorbox
    $.colorbox.settings.transition = "elastics";
    $.colorbox.settings.opacity = 0.35;
    $.colorbox.settings.width = "600px";
    $.colorbox.settings.height = "450px";
    $('.iframe-custom-size').each(function() {
        var rel = $(this).attr("data-size");
        var arrayStr = rel.split("-");
        $(this).colorbox({iframe: true, width: arrayStr[0], height: arrayStr[1]});
    });

    $('.iframe-custom-size').on('click', function(evt) {
        evt.preventDefault();
        $('.listado-resultados .alojamiento').each(function(){
           if($(this).hasClass('active-alojamiento')){
               $(this).removeClass('active-alojamiento'); 
           }
        });
        var _this = $(this);
        var parentDiv = _this.parents('.alojamiento');
        parentDiv.addClass('active-alojamiento');
    });


    // init
    $('.columns-isotope .laterales').isotope({
        // options
        itemSelector: '.alojamiento',
        transitionDuration: '1s',
        masonry: {
            columnWidth: 300
        }
    });
    $('.full-isotope .laterales').isotope({
        // options
        itemSelector: '.alojamiento',
        transitionDuration: '1s',
        masonry: {
            columnWidth: 950
        }
    });


    $('#filterLayout').on('click', 'input', function() {
        $container.isotope({filter: filterHouses()});

        if ($('.laterales').height() == 0) {
            $container.isotope({filter: '.noResults'});
            $('.noResults').show();
            $('.laterales').height('auto');
        } else {
            $('.noResults').hide();
        }
    });

    $('[name="subTowns"]').each(function() {
        $(this).click(function() {
            $(this).next('.locationList').toggle();
            changePlusSigne(this);
        });
        ;
    });



    $('#townsList').click(function() {
        var attr = $(this).attr("class");
        changePlusSigne(this);

        if (attr.indexOf('fa-plus-square-o') > -1) {
            $('.filterOptions').height(768);
            $('.filterOptions').addClass('scroll-y');
        } else {
            $('.filterOptions').height('auto');
            $('.filterOptions').removeClass('scroll-y');
        }
        $(listTowns).toggle();
        $("img.lazy").lazyload({
            event: "click"
        });
    });

    //limpiamos lo seleccionado
    $('[name="cleanfilter"]').click(function() {
        inputToclean = '[name="' + $(this).attr('data-action') + '"]';
        $(inputToclean).prop("checked", false);
        $container.isotope({filter: filterHouses()});
        if ($('.laterales').height() == 0) {
            $container.isotope({filter: '.noResults'});
            $('.noResults').show();
            $('.laterales').height('auto');
        } else {
            $('.noResults').hide();
        }
    });


});



