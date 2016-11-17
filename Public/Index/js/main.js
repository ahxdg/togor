$(function(){
	var video = $('#article-detail,#share-detail').find('video');
	$(video).each(function(){
		$(this).attr('poster','http://www.togor.cn/t/t.png');
	});
});