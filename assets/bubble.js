$("div.toggle").click(function(event) {
	$("div.toggle").text('X');
	$("div.toggle,div.main,div.loginContainer").toggleClass('active');
});