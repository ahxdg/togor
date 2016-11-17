
$('#logout').on('click',function(){
	$.ajax({
		url:ROOT + '/board/Public/logout',
		type:'get',
		success:function(obj){
			if (obj.status) {
				window.location = ROOT + obj.url;
			}else{
				alert(obj.info);
			}
		}
	});
});

$('.article-list').on('click','.close',function(event){
	var that = this;
	var li = $(that).parents('li');
	var id = $(li).attr('data-id');
	$.get(ROOT + '/board/article/delete?id='+id,function(obj){
		if (obj.status) {
			$(li).remove();
		}else{
			alert(obj.info);
		}
	});
	var event = event || window.event;
	if (event.stopPropagation) {
		event.stopPropagation();
	}else{
		event.cancelBubble = true;
	}
	if (event.preventDefault) {
		event.preventDefault();
	}else{
		event.returnValue = false; 
	}
});