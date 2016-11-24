var ground_set = [0, 100000];
function pSearch() {
    return URL_PROPERTIES + '?' + $.param(
            {
                city: $('#city').val(),
                price: price_set,
                ground: ground_set,
                inmobs: $('input[name=p_inmob]:checked').val(),
                type: $('input[name=p_type]:checked').val(),
                bedrooms: $('input[name=p_bedrooms]:checked').val(),
                bathrooms: $('input[name=p_bathrooms]:checked').val(),
                neighborhood: $('input[name=neighborhood]').val(),
            }
        );
}

(function ($) {
    "use strict";

    // Custom options for map
    var options = {
        zoom: 14,
        mapTypeId: 'Styled',
        disableDefaultUI: true,
        mapTypeControlOptions: {
            mapTypeIds: ['Styled']
        }
    };
    var styles = [{
        stylers: [{
            hue: "#cccccc"
        }, {
            saturation: -100
        }]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [{
            lightness: 100
        }, {
            visibility: "simplified"
        }]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [{
            visibility: "on"
        }]
    }, {
        featureType: "poi",
        stylers: [{
            visibility: "off"
        }]
    }];

    var newMarker = null;
    var markers = [];

    //
    // Props
    //

    // custom infowindow object
    var infobox = new InfoBox({
        disableAutoPan: false,
        maxWidth: 202,
        pixelOffset: new google.maps.Size(-101, -285),
        zIndex: 1000,
        boxStyle: {
            background: "url('images/infobox-bg.png') no-repeat",
            opacity: 1,
            width: "202px",
            height: "245px"
        },
        closeBoxMargin: "28px 26px 0px 0px",
        closeBoxURL: "",
        infoBoxClearance: new google.maps.Size(1, 1),
        pane: "floatPane",
        enableEventPropagation: false
    });

    // function that adds the markers on map
    var addMarkers = function (props, map) {
        $.each(props, function (i, prop) {
            var latlng = new google.maps.LatLng(prop.position.lat, prop.position.lng);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: new google.maps.MarkerImage(
                    '/images/' + prop.markerIcon,
                    null,
                    null,
                    null,
                    new google.maps.Size(36, 36)
                ),
                draggable: false,
                // animation: google.maps.Animation.DROP,
            });
            var infoboxContent = '<div class="infoW">' +
                '<div class="propImg">' +
                '<img src="' + prop.image + '">' +
                '<div class="propBg">' +
                '<div class="propPrice">$ ' + prop.price + '</div>' +
                '<div class="propType">' + prop.type + '</div>' +
                '</div>' +
                '</div>' +
                '<div class="paWrapper">' +
                '<div class="propTitle">' + prop.title + '</div>' +
                '<div class="propAddress">' + prop.address + '</div>' +
                '</div><br>' +
                '<ul class="propFeat">' +
                '<li><span class="fa fa-bed" aria-hidden="true"></span> ' + prop.bedrooms + '</li>' +
                '<li><span class="fa fa-bath" aria-hidden="true"></span> ' + prop.bathrooms + '</li>' +
                '<li><span class="icon-frame"></span> ' + prop.area + '</li>' +
                '</ul>' +
                '<div class="clearfix"></div>' +
                '<div class="infoButtons">' +
                '<a class="btn btn-sm btn-round btn-gray btn-o closeInfo">Cerrar</a>' +
                '<a href="/properties/show/' + prop.id + '" class="btn btn-sm btn-round btn-green viewInfo">Ver</a>' +
                '</div>' +
                '</div>';

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infobox.setContent(infoboxContent);
                    infobox.open(map, marker);
                }
            })(marker, i));

            $(document).on('click', '.closeInfo', function () {
                infobox.open(null, null);
            });

            markers.push(marker);
        });
    }

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
        setMapOnAll(null);
        markers = [];
    }

    var map;
    var windowHeight;
    var windowWidth;
    var contentHeight;
    var contentWidth;
    var isDevice = true;

    // calculations for elements that changes size on window resize
    var windowResizeHandler = function () {
        windowHeight = window.innerHeight;
        windowWidth = $(window).width();
        contentHeight = windowHeight - $('#header').height();
        contentWidth = $('#content').width();

        $('#leftSide').height(contentHeight);
        $('.closeLeftSide').height(contentHeight);
        $('#wrapper').height(contentHeight);
        $('#mapView').height(contentHeight);
        $('#content').height(contentHeight);
        setTimeout(function () {
            $('.commentsFormWrapper').width(contentWidth);
        }, 300);

        if (map) {
            google.maps.event.trigger(map, 'resize');
        }

        // Add custom scrollbar for left side navigation
        if (windowWidth > 767) {
            $('.bigNav').slimScroll({
                height: contentHeight - $('.leftUserWraper').height()
            });
        } else {
            $('.bigNav').slimScroll({
                height: contentHeight
            });
        }
        if ($('.bigNav').parent('.slimScrollDiv').size() > 0) {
            $('.bigNav').parent().replaceWith($('.bigNav'));
            if (windowWidth > 767) {
                $('.bigNav').slimScroll({
                    height: contentHeight - $('.leftUserWraper').height()
                });
            } else {
                $('.bigNav').slimScroll({
                    height: contentHeight
                });
            }
        }

        // reposition of prices and area reange sliders tooltip
        var priceSliderRangeLeft = parseInt($('.priceSlider .ui-slider-range').css('left'));
        var priceSliderRangeWidth = $('.priceSlider .ui-slider-range').width();
        var priceSliderLeft = priceSliderRangeLeft + ( priceSliderRangeWidth / 2 ) - ( $('.priceSlider .sliderTooltip').width() / 2 );
        $('.priceSlider .sliderTooltip').css('left', priceSliderLeft);

        var areaSliderRangeLeft = parseInt($('.areaSlider .ui-slider-range').css('left'));
        var areaSliderRangeWidth = $('.areaSlider .ui-slider-range').width();
        var areaSliderLeft = areaSliderRangeLeft + ( areaSliderRangeWidth / 2 ) - ( $('.areaSlider .sliderTooltip').width() / 2 );
        $('.areaSlider .sliderTooltip').css('left', areaSliderLeft);
    }

    var repositionTooltip = function (e, ui) {
        var div = $(ui.handle).data("bs.tooltip").$tip[0];
        var pos = $.extend({}, $(ui.handle).offset(), {
            width: $(ui.handle).get(0).offsetWidth,
            height: $(ui.handle).get(0).offsetHeight
        });
        var actualWidth = div.offsetWidth;

        var tp = {left: pos.left + pos.width / 2 - actualWidth / 2}
        $(div).offset(tp);

        $(div).find(".tooltip-inner").text(ui.value);
    }

    windowResizeHandler();
    $(window).resize(function () {
        windowResizeHandler();
    });

    setTimeout(function () {
        $('body').removeClass('notransition');

        map = new google.maps.Map(document.getElementById('mapView'), options);
        var styledMapType = new google.maps.StyledMapType(styles, {
            name: 'Styled'
        });

        map.mapTypes.set('Styled', styledMapType);
        map.setCenter(new google.maps.LatLng(_latitude, _longitude));
        map.setZoom(13);

        if ($('#address').length > 0) {
            newMarker = new google.maps.Marker({
                position: new google.maps.LatLng(_latitude, _longitude),
                map: map,
                icon: new google.maps.MarkerImage(
                    '/images/marker-new.png',
                    null,
                    null,
                    // new google.maps.Point(0,0),
                    null,
                    new google.maps.Size(36, 36)
                ),
                draggable: true,
                animation: google.maps.Animation.DROP,
            });

            google.maps.event.addListener(newMarker, "mouseup", function (event) {
                var latitude = this.position.lat();
                var longitude = this.position.lng();
                /*$('#latitude').text(this.position.lat());
                 $('#longitude').text(this.position.lng());*/
                $('#latitude').val(newMarker.getPosition().lat());
                $('#longitude').val(newMarker.getPosition().lng());
            });
        }


        if (event) {
            google.maps.event.addListener(map, 'dragend', function () {
                $.post('/api/properties/search', {
                    uid: uid,
                    map: map.getCenter().toUrlValue(),
                    price: price_set,
                    ground: ground_set,
                    inmobs: $('input[name=p_inmob]:checked').val(),
                    type: $('input[name=p_type]:checked').val(),
                    bedrooms: $('input[name=p_bedrooms]:checked').val(),
                    bathrooms: $('input[name=p_bathrooms]:checked').val(),
                    neighborhood: $('input[name=neighborhood]').val(),
                }).done(function (resp) {
                    clearMarkers();
                    addMarkers(resp, map);
                    $('#resultListElements').empty();
                    $.each(resp, function (i, prop) {
                        $('#resultListElements').append(putBox(prop));
                    });
                });
            });
            /*google.maps.event.addListener(map, 'zoom_changed', function () {
                         $.post('/properties/ajax/search', {_token: _CsrfToken, data: map.getCenter().toUrlValue()})
                     .done(function (resp) {
                     console.log(resp);
                     });
                     });*/
        }

        addMarkers(_props, map);


    }, 300);

    if (!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch)) {
        $('body').addClass('no-touch');
        isDevice = false;
    }

