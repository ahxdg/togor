
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