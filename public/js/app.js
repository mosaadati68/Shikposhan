var myApp = angular.module('myApp', [
    'ngRoute',
    'ngCookies',
    'angular-loading-bar',
    'ngMessages',
    'ngMaterial',
    'angular-ladda',
    'ngProgress',
    'rzModule',
]);

myApp.config(['$routeProvider', 'cfpLoadingBarProvider',
    function ($routeProvider, cfpLoadingBarProvider) {
        $routeProvider.when('/login', {templateUrl: '/templates/users/login.html', controller: 'userController', authenticated: false});
        $routeProvider.when('/test', {templateUrl: '/templates/users/test.html', controller: 'testController', authenticated: false});
        $routeProvider.when('/dashboard', { templateUrl: '/templates/users/dashboard.html', controller: 'homeController', authenticated: true });
        $routeProvider.when('/', {templateUrl: '/templates/home.html', controller: 'homeController', authenticated: false });
        $routeProvider.when('/register', {templateUrl: '/templates/users/register.html', controller: 'userController', authenticated: false});
        $routeProvider.when('/profile', { templateUrl: '/templates/users/profile.html', controller: 'userController', authenticated: true });
        $routeProvider.when('/cart', { templateUrl: '/templates/users/cart.html', controller: 'cartController', authenticated: true });
        $routeProvider.when('/gallery/view', { templateUrl: '/templates/gallery/gallery-view.html', controller: 'galleryController', authenticated: true });
        $routeProvider.when('/gallery/view/:id', { templateUrl: '/templates/gallery/gallery-single.html', controller: 'galleryController', authenticated: true });
        $routeProvider.when('/gallery/add', { templateUrl: '/templates/gallery/gallery-add.html', controller: 'galleryController', authenticated: true });
        $routeProvider.when('/gallery/add', { templateUrl: '/templates/gallery/gallery-add.html', controller: 'galleryController', authenticated: true });
        $routeProvider.otherwise('/');
        cfpLoadingBarProvider.includeSpinner = false;
    }
]);

myApp.run(['$rootScope', '$location', 'userModel',
    function ($rootScope, $location, userModel) {
        $rootScope.$on('$routeChangeStart', function (event, next, current) {
            if (next.$$route.authenticated) {
                if (!userModel.getAuthStatus()) {
                    $location.path('/');
                }
            }
            if (next.$$route.originalPath == '/') {
                if (userModel.getAuthStatus()) {
                    $location.path(current.$$route.originalPath);
                }
            }
        });
    }
]);
myApp.directive('dropzone', function () {
    return function (scope, element, attrs) {
        var config, dropzone;

        config = scope[attrs.dropzone];

        // create a Dropzone for the element with the given options
        dropzone = new Dropzone(element[0], config.options);

        // bind the given event handlers
        angular.forEach(config.eventHandlers, function (handler, event) {
            dropzone.on(event, handler);
        });
    };
});