// Header search icon transition
    $('.search input').focus(function () {
        $('.searchIcon').addClass('active');
    });
    $('.search input').blur(function () {
        $('.searchIcon').removeClass('active');
    });

// Notifications list items pulsate animation
    $('.notifyList a').hover(
        function () {
            $(this).children('.pulse').addClass('pulsate');
        },
        function () {
            $(this).children('.pulse').removeClass('pulsate');
        }
    );

// Exapnd left side navigation
    var navExpanded = false;
    $('.navHandler, .closeLeftSide').click(function () {
        if (!navExpanded) {
            $('.logo').addClass('expanded');
            $('#leftSide').addClass('expanded');
            if (windowWidth < 768) {
                $('.closeLeftSide').show();
            }
            $('.hasSub').addClass('hasSubActive');
            $('.leftNav').addClass('bigNav');
            if (windowWidth > 767) {
                $('.full').addClass('m-full');
            }
            windowResizeHandler();
            navExpanded = true;
        } else {
            $('.logo').removeClass('expanded');
            $('#leftSide').removeClass('expanded');
            $('.closeLeftSide').hide();
            $('.hasSub').removeClass('hasSubActive');
            $('.bigNav').slimScroll({destroy: true});
            $('.leftNav').removeClass('bigNav');
            $('.leftNav').css('overflow', 'visible');
            $('.full').removeClass('m-full');
            navExpanded = false;
        }
    });

