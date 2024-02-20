$(document).ready(function () { 
    "use strict";
     $('#start_time').clockpicker({
        placement: 'bottom',
        twelvehour: 'true',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

     $('#end_time').clockpicker({
        placement: 'bottom',
        twelvehour: 'true',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });


     $('#picktime').clockpicker({
        placement: 'bottom',
        twelvehour: 'true',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

     $('#droptime').clockpicker({
        placement: 'bottom',
        twelvehour: 'true',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });



});

"use strict";
function timepic()
{ $('.element').clockpicker({
        placement: 'bottom',
        twelvehour: 'true',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
}

