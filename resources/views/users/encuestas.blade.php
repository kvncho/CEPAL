@extends('users.app')
@section('content')
<div class="navbar navbar-inverse navbar-fixed-top bg-indigo">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Text link</a></li>

            <li>
                <a href="#">
                    <i class="icon-cog3"></i>
                    <span class="visible-xs-inline-block position-right">Icon link</span>
                </a>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/images/image.png" alt="">
                    <span>{{Auth::user()->name}}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>

                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-default sidebar-fixed">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="/images/image.png" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">{{Auth::user()->name}}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->

                            <li><a href="#" ><i class="icon-home4"></i> <span>Inicio</span></a></li>
                            <li>
                                <a href="#" data-value="1" class="padre"><i class="icon-stack2"></i> <span>1. Fin de la Pobreza</span></a>
                                <ul>

                                    <li id="lista"  ><a class="hija" data-value="1.a.1" href="#}">1.a.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="1.5.2"  href="#">1.5.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="1.a.2" href="#">1.a.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="1.b.1" href="#">1.b.1</a></li>
                                </ul>
                            </li>
                                <li>
                                    <a href="#" data-value="2"  class="padre"><i class="icon-copy"></i> <span>2. Hambre Cero</span></a>
                                    <ul>
                                        <li id="lista"  ><a class="hija" data-value="2.3.1" href="#">2.3.1</a></li>
                                        <li id="lista"  ><a class="hija" data-value="2.3.2" href="#">2.3.2</a></li>
                                        <li id="lista"  ><a class="hija" data-value="2.a.1" href="#">2.a.1</a></li>
                                        <li id="lista"  ><a class="hija" data-value="2.b.1" href="#">2.b.1</a></li>
                                        <li id="lista"  ><a class="hija" data-value="2.b.2" href="#">2.b.2</a></li>
                                        <li id="lista"  ><a class="hija" data-value="2.c.1" href="#">2.c.1</a></li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#" data-value="7" class="padre"><i class="icon-droplet2"></i> <span>7. Energia Asequible y no Contaminable</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="7.3.1" href="#">7.3.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="7.b.1" href="#">7.b.1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-value="8" class="padre"><i class="icon-stack"></i> <span>8. Trabajo Decente y Crecimiento Económico</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="8.1.1" href="#">8.1.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.2.1" href="#">8.2.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.3.1" href="#">8.3.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.4.1" href="#">8.4.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.4.2" href="#">8.4.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.5.1" href="#">8.5.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.5.2" href="#">8.5.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.9.1" href="#">8.9.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.9.2" href="#">8.9.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="8.b.1" href="#">8.b.1</a></li>
                                </ul>
                            </li>
                            <li><a href="" data-value="9" class="padre"><i class="icon-list-unordered"></i> <span>9. Industria 		Innovacion E Infraestructura </span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="9.1.2" href="#">9.1.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.2.1" href="#">9.2.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.2.2" href="#">9.2.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.3.1" href="#">9.3.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.4.1" href="#">9.4.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.5.1" href="#">9.5.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.a.1" href="#">9.a.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="9.b.1" href="#">9.b.1</a></li>
                                </ul>
                            </li>
                            <li><a href="" data-value="10" class="padre"><i class="icon-width"></i> <span>10. Reducción de las Desigualdades</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="10.4.1" href="#">10.4.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="10.5.1" href="#">10.5.1</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="#"  data-value="11" class="padre"><i class="icon-pencil3"></i> <span>11. Ciudades y Comunidades Sostenibles</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="11.5.2" href="#">11.5.2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-value="12" class="padre"><i class="icon-file-css"></i> <span>12. Producción y Consumo Responsable</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="12.2.1" href="#">12.2.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="12.2.2" href="#">12.2.2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-value="14" class="padre"><i class="icon-footprint"></i> <span>14. Vida Submarina</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="14.7.1" href="#">14.7.1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-value="16" class="padre"><i class="icon-spell-check"></i> <span>16. Paz, Justicia e Instituciones Sólidas</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="16.6.1" href="#">16.6.1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-value="17" class="padre"><i class="icon-select2"></i> <span>17. Alianzas para Lograr los Objetivos</span></a>
                                <ul>
                                    <li id="lista"  ><a class="hija" data-value="17.1.1" href="#">17.1.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.1.2" href="#">17.1.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.2.1" href="#">17.2.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.3.1" href="#">17.3.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.3.2" href="#">17.3.2</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.4.1" href="#">17.4.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.11.1" href="#">17.11.1</a></li>
                                    <li id="lista"  ><a class="hija" data-value="17.13.1" href="#">17.13.1</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i>
                            <span class="text-semibold">Starters</span> - Fixed Layout</h4>
                    </div>


                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href=" "><i class="icon-home2 position-left"></i> Inicio</a></li>
                        <li><a href="">Starters</a></li>
                        <li><a href="">Fixed layout</a></li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">


                <!-- 1ER CONTENIDO -->
                <div class="panel panel-flat step step-1">
                    <div class="panel-heading" style="background:#4774AB;color :white;margin-bottom: 20px;">
                        <h3 class="panel-title"> </i>( I ) Marcar solo una de las opciones</h3>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body" >

                        <div class="panel panel-flat">



                            <form name="formE"  role="form" method="POST" action="{{ url('users/home') }}">
                                {{ csrf_field() }}
                                <div class="table-responsive">

                                    <table class="table table-hover">

                                        <tbody>
                                        <tr>
                                            <td colspan="2">A. Se produce el indicador de manera regular</td>

                                            <td>
                                                <input name="chka" type="radio"  id="chka_1" value="01" onclick="habilitar();"/>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">B. No se produce el indicador, sin embargo las fuentes existentes posibilitan su producción</td>

                                            <td><input name="chka" type="radio"  id="chka_2" value="02" onclick="habilitar();"/></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">C. No se produce...</td>
                                            <td>C1. sin embargo existe información que es necesario mejorarla</td>
                                            <td><input name="chka" type="radio"  id="chka_3" value="03" onclick="habilitar();"/></td>
                                        </tr>
                                        <tr>

                                            <td>C2. No existe ningun tipo de información</td>
                                            <td><input name="chka" type="radio"  id="chka_4" value="04" onclick="habilitar();"/></td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>




                        </div>
                        <div class="stepy-navigator" >

                            <a href="#" id="next" class="button-next btn btn-primary legitRipple">
                                Next <i class="icon-arrow-right14 position-right">
                                </i>
                                <span class="legitRipple-ripple" style="left: 40.359%; top: 7.89474%; transform: translate3d(-50%, -50%, 0px); width: 215.724%; opacity: 0;"></span></a></div>
                        <div class="panel panel-body border-top-primary" style="border:none; margin-top: 30px;">
                            <div class="progress">
                                <div class="progress-bar bg-teal .sr-only" style="width: 20%">
                                    <span>20% Complete</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 2DO CONTENIDO  -->
                <div class="panel panel-flat step step-2" >
                    <div class="panel-heading" style="background:#4774AB;color :white;margin-bottom: 20px;">
                        <h3 class="panel-title"> </i>( II ) La información debe estar referida al indicador que es producido o las fuentes existentes que posibilitan su producción</h3>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body" >

                        <div class="panel panel-flat">


                            <div class="table-responsive">

                                <table class="table table-bordered">
                                    <thead>
                                            <th rowspan="2" class="text-center">Cobertura geográfica</th>
                                            <th rowspan="2" class="text-center">Periodicidad de difusión de resultados</th>
                                            <th colspan="2" class="text-center">Disponibilidad de la información</th>
                                            <th rowspan="2" class="text-center">Institución responsable</th>
                                    </thead>
                                    <tbody class="">
                                    <td >
                                        <div id="otro3" style="display:block;">
                                            <input   name="cobertura" type="radio" id="co_0" value="01" onclick="vercobertura();"/>Nacional
                                            <br />
                                            <input name="cobertura" type="radio" id="co_1" value="02" onclick="vercobertura();" />Regional
                                            <br />
                                            <input name="cobertura" type="radio" id="co_2" value="03" onclick="vercobertura();" />Urbano
                                            <br />
                                            <input name="cobertura" type="radio" id="co_3" value="04"  onclick="vercobertura();"/>Rural
                                            <br />
                                            <input name="cobertura" type="radio" id="co_4" value="05" onclick="vercobertura();" />Grandes ciudades
                                            <br />
                                            <input name="cobertura" type="radio" id="co_5" value="06" onclick="vercobertura();"/>Otros:
                                            <br />
                                            <div id="otro" style="display:none;">
                                                <input type="text" name="Eotro" id="Eotro" />
                                            </div>
                                        </div>
                                    </td>
                                    <td >
                                        <div id="otro4" style="display:block;">
                                            <input type="radio" name="Periodicidad" value="01" id="Pe_0" onclick="VPeriodicidad();" />Mensual
                                            <br />
                                            <input type="radio" name="Periodicidad" value="02" id="Pe_1" onclick="VPeriodicidad();"/>Bimestral
                                            <br />
                                            <input type="radio" name="Periodicidad" value="03" id="Pe_2" onclick="VPeriodicidad();"/>Trimestral
                                            <br />
                                            <input type="radio" name="Periodicidad" value="04" id="Pe_3" onclick="VPeriodicidad();"/>Semestral
                                            <br />
                                            <input type="radio" name="Periodicidad" value="05" id="Pe_4" onclick="VPeriodicidad();"/>Anual
                                            <br />
                                            <input type="radio" name="Periodicidad" value="06" id="Pe_5" onclick="VPeriodicidad();" />Otros:
                                            <br />
                                            <div id="otro1" style="display:none;">
                                                <input type="text" name="Eotro1" id="Eotro1" />
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <div id="otro5" style="display:block;">
                                            Mes:
                                            <select name="DMes">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            Año:<input type="text" name="Danno" id="Danno" size="3" onChange="validarSiNumero(this.value);"/>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div id="otro6" style="display:block;">
                                            Mes:
                                            <select name="HMes">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>

                                            Año:<input type="text" name="hanno" id="hanno" size="3" onChange="validarSiNumero(this.value);" />
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <div id="otro7" style="display:block;">
                                            <textarea name="responsable" id="responsable" cols="20" rows="5"></textarea>
                                        </div
                                        ></td>
                                     </tbody>
                                </table>

                            </div>

                        </div>
                        <div class="stepy-navigator" >
                            <a id="back" href="#" class="button-back btn btn-default legitRipple">
                                <i class="icon-arrow-left13 position-left">

                                </i> Back
                            </a>
                            <a href="#" id="next" class="button-next btn btn-primary legitRipple">
                                Next <i class="icon-arrow-right14 position-right">
                                </i>
                                <span class="legitRipple-ripple" style="left: 40.359%; top: 7.89474%; transform: translate3d(-50%, -50%, 0px); width: 215.724%; opacity: 0;">

                                    </span>
                            </a>
                        </div>
                        <div class="panel panel-body border-top-primary" style="border:none; margin-top: 30px;">
                            <div class="progress">
                                <div class="progress-bar bg-teal .sr-only" style="width: 20%">
                                    <span>20% Complete</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- 3ER CONTENIDO -->
                <div class="panel panel-flat step step-3" >
                    <div class="panel-heading" style="background:#4774AB;color :white;margin-bottom: 20px;">
                        <h3 class="panel-title"> </i>( III ) Si el indicador no puede ser producido a partir de las fuentes de información existente, responda este apartado</h3>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body" >

                        <div class="panel panel-flat">

                            <div class="table-responsive">

                                <table class="table table-hover">

                                    <tbody>
                                    <td >
                                        <div id="otro2" style="display:block;">

                                            <input   name="fuente" type="radio" id="fte_0" value="01"/>Falta de recursos económicos, es necesario contar con recursos adicionales.
                                            <br />
                                            <input name="fuente" type="radio" id="fte_1" value="02"/>Falta de capacidad técnica, es necesario recursos humanos capacitados y/o recursos tecnológicos
                                            <br />
                                            <input name="fuente" type="radio" id="fte_2" value="03"/>No hubo demanda del indicador, pero existe capacidad técnica y recursos para producirlo.
                                            <br />
                                            <input name="fuente" type="radio" id="fte_3" value="04"/>No se ha desarrollado aún una metodología internacional concensuada.
                                        </div>
                                    </td>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div class="stepy-navigator" >
                            <a id="back" href="#" class="button-back btn btn-default legitRipple">
                                <i class="icon-arrow-left13 position-left">

                                </i> Back
                            </a>
                            <a href="#" id="next" class="button-next btn btn-primary legitRipple">
                                Next <i class="icon-arrow-right14 position-right">
                                </i>
                                <span class="legitRipple-ripple" style="left: 40.359%; top: 7.89474%; transform: translate3d(-50%, -50%, 0px); width: 215.724%; opacity: 0;">

                                    </span>
                            </a>
                        </div>
                        <div class="panel panel-body border-top-primary" style="border:none; margin-top: 30px;">
                            <div class="progress">
                                <div class="progress-bar bg-teal .sr-only" style="width: 20%">
                                    <span>20% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4TO CONTENIDO -->
                <div class="panel panel-flat step step-4">
                    <div class="panel-heading" style="background:#4774AB;color :white;margin-bottom: 20px;">
                        <h3 class="panel-title"> </i>( IV )Observaciones</h3>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body" >

                        <div class="panel panel-flat">

                            <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                    <th rowspan="2" class="text-center">Indique cualquier información adicional que considere pertiente para la producción del indicador</th>
                                    </thead>
                                    <tbody>
                                    <td class="text-center"><textarea name="Observaciones" id="Observaciones" cols="150" rows="5"></textarea>
                                    </td
                                    </tbody>
                                </table>
                                <input type="hidden" name="chka"  />
                            </div>
                            </form>
                        </div>
                        <div class="stepy-navigator" >
                            <a  id="back" href="#" class="button-back btn btn-default legitRipple">
                                <i class="icon-arrow-left13 position-left">

                                </i> Back
                            </a>
                            <a href="#" id="next" class="button-next btn btn-primary legitRipple">
                                Grabar <i class="icon-floppy-disk position-right">
                                </i>
                                <span class="legitRipple-ripple" style="left: 40.359%; top: 7.89474%; transform: translate3d(-50%, -50%, 0px); width: 215.724%; opacity: 0;">

                                    </span>
                            </a>
                        </div>
                        <div class="panel panel-body border-top-primary" style="border:none; margin-top: 30px;">
                            <div class="progress">
                                <div class="progress-bar bg-teal .sr-only" style="width: 20%">
                                    <span>20% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
@endsection



