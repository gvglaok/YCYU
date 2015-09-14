/*(function () {
	$("#regBtn").click(function(){
		$("#regist").show();
	});
})();*/

$(document).ready(function(){
	$("#regBtn").click(function(){
		$("#login").hide();
		$("#regist").fadeIn(500);
	});
});