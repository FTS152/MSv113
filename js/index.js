<<<<<<< HEAD
$( document ).ready(function() {
	var activeContent = "#npc";
	$(activeContent).show();

	$(".navbar li").click(function(){
		$(activeContent).hide();
		var id = $(this).attr('id');
		switch(id[2]){
			case("1"): activeContent = "#npc"; break;
			case("2"): activeContent = "#profession"; break;
			case("3"): activeContent = "#map"; break;
			case("4"): activeContent = "#monster"; break;
			case("5"): activeContent = "#mission"; break;
			case("6"): activeContent = "#item"; break;
		}
		$(activeContent).show();
	});
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
					+ "<td style='width:10%'>" + data[index].id + "</td>"
	        		+ "<td style='width:25%'>" + data[index].name + "</td>"
	        		+ "<td style='width:50%'>" + data[index].description + "</td>"
	        		+ "<td style-'width:15%'><img src=" + data[index].imgurl + "></td></tr>");
			}
		},
		contentType: "application/json",
		dataType: 'JSON'
	});
		return false;
});
=======
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

>>>>>>> origin/master

//讓起始畫面可以展現所有的npc
$.ajax({
	type: 'GET',
<<<<<<< HEAD
	url: 'npc/',
=======
	url: 'npc/',//到時候會變成正確的位置
>>>>>>> origin/master
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#npc table tbody").append("<tr>"
				+ "<td style='width:10%'>" + data[index].id + "</td>"
		        + "<td style='width:25%'>" + data[index].name + "</td>"
		        + "<td style='width:50%'>" + data[index].description + "</td>"
		        + "<td style-'width:15%'><img src=" + data[index].imgurl + "></td></tr>");
		}
	},
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的職業
$.ajax({
	type: 'GET',
<<<<<<< HEAD
	url: 'profession',
=======
	url: 'profession',//到時候會變成正確的位置
>>>>>>> origin/master
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
$.ajax({
	type: 'GET',
	url: 'monster',
	data: JSON.stringify(""),
	// data: {name: $("#npc_form input").val()},
	success: function(data){
		for(index in data){
			if(data[index].imgurl === null) data[index].imgurl = "http:\/\/s6.heyxus.com\/maple\/custom\/monster\/large\/mo000001.gif";
			$("#monster table tbody").append("<tr>"
				+ '<td style="width:7.5%">' + data[index].id + '</td>'
	        	+ '<td style="width:15%">' + data[index].name + '</td>'
	        	+ '<td style="width:10%">' + data[index].lv + '</td>'
	        	+ '<td style="width:10%">' + data[index].hp + '</td>'
	        	+ '<td style="width:10%">' + data[index].mp + '</td>'
	        	+ '<td style="width:10%">' + data[index].atk + '</td>'
	       		+ '<td style="width:10%">' + data[index].def + '</td>'
	        	+ '<td style="width:12.5%">' + data[index].exp + '</td>'
	        	+ '<td style="width:15%"><img src="' + data[index].imgurl + '" style="width:50px; height:50px"></td></tr>');
		}
		console.log(data);
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});
$("#monster button.submit").click(function(){
	console.log("here");
//Submission starts from here.
	$.ajax({
		type: 'GET',
		url: 'monster?name=' + $("#monster_form input").val(),
		// data: {name: $("#npc_form input").val()},
		success: function(data){
			var target = $("#monster table tbody tr").remove();
			for(index in data){
				if(data[index].imgurl === null) data[index].imgurl = "http:\/\/s6.heyxus.com\/maple\/custom\/monster\/large\/mo000001.gif";
				$("#monster table tbody").append("<tr>"
					+ '<td style="width:7.5%">' + data[index].id + '</td>'
		        	+ '<td style="width:15%">' + data[index].name + '</td>'
		        	+ '<td style="width:10%">' + data[index].lv + '</td>'
		        	+ '<td style="width:10%">' + data[index].hp + '</td>'
		        	+ '<td style="width:10%">' + data[index].mp + '</td>'
		        	+ '<td style="width:10%">' + data[index].atk + '</td>'
		       		+ '<td style="width:10%">' + data[index].def + '</td>'
		        	+ '<td style="width:12.5%">' + data[index].exp + '</td>'
		        	+ '<td style="width:15%"><img src="' + data[index].imgurl + '" style="width:50px; height:50px"></td></tr>');
			}
			console.log(data);
		},
		contentType: "application/json",
		dataType: 'JSON'
	});
		return false;
});

