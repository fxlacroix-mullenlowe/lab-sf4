/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
var $ = require('jquery');
require('jquery-ui-bundle');
require('bootstrap');

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');
require('../css/card.scss');

// utility function
var tools = require('./tools');

function allowDrop(ev) {
    ev.preventDefault();
}


if($(".drag-poker-easy ").length){

    let $idParent = null;

    $(".card").draggable({
        revert : 'invalid',
        snap: '.card-container',
        start: function(){
            console.log("start");
            console.log($(this).parentNode);
            $idParent = $(this).parentNode;

        },
        stop: function (event, ui) {
            console.log("stop");
            console.log($(this));
            //positions[this.id] = ui.position
            //localStorage.positions = JSON.stringify(positions)
        }
    });

    $('.card-container').droppable({
        accept : '.card',
        drop : function(a,b,c){
            console.log("drop");
            console.log($(this))
        }
    });

    /*
    $("#draggable3").draggable({
        containment: "#containment-wrapper",
        scroll: false,
        stop: function (event, ui) {
            positions[this.id] = ui.position
            localStorage.positions = JSON.stringify(positions)
        }
    });
    */

}



if($(".drag-poker-hard").length){

    $( ".card" ).draggable({
        snap: ".in-hand",
        //revert : true
    });
    $('#drop').droppable({

        drop : function(){
            alert('Action terminée !'); // cette alerte s'exécutera une fois le bloc déposé
        }

    });
}

