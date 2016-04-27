angular.module('DropDownApp', [])
.controller('DropDownCtrl', ['$scope', function($scope){
//$scope.emp_type= $scope.emp_type[0];

}]);

var loginApp = angular.module('loginApp', ['mainCtrl', 'loginService']); 
angular.module('loginService', [])
.factory('Login', function($http) {
    return {
        
        checkLogin : function(loginData)
        {
            return $http({
                method: 'POST',
                url: 'auth/login',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(loginData)
            });
        },      
    }
});

angular.module('mainCtrl', [])
.controller('mainController', function($scope, $http, Login) {
    $scope.loginData = {};
    $scope.loading = true;


    Login.get()
        .success(function(data) {
            $scope.login = data;
            $scope.loading = false;
        });

    $scope.submitLogin = function() {
        console.log('asd');
        $scope.loading = true;
        Login.save($scope.loginData)
            .success(function(data) {
                
                Login.get()
                    .success(function(getData) {
                        $scope.login = getData;
                        $scope.loading = false;
                    });
            })
            .error(function(data) {
                console.log(data);
            });
    };    

});