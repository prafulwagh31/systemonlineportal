<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ url('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @include('sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    @include('header')
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Projects</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>29</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Projects</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>715</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>31</span></h3>
                                                        <p class="text-muted font-15 mb-0">Members</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                                        <p class="text-muted font-15 mb-0">Productivity</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-4">Project Status</h4>

                                        <div class="my-4 chartjs-chart" style="height: 202px;">
                                            <canvas id="project-status-chart" data-colors="#0acf97,#727cf5,#fa5c7c"></canvas>
                                        </div>

                                        <div class="row text-center mt-2 py-2">
                                            <div class="col-4">
                                                <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>64%</span>
                                                </h3>
                                                <p class="text-muted mb-0">Completed</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>26%</span>
                                                </h3>
                                                <p class="text-muted mb-0"> In-progress</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>10%</span>
                                                </h3>
                                                <p class="text-muted mb-0"> Behind</p>
                                            </div>
                                        </div>
                                        <!-- end row-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Tasks</h4>

                                        <p><b>107</b> Tasks completed out of 195</p>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Coffee detail page - Main Page</a></h5>
                                                            <span class="text-muted font-13">Due in 3 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-warning-lighten">In-progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Logan R. Cohn</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Drinking bottle graphics</a></h5>
                                                            <span class="text-muted font-13">Due in 27 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-danger-lighten">Outdated</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">App design and development</a></h5>
                                                            <span class="text-muted font-13">Due in 7 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-success-lighten">Completed</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Scot M. Smith</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">78h 05min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Poster illustation design</a></h5>
                                                            <span class="text-muted font-13">Due in 5 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-warning-lighten">In-progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">John P. Ritter</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">26h 58min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-4">Tasks Overview</h4>

                                        <div dir="ltr">
                                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                                <canvas id="task-area-chart" data-bgColor="#727cf5" data-borderColor="#727cf5"></canvas>
                                            </div>
                                        </div>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Recent Activities</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="{{ url('assets/images/users/avatar-2.jpg') }}" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Soren Drouin<small class="fw-normal ms-3">18 Jan 2019 11:28 pm</small></h5>
                                                                    <span class="font-13">Completed "Design new idea"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Hyper Mockup</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="{{ url('assets/images/users/avatar-6.jpg') }}" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Anne Simard<small class="fw-normal ms-3">18 Jan 2019 11:09 pm</small></h5>
                                                                    <span class="font-13">Assigned task "Poster illustation design"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Hyper Mockup</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="{{ url('assets/images/users/avatar-3.jpg') }}" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Nicolas Chartier<small class="fw-normal ms-3">15 Jan 2019 09:29 pm</small></h5>
                                                                    <span class="font-13">Completed "Drinking bottle graphics"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Web UI Design</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="{{ url('assets/images/users/avatar-4.jpg') }}" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Gano Cloutier<small class="fw-normal ms-3">10 Jan 2019 08:36 pm</small></h5>
                                                                    <span class="font-13">Completed "Design new idea"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">UBold Admin</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="{{ url('assets/images/users/avatar-5.jpg') }}" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Francis Achin<small class="fw-normal ms-3">08 Jan 2019 12:28 pm</small></h5>
                                                                    <span class="font-13">Assigned task "Hyper app design"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Website Mockup</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Your Calendar</h4>

                                        <div class="row">
                                            <div class="col-md-7">
                                                <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                                            </div> <!-- end col-->
                                            <div class="col-md-5">
                                                <ul class="list-unstyled">
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 7:30 AM - 10:00 AM
                                                        </p>
                                                        <h5>Meeting with BD Team</h5>
                                                    </li>
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 10:30 AM - 11:45 AM
                                                        </p>
                                                        <h5>Design Review - Hyper Admin</h5>
                                                    </li>
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 12:15 PM - 02:00 PM
                                                        </p>
                                                        <h5>Setup Github Repository</h5>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 5:30 PM - 07:00 PM
                                                        </p>
                                                        <h5>Meeting with Design Studio</h5>
                                                    </li>
                                                </ul>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row-->

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            
                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ url('assets/js/vendor.min.js') }}"></script>
        <script src="{{ url('assets/js/app.min.js') }}"></script>

        <!-- third party js -->
        <script src="{{ url('assets/js/vendor/Chart.bundle.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ url('assets/js/pages/demo.dashboard-projects.js') }}"></script>
        <!-- end demo js-->

    </body>


</html>
