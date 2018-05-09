$(function(){
    var removelink = '<a class="remove" href="#" onclick"$(this).parent().slideup(function(){$(this).remove()};return false>"remove</a>';
    $('a.add').custom({append: removeLink});
});