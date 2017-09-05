<!DOCTYPE html>
<html lang="en" class="app" ng-app="BackEnd">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/icon.css" type="text/css" />
        <link rel="stylesheet" href="css/font.css" type="text/css" />
        <link rel="stylesheet" href="css/app.css" type="text/css" />
        <link rel="stylesheet" href="js/chosen/chosen.css" type="text/css" />
        <link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />
        <link rel="stylesheet" href="js/slider/slider.css" type="text/css" />
        <link rel="stylesheet" href="js/nestable/nestable.css" type="text/css" />

        <style>

            .resto:hover, .resto-actif
            {

                cursor: pointer;
                color:#FFF;
                /*overflow: hidden;*/
                background: #1ccacc;
                border-radius: 0.4em !important;
                border: 1px solid #0d5e92 !important;
                box-shadow: inset 0 0 2px 1px rgba(255,255,255,0.08), 0 16px 10px -8px rgba(0, 0, 0, 0.6);
            }

            .resto:hover  .timeline-date
            {
                color:#7b848a;
            }
            .resto-actif .timeline-date
            {
                color:#7b848a;
            }
        </style>
        <script src="js/angular/angular.min.js"></script>
        <script src="js/angular/angular-route.js"></script>

    </head>

    <body class="archenis-theme" ng-controller="backgroundController">
        <section class="vbox">
            <header class="panel header header-md navbar navbar-fixed-top-xs box-shadow" style="background: rgba(0, 0, 0, 0.6);">
                <div class="navbar-header aside">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="#/" class="navbar-brand">
                        <img src="images/logo.png" class="m-r-sm" alt="scale">EBD
                    </a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                        <i class="fa fa-cog"></i>
                    </a>
                </div>
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="i i-grid"></i>
                        </a>
                        <!--<section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                            <div class="row m-l-none m-r-none m-t m-b text-center">
                                <div class="col-xs-4">
                                    <div class="padder-v">
                                        <a href="#">
                                            <span class="m-b-xs block">
                                              <i class="i i-mail i-2x text-primary-lt"></i>
                                            </span>
                                            <small class="text-muted">Mailbox</small>
                                        </a>backgroundController
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="padder-v">
                                        <a href="#">
                            <span class="m-b-xs block">
                              <i class="i i-calendar i-2x text-danger-lt"></i>
                            </span>
                                            <small class="text-muted">Calendar</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="padder-v">
                                        <a href="#">
                            <span class="m-b-xs block">
                              <i class="i i-map i-2x text-success-lt"></i>
                            </span>
                                            <small class="text-muted">Map</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="padder-v">
                                        <a href="#">
                            <span class="m-b-xs block">
                              <i class="i i-paperplane i-2x text-info-lt"></i>
                            </span>
                                            <small class="text-muted">Trainning</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="padder-v">
                                        <a href="#">
                            <span class="m-b-xs block">
                              <i class="i i-images i-2x text-muted"></i>
                            </span>
                                            <small class="text-muted">Photos</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="padder-v">
                                        <a href="#">
                            <span class="m-b-xs block">
                              <i class="i i-clock i-2x text-warning-lter"></i>
                            </span>
                                            <small class="text-muted">Timeline</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>-->
                    </li>
                </ul>
                <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
                            </span>
                            <input type="text" class="form-control input-sm no-border" placeholder="Rechercher pubs...">
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                    <li class="hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="i i-chat3"></i>
                            <span class="badge badge-sm up bg-danger count">2</span>
                        </a>
                        <!--<section class="dropdown-menu aside-xl animated flipInY">
                            <section class="panel bg-white">
                                <div class="panel-heading b-light bg-light">
                                    <strong>You have <span class="count">2</span> notifications</strong>
                                </div>
                                <div class="list-group list-group-alt">
                                    <a href="#" class="media list-group-item">
                          <span class="pull-left thumb-sm">
                            <img src="images/a0.png" alt="..." class="img-circle">
                          </span>
                                        <span class="media-body block m-b-none">
                            Use awesome animate.css<br>
                            <small class="text-muted">10 minutes ago</small>
                          </span>
                                    </a>
                                    <a href="#" class="media list-group-item">
                          <span class="media-body block m-b-none">
                            1.0 initial released<br>
                            <small class="text-muted">1 hour ago</small>
                          </span>
                                    </a>
                                </div>
                                <div class="panel-footer text-sm">
                                    <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                    <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                                </div>
                            </section>
                        </section>-->
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span class="thumb-sm avatar pull-left user_{{ Auth::user()->id }}">
                              <img src="images/login-w-icon.png" alt="..." style="width: 50px;height: 30px;">
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <li>
                                <span class="arrow top"></span>
                                <a href="javascript:void()"  ng-click="showModalUpdate(user,'Utilisateur',user.id)">Paramètres</a>
                            </li>
                            <li>
                                <a href="docs.html">Aide</a>
                            </li>
                            <li>
                                <a href="{{url('deconnexion')}}">Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <section>
                <section class="hbox stretch panel">
                    <aside class="aside hidden-xs" id="nav" style="background: rgba(0, 0, 0, 0.5);">
                        <section class="vbox" >
                            <div class="clearfix wrapper dk nav-user hidden-xs">

                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="thumb avatar pull-left m-r">
                                            <img src="images/login-w-icon.png" class="dker" alt="..." style="width: 50px;height: 50px;">
                                            <i class="on md b-black"></i>
                                        </span>
                                         <span class="hidden-nav-xs clear text-white">
                                            <span class="block m-t-xs">
                                                <strong class="font-bold text-lt">{{ Auth::user()->name }}</strong>
                                                <b class="caret"></b>
                                            </span>
                                            <span class="text-muted text-xs block">Administrateur</span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li>
                                            <span class="arrow top hidden-nav-xs"></span>
                                            <a href="#">Paramètres</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="badge bg-danger pull-right">3</span>
                                                Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="badge bg-danger pull-right">5</span>
                                                Utilisateurs
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#">Aide</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="{{url('deconnexion')}}" data-toggle="ajaxModal" >Déconnexion</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <section style="margin-top:80px;">
                                <section>
                                    <section>
                                        <div ng-repeat="user in utilisateurs" ng-if="user.id=={{\Illuminate\Support\Facades\Session::get('id')}}" class="wrapper" >
                                            <button ng-click="showModalUpdate(user,'Utilisateur',user.id)" class="btn btn-sm btn-s-md font-bold bg-templateblue">Paramétrage</button>
                                        </div>
                                        <div class=" wrapper">
                                            <ul class="nav nav-pills nav-stacked font-bold" style="cursor: pointer;">
                                                <li>
                                                    <a href="#/" ng-class="{active:linknav==='/'}">
                                                        <span class="badge badge-empty pull-right"><%sliders.length%></span>
                                                        <i class="fa fa-fw fa-star-o"></i> Sliders
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#/pensees" ng-class="{active:linknav=='/pensees'}">
                                                        <span class="badge badge-empty pull-right"><%pensees.length%></span>
                                                        <i class="fa fa-fw fa-star-o"></i> Pensées
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#/messages" ng-class="{active:linknav=='/messages'}" >
                                                        <span class="badge badge-empty pull-right"><%messages.length%></span>
                                                        <i class="fa fa-fw fa-star-o"></i> Messages
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#/galerie" ng-class="{active:linknav=='/galerie'}" >
                                                        <span class="badge badge-empty pull-right"><%galeries.length%></span>
                                                        <i class="fa fa-fw fa-user"></i> Galerie
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#/activites" ng-class="{active:linknav=='/activites'}">
                                                        <span class="badge badge-empty pull-right"><%activites.length%></span>
                                                        <i class="fa fa-fw fa-star-o"></i> Activités
                                                    </a>
                                                </li>
                                                <li>
                                                    <a ng-click="setContent($event,0,2)" >
                                                        <span class="badge badge-empty pull-right"><%utilisateurs.length%></span>
                                                        <i class="fa fa-fw fa-users"></i> Actualités
                                                    </a>
                                                </li>
                                                <li>
                                                    <a ng-click="setContent($event,0,2)" >
                                                        <span class="badge badge-empty pull-right"><%utilisateurs.length%></span>
                                                        <i class="fa fa-fw fa-users"></i> Infos Eglises
                                                    </a>
                                                </li>
                                                <li >
                                                    <a href="pg=4">
                                                        <i class="fa fa-fw fa-envelope"></i>
                                                        Messagerie
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="line dk"></div>
                                        <div class="padder m-t">Accès Rapide</div>
                                        <ul class="nav nav-pills nav-stacked no-radius m-t-sm">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-circle-o text-warning pull-right m-t-xs m-r-xs"></i>
                                                    Pensées échues
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-circle-o pull-right m-t-xs m-r-xs"></i>
                                                    Configuration apps
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-circle-o text-success pull-right m-t-xs m-r-xs"></i>
                                                    Privilèges
                                                </a>
                                            </li>
                                        </ul>
                                    </section>
                                </section>
                            </section>
                            <footer class="footer dker hidden-xs text-center bg-templateblue">
                                <a href="#viewAuteur" class="inline wrapper animated " data-toggle="class:show"><i class="i i-chat3"></i></a>
                            </footer>
                        </section>
                    </aside>
                    <!-- /.aside -->

                    <section>
                        <section class="hbox stretch">
                            <!-- AUTEURS -->
                            <aside class="aside bg-templateblue lt hide" id="viewAuteur">
                                <section class="vbox animated fadeIn">
                                    <header class="dk header text-center">
                                        <button class="btn bg-white btn-sm btn-transparent-white bg-white-only btn-rounded btn-icon" ng-click="showModalAdd('Auteur')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter un Auteur"><i class="fa fa-plus"></i></button>
                                        <button class="btn btn-sm bg-white btn-rounded btn-icon" ng-click="trierElement('Auteur','')" data-toggle="tooltip" data-placement="bottom" data-title="Actualiser" ><i class="fa fa-refresh"></i></button>
                                    </header>
                                    <section class="scrollable">
                                        <div class="list-group auto list-group-alt no-radius no-borders" >
                                            <a ng-repeat="auteur in auteurs | orderBy:'-updated_at' | filter:{'nom':TriAuteurByNom} track by $index" style="cursor:pointer;" class="list-group-item text-white on animated zoomIn"  data-toggle="class:bg-templateblue" title="" id="auteur_<%auteur.id%>">
                                                <i class="fa fa-fw fa-edit text-white text-xs" ng-click="showModalUpdate(auteur,'Auteur',auteur.id)"></i>
                                                <span ng-click="trierElement('Pensees','auteur',auteur,$event)" ><%auteur.nom | uppercase %></span>
                                                <button style="margin-top: -5px;" class="btn btn-sm bg-template text-white btn-rounded btn-icon pull-right" ng-click="deleteElement(auteur.id,'Auteur',$index)"><i class="fa fa-trash-o"></i></button>
                                            </a>
                                        </div>
                                    </section>
                                    <footer class="footer dk clearfix">
                                        <form class="m-t-sm">
                                            <div class="input-group" style="border:2px solid #cbd5dd;border-radius: 2px;margin-top: -2px;">
                                                <span class="input-group-btn">
                                                  <button type="submit" class="btn btn-sm bg-white b-white btn-icon "><i class="fa fa-search"></i></button>
                                                </span>
                                                <input type="text" class="form-control input-sm no-border" ng-model="TriAuteurByNom" ng-change="" placeholder="Rechercher...">

                                            </div>
                                        </form>
                                    </footer>
                                </section>
                            </aside>

                            <aside class="aside-lg panel bg-templateblue hide on animated zoomIn" id="viewAddActivite">
                                <div class="wrapper">
                                    <h4 class="m-t-none">Nouvelle Activité</h4>
                                    <form id="Form_addActivite" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" action="{{url('/addElement/Activite')}}">
                                        {{--ng-submit="addElement($event,'Activite')"--}}
                                        <input type="hidden" id="id_activite" name="id_activite" value="">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <input type="texte" id="titreactivite" name="titre" placeholder="Titre" class="input-sm form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <select id="categorieactivite" name="categorie" class="form-control" required>
                                                <option value="" >Categorie concernée</option>
                                                <option ng-repeat="categorie in categories track by $index"  value="<%categorie.nom%>" ><%categorie.nom%></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" id="dateactivite" name="dateact" class="datepicker input-sm form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#texteactiviteconvert">
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                    </ul>
                                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                                        <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                                        <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                                    </ul>
                                                    <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>

                                                    <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>

                                                    <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>

                                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                                    <div class="dropdown-menu">
                                                        <div class="input-group m-l-xs m-r-xs">
                                                            <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/>
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default btn-sm" type="button">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>

                                                    <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />

                                                    <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                                </div>
                                            </div>
                                            <div id="texteactiviteconvert" ng-keyup="keyPress($event,'activite')" class="form-control panel-blur" style="overflow:scroll;height:200px;max-height:200px;background: rgb(107, 107, 107);color:#fff;">
                                                Contenu de l'activité ici
                                            </div>
                                            <input type="hidden" id="texteactivite" name="texte" value="Contenu de l'activite ici" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" accept="image/*" id="imgactivite" name="fichier" class="filestyle pull-right" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-modal" onchange='Chargerphoto("activite")' required>
                                        </div>
                                        <div class="m-t-lg">
                                            <button class="btn btn-sm  bg-template pull-right"><i class="fa fa-check"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </aside>

                            {{--Contenu de chaque Page est remplacé ici--}}
                            <section id="content" class="panel" style="padding-bottom: 30px;" ng-view>

                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!--  /Contenu -->

        <div class="modal fade" id="Modal_addPublicite" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addPublicite" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8"  ng-submit="addElement($event,'Publicite')">
                                <input type="hidden" id="id_pub" name="id_pub" value="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-sm-6">
                                    <h3 class="m-t-none m-b title_modal" >Ajouter un Publicite</h3>
                                    <div class="form-group">
                                        <label>Date de création</label>
                                        <input id="datecreation" name="datecreation" class="form-control" type="date" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date de déclenchement</label>
                                        <input id="datedeclenchement" name="datedeclenchement" class="form-control" type="date" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date d'expiration</label>
                                        <input id="dateexpiration" name="dateexpiration" class="form-control" type="date" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Plages Horaires</label>
                                        <input type="hidden" name="listedroits" id="listedroits" class="form-control" readonly>
                                        <select id="select2Plage" name="plages[]" class="form-control" multiple="multiple" required>
                                            <option ng-repeat="plage in plages track by $index" ng-selected="plage.selected" id="plage_<%plage.debut%>-<%plage.fin%>"  ng-value="plage.id" ><%plage.debut%>-<%plage.fin%></option>
                                        </select>
                                        <button type="button" class="btn btn-dark btn-rounded btn-icon pull-right" ng-click="showModalAdd('Plage')"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="form-group">
                                        <label>Annonceur</label>
                                        <select id="annpub" name="annonceur" class="form-control" required>
                                            <option ng-repeat="ann in annonceurs" ng-value="ann.id"><%ann.nom%></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="afffichierpub" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);">
                                        <img alt="" class="thumbnail" style="width:260px;height:198px;" id="affimgpub" >
                                    </div>
                                    <div class="form-group" >
                                        <input id="imgpub" name="imgpub" type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" onchange='Chargerphoto("imgpub","affimgpub")' required>
                                        <input type="hidden" id="typepub" name="typepub">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Restaurants</label>
                                        <select id="select2Resto" name="restaurants[]" class="form-control" multiple="multiple" >
                                            <option ng-repeat="inforestaurant in infosrestaurants track by $index" ng-selected="inforestaurant.selected" id="restopub_<%inforestaurant.restaurant.id%>" ng-value="inforestaurant.restaurant.id" ><%inforestaurant.restaurant.nom%></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input id="nompub" name="nom" class="form-control" type="text" required>
                                    </div>
                                    <div class="pull-right" style="margin-top: 25px;">
                                        <a type="button"  class="btn btn-default closebtn" data-dismiss="modal" ng-click="clearModal()">Annuler</a>
                                        <button id="save_Publicite" type="submit" class="btn btn-primary" >Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="Modal_addRestaurant">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addRestaurant" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Restaurant')">
                                <input type="hidden" id="id_resto" name="id_resto" value="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-sm-6">
                                    <h3 class="m-t-none m-b title_modal" >Ajouter un Restaurant</h3>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input id="nomresto" name="nom" class="form-control" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input id="adrresto" name="adresse" class="form-control" type="text" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lattitude</label>
                                        <input id="latresto" name="lattitude" class="form-control" type="number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre de tablette</label>
                                        <input id="nbretabresto" name="nbretab" class="form-control" type="number" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="margin-top: 42px;">
                                        <label>Numéro de téléphone</label>
                                        <input id="phoneresto" name="phone" class="form-control" type="number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Adrese email</label>
                                        <input id="adrmailresto" name="email" class="form-control" type="email" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input id="longresto" name="longitude" class="form-control" type="number" required>
                                    </div>
                                    <div class="pull-right" style="margin-top: 25px;">
                                        <a type="button"  class="btn btn-default" data-dismiss="modal"  >Annuler</a>
                                        <button id="save_Restaurant" type="submit" class="btn btn-primary" >Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="Modal_addTablette">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addTablette" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Tablette')">
                                <input type="hidden" id="id_tab" name="id_tab" value="">
                                <input type="hidden" id="id_restotab" name="restaurant" value="">
                                <div class="col-sm-6">
                                    <h3 class="m-t-none m-b title_modal" >Ajouter une Tablette</h3>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input id="nomtab" name="nom" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <div class="form-group" style="margin-top: 23px;">
                                        <label>Adresse mac</label>
                                        <input id="mactab" name="mac" class="form-control" type="text" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Details</label>
                                        <textarea id="detailsmac" name="details" class="form-control" style="overflow:scroll;height:150px;max-height:150px" contenteditable="true"></textarea>
                                    </div>
                                </div>
                                <div class="pull-right" style="margin-top: 25px;">
                                    <a type="button"  class="btn btn-default" data-dismiss="modal"  >Annuler</a>
                                    <button id="save_Tablette" type="submit" class="btn btn-primary" >Ajouter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="Modal_addPingsresto">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addPingsresto" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Pingsresto')">
                                <input type="hidden" id="id_pingsresto" name="id_pingsresto" value="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-sm-6">
                                    <h3 class="m-t-none m-b title_modal" >Ajouter un Pingsresto</h3>
                                    <div class="form-group">
                                        <label>isUpToDate</label>
                                        <input id="isuptodateping" name="isuptodate" class="form-control" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Restaurant</label>
                                        <select id="restoping" name="restaurant" class="form-control" required>
                                            <option  ng-repeat="inforestaurant in infosrestaurants" value="<%inforestaurant.restaurant.id%>"><%inforestaurant.restaurant.nom%></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="margin-top: 42px;">
                                        <label>Liste</label>
                                        <input id="liste_json_tablettes_ping" name="liste_json_tablettes" class="form-control" type="text" required>
                                    </div>
                                    <div class="pull-right" style="margin-top: 25px;">
                                        <a type="button"  class="btn btn-default" data-dismiss="modal"  >Annuler</a>
                                        <button id="save_Pingsresto" type="submit" class="btn btn-primary" >Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="Modal_addUtilisateur">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addUtilisateur" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Utilisateur')">
                                <input type="hidden" id="id_user" name="id_user" value="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-sm-6">
                                    <h3 class="m-t-none m-b title_modal" >Ajouter un Utilisateur</h3>
                                    <div class="form-group">
                                        <label>Nom Complet</label>
                                        <input id="nomcompletuser" name="nomcomplet" class="form-control" size="16" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="loginuser" name="login" class="form-control" type="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="passworduser" name="password" class="form-control" type="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Droits Utilisateur</label>
                                        <input type="hidden" name="listedroits" id="listedroits" class="form-control" readonly>
                                        <select style="width:260px" multiple name="droits" id="droitsuser" class="chosen-select" required>
                                            <option value="ann">Annonceurs</option>
                                            <option value="pub">Publicites</option>
                                            <option value="mon">Monitoring</option>
                                            <option value="user">Utilisateurs</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="" alt="" class="thumbnail" style="width:260px;height:198px;" id="affimguser" >
                                    <div class="form-group" >
                                        <input id="imguser" name="imguser" type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" onchange='Chargerphoto("user")' required>
                                    </div>
                                    <div class="pull-right" style="margin-top: 25px;">
                                        <a type="button"  class="btn btn-default" data-dismiss="modal"  >Annuler</a>
                                        <button id="save_Utilisateur" type="submit" class="btn btn-primary" >Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--Modal Slider--}}
        <div class="modal fade" id="Modal_addSlider">
            <div class="modal-dialog modal-compose">
                <div class="modal-content">
                    <div class="compose-header">
                        <span> Nouveau Slider </span>
                        <span class="header-controls">
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </span>
                    </div>
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addSlider" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Slider')">
                                <div class="col-sm-6">
                                    <input type="hidden" id="id_slider" name="id_slider" value="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Nom de la page</label>
                                        <input type="text" id="nompage" name="nompage" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image Slider</label>
                                        <input type="file" accept="image/*" id="imgslider" name="imgslider" class="filestyle pull-right" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-modal" onchange='Chargerphoto("slider")' required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div id="afffichierslider" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);">
                                        <img alt="" class="thumbnail" style="width: 100%;height: 135px;margin-bottom: 10px;" id="affimgslider" >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="footer-motif">
                                        <button id="save_Slider" type="submit" class="btn btn-with-icon" href="#"><i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{--Modal Auteur--}}
        <div class="modal fade" id="Modal_addAuteur">
            <div class="modal-dialog modal-compose">
                <div class="modal-content">
                    <div class="compose-header">
                        <span> Nouvel auteur </span>
                        <span class="header-controls">
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </span>
                    </div>
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addAuteur" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8"  ng-submit="addElement($event,'Auteur')">
                                <div class="col-sm-6">
                                    <input type="hidden" id="id_auteur" name="id_auteur" value="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" id="nomauteur" name="nom" class="form-control" placeholder="" required>
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <div class="footer-motif">
                                        <button id="save_Auteur" type="submit" class="btn btn-with-icon" href="#"><i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{--Modal Pensee--}}
        <div class="modal fade" id="Modal_addPensee">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="compose-header">
                        <span> Nouvelle Pensée </span>
                        <span class="header-controls">
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </span>
                    </div>
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addPensee" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Pensee')">
                                <div class="col-sm-6">
                                    <input type="hidden" id="id_pensee" name="id_pensee" value="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Thème</label>
                                        <input type="text" id="themepensee" name="theme" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image de la pensée</label>
                                        <input type="file" id="imgpensee" name="img" class="filestyle pull-right" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-modal" onchange='Chargerphoto("pensee")' required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Auteur</label>
                                        <select id="auteurpensee" name="auteur" class="form-control" required>
                                            <option ng-repeat="auteur in auteurs track by $index"  value="<%auteur.id%>" ><%auteur.nom%></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Datepicker</label>
                                        <input class="form-control" type="date" id="datepassage" name="datepassage" value="{{Carbon\Carbon::now()->format('Y-m-d')}}" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#textepenseeconvert">
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                                    <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                                    <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                                <div class="dropdown-menu">
                                                    <div class="input-group m-l-xs m-r-xs">
                                                        <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/>
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default btn-sm" type="button">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                            </div>
                                            <div class="btn-group hide">
                                                <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                            </div>
                                        </div>
                                        <div id="textepenseeconvert" ng-keyup="keyPress($event,'pensee')" class="form-control panel-blur" style="overflow:scroll;height:200px;max-height:200px;background: rgb(107, 107, 107);color:#fff;">
                                            Contenu de la pensée ici
                                        </div>
                                        <input type="hidden" id="textepensee" name="texte" value="Contenu de la pensée ici">
                                    </div>

                                    <div class="footer-motif">
                                        <button id="save_Pensee" type="submit" class="btn btn-with-icon" href="#"><i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{--Modal Message--}}
        <div class="modal fade" id="Modal_addMessage">
            <div class="modal-dialog modal-compose">
                <div class="modal-content">
                    <div class="compose-header">
                        <span>Nouveau Message</span>
                        <span class="header-controls">
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </span>
                    </div>
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addMessage" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" action="{{url('/addElement/Message')}}">
                                <div class="col-sm-12">
                                    <input type="hidden" id="id_message" name="id_message" value="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Thème</label>
                                        <input type="text" id="thememessage" name="theme" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fichier</label>
                                        <input type="file" accept="audio/*,video/*" id="fichiermessage" name="fichier" class="filestyle pull-right" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-modal" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Auteur</label>
                                        <select id="auteurmessage" name="auteur" class="form-control" required>
                                            <option ng-repeat="auteur in auteurs track by $index"  value="<%auteur.id%>" ><%auteur.nom%></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">

                                    <div class="footer-motif">
                                        <button id="save_Message" type="submit" class="btn btn-with-icon"<i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{--Modal Evenement--}}
        <div class="modal fade" id="Modal_addEvenement">
            <div class="modal-dialog modal-compose">
                <div class="modal-content">
                    <div class="compose-header">
                        <span> Nouvel element </span>
                        <span class="header-controls">
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </span>
                    </div>
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addEvenement" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Evenement')">
                                <div class="col-md-12">
                                    <input type="hidden" id="id_evenement" name="id_evenement" value="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input type="text" id="titreevenement" name="titre" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#texteevenementconvert">
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li><li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li><li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li><li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li><li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li><li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li><li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li><li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li><li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li><li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li><li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li><li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li><li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li><li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li><li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li></ul>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                                <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                                <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="fa fa-list-ol"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm btn-info" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="fa fa-link"></i></a>
                                            <div class="dropdown-menu">
                                                <div class="input-group m-l-xs m-r-xs">
                                                    <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-default btn-sm" type="button">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-default btn-sm" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 0px; height: 0px;">
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-sm" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                            <a class="btn btn-default btn-sm" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div id="texteevenementconvert" ng-keyup="keyPress($event,'evenement')" class="form-control panel-blur" style="overflow:scroll;height:100px;max-height:100px;background: rgb(107, 107, 107);color:#fff;">
                                        Contenu de la pensée ici
                                    </div>
                                    <input type="hidden" id="texteevenement" name="description" value="Contenu de l'evenement ici">

                                    <div class="footer-motif">
                                        <button id="save_Evenement" type="submit" class="btn btn-with-icon" href="#"><i class="fa fa-check"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{--Modal Galerie--}}
        <div class="modal fade" id="Modal_addGalerie">
            <div class="modal-dialog modal-compose">
                <div class="modal-content">
                    <div class="compose-header">
                        <span> Nouvel élément dans la Galerie </span>
                        <span class="header-controls">
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </span>
                    </div>
                    <div class="modal-body wrapper-lg">
                        <div class="row">
                            <form id="Form_addGalerie" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8" ng-submit="addElement($event,'Galerie')">
                                <div class="col-sm-6">
                                    <input type="hidden" id="id_galerie" name="id_galerie" value="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" id="textegalerie" name="texte" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Evenement</label>
                                        <select id="evenementgalerie" name="evenement" class="form-control" required>
                                            <option ng-repeat="evenement in evenements"  value="<%evenement.id%>" ><%evenement.titre%></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Fichier (Image/Vidéo)</label>
                                        <input type="file" accept='image/*,video/*' id="imggalerie" name="fichier" class="filestyle pull-right" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-modal" onchange='Chargerphoto("galerie")' required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div id="afffichiergalerie" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);">
                                        <img alt="" class="thumbnail" style="width: 100%;height: 135px;margin-bottom: 10px;" id="affimggalerie" >
                                    </div>
                                    <div class="footer-motif">
                                        <button id="save_Galerie" type="submit" class="btn btn-with-icon" href="#"><i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.js"></script>
        <!-- App -->
        <script src="js/app.js"></script>
        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
        <!--What you see is what you get *** wysiwyg-->
        <script src="js/wysiwyg/jquery.hotkeys.js"></script>
        <script src="js/wysiwyg/bootstrap-wysiwyg.js"></script>
        <script src="js/wysiwyg/demo.js"></script>
        <!--design upload image-->
        <script src="js/file-input/bootstrap-filestyle.min.js"></script>
        <!-- Plugins-->
        <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/charts/flot/jquery.flot.min.js"></script>
        <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/charts/flot/jquery.flot.spline.js"></script>
        <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
        <script src="js/charts/flot/jquery.flot.resize.js"></script>
        <script src="js/charts/flot/jquery.flot.grow.js"></script>
        <script src="js/charts/flot/demo.js"></script>
        <script src="js/toastr/toastr.js"></script>
        <!--datepicker-->
        <script src="js/datepicker/bootstrap-datepicker.js"></script>
        <!--Choix Multiple-->
        <script src="js/chosen/chosen.jquery.min.js"></script>
        {{--Notifications--}}
        <script src="js/toastr/toastr.js"></script>
        <script src="js/app.plugin.js"></script>


        <script src="js/sortable/jquery.sortable.js"></script>
        <script src="js/nestable/jquery.nestable.js"></script>
        <script src="js/angular/BACKOFFICE.js"></script>

        <script src="js/select2/select2.min.js"></script>
        <script src="js/select2/moment.min.js"></script>

    </body>
</html>