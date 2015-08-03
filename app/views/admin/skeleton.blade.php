<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <base href="{{ asset("") }}">
        <title>Admin :: {{ getenv('APP_TITLE') }}</title>
        <meta charset="utf-8">
        
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

        <script src="{{ asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>

    </head>
    <body class="@yield('class')">
        <div class="APP_ADMIN_PREFIX hidden">{{ getenv('APP_ADMIN_PREFIX') }}</div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                </div><!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        

        <div id="wrapper">

            @yield("skeleton")

        </div>


        <?php 

            $js =  [
                    '/js/vendor/jquery-1.9.1.min.js',
                    '/js/vendor/jquery.plugin.min.js',

                    '/js/vendor/bootstrap.min.js',
                    '/js/vendor/bootstrap-toggle.min.js',
                    '/js/vendor/summernote.js',
                    '/js/vendor/select2.full.js',

                    '/js/vendor/jquery.quicksearch.js',
                    '/js/vendor/jquery.multi-select.js',

                    '/js/vendor/js-webshim/minified/polyfiller.js',
                    '/js/vendor/jasny-bootstrap.min.js',
                    '/js/vendor/bootstrap-confirmation.js',
                    '/js/vendor/bootstrap-combobox.js',
                    '/js/vendor/bootstrap-switch.min.js',
                    '/js/vendor/moment-with-locales.js',
                    '/js/vendor/bootstrap-datetimepicker.js',
                    '/js/vendor/bootstrap-scrollertab.js',
                    '/js/vendor/bootstrap-formajax.js',

                    '/js/vendor/jquery.cookie.js',

                    '/js/vendor/plugins.js',
                    '/js/vendor/main.js',


                    // INSPINIA
                    '/js/admin/inspinia/plugins/metisMenu/jquery.metisMenu.js',
                    '/js/admin/inspinia/plugins/slimscroll/jquery.slimscroll.min.js',

                    // <!-- Flot -->
                    // '/js/admin/inspinia/plugins/flot/jquery.flot.js',
                    // '/js/admin/inspinia/plugins/flot/jquery.flot.tooltip.min.js',
                    // '/js/admin/inspinia/plugins/flot/jquery.flot.spline.js',
                    // '/js/admin/inspinia/plugins/flot/jquery.flot.resize.js',
                    // '/js/admin/inspinia/plugins/flot/jquery.flot.pie.js',

                    // <!-- Peity -->
                    // '/js/admin/inspinia/plugins/peity/jquery.peity.min.js',
                    // '/js/admin/inspinia/demo/peity-demo.js',

                    // <!-- Custom and plugin javascript -->
                    '/js/admin/inspinia/inspinia.js',
                    '/js/admin/inspinia/plugins/pace/pace.min.js',

                    // <!-- jQuery UI -->
                    // '/js/admin/inspinia/plugins/jquery-ui/jquery-ui.min.js',

                    // <!-- GITTER -->
                    // '/js/admin/inspinia/plugins/gritter/jquery.gritter.min.js',

                    // <!-- Sparkline -->
                    //'/js/admin/inspinia/plugins/sparkline/jquery.sparkline.min.js',

                    // // <!-- Sparkline demo data  -->
                    // '/js/admin/inspinia/demo/sparkline-demo.js',

                    // // <!-- Toastr -->
                    // '/js/admin/inspinia/plugins/toastr/toastr.min.js',

                    '/js/admin/permissions.js'

                    ]; 
        ?>
        {{ Minify::javascript($js,['js_build_path'=>'js/']) }}





    </body>
</html>