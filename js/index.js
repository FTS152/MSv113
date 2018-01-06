$( document ).ready(function() {
	$(".content").not("#npc").hide();

	//查詢顯示相關的npc
	$(".submit").click(function(){
	//Submission starts from here.
		$.ajax({
			type: 'POST',
			url: 'npc?name=' + $("#npc_form input").val(),//到時候會變成正確的位置
			// data: {name: $("#npc_form input").val()},
			success: function(data){
				var target = $("#npc table tbody tr").remove();
				for(index in data){
					$("#npc table tbody").append("<tr>"
						+ "<td>" + data[index].id + "</td>"
				        + "<td>" + data[index].name + "</td>"
				        + "<td>" + data[index].description + "</td>"
				        + "<td><img src=" + data[index].imgurl + "></td></tr>");
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			     alert("fail!");
			     console.log(XMLHttpRequest);
			     console.log(textStatus);
			     console.log(errorThrown);
			},
			contentType: "application/json",
			dataType: 'JSON'
		});
			return false;
	})
});


//讓起始畫面可以展現所有的npc
$.ajax({
	type: 'POST',
	url: 'npc/',//到時候會變成正確的位置
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#npc table tbody").append("<tr>"
				+ "<td>" + data[index].id + "</td>"
		        + "<td>" + data[index].name + "</td>"
		        + "<td>" + data[index].description + "</td>"
		        + "<td><img src=" + data[index].imgurl + "></td></tr>");
		}
	},
	error: function(XMLHttpRequest, textStatus, errorThrown) {
	     alert("fail!");
	     console.log(XMLHttpRequest);
	     console.log(textStatus);
	     console.log(errorThrown);
	},
	contentType: "application/json",
	dataType: 'JSON'
});