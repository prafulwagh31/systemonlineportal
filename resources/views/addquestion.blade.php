<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Add Question | Exam Portal</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Questions</a></li>
                                            <li class="breadcrumb-item active">Add Question</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Question</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="header-title">Add Question</h2>

                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="form-row-preview">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="inputPassword4" class="form-label">Question<span style="color:red"> * </span></label>
                                                            <textarea class="form-control" id="seodescription" rows="4" name="seodescription"></textarea>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputEmail4" class="form-label">Marks<span style="color:red"> * </span></label>
                                                                <input type="text" class="form-control" id="inputEmail4" name="marks">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputPassword4" class="form-label">Status</label>
                                                                <select class="form-select" id="example-select" name="category">
                                                                    <option value=""> </option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Inactive">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <h4>Answers</h4>
                                                            <hr>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputPassword4" class="form-label">Answer<span style="color:red"> * </span></label>
                                                                <textarea class="form-control" id="answer1" rows="4" name="answer1"></textarea>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputPassword4" class="form-label">Answer<span style="color:red"> * </span></label>
                                                                <textarea class="form-control" id="answer2" rows="4" name="answer2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputPassword4" class="form-label">Answer<span style="color:red"> * </span></label>
                                                                <textarea class="form-control" id="answer3" rows="4" name="answer3"></textarea>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="inputPassword4" class="form-label">Answer<span style="color:red"> * </span></label>
                                                                <textarea class="form-control" id="answer4" rows="4" name="answer4"></textarea>
                                                            </div>
                                                        </div>
            
                                                        <button type="submit" class="btn btn-primary" style="float:right;">Save</button>
                                                    </form>                      
                                                </div> <!-- end preview-->
                                            
                                               
                                            </div> <!-- end tab-content-->

                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>

                            
                        </div> 
                    <!-- container -->

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
        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        
        <script>
           CKEDITOR.replace('seodescription');answer1
           CKEDITOR.replace('answer1');
           CKEDITOR.replace('answer2');
           CKEDITOR.replace('answer3');
           CKEDITOR.replace('answer4');
        </script>
    </body>


</html>
