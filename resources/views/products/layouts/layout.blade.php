<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="{{URL:: asset('productassets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL:: asset('productassets/js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{URL:: asset('productassets/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Mihstore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--fonts-->
    <link href='http://fonts.useso.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL:: asset('css/my/css/bootstrap.min.css') }}"/>
    <!--//fonts-->
    <!--//slider-script-->
    <script>$(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.message').fadeOut('slow', function (c) {
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function (c) {
            $('.alert-close1').on('click', function (c) {
                $('.message1').fadeOut('slow', function (c) {
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function (c) {
            $('.alert-close2').on('click', function (c) {
                $('.message2').fadeOut('slow', function (c) {
                    $('.message2').remove();
                });
            });
        });
    </script>
    <link rel="stylesheet" href="{{URL:: asset('productassets/css/etalage.css') }}">
    <script src="{{URL:: asset('productassets/js/jquery.etalage.min.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function (image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });

        });
    </script>
    <script type="text/javascript" src="{{URL:: asset('productassets/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{URL:: asset('productassets/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start menu -->
    <link href="{{URL:: asset('productassets/css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{URL:: asset('productassets/js/megamenu.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".megamenu").megamenu();
        });
    </script>

</head>
<body>
@yield('content')

</body>
</html>