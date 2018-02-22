var start = $('.General').val();
var months = $('#Months');
var matrix = $('#matrix');
var matr = $('#matr');
var masiv = [];
var namesMonth = [];
var weekName = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
for (var h = 0; h < 7; h++){
    matr.append('<div class="week">'+weekName[h]+'</div>');
}
nextclick();
function nextclick() {
    var count = 0;
    var count1 = 0;
    $('.next').on('click', function () {
        count += 1;
        count1 += 1;
        $.ajax({
            type: 'GET',
            url: 'datePhP.php',
            data: {
                next: count
            }
        }).done(function (event) {
            masiv = [];
            masiv = event;
            var asd = masiv.split(',');
            console.log(asd);
            matrix.html(asd[4]);
            namesMonth = asd[1];
            var masiv1 = namesMonth.split(' ');
            var res = masiv1.slice(0, 12);
            var Month = asd[3];
            var correctMonth = res.indexOf(Month) + count1;
            console.log(correctMonth);
            months.html(res[correctMonth])
        })
    });
}
prevclick();

function prevclick() {
    var count = 0;
    var count1 = 0;
    $('.prev').on('click', function () {
        count += 1;
        count1 += 1;
        $.ajax({
            type: 'GET',
            url: 'datePhP.php',
            data: {
                prev: count
            }
        }).done(function (event) {
            masiv = [];
            masiv = event;
            var asd = masiv.split(',');
            console.log(asd);
            matrix.html(asd[5]);
            namesMonth = asd[1];
            var masiv1 = namesMonth.split(' ');
            var res = masiv1.slice(0, 12);
            var Month = asd[3];
            var correctMonth = res.indexOf(Month) - count1;
            months.html(res[correctMonth])
        })
    });
}
$(window).on('load', function () {
        $.ajax({
            type: "GET",
            url: "datePhP.php",
            data: {
                load: start
            }
        }).done(function (response) {
            masiv = response;
            var asd = masiv.split(',');
            console.log(asd);
            months.append(asd[0]);
            matrix.append(asd[2]);
        });
    }
);
