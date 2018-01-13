// $( document ).ready(function() {
	var activeContent = "#npc";
	$(activeContent).show();
	count_tr(activeContent);
	// $(activeContent).show();

function count_tr(activeContent){
	var count_rows = activeContent + " tbody tr";
	var count_display = activeContent + "_count";
	var temp  = $(count_rows).length;
	$(count_display).text(temp);
	console.log(temp);
}
$(".navbar li").click(function(){
	//display the table
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
	count_tr(activeContent);
});
// });

//查詢npc
$("#npc button.submit").click(function(){
	$.ajax({
		type: 'GET',
		url: 'npc?name=' + $("#npc_form input").val(),
		success: function(data){
			var target = $("#npc table tbody tr").remove();
			for(index in data){
				$("#npc table tbody").append("<tr>"
					+ "<td style='width:10%'>" + data[index].id + "</td>"
	        		+ "<td style='width:25%'>" + data[index].name + "</td>"
	        		+ "<td style='width:50%'>" + data[index].description + "</td>"
	        		+ "<td style-'width:15%'><img src=" + data[index].imgurl + "></td></tr>");
			}
			count_tr(activeContent);
		},
		contentType: "application/json",
		dataType: 'JSON'
	});
	return false;
});
//查詢monster
$("#monster button.submit").click(function(){
	$.ajax({
		type: 'GET',
		url: 'monster?name=' + $("#monster_form input").val(),
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
			count_tr(activeContent);
		},
		contentType: "application/json",
		dataType: 'JSON'
	});
	return false;
});
//查詢mission
$("#mission button.submit").click(function(){
	$.ajax({
		type: 'GET',
		url: 'mission?level=' + $("#mission_form input[name='level']").val() + "&name=" + $("#mission_form input[name='name']").val(),
		success: function(data){
			var target = $("#mission table tbody tr").remove();
			for(index in data){
				if(data[index].highest_lv == 0) data[index].highest_lv = "N/A";
				$("#mission table tbody").append("<tr>"
					+ "<td style='width:5%'>" + data[index].id + "</td>"
			        + "<td style='width:22.5%'>" + data[index].name + "</td>"
			        + "<td style='width:37.5%'>" + data[index].description + "</td>"
			        + "<td style='width:10%'>" + data[index].lowest_lv + "</td>"
			        + "<td style='width:10%'>" + data[index].highest_lv + "</td>"
			        + "<td style='width:15%'>" + data[index].npc_id + "</td></tr>");
			}
			count_tr(activeContent);
		},
		error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
		contentType: "application/json",
		dataType: 'JSON'
	});
	return false;
});
//查詢item
$("#item button.submit").click(function(){
	$.ajax({
		type: 'GET',
		url: 'item?name=' + $("#item_form input[name='name']").val() + "&type=" + $("#item_form input[name='type']").val(),
		success: function(data){
			var target = $("#item table tbody tr").remove();
			for(index in data){
				$("#item table tbody").append("<tr>"
					+ "<td style='width:10%'>" + data[index].id + "</td>"
			        + "<td style='width:20%'>" + data[index].name + "</td>"
			        + "<td style='width:20%'>" + data[index].type + "</td>"
			        + "<td style='width:50%'>" + data[index].description + "</td></tr>");
			}
			count_tr(activeContent);
		},
		error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
		contentType: "application/json",
		dataType: 'JSON'
	});
	return false;
});
//查詢map
$("#map button.submit").click(function(){
	$.ajax({
		type: 'GET',
		url: 'map?name=' + $("#map_form input[name='name']").val() + "&area=" + $("#map_form input[name='area']").val(),
		success: function(data){
			var target = $("#map table tbody tr").remove();
			for(index in data){
				$("#map table tbody").append("<tr>"
					+ "<td style='width:10%'>" + data[index].id + "</td>"
			        + "<td style='width:45%'>" + data[index].area + "</td>"
			        + "<td style='width:45%'>" + data[index].name + "</td></tr>");
			}
			count_tr(activeContent);
		},
		error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
		contentType: "application/json",
		dataType: 'JSON'
	});
	return false;
});





//讓起始畫面可以展現所有的npc
$.ajax({
	type: 'GET',
	url: 'npc/',
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#npc table tbody").append("<tr>"
				+ "<td style='width:10%'>" + data[index].id + "</td>"
		        + "<td style='width:25%'>" + data[index].name + "</td>"
		        + "<td style='width:50%'>" + data[index].description + "</td>"
		        + "<td style-'width:15%'><img src=" + data[index].imgurl + "></td></tr>");
		}
		count_tr("#npc");
	},
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的職業
$.ajax({
	type: 'GET',
	url: 'profession',
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#profession table tbody").append("<tr>"
				+ "<td style='width:10%'>" + data[index].id + "</td>"
		        + "<td style='width:30%'>" + data[index].name + "</td>"
		        + "<td style='width:30%'>" + data[index].stage + "</td>"
		        + "<td style='width:30%'>" + data[index].parent + "</td></tr>");
		}
		count_tr("#profession");
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的怪物
$.ajax({
	type: 'GET',
	url: 'monster',
	data: JSON.stringify(""),
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
		count_tr("#monster");
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的任務
$.ajax({
	type:'GET',
	url: 'mission',
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			if(data[index].highest_lv == 0) data[index].highest_lv = "N/A";
			$("#mission table tbody").append("<tr>"
				+ "<td style='width:5%'>" + data[index].id + "</td>"
		        + "<td style='width:22.5%'>" + data[index].name + "</td>"
		        + "<td style='width:37.5%'>" + data[index].description + "</td>"
		        + "<td style='width:10%'>" + data[index].lowest_lv + "</td>"
		        + "<td style='width:10%'>" + data[index].highest_lv + "</td>"
		        + "<td style='width:15%'>" + data[index].npc_id + "</td></tr>");
		}
		count_tr("#mission");
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的任務
$.ajax({
	type:'GET',
	url: 'item',
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#item table tbody").append("<tr>"
				+ "<td style='width:10%'>" + data[index].id + "</td>"
		        + "<td style='width:20%'>" + data[index].name + "</td>"
		        + "<td style='width:20%'>" + data[index].type + "</td>"
		        + "<td style='width:50%'>" + data[index].description + "</td></tr>");
		}
		count_tr("#item");
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});
//讓起始畫面可以load所有的地圖
$.ajax({
	type:'GET',
	url: 'map',
	data: JSON.stringify(""),
	success: function(data){
		for(index in data){
			$("#map table tbody").append("<tr>"
				+ "<td style='width:10%'>" + data[index].id + "</td>"
		        + "<td style='width:45%'>" + data[index].area + "</td>"
		        + "<td style='width:45%'>" + data[index].name + "</td></tr>");
		}
		count_tr("#map");
	},
	error: function (jqXHR, exception) {console.log(exception);console.log(jqXHR);},
	contentType: "application/json",
	dataType: 'JSON'
});