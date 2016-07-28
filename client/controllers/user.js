
yii2AngApp_user.config( function ($routeProvider) {
    $routeProvider
        .when('/user', {
            templateUrl: 'views/user/index.html',
            controller: 'mainUserCtrl'
        })
        .when('/user/register', {
            templateUrl: 'views/user/reg.html',
            controller: 'registerUserCtrl'
        })
        .when('/user/login', {
            templateUrl: 'views/user/login.html',
            controller: 'loginUserCtrl'
        })

});
yii2AngApp_user.controller('mainUserCtrl', function ($scope) {
    $scope.msg = 'controller connect';
});

yii2AngApp_user.controller('registerUserCtrl', function ($scope, User) {
    $scope.msg = 'done'
    $scope.data = {}
    $scope.register = function () {
        console.log($scope.data)
        if($scope.data.password == $scope.data.cpassword) {
            User.register($scope.data, function (data, req) {
                console.log(req);
            })
        }
    }
});

yii2AngApp_user.controller('loginUserCtrl', function ($scope) {
    $scope.data = {};
    $scope.login = function () {
        console.log($scope.data);
    }
});