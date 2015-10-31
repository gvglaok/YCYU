$(function() {

    $("#regBtn").click(function() {
        $("#login").hide();
        $("#regist").fadeIn(500);
    });

    $("button[name^='updata']").click(function() {
        var isID = $(this).attr("sid");
        var sname = "#name" + isID;
        var slevel = "#level" + isID;
        var sdes = "#descript" + isID;
        var tname = $(sname).text();
        var tlevel = $(slevel).text();
        var tdes = $(sdes).text();
        $("#upName").val(tname);
        $("#upLevel").val(tlevel);
        $("#upDes").val(tdes);
        $("#usid").val(isID);
    });

    $("button[name^='delete']").click(function() {
        swal({
          title: " 确认删除 ?",
          text: "删除后将无法恢复！",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "确认",
          cancelButtonText: "取消",
          closeOnConfirm: false
        },function(){
            var thisID=$(this).attr("sid");
            deleteSK(thisID);
        });
    });

    $("#usbtn").click(updataSkill);

});

function regCheck() {
    var key = $("#rkey").val();
    var ckey = $("#rckey").val();
    if (key.length < 6) {
        swal("Warning", "密码长度不能6个字符!", "warning");
    } else if (key != ckey) {
        swal("Warning", "两次密码输入不一致，请重新输入!", "warning");
    }
    //return key != ckey ? false : true;
};

function okReg() {
    swal("Success", "注册成功!", "success");
    location.href = "/t6";
};

//验证域有效性 -> 需要确定是否为当前用户的SkillID
function updataSkill() {

    var sname = $("#upName").val();
    var slevel = $("#upLevel").val();
    var sdes = $("#upDes").val();
    var sid = $("#usid").val();
    $.ajax({
            url: '/t6/cusercenter/modifySkill',
            type: 'post',
            data: {
                "name": sname,
                "level": slevel,
                "des": sdes,
                "sid": sid
            }
        })
        .done(function() {
            swal("Success","修改成功","success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
};

//delete skill
function deleteSK (sid) {
    $.ajax({
        url: '/t6/cusercenter/deleteSkill',
        type: 'post',
        data: {"sid": sid},
    })
    .done(function() {
        swal("Success","删除成功","success");
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });    
}

//angular ajax
var ngYcyu = angular.module('ycyu', []);

ngYcyu.controller('addTec', ['$scope', '$http', function($scope, $http) {

    $scope.AddSkill = function() {
        var hp = {
            method: "post",
            url: "/t6/cusercenter/addSkill",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: $scope.tec
        }

        $http(hp).then(function(response) {
            alert("添加成功");
        }, function(response) {
            alert("Bad Request");
        });
    }

}]);


