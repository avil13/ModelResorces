<!doctype html>
<html lang="en" ng-app="APP">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title> Model Rescorce </title>

        <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield('content', '')
                <div class="view" ng-view></div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div id="label-message-text" class="hide"></div>
    </body>
</html>
