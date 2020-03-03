//$(function(){

	var pageSearch = 1;

	$('#btnsearch').on('click',function(){
		pageSearch++;

		var posttype = $("#hidePostType").val();
		var search = $("#hideSearch").val();

		var data = {
			action:'tornese_search',
			paged:pageSearch,
			posttype:posttype,
			search:search
		};

		$.post(
			'wp-admin/admin-ajax.php',
			data,
			function(response){
				response = response.substring(0,(response.length - 1));
				$(".search .listagem .content").append(response);
			}
		);
	});
//});