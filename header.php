<?php
/**
 * Created by PhpStorm.
 * User: Davo
 * Date: 1/15/2016
 * Time: 3:42 PM
 */
echo '
<!-- BEGIN HEAD -->
<head>
    <title>Lab 2 | SMA</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-boxed page-md page-header-menu-fixed">
<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="assets/layouts/layout3/img/logo-SMA.PNG" alt="logo" class="logo-default">
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a  class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                        <a  class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-default">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have
<strong>12 pending</strong> tasks</h3>
                                <a href="app_todo.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                    <li>
                                        <a >
                                            <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
</a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                            <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                        <a  class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-calendar"></i>
                            <span class="badge badge-default">3</span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li class="external">
                                <h3>You have
<strong>12 pending</strong> tasks</h3>
                                <a href="app_todo_2.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a >
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                                    <span class="progress progress-striped">
                                                        <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <li class="droddown dropdown-separator">
                        <span class="separator"></span>
                    </li>
                    <!-- BEGIN INBOX DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                        <a  class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="circle">3</span>
                            <span class="corner"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have
<strong>7 New</strong> Messages</h3>
                                <a href="app_inbox.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                            <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                            <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                            <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                            <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                            <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a  class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="assets/layouts/layout3/img/avatar9.jpg">
                            <span class="username username-hide-mobile">Nick</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="app_calendar.html">
                                    <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="app_inbox.html">
                                    <i class="icon-envelope-open"></i> My Inbox
<span class="badge badge-danger"> 3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="app_todo_2.html">
                                    <i class="icon-rocket"></i> My Tasks
<span class="badge badge-success"> 7 </span>
                                </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="page_user_lock_1.html">
                                    <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="page_user_login_1.html">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown dropdown-extended quick-sidebar-toggler">
                        <span class="sr-only">Toggle Quick Sidebar</span>
                        <i class="icon-logout"></i>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container-fluid">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="page_general_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="query">
                            <span class="input-group-btn">
                                <a  class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu  ">
                <ul class="nav navbar-nav">
                    <li class="menu-dropdown active">
                        <a id="menu-dashboard">Dashboard</a>
                    </li>
                    <li class="menu-dropdown">
                        <a id="menu-busqueda">Búsqueda</a>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                        <a > Components </a>
                        <ul class="dropdown-menu" style="">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Components 1</h3>
                                                </li>
                                                <li>
                                                    <a href="components_date_time_pickers.html"> Date & Time Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_color_pickers.html"> Color Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_select2.html"> Select2 Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_select.html"> Bootstrap Select </a>
                                                </li>
                                                <li>
                                                    <a href="components_multi_select.html"> Multi Select </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Components 2</h3>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_select_splitter.html"> Select Splitter </a>
                                                </li>
                                                <li>
                                                    <a href="components_typeahead.html"> Typeahead Autocomplete </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_tagsinput.html"> Bootstrap Tagsinput </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_switch.html"> Bootstrap Switch </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_maxlength.html"> Bootstrap Maxlength </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Components 3</h3>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_fileinput.html"> Bootstrap File Input </a>
                                                </li>
                                                <li>
                                                    <a href="components_bootstrap_touchspin.html"> Bootstrap Touchspin </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools.html"> Form Widgets & Tools </a>
                                                </li>
                                                <li>
                                                    <a href="components_context_menu.html"> Context Menu </a>
                                                </li>
                                                <li>
                                                    <a href="components_editors.html"> Markdown & WYSIWYG Editors </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Components 4</h3>
                                                </li>
                                                <li>
                                                    <a href="components_code_editors.html"> Code Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_ion_sliders.html"> Ion Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_noui_sliders.html"> NoUI Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_knob_dials.html"> Knob Circle Dials </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a > More </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-settings"></i> Form Stuff
<span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="form_controls.html" class="nav-link "> Bootstrap Form
<br>Controls </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_controls_md.html" class="nav-link "> Material Design
<br>Form Controls </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_icheck.html" class="nav-link "> iCheck Controls </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_layouts.html" class="nav-link "> Form Layouts </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_editable.html" class="nav-link "> Form X-editable </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_wizard.html" class="nav-link "> Form Wizard </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_validation.html" class="nav-link "> Form Validation </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_image_crop.html" class="nav-link "> Image Cropping </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_fileupload.html" class="nav-link "> Multiple File Upload </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form_dropzone.html" class="nav-link "> Dropzone File Upload </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-briefcase"></i> Tables
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu ">
                                        <a  class="nav-link nav-toggle"> Static Tables
