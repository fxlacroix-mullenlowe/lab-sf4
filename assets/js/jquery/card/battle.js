// modules function
$('.game1 .card titi').click(function(){

    var $child1 = $('.game1 .card').first();
    var $card1 = $child1.attr("attr-value");
    var $value1 = $card1.split('-')[1];

    $child1.addClass($card1);
    $('.card-1').prepend($child1).animate();

    var $child2 = $('.game2 .card').first();
    var $card2 = $child2.attr("attr-value");
    var $value2 = $card2.split('-')[1];

    $child2.addClass($card2);
    $('.card-2').prepend($child2).animate();


    setTimeout(function(){

        $child1.removeClass($card1);
        $child2.removeClass($card2);

        if($value1 > $value2) {

            // game 1 win
            $('.game1')
                .append($('.card-2 .card'))
                .append($('.card-1 .card'));

        }else if($value1 > $value2){

            // game 2 win
            $('.game2')
                .append($('.card-2 .card'))
                .append($('.card-1 .card'));

        } else {
        }

    }, 500);

});
