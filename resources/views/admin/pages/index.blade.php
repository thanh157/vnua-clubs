@extends('admin.layouts.master')

@section('content')
    		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								User Pages - <span class="fw-normal">User Cards</span>
							</h4>

							<a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>

						<div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
							<div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
								<div class="dropdown w-100 w-sm-auto">
									<a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
										<img src="https://demo.interface.club/limitless/demo/template/assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
										<div class="me-auto me-lg-1">
											<div class="fs-sm text-muted mb-1">Customer</div>
											<div class="fw-semibold">Tesla Motors Inc</div>
										</div>
									</a>

									<div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
										<div class="d-flex align-items-center p-3">
											<h6 class="fw-semibold mb-0">Customers</h6>
											<a href="#" class="ms-auto">
												View all
												<i class="ph-arrow-circle-right ms-1"></i>
											</a>
										</div>
										<a href="#" class="dropdown-item active py-2">
											<img src="https://demo.interface.club/limitless/demo/template/assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">Tesla Motors Inc</div>
												<div class="fs-sm text-muted">42 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="https://demo.interface.club/limitless/demo/template/assets/images/brands/debijenkorf.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">De Bijenkorf</div>
												<div class="fs-sm text-muted">49 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="https://demo.interface.club/limitless/demo/template/assets/images/brands/klm.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">Royal Dutch Airlines</div>
												<div class="fs-sm text-muted">18 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="https://demo.interface.club/limitless/demo/template/assets/images/brands/shell.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">Royal Dutch Shell</div>
												<div class="fs-sm text-muted">54 users</div>
											</div>
										</a>
										<a href="#" class="dropdown-item py-2">
											<img src="https://demo.interface.club/limitless/demo/template/assets/images/brands/bp.svg" class="w-32px h-32px me-2" alt="">
											<div>
												<div class="fw-semibold">BP plc</div>
												<div class="fs-sm text-muted">23 users</div>
											</div>
										</a>
									</div>
								</div>

								<div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

								<div class="d-inline-flex mt-3 mt-sm-0">
									<a href="#" class="status-indicator-container ms-1">
										<img src="../../../assets/images/demo/users/face24.jpg" class="w-32px h-32px rounded-pill" alt="">
										<span class="status-indicator bg-warning"></span>
									</a>
									<a href="#" class="status-indicator-container ms-1">
										<img src="../../../assets/images/demo/users/face1.jpg" class="w-32px h-32px rounded-pill" alt="">
										<span class="status-indicator bg-success"></span>
									</a>
									<a href="#" class="status-indicator-container ms-1">
										<img src="../../../assets/images/demo/users/face3.jpg" class="w-32px h-32px rounded-pill" alt="">
										<span class="status-indicator bg-danger"></span>
									</a>
									<a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
										<i class="ph-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="page-header-content d-lg-flex border-top">
						<div class="d-flex">
							<div class="breadcrumb py-2">
								<a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
								<a href="#" class="breadcrumb-item">User pages</a>
								<span class="breadcrumb-item active">User cards</span>
							</div>

							<a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>

						<div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
							<div class="d-lg-flex mb-2 mb-lg-0">
								<a href="#" class="d-flex align-items-center text-body py-2">
									<i class="ph-lifebuoy me-2"></i>
									Support
								</a>

								<div class="dropdown ms-lg-3">
									<a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
										<i class="ph-gear me-2"></i>
										<span class="flex-1">Settings</span>
									</a>

									<div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
										<a href="#" class="dropdown-item">
											<i class="ph-shield-warning me-2"></i>
											Account security
										</a>
										<a href="#" class="dropdown-item">
											<i class="ph-chart-bar me-2"></i>
											Analytics
										</a>
										<a href="#" class="dropdown-item">
											<i class="ph-lock-key me-2"></i>
											Privacy
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<i class="ph-gear me-2"></i>
											All settings
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Square thumbs -->
					<div class="mb-3">
						<h6 class="mb-0">Square thumbs</h6>
						<span class="text-muted">Basic style using <code>card</code> component</span>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions">
									<img class="card-img-top img-fluid" src="../../../assets/images/demo/users/face1.jpg" alt="">
									<div class="card-img-actions-overlay card-img-top">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">James Alexander</h6>
						    		<span class="text-muted">Lead developer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions">
									<img class="card-img-top img-fluid" src="../../../assets/images/demo/users/face2.jpg" alt="">
									<div class="card-img-actions-overlay card-img-top">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">Nathan Jacobson</h6>
						    		<span class="text-muted">Lead UX designer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions">
									<img class="card-img-top img-fluid" src="../../../assets/images/demo/users/face3.jpg" alt="">
									<div class="card-img-actions-overlay card-img-top">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">Margo Baker</h6>
						    		<span class="text-muted">Sales manager</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions">
									<img class="card-img-top img-fluid" src="../../../assets/images/demo/users/face4.jpg" alt="">
									<div class="card-img-actions-overlay card-img-top">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">Barbara Walden</h6>
						    		<span class="text-muted">SEO specialist</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/users/face11.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">Hanna Dorman</h6>
						    		<span class="text-muted">UX/UI designer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/users/face14.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">Benjamin Loretti</h6>
						    		<span class="text-muted">Network engineer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/users/face13.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">Vanessa Aurelius</h6>
						    		<span class="text-muted">Front end guru</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-img-actions mx-1 mt-1">
									<img class="card-img img-fluid" src="../../../assets/images/demo/users/face8.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
											<i class="ph-plus"></i>
										</a>
										<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
											<i class="ph-link"></i>
										</a>
									</div>
								</div>

						    	<div class="card-body text-center">
						    		<h6 class="mb-0">William Brenson</h6>
						    		<span class="text-muted">Chief officer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>
					</div>
					<!-- /square thumbs -->


					<!-- Rounded thumbs -->
					<div class="mb-3 pt-2">
						<h6 class="mb-0">Rounded thumbs</h6>
						<span class="text-muted">Responsive rounded thumbs</span>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face1.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">James Alexander</h6>
						    		<span class="text-muted">Lead developer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face2.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">Nathan Jacobson</h6>
						    		<span class="text-muted">Lead UX designer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face3.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">Margo Baker</h6>
						    		<span class="text-muted">Sales manager</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face4.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">Barbara Walden</h6>
						    		<span class="text-muted">SEO specialist</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
											<i class="ph-dribbble-logo"></i>
										</a>
										<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
											<i class="ph-microsoft-teams-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6">
					    	<div class="card card-body text-center">
								<div class="mb-3">
									<h6 class="mb-0 mt-1">Hanna Dorman</h6>
									<span class="text-muted">UX/UI designer</span>
								</div>

								<a href="#" class="d-inline-block mb-3">
									<img src="../../../assets/images/demo/users/face11.jpg" class="rounded-pill" width="150" height="150" alt="">
								</a>

								<div class="d-flex justify-content-center">
									<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
										<i class="ph-dribbble-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
										<i class="ph-twitter-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
										<i class="ph-microsoft-teams-logo"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6">
					    	<div class="card card-body text-center">
								<div class="mb-3">
									<h6 class="mb-0 mt-1">Benjamin Loretti</h6>
									<span class="text-muted">Network engineer</span>
								</div>

								<a href="#" class="d-inline-block mb-3">
									<img src="../../../assets/images/demo/users/face14.jpg" class="rounded-pill" width="150" height="150" alt="">
								</a>

								<div class="d-flex justify-content-center">
									<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
										<i class="ph-dribbble-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
										<i class="ph-twitter-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
										<i class="ph-microsoft-teams-logo"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6">
					    	<div class="card card-body text-center">
								<div class="mb-3">
									<h6 class="mb-0 mt-1">Vanessa Aurelius</h6>
									<span class="text-muted">Front end guru</span>
								</div>

								<a href="#" class="d-inline-block mb-3">
									<img src="../../../assets/images/demo/users/face13.jpg" class="rounded-pill" width="150" height="150" alt="">
								</a>

								<div class="d-flex justify-content-center">
									<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
										<i class="ph-dribbble-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
										<i class="ph-twitter-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
										<i class="ph-microsoft-teams-logo"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6">
					    	<div class="card card-body text-center">
								<div class="mb-3">
									<h6 class="mb-0 mt-1">William Brenson</h6>
									<span class="text-muted">Chief officer</span>
								</div>

								<a href="#" class="d-inline-block mb-3">
									<img src="../../../assets/images/demo/users/face8.jpg" class="rounded-pill" width="150" height="150" alt="">
								</a>

								<div class="d-flex justify-content-center">
									<a href="#" class="btn btn-outline-pink btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Dribbble">
										<i class="ph-dribbble-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-info btn-icon border-width-2 rounded-pill mx-2" data-bs-popup="tooltip" title="Twitter">
										<i class="ph-twitter-logo"></i>
									</a>
									<a href="#" class="btn btn-outline-indigo btn-icon border-width-2 rounded-pill" data-bs-popup="tooltip" title="Github">
										<i class="ph-microsoft-teams-logo"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6">
							<div class="card bg-secondary text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face1.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">James Alexander</h6>
						    		<span class="opacity-75">Lead developer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
											<i class="ph-google-logo"></i>
										</a>
										<a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
											<i class="ph-github-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card bg-pink text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face2.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">Nathan Jacobson</h6>
						    		<span class="opacity-75">Lead UX designer</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
											<i class="ph-google-logo"></i>
										</a>
										<a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
											<i class="ph-github-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card bg-indigo text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face3.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">Margo Baker</h6>
						    		<span class="opacity-75">Sales manager</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
											<i class="ph-google-logo"></i>
										</a>
										<a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
											<i class="ph-github-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>

						<div class="col-xl-3 col-sm-6">
							<div class="card bg-teal text-white" style="background-image: url(../../../assets/images/backgrounds/panel_bg.png); background-size: contain;">
								<div class="card-body text-center">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face4.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay card-img rounded-circle">
											<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
												<i class="ph-plus"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline-white btn-icon rounded-pill ms-2">
												<i class="ph-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="mb-0">Barbara Walden</h6>
						    		<span class="opacity-75">SEO specialist</span>

									<div class="d-flex justify-content-center mt-3">
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Google Drive">
											<i class="ph-google-logo"></i>
										</a>
										<a href="#" class="text-white mx-2" data-bs-popup="tooltip" title="Twitter">
											<i class="ph-twitter-logo"></i>
										</a>
										<a href="#" class="text-white" data-bs-popup="tooltip" title="Github">
											<i class="ph-github-logo"></i>
										</a>
									</div>
						    	</div>
					    	</div>
						</div>
					</div>
					<!-- /rounded thumbs-->


					<!-- Horizontal cards -->
					<div class="mb-3 pt-2">
						<h6 class="mb-0">Horizontal cards</h6>
						<span class="text-muted">User cards in horizontal direction</span>
					</div>

					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face1.jpg" class="rounded" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<div class="fw-semibold">James Alexander</div>
										<span class="text-muted">Lead developer</span>
									</div>

									<div class="ms-3 align-self-center">
										<div class="bg-success rounded-circle p-1"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face2.jpg" class="rounded" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<div class="fw-semibold">Nathan Jacobson</div>
										<span class="text-muted">Lead UX designer</span>
									</div>

									<div class="ms-3 align-self-center">
										<div class="bg-warning rounded-circle p-1"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face3.jpg" class="rounded" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<div class="fw-semibold">Margo Baker</div>
										<span class="text-muted">Sales manager</span>
									</div>

									<div class="ms-3 align-self-center">
										<div class="bg-secondary rounded-circle p-1"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face4.jpg" class="rounded" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<div class="fw-semibold">Barbara Walden</div>
										<span class="text-muted">SEO specialist</span>
									</div>

									<div class="ms-3 align-self-center">
										<div class="bg-primary rounded-circle p-1"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face11.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-0">Hanna Dorman</h6>
										<span class="text-muted">UX/UI designer</span>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face14.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-0">Benjamin Loretti</h6>
										<span class="text-muted">Network engineer</span>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face13.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-0">Vanessa Aurelius</h6>
										<span class="text-muted">Front end guru</span>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face8.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-0">William Brenson</h6>
										<span class="text-muted">Chief officer</span>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<div class="flex-fill">
										<div class="fw-semibold">James Alexander</div>
										<span class="text-muted">Lead developer</span>
									</div>

									<a href="#" class="ms-3">
										<img src="../../../assets/images/demo/users/face1.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<div class="flex-fill">
										<div class="fw-semibold">Nathan Jacobson</div>
										<span class="text-muted">Lead UX designer</span>
									</div>

									<a href="#" class="ms-3">
										<img src="../../../assets/images/demo/users/face2.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<div class="flex-fill">
										<div class="fw-semibold">Margo Baker</div>
										<span class="text-muted">Sales manager</span>
									</div>

									<a href="#" class="ms-3">
										<img src="../../../assets/images/demo/users/face3.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<div class="flex-fill">
										<div class="fw-semibold">Barbara Walden</div>
										<span class="text-muted">SEO specialist</span>
									</div>

									<a href="#" class="ms-3">
										<img src="../../../assets/images/demo/users/face4.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face11.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-1">Hanna Dorman</h6>
										<div class="d-flex">
											<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
												<i class="ph-dribbble-logo"></i>
											</a>
											<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
												<i class="ph-twitter-logo"></i>
											</a>
											<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
												<i class="ph-microsoft-teams-logo"></i>
											</a>
										</div>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face14.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-1">Benjamin Loretti</h6>
										<div class="d-flex">
											<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
												<i class="ph-dribbble-logo"></i>
											</a>
											<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
												<i class="ph-twitter-logo"></i>
											</a>
											<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
												<i class="ph-microsoft-teams-logo"></i>
											</a>
										</div>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face13.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-1">Vanessa Aurelius</h6>
										<div class="d-flex">
											<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
												<i class="ph-dribbble-logo"></i>
											</a>
											<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
												<i class="ph-twitter-logo"></i>
											</a>
											<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
												<i class="ph-microsoft-teams-logo"></i>
											</a>
										</div>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-6">
							<div class="card card-body">
								<div class="d-flex">
									<a href="#" class="me-3">
										<img src="../../../assets/images/demo/users/face8.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>

									<div class="flex-fill">
										<h6 class="mb-1">William Brenson</h6>
										<div class="d-flex">
											<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
												<i class="ph-dribbble-logo"></i>
											</a>
											<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
												<i class="ph-twitter-logo"></i>
											</a>
											<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Github">
												<i class="ph-microsoft-teams-logo"></i>
											</a>
										</div>
									</div>

									<div class="align-self-center ms-3">
										<div class="dropdown">
											<a href="#" class="text-body" data-bs-toggle="dropdown">
												<i class="ph-list"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item">
													<i class="ph-chats me-2"></i>
													Start chat
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-phone me-2"></i>
													Make a call
												</a>
												<a href="#" class="dropdown-item">
													<i class="ph-envelope me-2"></i>
													Send mail
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">
													<i class="ph-chart-line me-2"></i>
													Statistics
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /horizontal cards -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>

						<ul class="nav">
							<li class="nav-item">
								<a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-lifebuoy"></i>
										<span class="d-none d-md-inline-block ms-2">Support</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://demo.interface.club/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-file-text"></i>
										<span class="d-none d-md-inline-block ms-2">Docs</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-shopping-cart"></i>
										<span class="d-none d-md-inline-block ms-2">Purchase</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->
@endsection