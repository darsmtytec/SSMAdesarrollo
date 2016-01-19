<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="busqueda/busqueda.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/apps/css/todo-2.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!--==============================
    Search Section
==================================-->
<div id="section-search" class="section">
    <div class="row">
<!--==============================
    Config
==================================-->
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase"> Configuraci�n de B�squeda</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form">
                        <div class="form-body">
                            <div class="form-group form-md-line-input has-info form-md-floating-label">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-control">
                                        <input type="text" class="form-control">
                                        <label for="form_control_1">Agrega los t�rminos de b�squeda</label>
                                    </div>
                                    <span class="input-group-btn btn-right">
                                        <button class="btn  blue-madison" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <a id="advanced">Opciones Avanzadas...</a>
                            <!--ADVANCED------------------------------------------------------->
                            <p>
                            </p>
                            <!--SocialIcons--------------------------------------------------->
                            <div id="section-advanced" class="section" style="display: none">

                                <div class="form-group form-md-checkboxes">
                                    <label>Redes Sociales</label>
                                    <div class="socicons">
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-twitter tooltips" data-original-title="Twitter" aria-describedby="tooltip875444"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue-steel font-white bg-hover-grey-salsa socicon-facebook tooltips" data-original-title="Facebook"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-grey-gallery font-white bg-hover-grey-salsa socicon-instagram tooltips" data-original-title="Instagram"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue-chambray font-white bg-hover-grey-salsa socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-youtube tooltips" data-original-title="Youtube"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-google tooltips" data-original-title="Google"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow-gold font-white bg-hover-grey-salsa socicon-blogger tooltips" data-original-title="Blogger"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red-flamingo font-white bg-hover-grey-salsa socicon-reddit tooltips" data-original-title="Reddit"></a>
                                    </div>
                                </div>
                                <!--SocialIcons-->
                                <div class="form-group form-md-checkboxes">
                                    <label>NSFW (Not Safe for Work)</label>
                                    <div class="md-checkbox-inline">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox7" class="md-check" checked="">
                                            <label for="checkbox7">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                18+</label>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <p>
                                </p>
                                <div class="form-group form-md-line-input has-info">
                                    <select class="form-control" id="form_control_1">
                                        <option value="">Se incluyen todas las palabras...</option>
                                        <option value="">Se incluyen algunas de las palabras...</option>
                                        <option value="">No se incluyen las palabras...</option>
                                    </select>
                                    <label for="form_control_1">Opciones de t�rminos</label>
                                </div>
                                <p></p>
                                <p>
                                </p>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control" id="form_control_2">
                                    <label for="form_control_1">Agrega los t�rminos de b�squeda</label>
                                </div>
                                <p></p>
                                <div class="form-actions noborder">
                                    <a class="btn btn-lg btn-primary">
                                        Buscar <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--PortletBody-->
                </div>
                <!--Portlet-->
            </div>
        </div>
        <!--==============================
            Terms
            ==================================-->
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-fire font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase"> T�rminos de B�squeda</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form">
                        <div class="form-body">
                            <ul class="list-inline">
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                                <li class="search-label bg-green font-white">Termino 1 <a class="fa fa-times"></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Config Row-->
</div>
<!--End Search Section-->
<!--==============================
    Contents Section
