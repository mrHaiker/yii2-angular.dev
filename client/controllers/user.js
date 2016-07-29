
yii2AngApp.config( function ($routeProvider, $stateProvider, $urlRouterProvider) {
    // $routeProvider
    //     .when('/user', {
    //         templateUrl: 'views/user/index.html',
    //         controller: 'mainUserCtrl'
    //     })
    //     .when('/user/register', {
    //         templateUrl: 'views/user/reg.html',
    //         controller: 'registerUserCtrl'
    //     })
    //     .when('/user/login', {
    //         templateUrl: 'views/user/login.html',
    //         controller: 'loginUserCtrl'
    //     });
    $stateProvider
        .state('user', {
            url: '/client/user',
            templateUrl: 'views/user/index.html',
            controller: 'mainUserCtrl',
            ncyBreadcrumb: {
                label: 'User'
            }
        })
        .state('user/register', {
            url: '/client/user/register',
            templateUrl: 'views/user/reg.html',
            controller: 'registerUserCtrl',
            ncyBreadcrumb: {
                label: 'Register'
            }
        })


});
yii2AngApp.controller('mainUserCtrl', function ($scope) {
    $scope.msg = 'controller connect';
});

yii2AngApp.controller('registerUserCtrl', function ($scope, User) {
    $scope.msg = 'done'
    $scope.data = {}
    $scope.register = function () {
        console.log($scope.data)
        if($scope.data.password == $scope.data.cpassword) {
            User.register($scope.data, function (data, req) {
                console.log(data);
            })
        }
    }
});

yii2AngApp.controller('loginUserCtrl', function ($scope, User, $window, $location) {
    $scope.data = {};
    $scope.login = function () {
        User.login($scope.data, function (data, req) {
            console.log(req);
            console.info(data);
            $window.localStorage.access_key = data.access_token;
            $location.path('/client/').replace();
        })
    }
});