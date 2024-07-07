<!DOCTYPE html>
<!--
Author: Engr Sadaqat
Product Name: Patient Management System

-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Patient Management System - Track All Your Records In One Place</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Patient Management System"/>
    <meta name="keywords" content="Patient , Hospital"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Patient Management System - Track All Your Records in One Place"/>
    <meta property="og:url" content="#/hospital"/>
    <meta property="og:site_name" content="Patient Management System | Patient Management System"/>
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header">
            <!--begin::Header container-->
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                 id="kt_app_header_container">
                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Sidebar mobile toggle-->
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="../../demo1/dist/index.html" class="d-lg-none">
                        <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px"/>
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                     id="kt_app_header_wrapper">
                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                         data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                         data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <!--begin::Menu-->
                        {{--We Will add Some Important data in the header--}}
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::Search-->
                        <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                                 data-kt-search-keypress="true" data-kt-search-min-length="2"
                                 data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
                                 data-kt-menu-overflow="false" data-kt-menu-permanent="true"
                                 data-kt-menu-placement="bottom-end">
                                <!--begin::Search toggle-->
                                <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                     id="kt_header_search_toggle">
                                    <div
                                        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Search toggle-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content"
                                     class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Form-->
                                        <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                              autocomplete="off">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input type="text"
                                                   class="search-input form-control form-control-flush ps-10"
                                                   name="search" value="" placeholder="Search By Patient Name"
                                                   data-kt-search-element="input"/>
                                            <!--end::Input-->
                                            <!--begin::Spinner-->
                                            <span
                                                class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1">
														<span
                                                            class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
                                            <!--end::Spinner-->
                                            <!--begin::Reset-->
                                            <span
                                                class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                data-kt-search-element="clear">
														<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <!--end::Reset-->
                                            <!--begin::Toolbar-->
                                            <div class="position-absolute top-50 end-0 translate-middle-y"
                                                 data-kt-search-element="toolbar">
                                                <!--begin::Preferences toggle-->
                                                <div data-kt-search-element="preferences-show"
                                                     class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                     data-bs-toggle="tooltip" title="Show search preferences">
                                                    <i class="ki-duotone ki-setting-2 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Preferences toggle-->

                                            </div>
                                            <!--end::Toolbar-->
                                        </form>
                                        <!--end::Form-->
                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200 mb-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="results d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pb-5"
                                                    data-kt-search-element="category-title">Patients</h3>
                                                <!--end::Category title-->


                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Recently viewed-->
                                        <div class="mb-5" data-kt-search-element="main">
                                            <!--begin::Heading-->

                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                                <!--begin::Item-->

                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Empty-->

                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Preferences-->

                                    <!--end::Preferences-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Doctors</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Patients</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Bookings</span>
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-7">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="preferences-dismiss">Cancel
                                            </button>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Search-->


                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu toggle-->
                            <a href="#"
                               class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                               data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                               data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                </i>
                                <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Theme mode-->


                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img src="assets/media/avatars/300-1.jpg" alt="user"/>
                            </div>
                            <!--begin::User account menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="assets/media/avatars/300-1.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div
                                                class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}} {{--User Name--}}
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin   {{--User Role--}}</span>
                                            </div>
                                            <a href="#"
                                               class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}} {{--User Email--}}</a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="{{route('user.profile')}}" class="menu-link px-5">My Profile</a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">


                                    <a href="{{ route('logout') }}"
                                       class="menu-link px-5"
                                       onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                 id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-element-4 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                 data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="../../demo1/dist/index.html">
                        <img alt="Logo" src="assets/media/logos/logo.png" class="h-50px app-sidebar-logo-default"/>
                        <img alt="Logo" src="assets/media/logos/logo.png" class="h-20px app-sidebar-logo-minimize"/>
                    </a>
                    <!--end::Logo image-->

                    <div id="kt_app_sidebar_toggle"
                         class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                         data-kt-toggle-name="app-sidebar-minimize">
                        <i class="ki-duotone ki-double-left fs-2 rotate-180">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                         data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                         data-kt-scroll-save-state="true">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                             data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-11 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">Dashboard</span>
										</span>
                                <!--end:Menu link-->

                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-user fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Patients</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">

                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        @can('Create Patient')
                                            <a class="menu-link" href="{{route('patient.create')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                                <span class="menu-title">Add New</span>
                                            </a>
                                        @endcan
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->


                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="{{route('patients.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">List All</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->

                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::sidebar menu-->
                <!--begin::Footer-->
                <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    <a href="/"
                       class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                       title="Check out the documentation of this product">
                        <span class="btn-label">Documentation</span>
                        <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                @yield('main')
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div
                        class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024&copy;</span>
                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Patient Management
                                System</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank"
                                   class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->


<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->


<!--begin::Custom Javascript(used for the current page only)-->
@yield('page-scripts')
<!--end::Custom Javascript-->


<!--end::Javascript-->
@if(session('Create'))

    <!--begin::Toast-->
    <div class="position-fixed top-15 end-0 p-3 z-index-1" style="top: 60px">
        <div id="kt_docs_toast_toggle" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="ki-duotone ki-abstract-19 fs-2 text-danger me-3"><span class="path1"></span><span
                        class="path2"></span></i>
                <strong class="me-auto">Created</strong>
                <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('Create') }}
            </div>
        </div>
    </div>
    <!--end::Toast-->

@endif


@if(session('Update'))

    <!--begin::Toast-->
    <div class="position-fixed top-15 end-0 p-3 z-index-1" style="top: 60px">
        <div id="kt_docs_toast_toggle" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="ki-duotone ki-abstract-19 fs-2 text-danger me-3"><span class="path1"></span><span
                        class="path2"></span></i>
                <strong class="me-auto">Updated</strong>
                <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('Update') }}
            </div>
        </div>
    </div>
    <!--end::Toast-->

@endif


<script>
    const toastElement = document.getElementById('kt_docs_toast_toggle');
    const toast = bootstrap.Toast.getOrCreateInstance(toastElement);
    toast.show();
    $(document).ready(function () {
        // Show the toast message if the session variable is set
        @if(session('Create'))
        $('.toast').toast('show');
        @endif
    });
</script>


<script>

    $(document).ready(function () {
        $('.search-input').on('input', function () {
            var searchText = $(this).val().trim();
            performSearch(searchText);
        });


        function performSearch(searchText) {
            $(".search-spinner").removeClass('d-none');
            $('.results').html('');

            if (searchText.length > 2) {
                // Send AJAX request to the server
                $.ajax({
                    url: '/filter-patients',
                    method: 'GET',
                    data: {searchText: searchText},
                    success: function (response) {

                        if (response.length > 0) {
                            response.forEach(function (patient, index) {
                                //Append patient data to .results element
                                $('.results').append('<a class="text-primary" href="/patients/' + patient.id + '">' + patient.name + '</a> <br>');
                            });
                        } else {
                            $('.results').append('<div>No results found</div>');
                        }
                    },
                    error: function (xhr, status, error) {
                        // Handle error response from server
                        console.error('Error:', error);
                    },
                    complete: function () {
                        $(".search-spinner").addClass('d-none');
                    }
                });
            }
        }

    });

</script>

</body>
<!--end::Body-->
</html>
