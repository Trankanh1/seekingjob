var AP = new function __AP() {
    /**
     * @desc close the popup
     */
    this.closeDialog = function() {
        $("#apdialog").css("display", "none").css("width", 0).html("");
    }

    /**
     * @desc show the popup
     */
    this.showPopup = function(content) {
        $("#apdialog").css("display", "block").css("width", $(window).width()).html(content);
    }

    this.submitForm = function(options, callback) {

        jQuery.ajax({
            type: "post",
            url: options.url,
            data: options.data,
            success: function(res) {
                callback(res);
            },
            error: function(res) {
                alert("Error");
            }
        })
    }

    this.toUrl = function(url) {
        window.location = url;
    }

    this.render = function(data, callback) {
        var html = "";
        for (var i = 0; i < data.length; i++) {
            html += callback(data[i], i);
        }
        return html;
    }

    this.redirecToUrl = function() {
        $("div[data-url]").on("click", function() {

            var url = $(this).data("url");
            location.replace(url);
        })
    }
}

AP.array = new function __APArray() {
    this.findObj = function(objects, id) {
        for (var i = 0; i < objects.length; i++) {
            if (objects[i].id == id)
                return objects[i];
        }

        return null;
    }
}

AP.time = {

    /**
     * @desc Please reset this if you want to use locale words
     */
    months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    sMonths: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    days: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    sDays: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    tDays: ["T2", "T3", "T4", "T5", "T6", "T7", "CN"],
    tvDays: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ Nhật"],

    /**
     * @desc Handler time function.
     */
    time: function(pattern, time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }

        var _year = t.getFullYear();

        var _month = t.getMonth() + 1;

        var month = _month;
        if (_month < 10) {
            month = "0" + _month;
        }

        var _day = (t.getDay() || 7) - 1;

        var _date = t.getDate();

        var date = _date;
        if (_date < 10) {
            date = "0" + _date;
        }

        var _hour = t.getHours();
        var _hour12 = (_hour % 12);
        var hour = _hour;
        if (_hour < 10) {
            hour = "0" + _hour;
        }

        var _minute = t.getMinutes();
        var _second = t.getSeconds();


        var r = pattern;
        var tday = AP.time.tDays[_day];
        var vday = AP.time.tvDays[_day];

        // Day & Date
        r = r.replace("%d", date);
        r = r.replace("%D", AP.time.sDays[_day]);
        r = r.replace("%j", _date);
        r = r.replace("%l", AP.time.days[_day]);
        r = r.replace("%N", _day + 1);
        r = r.replace("%w", _day);
        r = r.replace("%T", tday);
        r = r.replace("%v", tday);
        r = r.replace("%V", vday);

        // Month
        r = r.replace("%F", AP.time.months[_month - 1]);
        r = r.replace("%m", month);
        r = r.replace("%M", AP.time.sMonths[_month - 1]);
        r = r.replace("%n", _month);
        r = r.replace("%t", new Date(_year, _month, 0).getDate());

        // Year
        r = r.replace("%L", (new Date(_year, 1, 29).getMonth() == 1));
        r = r.replace("%o", _year);
        r = r.replace("%Y", _year);
        r = r.replace("%y", _year.toString().substr(2));

        // Hour & Minute & Second
        r = r.replace("%a", (_hour < 12) ? "am" : "pm");
        r = r.replace("%A", (_hour < 12) ? "AM" : "PM");
        r = r.replace("%g", _hour12);
        r = r.replace("%G", _hour);
        r = r.replace("%h", (_hour12 < 10) ? ("0" + _hour12) : _hour12);
        r = r.replace("%H", (_hour < 10) ? ("0" + _hour) : _hour);
        r = r.replace("%i", (_minute < 10) ? ("0" + _minute) : _minute);
        r = r.replace("%s", (_second < 10) ? ("0" + _second) : _second);
        r = r.replace("%u", t.getMilliseconds() * 1000);

        // Timezone
        r = r.replace("%Z", -t.getTimezoneOffset() * 60);

        return r;
    },

    hm: function(time) {
        var h = AP.data.zeroPrefix(Math.floor(time / 3600));
        var m = AP.data.zeroPrefix(Math.floor((time - h * 3600) / 60));
        return h + ":" + m;
    },

    beginOfDay: function(time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }
        return AP.time.timeStamp(new Date(t.getFullYear(), t.getMonth(), t.getDate()));
    },

    beginOfMonth: function(time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }
        return AP.time.timeStamp(new Date(t.getFullYear(), t.getMonth(), 1));
    },

    endOfMonth: function(time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }
        return AP.time.timeStamp(new Date(t.getFullYear(), t.getMonth() + 1, 0));
    },


    midnight: function(time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }
        return AP.time.timeStamp(new Date(t.getFullYear(), t.getMonth(), t.getDate(), 23, 59, 59));
    },

    beginOfWeek: function(time_stamp) {
        return AP.time.firstDayOfWeek(time_stamp);
    },

    endOfWeek: function(time_stamp) {
        return AP.time.firstDayOfWeek(time_stamp) + 6 * 24 * 3600;
    },

    sameDay: function(ts1, ts2) {
        return AP.time.beginOfDay(parseInt(ts1)) == AP.time.beginOfDay(parseInt(ts2));
    },

    sameYear: function(ts1, ts2) {
        return AP.time.time("%Y", ts1) == AP.time.time("%Y", ts2);
    },
    sameMonth: function(ts1, ts2) {
        return AP.time.time("%m%Y", ts1) == AP.time.time("%m%Y", ts2);
    },
    sameWeek: function(ts1, ts2) {
        return AP.time.firstDayOfWeek(parseInt(ts1)) == AP.time.firstDayOfWeek(parseInt(ts2));
    },

    test: function(ts) {
        return AP.time.time("%Y %m %d, %H:%i:%s", ts);
    },

    /**
     * @desc Get the previous Monday
     * @param time_stamp
     * @returns
     */
    firstDayOfWeek: function(time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }

        // Get the first day of week [Return timestamp]
        var day = (t.getDay() || 7) - 1;

        t.setHours(-24 * day);
        t.setSeconds(0);
        t.setMinutes(0);
        t.setHours(0);

        return AP.time.timeStamp(t);
    },


    /**
     * @desc Get the first day of the current month
     * @param time_stamp
     * @returns
     */
    firstDayOfMonth: function(time_stamp) {
        var t;
        if (!time_stamp) {
            t = new Date();
        } else {
            t = new Date(time_stamp * 1000);
        }

        t.setDate(1);
        t.setSeconds(0);
        t.setMinutes(0);
        t.setHours(0);

        return AP.time.timeStamp(t);
    },



    timeStamp: function(d) {
        if (!d) {
            d = new Date();
        }
        return Math.floor(d.getTime() / 1000);
    },

    now: function() {
        return Math.floor((new Date()).getTime() / 1000);
    },

    date: function(time_stamp) {
        return new Date(time_stamp * 1000);
    },

    ago: function(time_stamp) {
        time_stamp = parseInt(time_stamp);
        var t = this.timeStamp();
        var diff = t - time_stamp;

        if (diff < 5) {
            return "few seconds ago";
        }
        if (diff < 60) {
            return diff + " " + 'seconds ago';
        }
        if (diff < 3600) {
            return Math.floor(diff / 60) + " " + 'minutes ago';
        }
        if (diff < 3600 * 24) {
            return Math.floor(diff / 3600) + " " + 'hours ago';
        }
        return Math.floor(diff / 86400) + " " + 'days ago';
    },


    late: function(actual_time, deadline) {
        if (!deadline) {
            deadline = 0;
        }

        var diff = parseInt(actual_time) - parseInt(deadline);
        if (diff < 0) {
            return "---";
        }

        if (diff < 5) {
            return lang("few seconds");
        }
        if (diff < 60) {
            return diff + " " + lang('seconds');
        }

        if (diff < 3600) {
            return Math.floor(diff / 60) + "m";
        }

        if (diff < 3600 * 24) {
            var h = Math.floor(diff / 3600);
            var min = Math.floor((diff - h * 3600) / 60);
            return h + "h" + min + "m";
        }

        var h = Math.floor(diff / 86400);

        if (h == 1) {
            return h + " " + lang('day');
        }

        return h + " " + lang('days');
    },

    remain: function(deadline) {
        return AP.time.late(-AP.time.now(), -deadline);
    },


    countdown: function(obj, __render) {
        AP.rtimeout(function() {
            var ts = "";

            var data = $(obj).data('timeremain');
            data = parseInt(data);

            if (data && data >= 0) {
                var d = Math.floor(data / (3600 * 24));
                var h = Math.floor((data - d * 24 * 3600) / 3600);
                var m = Math.floor((data - h * 3600 - d * 24 * 3600) / 60);
                var s = data - d * 24 * 3600 - h * 3600 - m * 60;
                var ts = h + "h " + m + "m " + s + "s";
                if (d > 0) {
                    ts = d + "d " + h + "h " + m + "m " + s + "s";
                }

                if (__render) {
                    ts = __render(d, h, m, s);
                }
            }



            $(obj).html(ts);

            if (data >= 0) {
                data = data - 1;
                $(obj).data('timeremain', data);
            }
        }, 1000);
    },



    count: function(initial, callback, finish) {
        var t = this.now();
        AP.rtimeout(function() {
            var c = AP.time.now();
            var rem = initial + t - c;
            if (rem < 0) {
                finish();
            } else {
                callback(rem);
            }
        }, 1000);
    },

    dow: function(index) {
        return this.tvDays[index];
    }
};