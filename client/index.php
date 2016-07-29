<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 21.07.2016
 * Time: 23:36
 */
?>

<!doctype html>
<html lang="en" ng-app="yii2AngApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/angular-loading-bar/build/loading-bar.min.css">
    <title>Document</title>
</head>
<body ng-controller="index">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#/">Одностраничное приложение</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#/"><i class="glyphicon glyphicon-home"></i> Главная</a></li>
                <li><a href="#/film/index"><i class="glyphicon glyphicon-film"></i> Каталог фильмов</a></li>
                <li><a href="#/user"><i class="glyphicon glyphicon-user"></i> Пользователь</a></li>
            </ul>
        </div>
    </nav>
    <div id="main" class="container">
        <!-- Здесь будет динамическое содержимое -->
        <div ng-view></div>
    </div>

    <footer class="text-center">
        <p> Yii 2.0.4 и AngularJs 1.5.7</p>
    </footer>

    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Подключаем AngularJS -->
    <script src="assets/angular/angular.min.js"></script>
    <script src="assets/angular-route/angular-route.min.js"></script>
    <script src="assets/angular-resource/angular-resource.min.js"></script>
    <script src="assets/angular-loading-bar/build/loading-bar.min.js"></script>
    <!-- Подключаем модули приложения -->
    <script src="app.js"></script>
    <!-- Модели -->
    <script src="models/film.js"></script>
    <script src="models/User.js"></script>
    <script src="models/AuthInterceptor.js"></script>

    <script src="controllers/site.js"></script>
    <script src="controllers/film.js"></script>
    <script src="controllers/user.js"></script>
</body>
</html>
