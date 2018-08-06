$(document).ready(function(){
	$('.updatecart').click(function(){
		/*alert(1232);*/
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find('.qty').val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'capnhat/'+rowid+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowid,"qty":qty},
			success: function(data){
				location.reload();
			}
		});

	});
});