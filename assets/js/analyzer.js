
$( "#analyzer_sentence" ).dblclick(function() {
    let sel = tools.getSelectionArea('analyzer_sentence');
    let calls = ['larousse', 'rhyme', 'phonetic'];

    $('.tab-pane').remove();
    $(".nav-item").remove();

    $(calls).each(function(i, call){

        $.ajax({
            url: "/analyzer/call/" + call + "/" + sel,
            success: function(result){

                let $tab     = '<li class="nav-item"><a class="nav-link" id="' + call + '-tab" data-toggle="tab" href="#tab-'+call+'" role="tab" aria-controls="' + call + '" aria-selected="true">' + call + '</a></li>';
                let $content = '<div class="tab-pane fade show panel-' + call + '" id="tab-'+ call +'" role="tabpanel" aria-labelledby="'+call+'-tab"></div>';

                $('#myTab').append($tab);
                $('#myTabContent').append($content);

                $(".panel-" + call).html(result);

                $(".nav-item a").first().addClass('active');
                $('.tab-pane').first().addClass('active');
            }
        });
    });
});