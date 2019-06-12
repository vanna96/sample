$(document).ready(function() {
    // active class
    $('.active-link').attr('class', '');
    $('#active-pro').attr('class', 'classWhite');
    $('#active-pro-create').attr('class', 'classWhite');
    // click add category select
    $('.input-group-append').click(function(){
    	$('#CategoryModal').modal('show');
    });
});