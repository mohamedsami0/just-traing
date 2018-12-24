    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!--Meta-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title-->
        <title>blog</title>
        <!--Links-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/hover-min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <!--Start navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--End navbar-->

    <!--start content-->

            @yield('content')

    <!--end content-->

    <!--start footer-->
    <footer class="footer text-center">
        <div class="social-media">
            <span class="text-capitalize">follow us: </span>
            <i class="fa fa-facebook fa-lg fa-fw" title="facebook"></i>
            <i class="fa fa-twitter fa-lg fa-fw" title="twitter"></i>
            <i class="fa fa-instagram fa-lg fa-fw" title="instagram"></i>
            <i class="fa fa-youtube-play fa-lg fa-fw" title="youtube"></i>
        </div>
        <div class="copy-right">
            <span class="text-capitalize">created with</span> <i class="fa fa-heart fa-fw fa-lg"></i> by Mohamed Samir
        </div>
        <div class="up hvr-bob">
            <i class="fa fa-chevron-up fa-fw fa-lg" title="up"></i>
        </div>
    </footer>
    <!--end footer-->

    <!--js Files-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    </body>
    </html>