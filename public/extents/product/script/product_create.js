$(document).ready(function() {
    var category_id_selected = $('#category_id_selected').val();
    var status_id_selected = $('#status_id_selected').val();
    // active class
    $('.active-link').attr('class', '');
    $('#active-pro').attr('class', 'classWhite');
    $('#active-pro-create').attr('class', 'classWhite');
    // select class
    if(category_id_selected !== ''){
        $('#category_selected').val(category_id_selected).trigger('change');
    }
    if(status_id_selected !== ''){
        $('#status_selected').val(status_id_selected).trigger('change');
    }
    // click add category select
    $('.input-group-append').click(function(){
    	$('#CategoryModal').modal('show');
    });
});