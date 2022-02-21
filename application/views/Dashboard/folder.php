<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin_dashboard.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/Admin_dash_homesection.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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


	<title>Admin Dashboard</title>
	<link rel=" icon" href="<?php echo base_url() ?>assets/images/FCILogo.png">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
	<div class="sidebar">

		<div class="logo-details">
			<i class="logo-icon" id="logo_icon" style="transition: all 0.5s ease;">

				<svg width="30" height="30" viewBox="0 0 43 39" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.65625 10.8084V14.6766L14.4139 7.79339L10.8844 5.57483L0.65625 10.8084Z" fill="#E6416B" stroke="black" stroke-opacity="0.01" />
					<path d="M22.049 38V33.6766L31.0526 29.1257L35.3024 31.4581L22.049 38Z" fill="#1E3A7B" />
					<path d="M26.9929 14.661L9.716 6.10683L14.1942 4.01135L31.2426 12.7838L26.9929 14.661Z" fill="#943B65" />
					<path d="M18.0874 6.02994L14.1257 3.98204L21.7609 0V3.98204L18.0874 6.02994Z" fill="#DE92AA" />
					<path d="M21.6888 3.92515V0L42.9375 10.6946L38.6878 12.5719L21.6888 3.92515Z" fill="#E6416B" />
					<path d="M42.9375 10.4671L38.5437 12.5719V29.1258L42.9375 26.7934V10.4671Z" fill="#F3C40F" />
					<path d="M35.3744 14.8473L30.8366 12.6287L16.7908 19.2844L21.977 21.503L35.3744 14.8473Z" fill="#3D7DA0" />
					<path d="M21.9049 21.4461L16.8629 19.4551V35.7814L21.9049 37.7724V33.7904V21.4461Z" fill="#4AA4BF" stroke="black" stroke-opacity="0.01" />
				</svg>

			</i>
			<div class="logo_name">Admin Dashboad</div>
			<i class='bx bx-menu' id="btn"></i>
		</div>


		<ul class="nav-list">
			<li>
				<i class='bx bx-search'></i>
				<input type="text" placeholder="Search...">
				<span class="tooltip">Search</span>
			</li>
			<li>
				<a href="Admin">
					<i class='bx bx-grid-alt'></i>
					<span class="links_name">Dashboard</span>
				</a>
				<span class="tooltip">Dashboard</span>
			</li>
			<li>
				<a href="admin_profile">
					<i class='bx bx-user'></i>
					<span class="links_name">Profile</span>
				</a>
				<span class="tooltip">Profile</span>
			</li>

			<li>
				<a href="Admin_list">
					<i class='fas fa-list'></i>
					<span class="links_name">Admin List</span>
				</a>
				<span class="tooltip">Admin List</span>
			</li>

			<li>
				<a href="<?= base_url('Admin_Controller/lecturer_list') ?>">
					<i class='bi bi-file-earmark-easel' style="color: white;"></i>
					<span class="links_name">Lecturers Account</span>
				</a>
				<span class="tooltip">Lecturers Account</span>
			</li>

			<li>
				<a href="hop_list">
					<i class="fas fa-book-reader"></i>
					<span class="links_name">Head of Program </span>
				</a>
				<span class="tooltip">Head of Program</span>
			</li>

			<li>
				<a href="#">
					<i class="fas fa-medal"></i>
					<span class="links_name">Quality Panel</span>
				</a>
				<span class="tooltip">Quality Panel</span>
			</li>


			<li>
				<a href="#">
					<i class="fas fa-university"></i>
					<span class="links_name">Dean/Deputy Dean</span>
				</a>
				<span class="tooltip">Dean/Deputy Dean</span>
			</li>
			<li>
				<a href="<?= base_url('Admin_Controller/batch') ?>">
					<i class='bx bx-folder'></i>
					<span class="links_name">Folder</span>
				</a>
				<span class="tooltip">Folder</span>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-calendar'></i>
					<span class="links_name">Event</span>
				</a>
				<span class="tooltip">Event</span>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-chat'></i>
					<span class="links_name">Messages</span>
				</a>
				<span class="tooltip">Messages</span>
			</li>

			<a href="Admin/logout">
				<li class="profile">
					<div class=" profile-details">
						<div class="name">Log Out</div>

					</div>
					<i class='bx bx-log-out' id="log_out"></i>
				</li>
			</a>
		</ul>
	</div>
	<section class="home-section">

		<div class="list-text" style=" text-align:center; margin-top:2%; margin-bottom:2% ">
			<h3>Folder</h3>
		</div>

		<div class="admin-container container-fluid">
			<div class="table-admin table-responsive text-nowrap">
				<!--Table-->
				<table class="table table-striped table-bordered table-hover table-sm">

					<!--Table head-->
					<thead>
						<tr>
							<th style="text-align: center;">Subject Code</th>
							<th style="text-align: center;">Subject Name</th>
							<th colspan="1" style="text-align: center;">Folder</th>
							<th style="text-align: center;">Completion Status</th>
						</tr>
					</thead>
					<!--Table head-->
					<tr>
						<td>KP00XXX</td>
						<td>Network Fundamental</td>
						<td width="20px"><?= anchor(
												'folder/net_sec_folder',
												'<div class="btn btn-small btn-info"
														style="background: linear-gradient(90.29deg, 
		#9145F2 0.12%, rgba(187, 69, 242, 0.76) 99.99%, rgba(155, 69, 242, 0) 100%);"
														><i class="fa fa-folder-open">
								</i></div>'
											) ?></td>
						<td>Completed</td>
					</tr>

					<tr>
						<td>KP01XXX</td>
						<td>Network Security</td>
						<td width="20px"><?= anchor(
												'subject_folder',
												'<div class="btn btn-small btn-info"
														style="background: linear-gradient(90.29deg, 
		#9145F2 0.12%, rgba(187, 69, 242, 0.76) 99.99%, rgba(155, 69, 242, 0) 100%);"
														><i class="fa fa-folder-open">
								</i></div>'
											) ?></td>
						<td>Completed</td>
					</tr>

					<tr>
						<td>KP02XXX</td>
						<td>Network WAN</td>
						<td width="20px"><?= anchor(
												'subject_folder',
												'<div class="btn btn-small btn-info"
														style="background: linear-gradient(90.29deg, 
		#9145F2 0.12%, rgba(187, 69, 242, 0.76) 99.99%, rgba(155, 69, 242, 0) 100%);"
														><i class="fa fa-folder-open">
								</i></div>'
											) ?></td>
						<td>Completed</td>
					</tr>

					<tr>
						<td>KP03XXX</td>
						<td>Web Development</td>
						<td width="20px"><?= anchor(
												'subject_folder',
												'<div class="btn btn-small btn-info"
														style="background: linear-gradient(90.29deg, 
		#9145F2 0.12%, rgba(187, 69, 242, 0.76) 99.99%, rgba(155, 69, 242, 0) 100%);"
														><i class="fa fa-folder-open">
								</i></div>'
											) ?></td>
						<td>Completed</td>
					</tr>

					<tr>
						<td>KP04XXX</td>
						<td>Crytopgraphy</td>
						<td width="20px"><?= anchor(
												'subject_folder',
												'<div class="btn btn-small btn-info"
														style="background: linear-gradient(90.29deg, 
		#9145F2 0.12%, rgba(187, 69, 242, 0.76) 99.99%, rgba(155, 69, 242, 0) 100%);"
														><i class="fa fa-folder-open">
								</i></div>'
											) ?></td>
						<td>Completed</td>
					</tr>
					<!--Table body-->
					<tbody>

	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let closeBtn = document.querySelector("#btn");
		let searchBtn = document.querySelector(".bx-search");

		closeBtn.addEventListener("click", () => {
			sidebar.classList.toggle("open");
			menuBtnChange(); //calling the function(optional)
		});

		searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
			sidebar.classList.toggle("open");
			menuBtnChange(); //calling the function(optional)
		});

		// following are the code to change sidebar button(optional)
		function menuBtnChange() {
			if (sidebar.classList.contains("open")) {
				closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
			} else {
				closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
			}
		}
	</script>




	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