// functionality for map manipulation icon on mobile devices
    $('.mapHandler').click(function () {
        if ($('#mapView').hasClass('mob-min') ||
            $('#mapView').hasClass('mob-max') ||
            $('#content').hasClass('mob-min') ||
            $('#content').hasClass('mob-max')) {
            $('#mapView').toggleClass('mob-max');
            $('#content').toggleClass('mob-min');
        } else {
            $('#mapView').toggleClass('min');
            $('#content').toggleClass('max');
        }

        setTimeout(function () {
            var priceSliderRangeLeft = parseInt($('.priceSlider .ui-slider-range').css('left'));
            var priceSliderRangeWidth = $('.priceSlider .ui-slider-range').width();
            var priceSliderLeft = priceSliderRangeLeft + ( priceSliderRangeWidth / 2 ) - ( $('.priceSlider .sliderTooltip').width() / 2 );
            $('.priceSlider .sliderTooltip').css('left', priceSliderLeft);

            var areaSliderRangeLeft = parseInt($('.areaSlider .ui-slider-range').css('left'));
            var areaSliderRangeWidth = $('.areaSlider .ui-slider-range').width();
            var areaSliderLeft = areaSliderRangeLeft + ( areaSliderRangeWidth / 2 ) - ( $('.areaSlider .sliderTooltip').width() / 2 );
            $('.areaSlider .sliderTooltip').css('left', areaSliderLeft);

            if (map) {
                google.maps.event.trigger(map, 'resize');
            }

            $('.commentsFormWrapper').width($('#content').width());
        }, 300);

    });

