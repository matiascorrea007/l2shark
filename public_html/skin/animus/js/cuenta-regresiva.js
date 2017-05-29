(function() {
    var _id = "8b94ad61b6c1e6ab250101d3fb658a56";
    while (document.getElementById("timer" + _id)) _id = _id + "0";
    document.write("<div id='timer" + _id + "' style='min-width:241px;height:58px;'></div>");
    var _t = document.createElement("script");
    _t.src = "http://megatimer.ru/timer/timer.min.js";
    var _f = function(_k) {
        var l = new MegaTimer(_id, {
            "view": [1, 1, 1, 1],
            "type": {
                "currentType": "1",
                "params": {
                    "usertime": false,
                    "tz": "3",
                    "utc": 1472144400000
                }
            },
            "design": {
                "type": "plate",
                "params": {
                    "round": "0",
                    "background": "opacity",
                    "effect": "slide",
                    "space": "0",
                    "separator-margin": "0",
                    "number-font-family": {
                        "family": "Comfortaa",
                        "link": "<link href='http://fonts.googleapis.com/css?family=Comfortaa&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                    },
                    "number-font-size": "40",
                    "number-font-color": "#e0d1b8",
                    "padding": "2",
                    "separator-on": true,
                    "separator-text": ":",
                    "text-on": true,
                    "text-font-family": {
                        "family": "Arial"
                    },
                    "text-font-size": "12",
                    "text-font-color": "#e0d1b8"
                }
            },
            "designId": 4,
            "theme": "white",
            "width": 241,
            "height": 58
        });
        if (_k != null) l.run();
    };
    _t.onload = _f;
    _t.onreadystatechange = function() {
        if (_t.readyState == "loaded") _f(1);
    };
    var _h = document.head || document.getElementsByTagName("head")[0];
    _h.appendChild(_t);
}).call(this);