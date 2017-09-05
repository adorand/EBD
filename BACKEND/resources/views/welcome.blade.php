<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" >
    <head>
        <title>Laravel and angular</title>
        <base href="/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="angular2/src/assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/css/icon.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/css/font.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/css/app.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/js/datepicker/datepicker.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/js/slider/slider.css" type="text/css" />
        <link rel="stylesheet" href="angular2/src/assets/js/chosen/chosen.css" type="text/css" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Polyfill(s) for older browsers -->
        <script src="node_modules/core-js/client/shim.min.js"></script>

        <script src="node_modules/zone.js/dist/zone.js"></script>
        <script src="node_modules/systemjs/dist/system.src.js"></script>

        <script src="angular2/src/systemjs.config.js"></script>
        <script>
            System.import('./angular2/src/main.js').catch(function(err){ console.error(err); });
        </script>

    </head>
    <body class="">
        <my-app></my-app>

        <!-- /Preloader -->
        <div class="preloader-wrapper">
            <div class="loader"><span></span></div>
            <strong>chargement...</strong>
            <div class="bg-overlay"></div>
        </div>
        <!-- /Preloader -->

        {{--JQuery--}}
        <script src="angular2/src/assets/js/jquery.min.js"></script>
        {{--Bootstrap--}}
        <script src="angular2/src/assets/js/bootstrap.js"></script>
        {{--App--}}
        <script src="angular2/src/assets/js/app.js"></script>
        <script src="angular2/src/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
        {{--datepicker--}}
        <script src="angular2/src/assets/js/datepicker/bootstrap-datepicker.js"></script>
         {{--file input--}}
        <script src="angular2/src/assets/js/file-input/bootstrap-filestyle.min.js"></script>
        {{--wysiwyg--}}
        <script src="angular2/src/assets/js/wysiwyg/jquery.hotkeys.js"></script>
        <script src="angular2/src/assets/js/wysiwyg/bootstrap-wysiwyg.js"></script>
        <script src="angular2/src/assets/js/wysiwyg/demo.js"></script>

        <script src="angular2/src/assets/js/chosen/chosen.jquery.min.js"></script>

        <script src="angular2/src/assets/js/app.plugin.js"></script>
        <script src="angular2/src/assets/js/functions.js"></script>

    </body>
</html>



