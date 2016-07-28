yii2AngApp_user.factory('User', function ($resource) {
    return $resource(serviceBase+'user/register', {

    }, {
        register: {
            url: serviceBase+'user/register',
            method: 'POST'
        },
        login: {
            url: serviceBase+'user/login',
            method: 'POST'
        }
    });
});