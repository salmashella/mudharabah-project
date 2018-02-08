
<!DOCTYPE HTML>
<html>
<head>
    <title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- Metis Menu -->
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/custom.js"></script>
    <link href="/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>
<body >


<div id="page-wrapper">
    <div class="main-page login-page ">
        <h3 class="title1">Login User</h3>
        <div class="widget-shadow">
            <div class="login-top">
                <h4>Welcome to BMT Prima Syariah User Dashboard</h4>
            </div>
            @if(session('login-error'))
                <div class="alert-danger">
                    <center>
                        {{ session('login-error') }}
                    </center>
                </div>
            @endif
            <div class="login-body">
                <form method="post" action="/user/login/check">
                    {{ csrf_field() }}
                    <input type="text" class="user" name="no_rek" placeholder="Masukkan nomor rekening" required="true">
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>


    </div>
</div>
<!--footer-->
<div class="footer">
    <p>&copy; 2016 BMT Prima Syariah. All Rights Reserved | Design by </p>
</div>
<!--//footer-->
</div>
<!-- Classie -->
<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
            showLeftPush = document.getElementById( 'showLeftPush' ),
            body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };

    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
</body>
</html>