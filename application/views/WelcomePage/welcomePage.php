<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
	<link href="<?php echo base_url() ?>assets/css/WelcomePage.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- FontAwesome CSS -->
	<link href="<?php echo base_url() ?>assets/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/brands.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/fontawesome.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/brands.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/fontawesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/regular.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/regular.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/solid.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/solid.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/svg-with-js.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/svg-with-js.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/v4-shims.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/v4-shims.min.css" rel="stylesheet" type="text/css">


	<title>Welcome</title>
	<link rel=" icon" href="<?php echo base_url() ?>assets/images/FCILogo.png">
</head>

<body>
	<div class="container">
		<div class="FCIicon" id="icon">

			<svg width="100" height="100" viewBox="0 0 171 171" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M2.22078 48.0061V65.1872L57.1386 34.6148L43.0498 24.761L2.22078 48.0061Z" fill="#E6416B" stroke="black" stroke-opacity="0.01" />
				<path d="M87.6169 168.779V149.577L123.558 129.364L140.522 139.723L87.6169 168.779Z" fill="#1E3A7B" />
				<path d="M107.352 65.1179L38.3857 27.1239L56.2619 17.8167L124.316 56.78L107.352 65.1179Z" fill="#943B65" />
				<path d="M71.8027 26.7824L55.9885 17.6864L86.4667 0V17.6864L71.8027 26.7824Z" fill="#DE92AA" />
				<path d="M86.1791 17.4338V0L171 47.5007L154.036 55.8386L86.1791 17.4338Z" fill="#E6416B" />
				<path d="M171 46.49L153.461 55.8386V129.364L171 119.004V46.49Z" fill="#F3C40F" />
				<path d="M140.81 65.9452L122.695 56.0913L66.6272 85.653L87.3293 95.5068L140.81 65.9452Z" fill="#3D7DA0" />
				<path d="M87.0417 95.2541L66.9147 86.4109V158.925L87.0417 167.769V150.082V95.2541Z" fill="#4AA4BF" stroke="black" stroke-opacity="0.01" />
			</svg>


			<p id="welcome"> Welcome to FCI UMS</p>
			<p id="small-title">Please Choose Access Type </p>
			<a href="Admin_Controller/admin_login"> <button type="submit" class="btn btn-primary btn-lg" id="button-admin">
					Admin</button></a>
			<button type=" button" class="btn btn-primary btn-lg" id="button-dd">
				Dean/Deputy Dean
			</button>
			<button type="button" class="btn btn-primary btn-lg" id="button-qp">
				The Quality Panel
			</button>
			<button type="button" class="btn btn-primary btn-lg" id="button-hp">
				Head of Program
			</button>

			<a href="lecturer/login">
				<button type="button" class="btn btn-primary btn-lg" id="button-lecturer">
					Lecturer
				</button>
			</a>
		</div>

	</div>





	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
	</script>

</body>

</html>
