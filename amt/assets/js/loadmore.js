jQuery(function($){
$('#true_loadmore').click(function(){
$(this).text('Загружаю...'); 
var data = {
'action': 'loadmore',
'query': posts,
'page' : current_page
};
$.ajax({
url:ajaxurl, 
data:data, 
type:'POST', 
success:function(data){
if( data ) { 
$('#true_loadmore').text('Загрузить ещё').before(data); 
current_page++; 
if (current_page == max_pages) $("#true_loadmore").remove(); 
} else {
$('#true_loadmore').remove(); 
}
}
});
});
});