<span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="table_static_basic.html" class="nav-link "> Basic Tables </a>
                                            </li>
                                            <li class="">
                                                <a href="table_static_responsive.html" class="nav-link "> Responsive Tables </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a  class="nav-link nav-toggle"> Datatables
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                            </li>
                                            <li class="">
                                                <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a  class="nav-link nav-toggle"> Miscellaneous
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="?p=table_misc_tree" class="nav-link "> Tree Table </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a href="?p=" class="nav-link nav-toggle ">
                                    <i class="icon-wallet"></i> Portlets
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="portlet_boxed.html" class="nav-link "> Boxed Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_light.html" class="nav-link "> Light Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_solid.html" class="nav-link "> Solid Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_ajax.html" class="nav-link "> Ajax Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_draggable.html" class="nav-link "> Draggable Portlets </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-bar-chart"></i> Charts
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="charts_amcharts.html" class="nav-link "> amChart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flotcharts.html" class="nav-link "> Flotchart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flowchart.html" class="nav-link "> Flowchart </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a >
                            <i class="icon-briefcase"></i> Pages </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-basket"></i> eCommerce
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="ecommerce_index.html" class="nav-link ">
                                            <i class="icon-home"></i> Dashboard </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ecommerce_orders.html" class="nav-link ">
                                            <i class="icon-basket"></i> Orders </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ecommerce_orders_view.html" class="nav-link ">
                                            <i class="icon-tag"></i> Order View </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ecommerce_products.html" class="nav-link ">
                                            <i class="icon-graph"></i> Products </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ecommerce_products_edit.html" class="nav-link ">
                                            <i class="icon-graph"></i> Product Edit </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-docs"></i> Apps
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="app_todo.html" class="nav-link ">
                                            <i class="icon-clock"></i> Todo 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="app_todo_2.html" class="nav-link ">
                                            <i class="icon-check"></i> Todo 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="app_inbox.html" class="nav-link ">
                                            <i class="icon-envelope"></i> Inbox </a>
                                    </li>
                                    <li class=" ">
                                        <a href="app_calendar.html" class="nav-link ">
                                            <i class="icon-calendar"></i> Calendar </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-user"></i> User
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="page_user_profile_1.html" class="nav-link "> Profile 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_profile_1_account.html" class="nav-link "> Profile 1 Account </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_profile_1_help.html" class="nav-link "> Profile 1 Help </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_profile_2.html" class="nav-link "> Profile 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_lock_1.html" class="nav-link " target="_blank"> Lock Screen 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_user_lock_2.html" class="nav-link " target="_blank"> Lock Screen 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-social-dribbble"></i> General
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="page_general_about.html" class="nav-link "> About </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_contact.html" class="nav-link "> Contact </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_search.html" class="nav-link "> Search </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_pricing.html" class="nav-link "> Pricing </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_faq.html" class="nav-link "> FAQ </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_blog.html" class="nav-link "> Blog </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_blog_post.html" class="nav-link "> Blog Post </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_invoice.html" class="nav-link "> Invoice </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_general_invoice_2.html" class="nav-link "> Invoice 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu ">
                                <a  class="nav-link nav-toggle ">
                                    <i class="icon-settings"></i> System
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="page_system_coming_soon.html" class="nav-link " target="_blank"> Coming Soon </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_system_404_1.html" class="nav-link "> 404 Page 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_system_404_2.html" class="nav-link " target="_blank"> 404 Page 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_system_404_3.html" class="nav-link " target="_blank"> 404 Page 3 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_system_500_1.html" class="nav-link "> 500 Page 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="page_system_500_2.html" class="nav-link " target="_blank"> 500 Page 2 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container-fluid">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Lab SMA </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <div class="page-toolbar">
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container-fluid">
                <!-- BEGIN PAGE BREADCRUMBS -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Template</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">';