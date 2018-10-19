// CSS
require('../css/app.scss');
require('../css/card.scss');

// JS
var tools = require('./tools');
var $ = require('jquery');
require('jquery-ui-bundle');
require('bootstrap');

if($("#game_battle").length) {
    require('../css/battle.scss');
    require('./battle');
}

// cards drag and drop
if($(".drag-poker-easy").length){
    $( ".cards-sortable" ).sortable({
        revert: true
    });
}
if($(".drag-poker-hard").length){
    $( ".cards-sortable" ).sortable({
        revert: true
    });
}