// Expand left side sub navigation menus
    $(document).on("click", '.hasSubActive', function () {
        $(this).toggleClass('active');
        $(this).children('ul').toggleClass('bigList');
        $(this).children('a').children('.arrowRight').toggleClass('fa-angle-down');
    });

    if (isDevice) {
        $('.hasSub').click(function () {
            $('.leftNav ul li').not(this).removeClass('onTap');
            $(this).toggleClass('onTap');
        });
    }

// functionality for custom dropdown select list
    $('.dropdown-select li a').click(function () {
        if (!($(this).parent().hasClass('disabled'))) {
            $(this).prev().prop("checked", true);
            $(this).parent().siblings().removeClass('active');
            $(this).parent().addClass('active');
            $(this).parent().parent().siblings('.dropdown-toggle').children('.dropdown-label').html($(this).text());
        }
    });

    $('.priceSlider').slider({
        range: true,
        min: price_limit[0],
        max: price_limit[1],
        values: price_set,
        step: 10000,
        slide: function (event, ui) {
            $('.priceSlider .sliderTooltip .stLabel').html(
                '$' + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
                ' <span class="fa fa-arrows-h"></span> ' +
                '$' + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
            );
            var priceSliderRangeLeft = parseInt($('.priceSlider .ui-slider-range').css('left'));
            var priceSliderRangeWidth = $('.priceSlider .ui-slider-range').width();
            var priceSliderLeft = priceSliderRangeLeft + ( priceSliderRangeWidth / 2 ) - ( $('.priceSlider .sliderTooltip').width() / 2 );
            $('.priceSlider .sliderTooltip').css('left', priceSliderLeft);
        },
        change: function (event, ui) {
            price_set = ui.values;
        }
    });
    $('.priceSlider .sliderTooltip .stLabel').html(
        '$' + $('.priceSlider').slider('values', 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
        ' <span class="fa fa-arrows-h"></span> ' +
        '$' + $('.priceSlider').slider('values', 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
    );
    var priceSliderRangeLeft = parseInt($('.priceSlider .ui-slider-range').css('left'));
    var priceSliderRangeWidth = $('.priceSlider .ui-slider-range').width();
    var priceSliderLeft = priceSliderRangeLeft + ( priceSliderRangeWidth / 2 ) - ( $('.priceSlider .sliderTooltip').width() / 2 );
    $('.priceSlider .sliderTooltip').css('left', priceSliderLeft);

    $('.areaSlider').slider({
        range: true,
        min: ground_set[0],
        max: ground_set[1],
        values: [0, 100000],
        step: 10,
        slide: function (event, ui) {
            $('.areaSlider .sliderTooltip .stLabel').html(
                ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' m<sup>2</sup>' +
                ' <span class="fa fa-arrows-h"></span> ' +
                ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' m<sup>2</sup>'
            );
            var areaSliderRangeLeft = parseInt($('.areaSlider .ui-slider-range').css('left'));
            var areaSliderRangeWidth = $('.areaSlider .ui-slider-range').width();
            var areaSliderLeft = areaSliderRangeLeft + ( areaSliderRangeWidth / 2 ) - ( $('.areaSlider .sliderTooltip').width() / 2 );
            $('.areaSlider .sliderTooltip').css('left', areaSliderLeft);
        },
        change: function (event, ui) {
            ground_set = ui.values;
        }
    });
    $('.areaSlider .sliderTooltip .stLabel').html(
        $('.areaSlider').slider('values', 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' m<sup>2</sup>' +
        ' <span class="fa fa-arrows-h"></span> ' +
        $('.areaSlider').slider('values', 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' m<sup>2</sup>'
    );
    var areaSliderRangeLeft = parseInt($('.areaSlider .ui-slider-range').css('left'));
    var areaSliderRangeWidth = $('.areaSlider .ui-slider-range').width();
    var areaSliderLeft = areaSliderRangeLeft + ( areaSliderRangeWidth / 2 ) - ( $('.areaSlider .sliderTooltip').width() / 2 );
    $('.areaSlider .sliderTooltip').css('left', areaSliderLeft);

    $('.volume .btn-round-right').click(function () {
        var currentVal = parseInt($(this).siblings('input').val());
        if (currentVal < 10) {
            $(this).siblings('input').val(currentVal + 1);
        }
    });
    $('.volume .btn-round-left').click(function () {
        var currentVal = parseInt($(this).siblings('input').val());
        if (currentVal > 1) {
            $(this).siblings('input').val(currentVal - 1);
        }
    });

// Show & Hiden Advance Filters
    $('#showAdvancedFilter').click(function () {
        var $this = $(this);
        $this.toggle();
        $('#hideAdvancedFilter').toggle();
        $('#advancedFilter').slideToggle(300);
    });
    $('#hideAdvancedFilter').click(function () {
        var $this = $(this);
        $this.toggle();
        $('#showAdvancedFilter').toggle();
        $('#advancedFilter').slideToggle(300);
    });

//Enable swiping
    $(".carousel-inner").swipe({
        swipeLeft: function (event, direction, distance, duration, fingerCount) {
            $(this).parent().carousel('next');
        },
        swipeRight: function () {
            $(this).parent().carousel('prev');
        }
    });

    $(".carousel-inner .card").click(function () {
        window.open($(this).attr('data-linkto'), '_self');
    });

    $('#content').scroll(function () {
        if ($('.comments').length > 0) {
            var visible = $('.comments').visible(true);
            if (visible) {
                $('.commentsFormWrapper').addClass('active');
            } else {
                $('.commentsFormWrapper').removeClass('active');
            }
        }
    });

    $('.btn').click(function () {
        if ($(this).is('[data-toggle-class]')) {
            $(this).toggleClass('active ' + $(this).attr('data-toggle-class'));
        }
    });

    $('.tabsWidget .tab-scroll').slimScroll({
        height: '235px',
        size: '5px',
        position: 'right',
        color: '#939393',
        alwaysVisible: false,
        distance: '5px',
        railVisible: false,
        railColor: '#222',
        railOpacity: 0.3,
        wheelStep: 10,
        allowPageScroll: true,
        disableFadeOut: false
    });

    $('.progress-bar[data-toggle="tooltip"]').tooltip();
    $('.tooltipsContainer .btn').tooltip();

    $("#slider1").slider({
        range: "min",
        value: 50,
        min: 1,
        max: 100,
        slide: repositionTooltip,
        stop: repositionTooltip
    });
    $("#slider1 .ui-slider-handle:first").tooltip({
        title: $("#slider1").slider("value"),
        trigger: "manual"
    }).tooltip("show");

    $("#slider2").slider({
        range: "max",
        value: 70,
        min: 1,
        max: 100,
        slide: repositionTooltip,
        stop: repositionTooltip
    });
    $("#slider2 .ui-slider-handle:first").tooltip({
        title: $("#slider2").slider("value"),
        trigger: "manual"
    }).tooltip("show");

    $("#slider3").slider({
        range: true,
        min: 0,
        max: 500,
        values: [190, 350],
        slide: repositionTooltip,
        stop: repositionTooltip
    });
    $("#slider3 .ui-slider-handle:first").tooltip({
        title: $("#slider3").slider("values", 0),
        trigger: "manual"
    }).tooltip("show");
    $("#slider3 .ui-slider-handle:last").tooltip({
        title: $("#slider3").slider("values", 1),
        trigger: "manual"
    }).tooltip("show");

    $('#autocomplete').autocomplete({
        source: ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"],
        focus: function (event, ui) {
            var label = ui.item.label;
            var value = ui.item.value;
            var me = $(this);
            setTimeout(function () {
                me.val(value);
            }, 1);
        }
    });

    $('#tags').tagsInput({
        'height': 'auto',
        'width': '100%',
        'defaultText': 'Add a tag',
    });

    $('#datepicker').datepicker();

// functionality for autocomplete address field
    if ($('#address').length > 0) {
        var address = document.getElementById('address');
        var addressAuto = new google.maps.places.Autocomplete(address);

        google.maps.event.addListener(addressAuto, 'place_changed', function () {
            var place = addressAuto.getPlace();

            if (!place.geometry) {
                return;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
            }
            newMarker.setPosition(place.geometry.location);
            newMarker.setVisible(true);
            $('#latitude').val(newMarker.getPosition().lat());
            $('#longitude').val(newMarker.getPosition().lng());

            return false;
        });
    }

    $('input, textarea').placeholder();

    /*Icon Contact*/
    $('.icon_contact').click(function () {
        var $this = $(this);
        $this.hide();
        var $modal = $('<div style="width: 300px; height: 200px; background-color: white; box-shadow: 0px 0px 10px gray;' +
            'position: fixed; z-index: 99999999; right: 40px; bottom: 30px; border-radius: 15px; display: none;">' +
            '<div id="modClose" style="cursor: pointer; position: absolute; top: -5px; right: 3px; font-size: 25px; color: white;">' +
            '<i class="fa fa-times-circle" aria-hidden="true"></i>' +
            '</div>' +
            '<p align="center" style="border-radius: 15px 15px 0px 0px; padding-top: 5px; font-size: 20px; ' +
            'color: white; background-color: #2C467F;"><b>Contactanos</b></p>' +
            '<div style="padding: 0px 10px; font-size: medium;">' +
            '<p><img src="http://localhost:8000/images/web/logo.svg" width="120px"></p>' +
            'Francisco Zarco #2392<br>' +
            'Col. Ladron de Guevara<br>' +
            'Guadalajara, Jal.<br>' +
            'Cel: 33 3166 5792<br>' +
            '</div>' +
            '</div>');
        $this.parent().append($modal);
        $modal.show('fast');
        $modal.mouseleave(function () {
            $modal.hide('fast', function () {
                $modal.remove();
                $this.show();
            });
        });
        var $close = $modal.find('#modClose');
        $close.click(function () {
            $modal.trigger('mouseleave');
        });
    });

    $('#filterPropertySubmit').click(function () {
        window.location = pSearch();
    });

    $('.modal-su').click(function () {
        $('#signin').modal('hide');
        $('#signup').modal('show');
    });

    $('.modal-si').click(function () {
        $('#signup').modal('hide');
        $('#signin').modal('show');
    });

    $('.figFavS').mouseenter(function () {
        if ($(this).attr('data-status') == 'toggle') {
            $(this).find('i').toggleClass('fa-heart-o');
            $(this).find('i').toggleClass('fa-heart');
        }
    });

    $('.figFavS').mouseleave(function () {
        if ($(this).attr('data-status') == 'toggle') {
            $(this).find('i').toggleClass('fa-heart-o');
            $(this).find('i').toggleClass('fa-heart');
        }
    });

    $('.figFavS').click(function () {
        var $this = $(this);
        $.post('/api/properties/fav/add', {'id': $this.attr('data-value'), 'user': uid})
            .done(function (data) {
                console.log(data);
                if (data.ok) {
                    $this.attr('data-status', data.status);
                    $this.find('i').toggleClass('fa-heart-o');
                    $this.find('i').toggleClass('fa-heart');
                    if (data.status == 'selected') {
                        $this.find('.figFavN').html(parseInt($this.find('.figFavN').html()) + 1);
                    } else {
                        $this.find('.figFavN').html(parseInt($this.find('.figFavN').html()) - 1);
                    }
                } else if (data.error.user) {
                    $('#signin').modal('show');
                }
            })
            .fail(function (data) {
                console.log(data);
            });
    });
})
(jQuery);