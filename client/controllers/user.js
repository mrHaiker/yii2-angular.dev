
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

});
yii2AngApp_user.controller('mainUserCtrl', function ($scope) {
    $scope.msg = 'controller connect';
});

yii2AngApp_user.controller('registerUserCtrl', function ($scope) {
    $scope.msg = 'done'
    $scope.data = {}
    $scope.register = function () {
        alert('register')
        console.log($scope.data)
    }
});
