// remove class active 
$('.active-link').attr('class', '');
// add class active
$('#active-cat').attr('class', 'classWhite');
$('#active-cat-list').attr('class', 'classWhite');
// delete product
function dataDelete(id){
    var category_id = id;
    $("#deleteItem").attr("href", "{{url('category/delete')}}/"+category_id);
}