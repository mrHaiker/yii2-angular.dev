'use strict';
// Ссылка на серверную часть приложения
var serviceBase = 'http://yii2-angular.dev:3000/server/web';
// Основной модуль приложения и его компоненты
// рабочий модуль
var yii2AngApp = angular.module('yii2AngApp', [
    'ngRoute',
    'angular-loading-bar',
    'yii2AngApp.site',
    'yii2AngApp.film',
    'yii2AngApp.user',
    'ui.router',
    'ncy-angular-breadcrumb'
]).config(function ($httpProvider, $routeProvider, $locationProvider) {
    
    $httpProvider.interceptors.push('AuthInterceptor');
    $locationProvider.html5Mode(true);
});
// рабочий модуль
var yii2AngApp_site = angular.module('yii2AngApp.site', ['ngRoute']);
var yii2AngApp_film = angular.module('yii2AngApp.film', ['ngRoute']);
var yii2AngApp_user = angular.module('yii2AngApp.user', ['ngRoute', 'ngResource']);
