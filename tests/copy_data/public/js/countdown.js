(function($) {
    $.fn.downCount = function(options, callback) {
        var settings = $.extend({
            date: null,
            offset: null
        }, options);
        if (!settings.date) {
            $.error("Date is not defined.")
        }
        if (!Date.parse(settings.date)) {
            $.error("Incorrect date format, it should look like this, 12/24/2012 12:00:00.")
        }
        var container = this;
        var currentDate = function() {
            var date = new Date();
            var utc = date.getTime() + (date.getTimezoneOffset() * 60000);
            var new_date = new Date(utc + (3600000 * settings.offset));
            return new_date
        };

        
    }
})(jQuery);