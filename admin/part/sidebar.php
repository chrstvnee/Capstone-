<div id="kt_app_sidebar" class="sidebar app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle" data-kt-menu-expand="false">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="index.html">
								<img alt="Logo" src="https://asiatech-hs.alcarom.com/images/logo/logo_1.png" class="h-45px app-sidebar-logo-default" />					
								<img alt="Logo" src="https://asiatech-hs.alcarom.com/images/logo/logo_1.png" class="h-45px app-sidebar-logo-minimize" />								
							</a>

							<!--<div style="max-width: 200px; margin-inline: 8px;" class=" ki-duotone ki-element-11 fs-6" app-sidebar-logo-minimize = "true, hide-text"> ASIA TECHNOLOGICCAL SCHOOL OF SCIENCE AND ARTS </div>-->

							<span class="sidebar-text h-35 app-sidebar-logo-default px-6 max-w-600px fs-6 fw-bold text-start text-gray-700"> Asia Technological  School of Science and Arts</span>

							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize" >
								<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid" >
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-sub-expand="false">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
												<i class="fa-light fa-objects-column fs-1"></i>
												</span>
												<span class="menu-title">Dashboard</span>
												<span class="menu-arrow"></span>
											</span>
											
											<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item--><div class="menu-item">
												<!--begin:Menu link--><a class="menu-link" href="/metronic8/demo1/index.html">
													<span class="menu-bullet"><span class="bullet bullet-dot">
													</span>
												</span><span class="menu-title">Student</span></a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="/metronic8/demo1/dashboards/ecommerce.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot">
														</span>
													</span>
													<span class="menu-title">Faculty</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="/metronic8/demo1/dashboards/projects.html">
													<span class="menu-bullet"><span class="bullet bullet-dot">
													</span>
												</span>
												<span class="menu-title">Grade</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/metronic8/demo1/dashboards/online-courses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot">
												</span>
											</span>
											<span class="menu-title">Accounting</span></a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										<div class="menu-inner flex-column collapse " id="kt_app_sidebar_menu_dashboards_collapse">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="/metronic8/demo1/dashboards/bidding.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot">
														</span></span>
														<span class="menu-title"></span>
													</a>
													<!--end:Menu link-->
												</div>
											</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<div class="menu-item pt-5">
										<div class="menu-content">
											<!-- BEGIN TITLE -->
											<div class="menu-heading fw-bold text-uppercase fs-7">accounts</div>
										</div>
										</div>
										
										<!-- BEGIN -->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
											<i class="fa-light fa-file-user fs-1"></i>
											</span>
											<span class="menu-title">Student</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#" onclick="showStudent(event);">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Information</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
									</div>
								<!-- END -->
										<!-- BEGIN -->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
											<i class="fa-light fa-grid-2-plus fs-2"></i>
											</span>
											<span class="menu-title">Faculty</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#" onclick="showFaculty(event);">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Teacher</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
									</div>
								<!-- END -->
								<div class="menu-item pt-5">
										<div class="menu-content">
											<!-- BEGIN TITLE -->
											<div class="menu-heading fw-bold text-uppercase fs-7">encoding</div>
										</div>
										</div>
										
										<!-- BEGIN -->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
											<i class="fa-light fa-book fs-2"></i>
											</span>
											<span class="menu-title">Subject</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#" onclick="showSubject(event);">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Information</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
									</div>
								<!-- END -->
										<!-- BEGIN -->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
											<i class="fa-light fa-book-font fs-2"></i>
											</span>
											<span class="menu-title">Grade</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="/metronic8/demo1/pages/user-profile/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Information</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
									</div>
								<!-- END -->
								<div class="menu-item pt-5">
										<div class="menu-content">
											<!-- BEGIN TITLE -->
											<div class="menu-heading fw-bold text-uppercase fs-7">export</div>
										</div>
										</div>
										
										<!-- BEGIN -->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
											<i class="fa-light fa-files fs-1"></i>
											</span>
											<span class="menu-title">Registration Form</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#student.php">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Information</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
									</div>
								<!-- END -->
										<!-- BEGIN -->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
											<i class="fa-light fa-file-lines fs-1"></i>
											</span>
											<span class="menu-title">Form</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begi	n:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="/metronic8/demo1/pages/user-profile/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Information</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
									</div>
								<!-- END -->
							</div>							
						<!--end::Menu wrapper-->
						</div>
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
						<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-success overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" data-bs-original-title="200+ in-house components and 3rd-party plugins" data-kt-initialized="1">

						<span class="btn-label">
							Need Help?
						</span>
						<i class="fa-light fa-circle-question fa-question btn-icon fs-2 m-0 px-6"></i></a>
						</div>
						<!--end::Footer-->
					</div>
</div>



<script>
	function showStudent(event) {
    event.preventDefault();
    var s = document.getElementById("student");
	var f = document.getElementById("faculty");
	var sb = document.getElementById("subject");

    if (s.style.display === "none") {
        s.style.display = "block";
		f.style.display = "none";
		sb.style.display = "none";
    }
}

	function showFaculty(event) {
	event.preventDefault();
    var s = document.getElementById("student");
    var f = document.getElementById("faculty");
    var sb = document.getElementById("subject");

    if (f.style.display === "none") {
        f.style.display = "block";
        s.style.display = "none";
        sb.style.display = "none";
    }
}

	function showSubject(event) {
	event.preventDefault();
    var s = document.getElementById("student");
    var f = document.getElementById("faculty");
    var sb = document.getElementById("subject");

    if (sb.style.display === "none") {
        sb.style.display = "block";
        f.style.display = "none";
        s.style.display = "none";
    }
}


</script>
