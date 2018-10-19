// modules function
module.exports = {
    getSelectionArea: function($id)
    {
        var txtarea = document.getElementById($id);
        var start = txtarea.selectionStart;
        var finish = txtarea.selectionEnd;
        return txtarea.value.substring(start, finish);
    }
};
