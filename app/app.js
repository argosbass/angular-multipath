var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);

function buildPath(path) {

        layout = '';

        if(path.courses){
          layout = 'partials/courses.html';
        }

        if(path.courseName){
          layout = 'partials/courseName.html';
        }

        if(path.level){
          layout = 'partials/level.html';
        }

        if(path.chapter){
          layout = 'partials/chapter.html';
        }

        return layout;

}



app.config(['$routeProvider', 
  function ($routeProvider) {

        $routeProvider
           
            .when('/main', {
                title: 'main',
                templateUrl: 'partials/main.html',
            }).
            when('/:courses', {
                templateUrl: buildPath
            })
            .when('/:courses/:courseName', {
                templateUrl: buildPath
            })
            .when('/:courses/:courseName/:level', {
                templateUrl: buildPath
            })
            .when('/:courses/:courseName/:level/:chapter', {
                templateUrl: buildPath
            });
         
  }])
    .run(function ($rootScope, $location) {
        $rootScope.$on("$routeChangeStart", function (event, next, current) {
       

                    $rootScope.location = $location;

                                        
                    var nextUrl = next.$$route.originalPath;
                    console.log(nextUrl);

         });
    });