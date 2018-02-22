var start = $('.General').val();
var div = $('#matrix').val();
var months = $('#Months');
var matrix = $('#matrix');
var masiv = [];
var masivOne;
var namesMonth = [];
var weekName = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

$(window).on('load', function () {

    $.ajax({
        type: "GET",
        url: "datePhP.php",
        data: {
            load: start,
            divs: div
        }
    }).done(function (response) {

        masiv = response;
        var asd = masiv.split(',');
        console.log(asd);

        for (var h = 0; h < 7; h++){
            matrix.append('<div class="week">'+weekName[h]+'</div>');
        }
       /*
        var Month = asd[0];
        var bone = asd[4];
        var Days = parseInt(bone) + 1;
        months.append(Month);

        var masiv1 = namesMonth.split(' ');
        var res = masiv1.slice(0, 12);
        var correctMonth = res.indexOf(Month);
        console.log(correctMonth);
        */
      /*  matri();
        function matri() {
            var count = 1;
            for (var i = 0; i < 5; i++){
                matrix.append('<br>');
                for (var j = 0; j < 7; j++){
                    if (i == 0){
                        if (j < parseInt(posDate)){
                            matrix.append('<div class="days">&nbsp;</div>');
                        }else if (j >= parseInt(posDate)){
                            matrix.append('<div class="days">'+count+'</div>');
                            count++;
                        }
                    }else{
                        matrix.append('<div class="days">'+count+'&nbsp;</div>');
                        count++;

                    }if (count === Days){
                        break
                    }

                }
            }
            for (var d = 0; d < posDate1; d++){
                matrix.append('<div class="days">&nbsp;</div>');
            }
        }
*/
    });
}
);



/*      names.html(asd[0]);
        matrix.html(asd[2]);
        namesMonth = asd[3];
        var count = 1;



        $('.prev').on('click', function (event) {
            var result = correctMonth - count;
            count++;
            names.html(res[result])
        })*/