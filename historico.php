<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="historico/search.min.css" rel="stylesheet" type="text/css" />
<link href="historico/historico.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<div class="search-page search-content-2">
    <div class="row">
        <div class="col-lg-4">
            <div class="search-filter ">
                <div class="search-label uppercase">Buscar...</div>
                <div class="input-icon right">
                    <i class="icon-magnifier"></i>
                    <input type="text" class="form-control" placeholder="Término"> </div>
                <div class="search-label uppercase">Ordenar por</div>
                <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>

                <div class="search-label uppercase">Fecha</div>
                <div class="input-group input-large date-picker input-daterange input-icon right" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                    <i class="icon-calendar"></i>
                    <input type="text" class="form-control" name="from" placeholder="Fecha Inicio...">
                    <span class="input-group-addon"> al </span>
                    <i class="icon-calendar"></i>
                    <input type="text" class="form-control" name="to" placeholder="Fecha Fin...">
                </div>
                <button class="btn green bold uppercase btn-block">Buscar <i class="fa fa-search"></i></button>
                <div class="search-filter-divider"></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="search-container ">
                <ul class="search-title">
                    <li class="search-item-header">
                        <h1><i class="font-blue-hoki fa fa-archive"></i>Términos Guardados</h1>
                    </li>
                </ul>
                <ul>
                    <li class="search-item clearfix">
                        <div class="search-content">
                            <div class="row">
                                <div class="col-sm-4 col-xs-8">
                                    <h2 class="search-title">
                                        <a href="javascript:;">#Chocolates</a>
                                    </h2>
                                    <p class="search-desc"> Creado por:
                                        <a href="javascript:;">David</a> -
                                        <span class="font-grey-salt">Hace 25 mins</span>
                                    </p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">4392</p>
                                    <p class="search-counter-label uppercase">Posts</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number"><i class="font-yellow-soft fa fa-smile-o"></i></p>
                                    <p class="search-counter-label uppercase">Sentimiento</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">0</a></p>
                                    <p class="search-counter-label uppercase">Datos</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <div class="btn-group">
                                        <p class="search-counter-number dropdown-toggle"  data-toggle="dropdown" aria-expanded="false"><a class="font-dark fa fa-ellipsis-v"></a></p>
                                        <p class="search-counter-label uppercase">Opciones</p>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;"><i class="font-green-meadow fa fa-upload"></i>Exportar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-blue-hoki fa fa-edit"></i>Editar</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-red-intense fa fa-times"></i>Eliminar </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div></li>
                    <li class="search-item clearfix">
                        <div class="search-content">
                            <div class="row">
                                <div class="col-sm-4 col-xs-8">
                                    <h2 class="search-title">
                                        <a href="javascript:;">#JirafasLocas</a>
                                    </h2>
                                    <p class="search-desc"> Creado por:
                                        <a href="javascript:;">José Carlos</a> -
                                        <span class="font-grey-salt">Hace 2 hrs</span>
                                    </p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">384</p>
                                    <p class="search-counter-label uppercase">Posts</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number"><i class="font-yellow-soft fa fa-smile-o"></i></p>
                                    <p class="search-counter-label uppercase">Sentimiento</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">0</a></p>
                                    <p class="search-counter-label uppercase">Datos</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <div class="btn-group">
                                        <p class="search-counter-number dropdown-toggle"  data-toggle="dropdown" aria-expanded="false"><a class="font-dark fa fa-ellipsis-v"></a></p>
                                        <p class="search-counter-label uppercase">Opciones</p>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;"><i class="font-green-meadow fa fa-upload"></i>Exportar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-blue-hoki fa fa-edit"></i>Editar</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-red-intense fa fa-times"></i>Eliminar </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div></li>
                    <li class="search-item clearfix">
                        <div class="search-content">
                            <div class="row">
                                <div class="col-sm-4 col-xs-8">
                                    <h2 class="search-title">
                                        <a href="javascript:;">#Gartner</a>
                                    </h2>
                                    <p class="search-desc"> Creado por:
                                        <a href="javascript:;">Xochitl</a> -
                                        <span class="font-grey-salt">Hace 1 día</span>
                                    </p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">0</p>
                                    <p class="search-counter-label uppercase">Posts</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number"><i class="fa fa-meh-o"></i></p>
                                    <p class="search-counter-label uppercase">Sentimiento</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">0</a></p>
                                    <p class="search-counter-label uppercase">Datos</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <div class="btn-group">
                                        <p class="search-counter-number dropdown-toggle"  data-toggle="dropdown" aria-expanded="false"><a class="font-dark fa fa-ellipsis-v"></a></p>
                                        <p class="search-counter-label uppercase">Opciones</p>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;"><i class="font-green-meadow fa fa-upload"></i>Exportar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-blue-hoki fa fa-edit"></i>Editar</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-red-intense fa fa-times"></i>Eliminar </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div></li>
                    <li class="search-item clearfix">
                        <div class="search-content">
                            <div class="row">
                                <div class="col-sm-4 col-xs-8">
                                    <h2 class="search-title">
                                        <a href="javascript:;">Logo Tec</a>
                                    </h2>
                                    <p class="search-desc"> Creado por:
                                        <a href="javascript:;">Gardo</a> -
                                        <span class="font-grey-salt">Hace 1 día</span>
                                    </p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">823</p>
                                    <p class="search-counter-label uppercase">Posts</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number"><i class="font-red-intense fa fa-frown-o"></i></p>
                                    <p class="search-counter-label uppercase">Sentimiento</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <p class="search-counter-number">0</a></p>
                                    <p class="search-counter-label uppercase">Datos</p>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <div class="btn-group">
                                        <p class="search-counter-number dropdown-toggle"  data-toggle="dropdown" aria-expanded="false"><a class="font-dark fa fa-ellipsis-v"></a></p>
                                        <p class="search-counter-label uppercase">Opciones</p>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="javascript:;"><i class="font-green-meadow fa fa-upload"></i>Exportar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-blue-hoki fa fa-edit"></i>Editar</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"><i class="font-red-intense fa fa-times"></i>Eliminar </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div></li>
                </ul>
                <div class="search-pagination">
                    <ul class="pagination">
                        <li class="page-active">
                            <a href="javascript:;"> 1 </a>
                        </li>
                        <li>
                            <a href="javascript:;"> 2 </a>
                        </li>
                        <li>
                            <a href="javascript:;"> 3 </a>
                        </li>
                        <li>
                            <a href="javascript:;"> 4 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="historico/search.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PERSONAL SCRIPTS -->
<script src="historico/historico.js"></script>
<!-- END PERSONAL SCRIPTS -->
</html>