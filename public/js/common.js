bdtaskIlmCommonJs = {
    BASE_URL: location.host,

    init: function () {
        // init properties
        this.BASE_URL = $('#baseurl').val();

        // init sub property modules
        this.treeDeletetion.init();
    },

    elemLoader: {
        show: function (elem, size = 50, legend = true) {
            var $elem = $(elem),
                $loader = $('#main-loader').clone();

            // build loader
            $loader.removeAttr('id style').addClass('elem-loader');
            $('.loader', $loader).css({ top: `calc(50% - ${size / 2}px)` });
            $('.preloader', $loader).css({ width: size, height: size });
            legend || $('p', $loader).text('');

            $elem.addClass('position-relative');
            $('.page-loader-wrapper', $elem).remove();
            $elem.append($loader);
        },

        hide: function (elem) {
            $(elem).removeClass('position-relative');
            $('.page-loader-wrapper', elem).remove();
        }
    },

    treeDeletetion: {
        $deletionForm: null,

        $formSubmitButton: null,

        init: function () {
            _this = this;

            $(document).on('click', '.deletionForm button', function (e) {
                e.preventDefault();
                _this.$formSubmitButton = $(this);
                _this.$deletionForm = $(this).closest('.deletionForm');

                if (!_this.$formSubmitButton.data('modal-confirm')) {
                    _this.bindPopoverConfirm(_this.$formSubmitButton, _this.$deletionForm);
                } else {
                    bdtaskIlmCommonJs.elemLoader.show(_this.$formSubmitButton, 20, false);

                    _this.bindModalConfirm(_this.$deletionForm).then(function () {
                        bdtaskIlmCommonJs.elemLoader.hide(_this.$formSubmitButton);
                    });
                }
            });
        },

        bindPopoverConfirm: function ($button, $form) {
            if (!$button.data('bs.popover')) {
                (async (c) => {
                    await c.web_settings.init();
                    await c.lang.init();
                    
                    $button.popover({
                        html: true,
                        trigger: 'focus',
                        placement: 'top',
                        template: '<div class="popover limonPopover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
                        content: '<div class="btn-group"><a class="btn btn-danger btn-xs delete"><i class="fas fa-trash"></i>' + c.lang.getPhrase('delete') + '</a><a class="btn btn-secondary btn-xs cancel"><i class="fas fa-ban"></i>' + c.lang.getPhrase('cancel') + '</a></div>',
                        title: c.lang.getPhrase('are_you_sure'),
                        container: 'table'
                    });
    
                    $button.on('shown.bs.popover', function () {
                        var by = $button.attr('aria-describedby');
    
                        $('.delete', `#${by}`).on('click.popoverconfirm', function () {
                            $form.submit();
                        });
                    });
    
                    $button.data('bs.popover', true);
                    $button.popover("show");
                })(bdtaskIlmCommonJs);
            }
        },

        bindModalConfirm: function ($form) {
            return $.get($form.attr('action'), $form.serialize(), function (data) {
                $('#confirmationMessage').html(data);
                $('#confirmationModal').modal('show');
            });
        }
    },

    dateRange: {
        $start: null,
        $end: null,
        startDate: null,
        endDate: null,

        init: function (start, end) {
            const _this = this;
            _this.$start = $(start);
            _this.$end = $(end);

            $(document).on('change', start, function () {
                _this.startDate = _this.$start.datepicker('getDate');
                _this.toggleDateRange();
            });

            $(document).on('change', end, function () {
                _this.endDate = _this.$end.datepicker('getDate');
                _this.toggleDateRange();
            });
        },

        toggleDateRange: function () {
            const _this = this;

            if (_this.startDate) {
                _this.$end.datepicker('setStartDate', _this.startDate);
            }

            if (_this.endDate) {
                _this.$start.datepicker('setEndDate', _this.endDate);
            }
        }
    },

    web_settings: {
        settings: {},

        init: function (reset = true) {
            if (reset && (Object.keys(this.settings).length === 0)) {
                return fetch(`${bdtaskIlmCommonJs.BASE_URL}modules/api/v1/website/seetings`)
                    .then(data => data.json())
                    .then(data => this.settings = data.data);
            }
        },

        getSettings: function (key) {
            return this.settings.hasOwnProperty(key) ? this.settings[key] : null;
        }
    },

    lang: {
        langstrings: {},

        init: function (reset = true) {
            if (reset && (Object.keys(this.langstrings).length === 0)) {
                var langKey = bdtaskIlmCommonJs.web_settings.getSettings('app_lang');

                return fetch(`${bdtaskIlmCommonJs.BASE_URL}modules/api/v1/localize/strings/${langKey}`)
                    .then(data => data.json())
                    .then(data => (this.langstrings = data.data));
            }
        },

        getPhrase: function (phrase) {
            let found = this.langstrings.find(e => e.name == phrase);
            return found ? found.value : null;
        }
    }
};

bdtaskIlmCommonJs.init();
// END NEW COMMON JS OBJECTS

$(document).ready(function () {
    "use strict";
    $("#picsection").hide();
    $("#show").click(function () {
        var checked = $(this).is(':checked');
        if (checked) {
            $("#picsection").show();
        } else {
            $("#picsection").hide();
        }
    });

    $("#picsection").hide();

    var checked = $("#show").is(':checked');
    if (checked) {
        $("#picsection").show();
    } else {
        $("#picsection").hide();
    }
});

$(document).ready(function () {
    "use strict";
    $("#language").change(function () {
        var lagngval = $("#language").val();
        var baseurl = $("#baseurl").val();
        var url = baseurl + '/language/' + lagngval;

        $.ajax({
            method: "GET",
            url: url,
            dataType: "JSON",
            success: function (response) {
                location.reload();
            }
        });
    });
});


$(document).ready(function () {
    "use strict";
    var fontfamily = $("#fontfamily").val();

    if (fontfamily == null) {

    } else {
        $('body').css('font-family', fontfamily);
    }
});


$(document).ready(function () {
    "use strict";
    $(".toggle-password").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));

        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

});

$(document).ready(function () {
    "use strict";
    var invalidChars = ["-", "e", "+", "E"];

    $("input[type='number']").on("keypress", function (e) {
        if (invalidChars.includes(e.key)) {
            e.preventDefault();
        }
    });
});

$(document).ready(function () {
    "use strict";

    $('.check_all').on('change', function () {
        var $env = $(this),
            $table = $env.closest('.table'),
            isChecked = $env.prop('checked');

        if ($env.hasClass('full')) {
            $table.find(':checkbox').prop('checked', isChecked);
        } else if ($env.hasClass('create')) {
            $table.find('.s_create :checkbox').prop('checked', isChecked);
        } else if ($env.hasClass('read')) {
            $table.find('.s_read :checkbox').prop('checked', isChecked);
        } else if ($env.hasClass('edit')) {
            $table.find('.s_edit :checkbox').prop('checked', isChecked);
        } else if ($env.hasClass('delete')) {
            $table.find('.s_delete :checkbox').prop('checked', isChecked);
        }
    });
});

