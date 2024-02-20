"use strict";
$(document).ready(function () { 
    "use strict";
    $('.testselect3').SumoSelect();
    $('.testselect1').SumoSelect();

    if ($('.select2').length) {
        $('.select2').select2();

        $(document).on('select2:open', function(e) {
            document.querySelector(`[aria-controls="select2-${e.target.id}-results"]`).focus();
        });
    }
});