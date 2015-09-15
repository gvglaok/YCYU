$(function() {
    $("#regBtn").click(function() {
        $("#login").hide();
        $("#regist").fadeIn(500);
    });

})();

function regCheck() {
    var key = $("#rkey").val();
    var ckey = $("#rckey").val();
    if(key!=ckey)
    {
    	swal("Warning","两次密码输入不一致，请重新输入!","warning");
    }
    else
    {
    	swal("Success", "注册成功!", "success");
    }
    return key!=ckey ? false : true;
};
