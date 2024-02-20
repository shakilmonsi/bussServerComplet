function myFunction() {
    var total = 0;
    var layout = $('#layout').val();

    if (!layout) {
        return false;
    }

    var totalseat = $('#total_seat').val();
    var totallayout = layout.split('-');
    var total = 0;
    var alpha = 65;
    var seatarray = [];

    for (var i = 0; i < totallayout.length; i++) {
        total += totallayout[i] << 0;
    }

    var lineseat = totalseat / total;
    var afterlineseat = totalseat % total

    for (var j = 1; j <= lineseat; j++) {
        for (let x = 1; x <= total; x++) {
            var seat = String.fromCharCode(alpha) + x;
            seatarray.push(seat);
        }

        alpha += 1;
    }


    for (let k = 1; k <= afterlineseat; k++) {
        var remainseat = String.fromCharCode(alpha) + k;
        seatarray.push(remainseat);
    }

    if ($('#last_seat').is(":checked")) {
        var lastseat = String.fromCharCode(90);

        seatarray.push(lastseat);
    }

    let seatsnumber = seatarray.toString();
    $('#seat_number').val(seatsnumber);

}