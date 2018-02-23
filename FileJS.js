var start = $('.General').val();
var months = $('#Months');
var matrix = $('#matrix');
var matr = $('#matr');
var masiv = [];
var weekName = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
for (var h = 0; h < 7; h++){
    matr.append('<div class="week">'+weekName[h]+'</div>');
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
            months.append(asd[0]);
            var tari = asd[0].split(' ');
            var nextear = parseInt(tari[1]);
            var day = parseInt(asd[1]);
            $( document ).ready(function() {
                $('#matr'+day+'').css('color', 'red');
                $('#matr div').slice(-2).addClass("special");
                $('#matrix .divs1 div').slice(-2).addClass("special");
                $('#matrix .divs2 div').slice(-2).addClass("special");
                $('#matrix .divs3 div').slice(-2).addClass("special");
                $('#matrix .divs4 div').slice(-2).addClass("special");
                $('#matrix .divs5 div').slice(-2).addClass("special");
                $('#matrix .divs6 div').slice(-2).addClass("special");
            });
            matrix.append(asd[2]);
            var count = asd[3];
            var asdf = parseInt(count);
            $('.next').on('click', function () {
                asdf += 1;
                if (asdf > 12){
                    nextear += 1;
                    asdf = 1;
                }
                $.ajax({
                    type: 'GET',
                    url: 'datePhP.php',
                    data: {
                        next: asdf,
                        nextyear: nextear
                    }
                }).done(function (event) {
                    masiv = [];
                    masiv = event;
                    var asd = masiv.split(',');
                    months.html(asd[4]);
                    matrix.html(asd[5]);
                    $( document ).ready(function() {
                        $('#matrix .divs1 div').slice(-2).addClass("special");
                        $('#matrix .divs2 div').slice(-2).addClass("special");
                        $('#matrix .divs3 div').slice(-2).addClass("special");
                        $('#matrix .divs4 div').slice(-2).addClass("special");
                        $('#matrix .divs5 div').slice(-2).addClass("special");
                        $('#matrix .divs6 div').slice(-2).addClass("special");
                    });
                })
            });
            $('.prev').on('click', function () {
                asdf -=1;
                if(asdf == 0){
                    nextear -= 1;
                    asdf = 12;
                }
                $.ajax({
                    type: 'GET',
                    url: 'datePhP.php',
                    data: {
                        prev: asdf,
                        prevyear: nextear
                    }
                }).done(function (event) {
                    masiv = [];
                    masiv = event;
                    var asd = masiv.split(',');
                    months.html(asd[6]);
                    matrix.html(asd[7]);
                    $( document ).ready(function() {
                        $('#matrix .divs1 div').slice(-2).addClass("special");
                        $('#matrix .divs2 div').slice(-2).addClass("special");
                        $('#matrix .divs3 div').slice(-2).addClass("special");
                        $('#matrix .divs4 div').slice(-2).addClass("special");
                        $('#matrix .divs5 div').slice(-2).addClass("special");
                        $('#matrix .divs6 div').slice(-2).addClass("special");
                    });

                })
            });

            
        });
    }
);
