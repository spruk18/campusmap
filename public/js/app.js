var app = angular.module("campusApp",["ngAlertify"]);

app.controller('LoginController',function($scope, $http, $window,alertify)
{
    $scope.loginData ={};
    $scope.invalidLogin=false;
    $scope.submitLogin = function()
    {
       $http({
            method: 'POST',
            url: 'auth/login',
            data: $scope.loginData
        })
        .success(function (data) {
           console.log('true ' + data.success);
           if(data.success)
           {
           		$window.location.href = 'home';
           }
           else
           {
           		//$scope.invalidLogin = true;
           		alertify.error("Wrong Username/Password");

           }
           
        })
        .error(function(data){        	
            console.log('false' + data.success);
        })
    }
});

app.controller('AddEmployeeController', function($scope)
{
	
})
