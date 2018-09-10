$(function(){
	var len = $('#busca').width();
	$('#autocomplete').css({'min-width':len+10, 'display':'none'});

	$('#busca').on('keyup', function(){

		var busca = $(this).val();

		$.ajax({
			url:'busca.php',
			type:'POST',
			data:{texto:busca},
			success:function(html){
				if(html != ''){
					$('#autocomplete').css('display', 'block');
				}else{
					$('#autocomplete').css('display', 'none');
				}

				$('#autocomplete').html(html);
			}
		});
	});
});