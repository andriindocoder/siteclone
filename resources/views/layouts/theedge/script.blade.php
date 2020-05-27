<script defer>function switchLanguage(option) { window.location.href = option.value; }
</script><script defer>
document.addEventListener("DOMContentLoaded", function(event) {
    var $modal = document.getElementById('contactModal');
    if ($modal) {
        document.body.appendChild($modal);
    }
});
</script><script type="application/javascript" defer>
(function () {
    var arrival = $("#arrival152628");
    var depart = $("#departure152628");
    var arrivalParent = $("#a-parent152628");
    var departParent = $("#d-parent152628");
    var nights = $("#" + "152628");
    var isRoom = !!document.querySelector('.room-type');

    function getOptions(containerId) {
        return {
            container: containerId,
            language: "en",
            format: "d M yyyy",
            autoclose: true,
            disableTouchKeyboard: true,
            todayHighlight: true,
            startDate: moment().format(),
            templates: {
                leftArrow: '<i class="fa fa-chevron-left"></i>',
                rightArrow: '<i class="fa fa-chevron-right"></i>'
            }

        }
    }
    function getUrlVars(url) {
            var vars = {};
            var parts = url.replace(/[?&]+([^=&]+)=([^&]*)/gi,
                function(m,key,value) {
                    vars[key] = value;
                });
            return vars;
        }


    arrival.datepicker(getOptions("#" + arrivalParent.attr('id')));
    depart.datepicker(getOptions("#" + departParent.attr('id')));

    arrival.datepicker().on('changeDate', function (e) {
        var arrivalHidden = arrivalParent.find('input:hidden');
        var changeDepartDate = arrival.datepicker('getDate') > depart.datepicker('getDate');
        var arrivalDate = arrival.datepicker('getDate');
        var arrivalValue = formatDate(arrivalDate, 'YYYY-MM-DD');
        if (changeDepartDate) {
            arrivalDate.setDate(arrivalDate.getDate() + 1);
            depart.datepicker('setDate', arrivalDate);
        }
        depart.datepicker('setStartDate', arrival.val());
    
        if (nights.length) {
            nights.val(numNights());
        }
    
        if (!arrivalHidden.length) {
            arrivalParent.append(
                    "<input type=\"hidden\" " +
                    "name=\"check_in_date\" value=\"" + arrivalValue + "\" />"
            );
            return
        }
        arrivalHidden.val(arrivalValue);
    });

    depart.datepicker().on('changeDate', function (e) {
        var departHidden = departParent.find('input:hidden');
        var departDate = depart.datepicker('getDate');
        var departValue = formatDate(departDate, 'YYYY-MM-DD');
        if (nights.length && arrival.val()) {
            nights.val(numNights());
        }
        if (!departHidden.length) {
            departParent.append(
                    "<input type=\"hidden\" " +
                    "name=\"check_out_date\" value=\"" + departValue + "\" />"
            );
            return
        }
        departHidden.val(departValue);
    });
    arrival.datepicker().on('clearDate', function () {
        depart.datepicker('setStartDate', new Date());
    });
    function numNights() {
        return moment(depart.datepicker('getDate')).diff(moment(arrival.datepicker('getDate')), 'days');
    }

    function formatDate(date, format) {
        var fmt = format || moment.localeData().longDateFormat('L');
        return date ? moment(date).format(fmt) : "";
    }

    var isTouch = 'ontouchstart' in window ||
            window.DocumentTouch && document instanceof window.DocumentTouch ||
            navigator.maxTouchPoints > 0 ||
            window.navigator.msMaxTouchPoints > 0;
    if (isTouch) {
        $('textarea,input,select').css('font-size', '16px');
        arrival.attr('readonly', true);
        depart.attr('readonly', true);
    }

    if (isRoom) {
        var form = document.getElementById('bookingButtonForm_152628_202135');
        var action = form.getAttribute('action');
        var roomTypeId = getUrlVars(action)['room_type'];
        var hiddenField = form.querySelector('[name="room_type"]');
        if (!!hiddenField) {
            hiddenField.value = roomTypeId || '';
        }
    }
})();
</script><script type="application/javascript" defer>
(function () {
    var arrival = $("#arrival152629");
    var depart = $("#departure152629");
    var arrivalParent = $("#a-parent152629");
    var departParent = $("#d-parent152629");
    var nights = $("#" + "152629");
    var isRoom = !!document.querySelector('.room-type');

    function getOptions(containerId) {
        return {
            container: containerId,
            language: "en",
            format: "d M yyyy",
            autoclose: true,
            disableTouchKeyboard: true,
            todayHighlight: true,
            startDate: moment().format(),
            templates: {
                leftArrow: '<i class="fa fa-chevron-left"></i>',
                rightArrow: '<i class="fa fa-chevron-right"></i>'
            }

        }
    }
    function getUrlVars(url) {
            var vars = {};
            var parts = url.replace(/[?&]+([^=&]+)=([^&]*)/gi,
                function(m,key,value) {
                    vars[key] = value;
                });
            return vars;
        }


    arrival.datepicker(getOptions("#" + arrivalParent.attr('id')));
    depart.datepicker(getOptions("#" + departParent.attr('id')));

    arrival.datepicker().on('changeDate', function (e) {
        var arrivalHidden = arrivalParent.find('input:hidden');
        var changeDepartDate = arrival.datepicker('getDate') > depart.datepicker('getDate');
        var arrivalDate = arrival.datepicker('getDate');
        var arrivalValue = formatDate(arrivalDate, 'YYYY-MM-DD');
        if (changeDepartDate) {
            arrivalDate.setDate(arrivalDate.getDate() + 1);
            depart.datepicker('setDate', arrivalDate);
        }
        depart.datepicker('setStartDate', arrival.val());
    
        if (nights.length) {
            nights.val(numNights());
        }
    
        if (!arrivalHidden.length) {
            arrivalParent.append(
                    "<input type=\"hidden\" " +
                    "name=\"check_in_date\" value=\"" + arrivalValue + "\" />"
            );
            return
        }
        arrivalHidden.val(arrivalValue);
    });

    depart.datepicker().on('changeDate', function (e) {
        var departHidden = departParent.find('input:hidden');
        var departDate = depart.datepicker('getDate');
        var departValue = formatDate(departDate, 'YYYY-MM-DD');
        if (nights.length && arrival.val()) {
            nights.val(numNights());
        }
        if (!departHidden.length) {
            departParent.append(
                    "<input type=\"hidden\" " +
                    "name=\"check_out_date\" value=\"" + departValue + "\" />"
            );
            return
        }
        departHidden.val(departValue);
    });
    arrival.datepicker().on('clearDate', function () {
        depart.datepicker('setStartDate', new Date());
    });
    function numNights() {
        return moment(depart.datepicker('getDate')).diff(moment(arrival.datepicker('getDate')), 'days');
    }

    function formatDate(date, format) {
        var fmt = format || moment.localeData().longDateFormat('L');
        return date ? moment(date).format(fmt) : "";
    }

    var isTouch = 'ontouchstart' in window ||
            window.DocumentTouch && document instanceof window.DocumentTouch ||
            navigator.maxTouchPoints > 0 ||
            window.navigator.msMaxTouchPoints > 0;
    if (isTouch) {
        $('textarea,input,select').css('font-size', '16px');
        arrival.attr('readonly', true);
        depart.attr('readonly', true);
    }

    if (isRoom) {
        var form = document.getElementById('bookingButtonForm_152629_62808');
        var action = form.getAttribute('action');
        var roomTypeId = getUrlVars(action)['room_type'];
        var hiddenField = form.querySelector('[name="room_type"]');
        if (!!hiddenField) {
            hiddenField.value = roomTypeId || '';
        }
    }
})();
</script><script type="application/javascript" defer>
function initMap() {
    google.maps.InfoWindow.prototype.isOpen = function () {
        var map = this.getMap();
        return (map !== null && typeof map !== "undefined");
    };

    var map, hotel, location, hotelMarker, directionsUrl, infoWindowBody;
    hotel = {
        name: 'The edge',
        latitude:-8.84514870,
        longitude:115.12496660
    };

    location = new google.maps.LatLng(hotel.latitude, hotel.longitude);
    map = new google.maps.Map(document.getElementById('map-canvas'),
            {
                zoom: 14,
                center: location,
                options: {scrollwheel: false}
            });

    hotelMarker = new google.maps.Marker({
        position: location,
        title: hotel.name,
        map: map,
        icon: '//webbox.imgix.net/assets/images/hotel_pin.png',
        zIndex: 999
    });

    directionsUrl = "https://www.google.com/maps/dir/" + hotel.latitude + "," + hotel.longitude;
    infoWindowBody = "<div class=\"info-window\">" +
            "<div class=\"gm-style\" id=\"marker-info-window\">" +
            "<div class=\"gm-style-iw\">" +
            "<div class=\"place-name\">" + hotel.name + "</div>"+
            "<div class=\"navigate\">" +
            "<a target=\"_blank\" rel=\"noopener\" href=\"" + directionsUrl +"\" class=\"navigate-link\">" +
            "<div class=\"navigate-text\"></div></a>" +
            "</div></div></div></div>";

    hotelMarker.infoWindow = new google.maps.InfoWindow({content: infoWindowBody});

    google.maps.event.addListener(hotelMarker, "click", function () {
        if (hotelMarker.infoWindow.isOpen()) {
            hotelMarker.infoWindow.close();
            return;
        }
        hotelMarker.infoWindow.open(map, hotelMarker);
    });

};

