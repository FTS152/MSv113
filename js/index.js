// $( document ).ready(function() {
	$(".content").not("#npc").hide();
	$(".navbar li").click(function(){

	});
	//查詢顯示相關的npc
	$("#npc button.submit").click(function(){
	//Submission starts from here.
		$.ajax({
			type: 'GET',
			url: 'npc?name=' + $("#npc_form input").val(),
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
			contentType: "application/json",
			dataType: 'JSON'
		});
			return false;
	})
	// $("#profession button.submit").click(function(){
	// //Submission starts from here.
	// 	$.ajax({
	// 		type: 'GET',
	// 		url: 'profession',
	// 		// data: {name: $("#npc_form input").val()},
	// 		success: function(data){
	// 			var target = $("#profession table tbody tr").remove();
	// 			for(index in data){
	// 				$("#profession table tbody").append("<tr>"
	// 					+ "<td style='width:10%'>" + data[index].id + "</td>"
	// 			        + "<td style='width:30%'>" + data[index].name + "</td>"
	// 			        + "<td style='width:30%'>" + data[index].stage + "</td>"
	// 			        + "<td style='width:30%'>" + data[index].parent + "</td></tr>");
	// 			}
	// 		},
	// 		contentType: "application/json",
	// 		dataType: 'JSON'
	// 	});
	// 		return false;
	// })
// });


//讓起始畫面可以展現所有的npc
$.ajax({
	type: 'GET',
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
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的職業
$.ajax({
	type: 'GET',
	url: 'profession',//到時候會變成正確的位置
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#profession table tbody").append("<tr>"
				+ "<td style='width:10%'>" + data[index].id + "</td>"
		        + "<td style='width:30%'>" + data[index].name + "</td>"
		        + "<td style='width:30%'>" + data[index].stage + "</td>"
		        + "<td style='width:30%'>" + data[index].parent + "</td></tr>");
		}
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});