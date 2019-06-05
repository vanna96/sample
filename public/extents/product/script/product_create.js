$(document).ready(function() {
    var category_id_selected = $('#category_id_selected').val();
    var status_id_selected = $('#status_id_selected').val();
    // active class
    $('.active-link').attr('class', '');
    $('#active-pro').attr('class', 'classWhite');
    $('#active-pro-create').attr('class', 'classWhite');
    // select class
    $('#category_selected').val(category_id_selected);
    $('#status_selected').val(status_id_selected);
});