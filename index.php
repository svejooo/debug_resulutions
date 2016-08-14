<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function () { // Информация в углу о разрешении и типе BS
	$("body").append("<div id='cur_bs_resolution' style='width:90px; height:85px; position:fixed; bottom:0; left:0; text-align:center; background:#000; color:#fff; font-size: 31px; z-index:100;'></div>");
	print_cur_resolution();
});

$(window).resize(function () {
	print_cur_resolution();
});

function print_cur_resolution() {
	var curWidth = self.innerWidth;
	if (curWidth < 768) {
		window.location = 
		//$("#cur_bs_resolution").empty().append("XS\n" + curWidth);
	}
	if (curWidth >= 768 && curWidth < 992) {
		$("#cur_bs_resolution").empty().append("SM\n" + curWidth);
	}
	if (curWidth >= 992 && curWidth < 1200) {
		$("#cur_bs_resolution").empty().append("MD\n" + curWidth);
	}
	if (curWidth >= 1200) {
		$("#cur_bs_resolution").empty().append("LG\n" + curWidth);
	}
} // конец отладочной функции

</script>
</html>
