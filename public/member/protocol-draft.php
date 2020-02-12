<!DOCTYPE html>
<html>
<head>
	<title>IACUC Protocol Draft</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/ic/favicon.png">
    <link rel="icon" type="image/png" href="img/ic/favicon@2x.png">

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/material-icons.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="datatables/css/datatables.bootstrap4.css" />
    <link rel="stylesheet" href="datatables/css/responsive.bootstrap4.css" />
    <!-- <link rel="stylesheet" href="css/scrollbar-custom.css" /> -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Site CSS -->

</head>
<body class="main" id="protocol_draft">

	<aside class="sidebar">
		<?php include 'sidebar.php';?>
	</aside>
	<div class="workspace">
		<header class="work-head">
			<ul class="head-menu">
				<li><span class="head-tab font-weight-bold">Draft</span></li>
			</ul>
			<ul>
				<li class="m-0">
					<button class="btn-c material-icons ml-1" title="Search Protocol">search</button>
				</li>
				<li class="dropdown">
					<button class="btn-c material-icons ml-1 dropdown-toggle" type="button" id="i_noti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,8" title="Notifications">notifications</button>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="i_noti">
						<h6 class="dropdown-header">Notifications</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex justify-content-between align-items-center align-items-center" href="#">
							<span>Revise</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
						<a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
							<span>Review</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
						<a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
							<span>Approved</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
						<a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
							<span>Finish</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
						<a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
							<span>Suspending</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
						<a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
							<span>Withdrawal</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
						<a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
							<span>Rejected</span>
							<span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
						</a>
					</div>
				</li>
				<li class="dropdown">
					<button class="btn-c material-icons ml-1 member dropdown-toggle" type="button" id="i_member" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,7" title="Username">
						<span><img src="./img/avatar.svg" /></span>
					</button>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="i_member">
						<h6 class="dropdown-header">Researcher001</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Profile Setting</a>
						<a class="dropdown-item" href="#" onclick="location.href='login.php';">Signout</a>
					</div>
				</li>
			</ul>
		</header>
		<div class="work-pane group-ptc">
			<div class="work-con">
				<?php include 'inc/list/status-draft.php';?>
			</div>
		</div>
	</div>
  

	<!-- Site JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- <script src="datatables/datatables.min.js"></script> -->
    <script src="datatables/js/jquery.dataTables.min.js"></script>
    <script src="datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="datatables/js/dataTables.responsive.min.js"></script>
    <script src="datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="datatables/js/dataTables.scrollResize.min.js"></script>

    <script src="js/script.js"></script>
    <!-- Site JS -->


</body>
</html>