</script><script type="application/javascript" defer>
(function () {
    var languageBtns = [].slice.call(document.querySelectorAll(".btn-lang"));
    if (!!languageBtns.length) {
        
        var lang = document.getElementById('en');
        var match = window.location.pathname.match("/(.+?)/");
        if (!!match && match.length > 1 && document.getElementById(match[1])) {
            lang = document.getElementById(window.location.pathname.match("/(.+?)/")[1]);
        }
        lang.classList.add("active");
        
        var minSize = getComputedStyle(languageBtns[0])['min-width'];
        var maxSize = Math.max.apply(Math, languageBtns.map(function (btn) {
            return btn.clientWidth;
        }));
        if (maxSize > minSize) {
            languageBtns.style.minWidth = maxSize;
        }
    }
})();
</script><script type="application/javascript" defer>
document.querySelector('.fa-copyright__year').textContent = new Date().getFullYear()
</script><script src="//maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDGELCJ4bkPYiVm0Hu4JRVR80VB2dMgv2M&amp;callback=initMap" async defer></script><script type="application/javascript" defer>
var languages = ["zh","tw","nl","en","fr","de","id","it","ja","ko","ru","es"];
var language = (navigator.browserLanguage || !!navigator.languages && navigator.languages[0] || navigator.language).toLowerCase();
var referrer = document.referrer.match(window.location.hostname);

if(!referrer){
    if(language && language !== "en" && language.split('-')[0] !== "en"){

        var url = null;
        if (language === 'zh-tw' && languages.indexOf('tw') > -1) {
            url = '/tw/index.html';
        } else if (language === 'zh-cn' && languages.indexOf('zh') > -1) {
            url = '/zh/index.html';
        } else if ((language === 'nb' || language === 'nn') && languages.indexOf('no') > -1) {
            url = '/no/index.html';
        } else {
            var code = language.split('-')[0];
            if (languages.indexOf(code) > -1) {
                url = '/' + code + '/index.html';
            }
        }
        if (url) {
            window.location.href = url;
        }
    }
}

</script><script type="application/javascript" defer>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll < 20) {
        $("body").removeClass("scrolling");
    }

    if (scroll >= 20) {
        $("body").addClass("scrolling");
    }
});

</script>