$(document).ready(function() {
    // active class
    $('#active_dashboard').attr( "class", "nav-item" );
    $('#active_product').addClass("nav-item dropdown active");
    // click add category select
    $('.input-group-append').click(function(){
    	$('#CategoryModal').modal('show');
    });
});