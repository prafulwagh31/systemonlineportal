<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>FAQ List | Exam Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

        <!-- third party css -->
        <link href="{{ url('assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                            <li class="breadcrumb-item active">FAQ List</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">FAQ List</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="header-title">FAQ List</h2>
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="buttons-table-preview">
                                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr no:</th>
                                                            <th>Language</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                    @foreach($faqlist as $key => $faqlistval)
                                                        <tr>
                                                            <td>{{$faqlist->firstItem()+$key}}</td>
                                                            <td>{{$faqlistval->language}}</td>
                                                            <td>{{$faqlistval->description}}</td>
                                                            <td class="table-action">
                                                                <a href="{{route('editfaq',$faqlistval->id)}}" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                <a href="{{route('destroyfaq',$faqlistval->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach      
                                                    </tbody>
                                                </table>                                         
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="buttons-table-code">
                                                <p>Please include following css file at <code>head</code> element</p>

                                                <pre>
                                                    <span class="html escape">
                                                        &lt;!-- Datatables css --&gt;
                                                        &lt;link href=&quot;assets/css/vendor/buttons.bootstrap4.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <p>Make sure to include following js files at end of <code>body</code> element</p>

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Datatables js --&gt;
                                                        &lt;script src=&quot;assets/js/vendor/dataTables.buttons.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/vendor/buttons.bootstrap4.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/vendor/buttons.html5.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/vendor/buttons.flash.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/vendor/buttons.print.min.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                                
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table id=&quot;datatable-buttons&quot; class=&quot;table table-striped dt-responsive nowrap w-100&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Name&lt;/th&gt;
                                                                    &lt;th&gt;Position&lt;/th&gt;
                                                                    &lt;th&gt;Office&lt;/th&gt;
                                                                    &lt;th&gt;Age&lt;/th&gt;
                                                                    &lt;th&gt;Start date&lt;/th&gt;
                                                                    &lt;th&gt;Salary&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                        
                                                        
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Tiger Nixon&lt;/td&gt;
                                                                    &lt;td&gt;System Architect&lt;/td&gt;
                                                                    &lt;td&gt;Edinburgh&lt;/td&gt;
                                                                    &lt;td&gt;61&lt;/td&gt;
                                                                    &lt;td&gt;2011/04/25&lt;/td&gt;
                                                                    &lt;td&gt;$320,800&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Garrett Winters&lt;/td&gt;
                                                                    &lt;td&gt;Accountant&lt;/td&gt;
                                                                    &lt;td&gt;Tokyo&lt;/td&gt;
                                                                    &lt;td&gt;63&lt;/td&gt;
                                                                    &lt;td&gt;2011/07/25&lt;/td&gt;
                                                                    &lt;td&gt;$170,750&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                        
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
        <script src="{{ url('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ url('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/buttons.html5.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/buttons.flash.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/buttons.print.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ url('assets/js/vendor/dataTables.select.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ url('assets/js/pages/demo.datatable-init.js') }}"></script>
        <!-- end demo js-->

    </body>


</html>
