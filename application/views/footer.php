</body>
<<<<<<< HEAD
</html>
<script>
$(document).ready(function(){
	$(".result tbody").on("click", "tr", function(e){
		var target = $(this).parents("div.content").attr('id');
		var id = $(this).find("td:first").text();
		var location = target + "/view?id=" + id;
		window.location.href = location;
	});
});
</script>
=======
<script src="js/serializeObject.js"></script>
<script src="js/index.js"></script>
<link rel="stylesheet" href="js/style.css">
</html>
>>>>>>> origin/master
