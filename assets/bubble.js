firstLetter=$("div.toggle").text();
$("div.toggle").click(function(event) {
	let text=$("div.toggle").text();
	$("div.toggle").text((firstLetter==text)? "X":firstLetter);
	$("div.toggle,div.main,div.loginContainer").toggleClass('active');
});