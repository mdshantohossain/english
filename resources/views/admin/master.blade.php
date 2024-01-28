<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/form/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/customize/question.css" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark" data-layout-mode="light">

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('/')}}admin/assets/images/logo.svg" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="17">
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('/')}}admin/assets/images/logo-light.svg" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('/')}}admin/assets/images/logo-light.png" alt="" height="19">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>

                <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <span key="t-megamenu">Mega Menu</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-8">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14" key="t-ui-components">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-rating">Rating</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-forms">Forms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-tables">Tables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-charts">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14" key="t-applications">Applications</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-ecommerce">Ecommerce</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-calendar">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-email">Email</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-projects">Projects</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-tasks">Tasks</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-contacts">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14" key="t-extra-pages">Extra Pages</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-light-sidebar">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-compact-sidebar">Compact Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-horizontal">Horizontal layout</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-maintenance">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-coming-soon">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-timeline">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-faqs">FAQs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14" key="t-ui-components">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-rating">Rating</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-forms">Forms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-tables">Tables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-charts">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-5">
                                        <div>
                                            <img src="{{asset('/')}}admin/assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="{{asset('/')}}admin/assets/images/flags/us.jpg" alt="Header Language" height="16">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                            <img src="{{asset('/')}}admin/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                            <img src="{{asset('/')}}admin/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                            <img src="{{asset('/')}}admin/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                            <img src="{{asset('/')}}admin/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                            <img src="{{asset('/')}}admin/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-customize"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="px-lg-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('/')}}admin/assets/images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('/')}}admin/assets/images/brands/bitbucket.png" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('/')}}admin/assets/images/brands/dribbble.png" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('/')}}admin/assets/images/brands/dropbox.png" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('/')}}admin/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('/')}}admin/assets/images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small" key="t-view-all"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex">
                                    <img src="{{asset('/')}}admin/assets/images/users/avatar-3.jpg"
                                         class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex">
                                    <img src="{{asset('/')}}admin/assets/images/users/avatar-4.jpg"
                                         class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Salena Layfield</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('/')}}admin/assets/images/users/avatar-1.jpg"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="bx bx-cog bx-spin"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">

                    <li>
                        <a href="{{ route('student.add') }}" class="waves-effect">
                            <i class="bx bx-file"></i>
                            <span key="t-file-manager">Admission </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-ecommerce">Home Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ecommerce-products.html" key="t-products">Headline</a></li>
                            <li><a href="ecommerce-product-detail.html" key="t-product-detail">Gallery</a></li>
                            <li><a href="ecommerce-orders.html" key="t-orders">Book</a></li>
                            <li><a href="ecommerce-customers.html" key="t-customers">Slider</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bxs-user-detail"></i>
                            <span key="t-contacts">Student Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('student.manage') }}" key="t-user-grid"> Student Manage</a></li>
                            <li><a href="{{ route('student.clear') }}" key="t-user-grid">Clear Student </a></li>
                            <li><a href="{{ route('student.release') }}" key="t-user-grid">Release Student</a></li>
                            <li><a href="{{ route('student.complete') }}" key="t-user-grid">All Students </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span key="t-dashboards">Attendance Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('batch.list') }}" key="t-tui-calendar">Active Batches</a></li>
                            <li><a href="{{ route('all.batch') }}" key="t-full-calendar">All Batches</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-task"></i>
                            <span key="t-tasks">Presentation Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tasks-list.html" key="t-task-list">Present Sheet</a></li>
                            <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                            <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-detail"></i>
                            <span key="t-blog">Exam Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('question.add') }}" key="t-blog-list"> Question Make</a></li>
                            <li><a href="{{ route('question.manage') }}" key="t-blog-list"> Question Manage</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span key="t-tables">Teacher Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('teacher.add') }}" key="t-basic-tables">Add Teacher</a></li>
                            <li><a href="{{ route('teacher.manage') }}" key="t-data-tables">Teacher Manage</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span key="t-tables">Member Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#" key="t-basic-tables">Add Teacher</a></li>
                            <li><a href="#" key="t-data-tables">Teacher Manage</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            <span key="t-charts">Card Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('card.manage') }}" key="t-apex-charts">Manage Card</a></li>
                            <li><a href="{{ route('card.complete') }}" key="t-e-charts">Complete Card</a></li>
                            <li><a href="{{ route('card.received') }}" key="t-e-charts">Received Card</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            <span key="t-charts">Hotel Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('manage.add') }}" key="t-apex-charts">Add Hotel </a></li>
                            <li><a href="{{ route('manage.manage') }}" key="t-e-charts">Manage Hotel</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            <span key="t-charts">Email Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('manage.add') }}" key="t-apex-charts">Add Hotel </a></li>
                            <li><a href="{{ route('manage.manage') }}" key="t-e-charts">Manage Hotel</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow waves-effect">
                            <i class="bx bx-user-circle"></i>
                            <span key="t-authentication">User Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="auth-two-step-verification.html" key="t-two-step-verification">Two Step Verification</a></li>
                            <li><a href="auth-two-step-verification-2.html" key="t-two-step-verification-2">Two Step Verification 2</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('body')

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Transaction Modal -->
        <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img src="{{asset('/')}}admin/assets/images/product/img-7.png" alt="" class="avatar-sm">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                            <p class="text-muted mb-0">$ 225 x 1</p>
                                        </div>
                                    </td>
                                    <td>$ 255</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img src="{{asset('/')}}admin/assets/images/product/img-4.png" alt="" class="avatar-sm">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                            <p class="text-muted mb-0">$ 145 x 1</p>
                                        </div>
                                    </td>
                                    <td>$ 145</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Sub Total:</h6>
                                    </td>
                                    <td>
                                        $ 400
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Shipping:</h6>
                                    </td>
                                    <td>
                                        Free
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Total:</h6>
                                    </td>
                                    <td>
                                        $ 400
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

        {{--        <!-- subscribeModal -->--}}
        {{--        <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">--}}
        {{--            <div class="modal-dialog modal-dialog-centered">--}}
        {{--                <div class="modal-content">--}}
        {{--                    <div class="modal-header border-bottom-0">--}}
        {{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
        {{--                    </div>--}}
        {{--                    <div class="modal-body">--}}
        {{--                        <div class="text-center mb-4">--}}
        {{--                            <div class="avatar-md mx-auto mb-4">--}}
        {{--                                <div class="avatar-title bg-light rounded-circle text-primary h1">--}}
        {{--                                    <i class="mdi mdi-email-open"></i>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                            <div class="row justify-content-center">--}}
        {{--                                <div class="col-xl-10">--}}
        {{--                                    <h4 class="text-primary">Subscribe !</h4>--}}
        {{--                                    <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay update.</p>--}}

        {{--                                    <div class="input-group bg-light rounded">--}}
        {{--                                        <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">--}}

        {{--                                        <button class="btn btn-primary" type="button" id="button-addon2">--}}
        {{--                                            <i class="bx bxs-paper-plane"></i>--}}
        {{--                                        </button>--}}

        {{--                                    </div>--}}

        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <!-- end modal -->--}}

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{asset('/')}}admin/assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('/')}}admin/assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('/')}}admin/assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('/')}}admin/assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{asset('/')}}admin/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- dashboard init -->
<script src="{{asset('/')}}admin/assets/js/pages/dashboard.init.js"></script>

<!-- Required datatable js -->
<script src="{{asset('/')}}admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('/')}}admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/')}}admin/assets/form/summernote-bs4.min.js"></script>
<script src="{{asset('/')}}admin/assets/form/summernote-bs4.min.js"></script>
<script src="{{asset('/')}}admin/assets/form/form-editor.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Datatable init js -->
<script src="{{asset('/')}}admin/assets/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>

<!--Customization js-->
<script src="{{asset('/')}}admin/assets/customize/time.js"></script>
@if(Session::has('message'))
    <script>
        $(document).ready(function (){
            toastr.success('{{ Session::get('message') }}');
        });
    </script>
@endif

@yield('script')

</body>
</html>
