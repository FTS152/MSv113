$( document ).ready(function() {
	$(".content").not("#npc").hide();

	$(".submit").click(function(){
	//Submission starts from here.
	var reg = $('#npc_form').serializeObject();
	$.ajax({
		type: 'POST',
		url: 'npc/',//到時候會變成正確的位置
		data: JSON.stringify(reg),
		success: function(data){
			console.log(data);
		},
		contentType: "application/json",
		dataType: 'json'
	});
		return false;
	})
});