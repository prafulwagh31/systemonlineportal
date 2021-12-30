<div class="leftside-menu">

                <!-- LOGO -->
                <a href="{{ route('home') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                         <img src="{{ url('frontassets/img/rpgplogo.png') }}" alt="" height="50">

                    </span>
                    <span class="logo-sm">
                      <img src="{{ url('frontassets/img/rpgplogo.png') }}" alt="" height="20">

                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ route('home') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                         <img src="{{ url('frontassets/img/rpgplogo.png') }}" alt="" height="50">

                    </span>
                    <span class="logo-sm">
                         <img src="{{ url('frontassets/img/rpgplogo.png') }}" alt="" height="20">

                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-item">
                            <a href="{{ route('home') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarExam" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Exams </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExam">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('addexam') }}">Add Exam</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('examlist') }}">Exam List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('examcategory') }}">Exam Category</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('categorylist') }}">Category List</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-orders-details.html">Exam Completed</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-customers.html">Exam Result</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarQuestion" class="side-nav-link">
                                <i class="uil-file-question-alt"></i>
                                <span> Questions </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarQuestion">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('addquestion') }}">Add Question</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('questionlist') }}">Question List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- <li class="side-nav-item">
                            <a  href="#"  class="side-nav-link">
                                <i class="uil-user-plus"></i>
                                <span> Users </span>
                            </a>
                        </li> -->

                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-money-bill"></i>
                                <span> Payment </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSetting" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                                <i class="dripicons-gear noti-icon"></i>
                                <span> Setting </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSetting">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('websitesetting') }}">Webiste Setting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pagesetting') }}">Page Setting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('socialsetting') }}">Social Setting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('aboutsus') }}">AboutUs Setting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('aboutlist') }}">AboutUs List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('termscondition') }}">Terms & Condition Setting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('termconditionlist') }}">Terms & Condition List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faqs') }}">FAQ Setting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faqlist') }}">FAQ List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <br>
                        <li class="side-nav-title side-nav-item">Account Setting</li>
                        <li class="side-nav-item">
                            <a href="{{ route('profile') }}" class="side-nav-link">
                                <i class="uil-user-square"></i>
                                <span> Profile </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="mdi mdi-logout me-1"></i>
                                <span> Logout </span>
                            </a>
                        </li>
                    </ul>


                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
