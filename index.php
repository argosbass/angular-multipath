<!DOCTYPE html>
<html lang="en" ng-app="myApp">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
          <title></title>
          <!-- Bootstrap -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
              <link href="css/toaster.css" rel="stylesheet">
               
              </head>

  <body ng-cloak="">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header col-md-6">
            <button type="button" class="navbar-toggle" toggle="collapse" target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
         <div class="navbar-header col-md-2">
            <a class="navbar-brand" rel="home" title="Dashboard" href="#/main">Main</a>
          </div>
        </div>
      </div>
    </div>
    <div >
      <div class="container" style="margin-top:20px;">

        <div data-ng-view="" id="ng-view" class="slide-animation"></div>

      </div>
    </body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular.min.js" ></script>
  <script src="https://code.angularjs.org/1.3.11/angular-route.min.js" ></script>
  <script src="https://code.angularjs.org/1.3.11/angular-animate.min.js" ></script>

  <script src="app/app.js"></script>
 

</html>

