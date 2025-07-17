@extends('layouts.app')

@section('main')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Dashboard</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" >Add New Patient</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Lists Widget 19-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Heading-->
                            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('assets/media/svg/shapes/top-green.png" data-bs-theme="light">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column text-white pt-15">
                                    <span class="fw-bold fs-2x mb-3">Total Appointment Today</span>
                                    <div class="fs-4 text-white">
                                        <span class="opacity-75">We have</span>
                                        <span class="position-relative d-inline-block">
																<a href="#" class="link-white opacity-75-hover fw-bold d-block mb-1">60 Appointments</a>
                                            <!--begin::Separator-->
																<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                            <!--end::Separator-->
															</span>
                                        <span class="opacity-75">Today</span>
                                    </div>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->

                                <!--end::Toolbar-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div class="card-body mt-n20">
                                <!--begin::Stats-->
                                <div class="mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-3 g-lg-6">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<i class="ki-duotone ki-flask fs-1 text-primary">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Total Patients</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<i class="ki-duotone ki-bank fs-1 text-primary">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Rooms Booked Currently</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<i class="ki-duotone ki-award fs-1 text-primary">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">25</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Present Staff</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Lists Widget 19-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8 mb-5 mb-xl-10">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-xl-10">
                                <!--begin::Slider Widget 1-->
                                <div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <h4 class="card-title d-flex align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">OT Report</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-7">Current Surgical Activity</span>
                                        </h4>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Carousel Indicators-->
                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="active ms-1"></li>
                                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
                                            </ol>
                                            <!--end::Carousel Indicators-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-6">
                                        <!--begin::Carousel-->
                                        <div class="carousel-inner mt-n5">
                                            <!--begin::Item-->
                                            <div class="carousel-item active show">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Chart-->
                                                    <div class="w-80px flex-shrink-0 me-2">
                                                        <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1" style="height: 100px"></div>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Current Surgery</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>Dr. Adams</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>Open Surgery</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>50 Min</span>
                                                                <!--end::Section-->

                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Details</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="carousel-item">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Chart-->
                                                    <div class="w-80px flex-shrink-0 me-2">
                                                        <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2" style="height: 100px"></div>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Next Surgery</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>Dr. Elizbat</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>Open Surgery</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>2 Hrs</span>
                                                                <!--end::Section-->

                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Detail</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->

                                        </div>
                                        <!--end::Carousel-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Slider Widget 1-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-5 mb-xl-10">
                                <!--begin::Slider Widget 2-->
                                <div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <h4 class="card-title d-flex align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-7">lorem Ipsum dollar sit amt</span>
                                        </h4>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Carousel Indicators-->
                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>

                                            </ol>
                                            <!--end::Carousel Indicators-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-6">
                                        <!--begin::Carousel-->
                                        <div class="carousel-inner">
                                            <!--begin::Item-->
                                            <div class="carousel-item active show">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-70px symbol-circle me-5">
																			<span class="symbol-label bg-light-success">
																				<i class="ki-duotone ki-abstract-24 fs-3x text-success">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>5 Topics</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>1 Speakers</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>60 Min</span>
                                                                <!--end::Section-->
                                                                <!--begin::Section-->
                                                                <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>10 Members</span>
                                                                <!--end::Section-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Item-->

                                        </div>
                                        <!--end::Carousel-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Slider Widget 2-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Engage widget 4-->

                        <!--end::Engage widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
