$(document).ready(function () {
    "use strict";

    if ($('.datepicker').length) {
        // Init date picker
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    }

    if ($('#start_date').length && $('#end_date').length) {
        // Date range exists
        bdtaskIlmCommonJs.dateRange.init('#start_date', '#end_date');
    }

    if ($('#filterjourneydate').length && $('#filterreturndate').length) {
        // Filter journey and return range
        bdtaskIlmCommonJs.dateRange.init('#filterjourneydate', '#filterreturndate');
    }
});