==================================-->
<div id="section-posts">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN TODO SIDEBAR -->
            <div class="todo-ui">
                <div class="todo-sidebar">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
                                <span class="caption-subject font-green-sharp bold uppercase">PROJECTS </span>
                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view project list</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn green btn-circle btn-outline btn-sm todo-projects-config" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-settings"></i> &nbsp;
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> New Project </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Pending
                                                <span class="badge badge-danger"> 4 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Completed
                                                <span class="badge badge-success"> 12 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Overdue
                                                <span class="badge badge-warning"> 9 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Archived Projects </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body todo-project-list-content" style="height: auto;">
                            <div class="todo-project-list">
                                <ul class="nav nav-stacked">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 6 </span> AirAsia Ads </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-success"> 2 </span> HSBC Promo </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;">
                                            <span class="badge badge-success"> 3 </span> GlobalEx</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-default"> 14 </span> Empire City </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 6 </span> AirAsia Ads </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-danger"> 2 </span> Loop Inc Promo </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content-tags">
                                <span class="caption-subject font-red bold uppercase">TAGS </span>
                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view</span>
                            </div>
                            <div class="actions">
                                <div class="actions">
                                    <a class="btn btn-circle grey-salsa btn-outline btn-sm" href="javascript:;">
                                        <i class="fa fa-plus"></i> Add </a>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body todo-project-list-content todo-project-list-content-tags" style="height: auto;">
                            <div class="todo-project-list">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-danger"> 6 </span> Pending </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 2 </span> Completed </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-success"> 14 </span> In Progress </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-warning"> 6 </span> Closed </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 2 </span> Delivered </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TODO SIDEBAR -->
                <!-- BEGIN TODO CONTENT -->
                <div class="todo-content">
                    <div class="portlet light ">
                        <!-- PROJECT HEAD -->
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-green-sharp hide"></i>
                                <span class="caption-helper">GlobalEx Tasks:</span> &nbsp;
                                <span class="caption-subject font-green-sharp bold uppercase">Tune Website</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> MANAGE
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> New Task </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Pending
                                                <span class="badge badge-danger"> 4 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Completed
                                                <span class="badge badge-success"> 12 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Overdue
                                                <span class="badge badge-warning"> 9 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Delete Project </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end PROJECT HEAD -->
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-4">
                                    <div class="todo-tasklist">
                                        <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar4.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Slider Redesign </div>
                                            <div class="todo-tasklist-item-text"> Lorem dolor sit amet ipsum dolor sit consectetuer dolore. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 21 Sep 2014 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Urgent</span>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-red">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar5.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Homepage Alignments to adjust </div>
                                            <div class="todo-tasklist-item-text"> Lorem ipsum dolor sit amet, consectetuer dolore dolor sit amet. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 14 Sep 2014 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Important</span>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar9.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Slider Redesign </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 10 Feb 2015 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp; </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar6.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Contact Us Map Location changes </div>
                                            <div class="todo-tasklist-item-text"> Lorem ipsum amet, consectetuer dolore dolor sit amet. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 04 Oct 2014 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp;
                                                <span class="todo-tasklist-badge badge badge-roundless">Test</span>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-purple">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar7.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Projects list new Forms </div>
                                            <div class="todo-tasklist-item-text"> Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 19 Dec 2014 </span>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-yellow">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar8.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> New Search Keywords </div>
                                            <div class="todo-tasklist-item-text"> Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor, consectetuer ipsum consectetuer sit amet dolore. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 02 Feb 2015 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp; </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar9.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Slider Redesign </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 10 Feb 2015 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp; </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-red">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar5.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Homepage Alignments to adjust </div>
                                            <div class="todo-tasklist-item-text"> Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 14 Sep 2014 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Important</span>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                            <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar6.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Contact Us Improvement </div>
                                            <div class="todo-tasklist-item-text"> Lorem ipsum amet, psum dolor sit consectetuer dolore. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> 21 Feb 2015 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp;
                                                <span class="todo-tasklist-badge badge badge-roundless">Primary</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-tasklist-devider"> </div>
                                <div class="col-md-7 col-sm-8">
                                    <form action="#" class="form-horizontal">
                                        <!-- TASK HEAD -->
                                        <div class="form">
                                            <div class="form-group">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="todo-taskbody-user">
                                                        <img class="todo-userpic pull-left" src="assets/layouts/layout3/img/avatar6.jpg" width="50px" height="50px">
                                                        <span class="todo-username pull-left">Vanessa Bond</span>
                                                        <button type="button" class="todo-username-btn btn btn-circle btn-default btn-sm">&nbsp;edit&nbsp;</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="todo-taskbody-date pull-right">
                                                        <button type="button" class="todo-username-btn btn btn-circle btn-default btn-sm">&nbsp; Complete &nbsp;</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END TASK HEAD -->
                                            <!-- TASK TITLE -->
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title..."> </div>
                                            </div>
                                            <!-- TASK DESC -->
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..."></textarea>
                                                </div>
                                            </div>
                                            <!-- END TASK DESC -->
                                            <!-- TASK DUE DATE -->
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-icon">
                                                        <i class="fa fa-calendar"></i>
                                                        <input type="text" class="form-control todo-taskbody-due" placeholder="Due Date..."> </div>
                                                </div>
                                            </div>
                                            <!-- TASK TAGS -->
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control todo-taskbody-tags select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                        <option value="Pending">Pending</option>
                                                        <option value="Completed">Completed</option>
                                                        <option value="Testing">Testing</option>
                                                        <option value="Approved">Approed</option>
                                                        <option value="Rejected">Rejected</option>
                                                    </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 483px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-zvtw-container"><span class="select2-selection__rendered" id="select2-zvtw-container" title="Pending">Pending</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <!-- TASK TAGS -->
                                            <div class="form-actions right todo-form-actions">
                                                <button class="btn btn-circle btn-sm green">Save Changes</button>
                                                <button class="btn btn-circle btn-sm btn-default">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="tabbable-line">
                                            <ul class="nav nav-tabs ">
                                                <li class="active">
                                                    <a href="#tab_1" data-toggle="tab"> Comments </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_2" data-toggle="tab"> History </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">
                                                    <!-- TASK COMMENTS -->
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <ul class="media-list">
                                                                <li class="media">
                                                                    <a class="pull-left" href="javascript:;">
                                                                        <img class="todo-userpic" src="assets/layouts/layout3/img/avatar8.jpg" width="27px" height="27px"> </a>
                                                                    <div class="media-body todo-comment">
                                                                        <button type="button" class="todo-comment-btn btn btn-circle btn-default btn-sm">&nbsp; Reply &nbsp;</button>
                                                                        <p class="todo-comment-head">
                                                                            <span class="todo-comment-username">Christina Aguilera</span> &nbsp;
                                                                            <span class="todo-comment-date">17 Sep 2014 at 2:05pm</span>
                                                                        </p>
                                                                        <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                                                            turpis. </p>
                                                                        <!-- Nested media object -->
                                                                        <div class="media">
                                                                            <a class="pull-left" href="javascript:;">
                                                                                <img class="todo-userpic" src="assets/layouts/layout3/img/avatar4.jpg" width="27px" height="27px"> </a>
                                                                            <div class="media-body">
                                                                                <p class="todo-comment-head">
                                                                                    <span class="todo-comment-username">Carles Puyol</span> &nbsp;
                                                                                    <span class="todo-comment-date">17 Sep 2014 at 4:30pm</span>
                                                                                </p>
                                                                                <p class="todo-text-color"> Thanks so much my dear! </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <a class="pull-left" href="javascript:;">
                                                                        <img class="todo-userpic" src="assets/layouts/layout3/img/avatar5.jpg" width="27px" height="27px"> </a>
                                                                    <div class="media-body todo-comment">
                                                                        <button type="button" class="todo-comment-btn btn btn-circle btn-default btn-sm">&nbsp; Reply &nbsp;</button>
                                                                        <p class="todo-comment-head">
                                                                            <span class="todo-comment-username">Andres Iniesta</span> &nbsp;
                                                                            <span class="todo-comment-date">18 Sep 2014 at 9:22am</span>
                                                                        </p>
                                                                        <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                                            vestibulum in vulputate at, tempus viverra turpis.
                                                                            <br> </p>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <a class="pull-left" href="javascript:;">
                                                                        <img class="todo-userpic" src="assets/layouts/layout3/img/avatar6.jpg" width="27px" height="27px"> </a>
                                                                    <div class="media-body todo-comment">
                                                                        <button type="button" class="todo-comment-btn btn btn-circle btn-default btn-sm">&nbsp; Reply &nbsp;</button>
                                                                        <p class="todo-comment-head">
                                                                            <span class="todo-comment-username">Olivia Wilde</span> &nbsp;
                                                                            <span class="todo-comment-date">18 Sep 2014 at 11:50am</span>
                                                                        </p>
                                                                        <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                                            vestibulum in vulputate at, tempus viverra turpis.
                                                                            <br> </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END TASK COMMENTS -->
                                                    <!-- TASK COMMENT FORM -->
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <ul class="media-list">
                                                                <li class="media">
                                                                    <a class="pull-left" href="javascript:;">
                                                                        <img class="todo-userpic" src="assets/layouts/layout3/img/avatar4.jpg" width="27px" height="27px"> </a>
                                                                    <div class="media-body">
                                                                        <textarea class="form-control todo-taskbody-taskdesc" rows="4" placeholder="Type comment..."></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <button type="button" class="pull-right btn btn-sm btn-circle green"> &nbsp; Submit &nbsp; </button>
                                                        </div>
                                                    </div>
                                                    <!-- END TASK COMMENT FORM -->
                                                </div>
                                                <div class="tab-pane" id="tab_2">
                                                    <ul class="todo-task-history">
                                                        <li>
                                                            <div class="todo-task-history-date"> 20 Jun, 2014 at 11:35am </div>
                                                            <div class="todo-task-history-desc"> Task created </div>
                                                        </li>
                                                        <li>
                                                            <div class="todo-task-history-date"> 21 Jun, 2014 at 10:35pm </div>
                                                            <div class="todo-task-history-desc"> Task category status changed to "Top Priority" </div>
                                                        </li>
                                                        <li>
                                                            <div class="todo-task-history-date"> 22 Jun, 2014 at 11:35am </div>
                                                            <div class="todo-task-history-desc"> Task owner changed to "Nick Larson" </div>
                                                        </li>
                                                        <li>
                                                            <div class="todo-task-history-date"> 30 Jun, 2014 at 8:09am </div>
                                                            <div class="todo-task-history-desc"> Task completed by "Nick Larson" </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TODO CONTENT -->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>
<!--==============================
    Scripts Section
==================================-->
<?php include 'footer.php'; ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/apps/scripts/todo-2.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PERSONAL SCRIPTS -->
<script src="busqueda/busqueda_v1.js"></script>
<!-- END PERSONAL SCRIPTS -->
</html>