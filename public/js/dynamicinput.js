$(document).ready(function () {
    var $stoppage = $('#stoppage'),
        $pickLocation =  $('#pick_location_id'),
        $dropLocation = $('#drop_location_id'),
        stoppageSumo = $stoppage.SumoSelect();

    $('#pick_location_id, #drop_location_id').on('select2:select select2:selecting', function (e) {
        var $target = $(this),
            $reverseTarget = (this.id == 'pick_location_id') ? $dropLocation : $pickLocation,

            // Select state by event type and selected value
            selectState = !(e.type == 'select2:selecting'),
            currentValue = $target.val() || 0;

            // Target select options
            $stoppageOption = $(`option[value=${currentValue}]`, $stoppage),
            $reverseOption = $(`option[value=${currentValue}]`, $reverseTarget);

        if ($stoppageOption.length) {
            $stoppageOption.prop({ disabled: selectState, selected: selectState });
            $reverseOption.prop({ disabled: selectState });
        }

        stoppageSumo.sumo.reload();
        $reverseTarget.trigger('change');
    });

    $('#vehicle_id').change(function () {
        var $selectedOption = $('option:selected', this),
            companyName = $selectedOption.data('cname');
        
        $('#company_name').val(companyName || '');
    })
});

function addfieldboard() {
    var time = new Date();
    var timeid = time.getTime();
    
    var baseurl = $('#baseurl').val(),
        url = baseurl + '/ajax/stand/all',
        stand = $.ajax({
            method: "get",
            url: url,
            dataType: "JSON",
            async: false
        });

    var html = '<div class="row mt-3" >';
    html += '<div class="col-3 ">';
    html += '<label for="picktime" class="form-label">Select Time *</label>';
    html += '   <input type="text" name="picktime[]" class="form-control element" placeholder="Select Time">';
    html += '</div>';

    html += '<div class="col-3 ">';
    html += '<label for="stand" class="form-label">Bus Stand *</label>';
    html += '<select  name="picstand[]" id="b_stand_' + timeid + '" class="form-select select2" required>';
    html += '<option value="" >None</option>';
    stand.responseJSON.forEach(element => {
        html += '<option value="' + element.id + '" >' + element.name + '</option>';
    });
    html += '</select>';
    html += '</div>';



    html += '<div class="col-3 ">';
    html += '<label for="detail" class="form-label">Detail</label>';
    html += '<input type="text" id="detail" name="detail[]" class="form-control"  placeholder="Detail">';
    html += '</div>';


    html += '<input type="hidden"  name="type[]"  value="1">';
    html += '<div class="col-3 mt-4">';

    html += '<a id ="' + timeid + '" class="btn btn-danger mt-1 text-white" onclick="removerow()">&times;</a>';
    html += '</div>';
    html += '</div>'


    $("#boardinadd").append(html);
    $(`#b_stand_${timeid}`).select2();
    timepic();
}


function removerow() {
    var id = this.event.target.id;
    $("#" + id).parent().parent('div').remove();
}

function removerowedit() {
    var id = this.event.target.id;
    $("#" + id).parent().parent('div').remove();
}

function addfielddrop() {
    var dtime = new Date();
    var dtimeid = dtime.getTime();
   
    var baseurl = $('#baseurl').val(),
        url = baseurl + '/ajax/stand/all',
        stand = $.ajax({
            method: "get",
            url: url,
            dataType: "JSON",
            async: false,
        });

    var html = '<div class="row mt-3">';
    html += '<div class="col-3 ">';
    html += '<label for="droptime" class="form-label">Select Time *</label>';
    html += '   <input type="text" name="droptime[]" class="form-control element" placeholder="Select Time">';
    html += '</div>';

    html += '<div class="col-3 ">';
    html += '<label for="dropstand" class="form-label">Bus Stand *</label>';
    html += '<select name="dropstand[]" id="d_stand_' + dtimeid + '" class="form-select select2" required>';
    html += '<option value="" >None</option>';

    stand.responseJSON.forEach(element => {
        html += '<option value="' + element.id + '" >' + element.name + '</option>';
    });
    
    html += '</select>';
    html += '</div>';



    html += '<div class="col-3">';
    html += '<label for="dropdetail" class="form-label">Detail</label>';
    html += '<input type="text" id="detail" name="dropdetail[]" class="form-control"  placeholder="Detail">';
    html += '</div>';


    html += '<input type="hidden"  name="droptype[]"  value="0">';
    html += '<div class="col-3 mt-4">';
    html += '   <a id ="' + dtimeid + '" class="btn btn-danger mt-1 text-white" onclick="removerowedit()">&times;</a>';
    html += '</div>';

    html += '</div>'


    $("#droppingadd").append(html);
    $(`#d_stand_${dtimeid}`).select2();
    timepic();
}

