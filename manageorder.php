<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@1234567890;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<!-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> -->

		
		<?php
		include "adminsidebar.php";
		?>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Contact Us</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Contact-Us Table
										</li>
									</ol>
								</nav>
							</div>
							<!-- <div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<!-- Simple Datatable start -->
					<!-- <div class="card-box mb-123456789">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table Simple</h4>
							<p class="mb-0">
								you can find more options
								<a
									class="text-primary"
									href="https://datatables.net/"
									target="_blank"
									>Click Here</a
								>
							</p>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Name</th>
										<th>Age</th>
										<th>Office</th>
										<th>Address</th>
										<th>Start Date</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">Gloria F. Mead</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>20</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>20</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>18</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					Simple Datatable End -->
					<!-- multiple select row Datatable start -->
					<!-- <div class="card-box mb-123456789">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table with multiple select row</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table hover multiple-select-row nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Name</th>
										<th>Age</th>
										<th>Office</th>
										<th>Address</th>
										<th>Start Date</th>
										<th>Salart</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">Gloria F. Mead</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>20</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>20</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>18</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>123456789</td>
										   
<td>nice resturant And delicious Food</td>
										<td>29-03-2018 12:22</td>
										  
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->
					<!-- multiple select row Datatable End -->
					<!-- Checkbox select Datatable start -->
					<!-- <div class="card-box mb-123456789">
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table with Checckbox select</h4>
						</div>
						<div class="pb-20">
							<table class="checkbox-datatable table nowrap">
								<thead>
									<tr>
										<th>
											<div class="dt-checkbox">
												<input
													type="checkbox"
													name="select_all"
													value="1"
													id="example-select-all"
												/>
												<span class="dt-checkbox-label"></span>
											</div>
										</th>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Tokyo</td>
										<td>2008/11/28</td>
										  
									</tr>
									<tr>
										<td></td>
										<td>Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr>
									<tr>
										<td></td>
										<td>Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr>
									<tr>
										<td></td>
										<td>Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr>
									<tr>
										<td></td>
										<td>Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>2012/09/26</td>
										<td>$217,500</td>
									</tr>
									<tr>
										<td></td>
										<td>Doris Wilder</td>
										<td>Sales Assistant</td>
										<td>Sidney</td>
										<td>2010/09/20</td>
										<td>$85,600</td>
									</tr>
									<tr>
										<td></td>
										<td>Fiona Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
									</tr>
									<tr>
										<td></td>
										<td>Gavin Cortez</td>
										<td>Team Leader</td>
										<td>San Francisco</td>
										<td>2008/10/26</td>
										<td>$235,500</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
									</tr>
									<tr>
										<td></td>
										<td>Hope Fuentes</td>
										<td>Secretary</td>
										<td>San Francisco</td>
										<td>2010/02/12</td>
										<td>$109,850</td>
									</tr>
									<tr>
										<td></td>
										<td>Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>2008/12/19</td>
										<td>$90,560</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->
					<!-- Checkbox select Datatable End -->
					<!-- Export Datatable start -->
					<div class="card-box mb-123456789">
						<div class="pd-20">
							<h4 class="text-blue h4">Contact Us</h4>
						</div>
						<div class="pb-20">
							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>
								<thead>
									<tr>
										<!-- <th class="table-plus datatable-nosort">Manage Order</th> -->
										<th>Order No</th>
										<!-- <th>cartid</th> -->
										<!-- <th>total</th> -->
										<th>TableNo</th>
										<th>Order Man</th>
                                        
										<th>Total</th>

										<th>Time Stamp</th>
										<th>Status</th>

                                        
										<!-- <th>customer name</th> -->

										
                                        
									</tr>
								</thead>
								<tbody>
									<tr>
										<!-- <td class="table-plus">Gloria F. Mead</td> -->
										<td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>

										<!--     -->
                                       
										<!--    -->
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
										  
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
									</tr>
									<tr>
									<td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
										  
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
										  
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
										  
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
										  
									</tr>
									<tr>
                                    <td>123456789</td>
										<td>Helo world</td>
										<td>180</td>
										<td>A15</td>
										<td>29-03-2018 12:22</td>
										<td>Onging</td>
										  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Export Datatable End -->
				</div>
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
			</div>
		</div>
		<!-- welcome modal start -->
		
		
		<!-- welcome modal end -->
		<!-- js -->
		<?php

			include "javascript.php"
			?>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
