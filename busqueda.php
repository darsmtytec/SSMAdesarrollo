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
                        <span class="caption-subject bold uppercase"> Configuración de Búsqueda</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form">
                        <div class="form-body">
                            <div class="form-group form-md-line-input has-info form-md-floating-label">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-control">
                                        <input id="terms-main-input" type="text" class="form-control">
                                        <label for="form_control">Agrega los términos de búsqueda</label>
                                    </div>
                                    <span id="terms-main-btn" class="input-group-btn btn-right">
                                        <button class="btn green-meadow" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <a id="advanced" class="tooltips" data-original-title="Configuraciones de búsqueda extras">Opciones Avanzadas...</a>
                            <!--ADVANCED------------------------------------------------------->
                            <p>
                            </p>
                            <!--SocialIcons--------------------------------------------------->
                            <div id="section-advanced" class="section" style="display: none">
                                    <h4>Redes Sociales</h4>
                                    <div class="socicons">
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-twitter tooltips" data-original-title="Twitter"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-blue-steel font-white bg-hover-grey-salsa socicon-facebook tooltips" data-original-title="Facebook"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-grey-gallery font-white bg-hover-grey-salsa socicon-instagram tooltips" data-original-title="Instagram"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-blue-chambray font-white bg-hover-grey-salsa socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-youtube tooltips" data-original-title="Youtube"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-blue-hoki font-white bg-hover-grey-salsa socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-google tooltips" data-original-title="Google"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-yellow-gold font-white bg-hover-grey-salsa socicon-blogger tooltips" data-original-title="Blogger"></a>
                                        <a class="socicon-btn socicon-btn-circle socicon-solid bg-red-flamingo font-white bg-hover-grey-salsa socicon-reddit tooltips" data-original-title="Reddit"></a>
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
                                    <select id="terms-select" class="form-control" id="form_control_1">
                                        <option class="font-blue-sharp" value="1">Se incluyen todas las palabras...</option>
                                        <option class="font-yellow-soft" value="2">Se incluyen algunas de las palabras...</option>
                                        <option class="font-red-intense" value="0">No se incluyen las palabras...</option>
                                    </select>
                                    <label for="form_control_1">Opciones de términos</label>
                                </div>
                                <p></p>
                                <p>
                                </p>
                                <div class="form-group form-md-line-input has-info form-md-floating-label">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-control">
                                            <input id="terms-extra-input" type="text" class="form-control">
                                            <label for="form_control">Agrega los términos de búsqueda</label>
                                        </div>
                                    <span id="terms-extra-btn" class="input-group-btn btn-right">
                                        <button class="btn blue-madison" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div class="form-actions noborder">
                                <a id="search-btn" class="btn btn-lg btn-primary">
                                    Buscar <i class="fa fa-search"></i>
                                </a>
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
                        <span class="caption-subject bold uppercase"> Términos de Búsqueda</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form">
                        <div id="terms-global-container" class="form-body">
                            <div id="terms-main-container">
                                <h4>Términos de Búsqueda</h4>
                                <ul id="terms-main-search" class="list-inline">
                                    <!--li class="search-label bg-green-meadow font-white">Incluye&nbsp;<a class="fa fa-times"></a></li-->
                                </ul>
                            </div>
                            <div id="terms-defo-container" style="display: none;">
                                <h4>Incluye...</h4>
                                <ul id="terms-defo-search" class="list-inline">
                                    <!--li class="search-label bg-blue-sharp font-white">Incluye&nbsp;<a class="fa fa-times"></a></li-->
                                </ul>
                            </div>
                            <div id="terms-maybe-container" style="display: none;">
                                <h4>Puede contener...</h4>
                                <ul id="terms-maybe-search" class="list-inline">
                                    <!--li class="search-label bg-yellow-soft font-white">Contiene&nbsp;<a class="fa fa-times"></a></li-->
                                </ul>
                            </div>
                            <div id="terms-not-container" style="display: none;">
                                <h4>Se excluye...</h4>
                                <ul id="terms-not-search" class="list-inline">
                                    <!--li class="search-label bg-red-intense font-white">Excluido&nbsp;<a class="fa fa-times"></a></li-->
                                </ul>
                            </div>
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
                                <span class="caption-subject font-green-sharp bold uppercase">REDES SOCIALES </span>
                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click para ver la lista</span>
                            </div>
                        </div>
                        <div class="portlet-body todo-project-list-content" style="height: auto;">
                            <div class="todo-project-list">
                                <ul class="nav nav-stacked">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 6 </span> Twitter </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-warning"> 2 </span> Instagram </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;">
                                            <span class="badge badge-danger"> 3 </span> Youtube </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 14 </span> Facebook </a>
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
                        </div>
                        <div class="portlet-body todo-project-list-content todo-project-list-content-tags" style="height: auto;">
                            <div class="todo-project-list">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-danger"> 6 </span> #TecMty </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 2 </span> #logo </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-success"> 14 </span> #EXATEC </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-warning"> 6 </span> #JirafasLocas </a>
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
                                <span class="caption-helper">Término Buscado:</span> &nbsp;
                                <span class="caption-subject font-green-sharp bold uppercase">Tec de Monterrey</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Opciones
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> Lista </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Exportar
                                                <span class="label label-danger pull-right"><span class="fa fa-upload"></span></span>
                                            </a>
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
                                                        <span class="todo-username pull-left">Kevin Estrada</span>
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
                                                    <input type="text" class="form-control todo-taskbody-tasktitle" placeholder="@KevinEstrada"> </div>
                                            </div>
                                            <!-- TASK DESC -->
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Trabajando en DARS"></textarea>
                                                </div>
                                            </div>
                                            <!-- END TASK DESC -->
                                            <!-- TASK TAGS -->
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control todo-taskbody-tags" tabindex="-1" aria-hidden="true">
                                                        <option value="Pending">Muy Positivo</option>
                                                        <option value="Completed">Positivo</option>
                                                        <option value="Testing">Neutral</option>
                                                        <option value="Approved">Negativo</option>
                                                        <option value="Rejected">Muy Negativo</option>
                                                    </select>
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
                                                                            <span class="todo-comment-username">José Carlos</span> &nbsp;
                                                                            <span class="todo-comment-date">17 Ene 2015 at 2:05pm</span>
                                                                        </p>
                                                                        <p class="todo-text-color"> Mentiroso, no has hecho nada. </p>
                                                                        <!-- Nested media object -->
                                                                        <div class="media">
                                                                            <a class="pull-left" href="javascript:;">
                                                                                <img class="todo-userpic" src="assets/layouts/layout3/img/avatar4.jpg" width="27px" height="27px"> </a>
                                                                            <div class="media-body">
                                                                                <p class="todo-comment-head">
                                                                                    <span class="todo-comment-username">Edgardo Acosta</span> &nbsp;
                                                                                    <span class="todo-comment-date">17 Ene 2016 at 4:30pm</span>
                                                                                </p>
                                                                                <p class="todo-text-color"> Muy Cierto, muy cierto </p>
                                                                            </div>
                                                                        </div>
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