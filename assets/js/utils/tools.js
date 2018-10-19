// modules function
var getSelectionArea = function($id)
{
    var txtarea = document.getElementById($id);
    var start = txtarea.selectionStart;
    var finish = txtarea.selectionEnd;
    return txtarea.value.substring(start, finish);
}

if (!String.format) {
    String.format = function(format) {

        var args = Array.prototype.slice.call(arguments, 1);

        return format.replace(/{(\d+)}/g, function(match, number) {
            return typeof args[number] != 'undefined'
                ? args[number]
                : match
                ;
        });
    };
}
