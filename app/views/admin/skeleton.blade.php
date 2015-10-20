<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <base href="{{ asset("") }}/v2">
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

        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=places"></script>
        <?php 

            $js =  [
                    '/v2/js/vendor/jquery-1.9.1.min.js',
                    '/v2/js/vendor/jquery.plugin.min.js',

                    '/v2/js/vendor/bootstrap.min.js',
                    '/v2/js/vendor/bootstrap-toggle.min.js',
                    '/v2/js/vendor/summernote.js',
                    '/v2/js/vendor/select2.full.js',

                    '/v2/js/vendor/jquery.geocomplete.min.js',

                    '/v2/js/vendor/jquery.quicksearch.js',
                    '/v2/js/vendor/jquery.multi-select.js',

                    '/v2/js/vendor/js-webshim/minified/polyfiller.js',
                    '/v2/js/vendor/jasny-bootstrap.min.js',
                    '/v2/js/vendor/bootstrap-confirmation.js',
                    '/v2/js/vendor/bootstrap-combobox.js',
                    '/v2/js/vendor/bootstrap-switch.min.js',
                    '/v2/js/vendor/moment-with-locales.js',
                    '/v2/js/vendor/bootstrap-datetimepicker.js',
                    '/v2/js/vendor/bootstrap-scrollertab.js',
                    '/v2/js/vendor/bootstrap-formajax.js',

                    '/v2/js/vendor/jquery.cookie.js',

                    '/v2/js/vendor/plugins.js',
                    '/v2/js/vendor/main.js',


                    // INSPINIA
                    '/v2/js/admin/inspinia/plugins/metisMenu/jquery.metisMenu.js',
                    '/v2/js/admin/inspinia/plugins/slimscroll/jquery.slimscroll.min.js',

                    // <!-- Flot -->
                    // '/v2/js/admin/inspinia/plugins/flot/jquery.flot.js',
                    // '/v2/js/admin/inspinia/plugins/flot/jquery.flot.tooltip.min.js',
                    // '/v2/js/admin/inspinia/plugins/flot/jquery.flot.spline.js',
                    // '/v2/js/admin/inspinia/plugins/flot/jquery.flot.resize.js',
                    // '/v2/js/admin/inspinia/plugins/flot/jquery.flot.pie.js',

                    // <!-- Peity -->
                    // '/v2/js/admin/inspinia/plugins/peity/jquery.peity.min.js',
                    // '/v2/js/admin/inspinia/demo/peity-demo.js',

                    // <!-- Custom and plugin javascript -->
                    '/v2/js/admin/inspinia/inspinia.js',
                    '/v2/js/admin/inspinia/plugins/pace/pace.min.js',

                    // <!-- jQuery UI -->
                    // '/v2/js/admin/inspinia/plugins/jquery-ui/jquery-ui.min.js',

                    // <!-- GITTER -->
                    // '/v2/js/admin/inspinia/plugins/gritter/jquery.gritter.min.js',

                    // <!-- Sparkline -->
                    //'/v2/js/admin/inspinia/plugins/sparkline/jquery.sparkline.min.js',

                    // // <!-- Sparkline demo data  -->
                    // '/v2/js/admin/inspinia/demo/sparkline-demo.js',

                    // // <!-- Toastr -->
                    // '/v2/js/admin/inspinia/plugins/toastr/toastr.min.js',

                    '/v2/js/admin/permissions.js'

                    ]; 
        ?>
        {{ Minify::javascript($js,['js_build_path'=>'v2/js/']) }}


         @yield("javascript")


    </body>
</html>