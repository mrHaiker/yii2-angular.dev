'use strict';
// Ссылка на серверную часть приложения
var serviceBase = 'http://yii2-angular.dev:3000/server/web';
// Основной модуль приложения и его компоненты
// рабочий модуль
var yii2AngApp = angular.module('yii2AngApp', [
    'ngRoute',
    'yii2AngApp.site',
    'yii2AngApp.film',
    'yii2AngApp.user'
]).config(function ($httpProvider, $routeProvider) {
    $routeProvider.otherwise({
        redirectTo: '/film/index'
    });
    $httpProvider.interceptors.push('AuthInterceptor');
});
// рабочий модуль
var yii2AngApp_site = angular.module('yii2AngApp.site', ['ngRoute']);
var yii2AngApp_film = angular.module('yii2AngApp.film', ['ngRoute']);
var yii2AngApp_user = angular.module('yii2AngApp.user', ['ngRoute', 'ngResource']);
