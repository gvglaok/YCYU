$(function() {

    $("#regBtn").click(function() {
        $("#login").hide();
        $("#regist").fadeIn(500);
    });

});

function regCheck() {
    var key = $("#rkey").val();
    var ckey = $("#rckey").val();
    if ( key.length<6) {
        swal("Warning", "密码长度不能6个字符!", "warning");
    } else if(key != ckey){   
        swal("Warning", "两次密码输入不一致，请重新输入!", "warning");
    }
    //return key != ckey ? false : true;
};

function okReg () {
    swal("Success", "注册成功!", "success");
    location.href="/t6";
};


var ngYcyu = angular.module('ycyu', []);

ngYcyu.controller('addTec', ['$scope', '$http', function($scope, $http) {

        $scope.AddSkill = function() {
            var hp = {
                method: "post",
                url: "/t6/cusercenter/addSkill",
                headers: {'Content-Type':'application/x-www-form-urlencoded'},
                data: $scope.tec
            }

            $http(hp).then(function(response) {
              alert("添加成功");
            },function(response) {
              alert("Bad Request");
            });
        }

    }
]);
