$(function() {
    $("#regBtn").click(function() {
        $("#login").hide();
        $("#regist").fadeIn(500);
    });
});

function regCheck() {
    var key = $("#rkey").val();
    var ckey = $("#rckey").val();
    if (key != ckey) {
        swal("Warning", "两次密码输入不一致，请重新输入!", "warning");
    } else {
        swal("Success", "注册成功!", "success");
    }
    return key != ckey ? false : true;
};


var ngYcyu = angular.module('ycyu', []);

ngYcyu.controller('addTec', ['$scope', '$http',
    function($scope, $http) {

        $scope.AddSkill = function() {
            var hp = {
                method: "post",
                url: "/t6/cusercenter/addSkill",
<<<<<<< HEAD
                headers: {'Content-Type':'application/x-www-form-urlencoded'},
=======
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
>>>>>>> origin/master
                data: $scope.tec
            }

            $http(hp).then(function(response) {
<<<<<<< HEAD
               /* swal("success","添加成功","It's OK!!");*/
                alert("OK 2015-9-22 15:32:56");
=======
                alert("OK");
>>>>>>> origin/master
            },function(response) {
                alert("Bad Request");
            });
        }

    }
]);
