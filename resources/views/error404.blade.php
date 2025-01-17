<!DOCTYPE html>

<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
		<title>Oops! Error 404 not found.</title>
		<meta name="description" content="Gradient able 404 Error page design" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Codedthemes">
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">

        <link rel="stylesheet" type="text/css" href="{{ asset('files/extra-pages/404/1/css/style.css')}}">
		
	</head>

	<body>

        <canvas id="dotty"></canvas>

        <!-- Your logo on the top left -->
        <a href="#" class="logo-link" title="back home">

            {{-- <img src="img/logo.png" class="logo" alt="Company's logo" /> --}}
             

        </a>

        <div class="content">

            <div class="content-box">

                <div class="big-content">

                    <!-- Main squares for the content logo in the background -->
                    <div class="list-square">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>

                    <!-- Main lines for the content logo in the background -->
                    <div class="list-line">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <!-- The animated searching tool -->
                    <i class="fa fa-search" aria-hidden="true"></i>

                    <!-- div clearing the float -->
                    <div class="clear"></div>

                </div>

                <!-- Your text -->
                <h1>Oops! Animal E-Ethic  Error.</h1>

                <h2><br><br>
                    ระบบการพิจารณาจรรยาบรรณการใช้สัตว์เพื่องานทางวิทยาศาสตร์ มหาวิทยาลัยธรรมศาสตร์<br>
                <br>
                ขออภัยในความไม่สะดวก
                </h2>

            </div>

        </div>

    <footer class="light">
        <ul>
            <li><a href="{{url('/')}}"><h4>Click Back to the main page</h4> </a></li>
            <!-- <li><a href="#">Support</a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
        </ul>
        <br>
    </footer>
    <script src="{{ asset('files/extra-pages/404/1/js/jquery.min.js')}}"></script>
    <script src="{{ asset('files/extra-pages/404/1/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('files/extra-pages/404/1/js/mozaic.js')}}"></script>

  

    </body>

</html>
