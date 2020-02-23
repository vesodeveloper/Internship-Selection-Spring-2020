var app=angular.module("app",[]);
app.controller("userCtrl",function($scope){
    $scope.logmenu=false;
    $scope.showmenu=function(){
        $scope.logmenu=!$scope.logmenu;
    };
});


