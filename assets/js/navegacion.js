$(document).ready(function () {
	

	$(".nav-item").click(function (e) {
		e.preventDefault();
		console.log($(this).find("a").attr('href'));

	});

})