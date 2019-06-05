// remove class active 
$('.active-link').attr('class', '');
// add class active
$('#active-pro').attr('class', 'classWhite');
$('#active-pro-list').attr('class', 'classWhite');
// delete product
function dataDelete(id){
    var product_id = id;
    $("#deleteItem").attr("href", "{{url('product/delete')}}/"+product_id);
}