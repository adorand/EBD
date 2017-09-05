<section class="hbox stretch panel wrapper">


    <section class="vbox" >
        <header class="header panel b-b clearfix">
            <div class="row m-t-sm">
                <div class="col-sm-8 m-b-xs">
                    <a ng-click="showView('Evenement')" class="btn btn-sm bg-template active">
                        <i class="fa fa-caret-right text-white text fa-lg"></i>
                        <i class="fa fa-caret-left text-white text-active fa-lg"></i>
                    </a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm bg-templateblue" title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm bg-white" title="Remove" onclick="Remove()"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-sm bg-templateblue" title="Action groupée" data-toggle="dropdown"><i class="fa fa-filter"></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action 1</a></li>
                            <li><a href="#">Action 2</a></li>
                            <li><a href="#">Action 3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Tout supprimer</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-sm bg-template" ng-click="showModalAdd('Galerie')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter un element à la Galerie">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="col-sm-4 m-b-xs">
                    <a class="btn btn-sm bg-templateblue-transparent pull-right m-l" ng-click="showModalUpdate(TriGalerieById,'Evenement',TriGalerieById.id)" data-toggle="tooltip" data-placement="bottom" data-title="éditer un évenment" ng-disabled="!TriGalerieById">
                        <i class="fa fa-edit"></i>
                    </a>
                    <select class="bg-templateblue box-shadow input-group pull-right input-sm no-border ng-pristine ng-valid" id="TriGalerieById" ng-model="TriGalerieById">
                        <option value="">Trier par évenement</option>
                        <option ng-repeat="evenement in evenements" value="<%evenement%>"><%evenement.titre%></option>
                    </select>
                    <a class="btn btn-sm bg-templateblue-transparent pull-right m-r" ng-click="showModalAdd('Evenement')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter un évenement">
                        <i class="fa fa-plus"></i>
                    </a>
                    <a class="btn btn-sm bg-template pull-right m-r" ng-click="deleteElement(TriGalerieById,'Evenement',$index)" data-toggle="tooltip" data-placement="bottom" data-title="Supprimer un évenement" ng-disabled="!TriGalerieById">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </div>
            </div>
        </header>

        <section class="scrollable panel wrapper" >
            <section class=" panel-default">
                <div class="row row-sm">
                    <div ng-repeat="galerie in galeries | orderBy:'-updated_at' track by $index" class="col-xs-6 col-sm-4 col-md-3 m-t-lg on animated zoomIn">
                        <div class="thumbnail text-center panel" style="margin-bottom: -2px;">
                            <div class="multiplebtn" style="z-index: 10;position: relative;">
                                <button  class="btn btn-sm btn-cli" ng-class="isValide(galerie.fichier)==1 ? 'bg-templateblue-transparent' : 'bg-template'" ng-click="showModalUpdate(galerie,'Galerie',galerie.id)">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button  class="btn btn-sm btn-cli-middle" ng-class="isValide(galerie.fichier)==1 ? 'bg-templateblue-transparent' : 'bg-template'">
                                    <i class="fa fa-user" ></i>
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button  class="btn btn-sm btn-cli" ng-class="isValide(galerie.fichier)==1 ? 'bg-templateblue-transparent' : 'bg-template'" ng-click="deleteElement(galerie.id,'Galerie',$index)">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </div>
                            <img ng-if="isValide(galerie.fichier)==1" src="<%galerie.fichier%>" style="width:100%;height: 200px;margin-top: -40px;z-index:100;" class="img-responsive" alt="">
                            <video ng-if="isValide(galerie.fichier)==2" src="<%galerie.fichier%>" controls style="width:100%;height: 200px;margin-top: -40px;z-index:100;" class="img-responsive"></video>
                        </div>
                        <div class="tp-bannershadow tp-shadow1" style="width: 95%; margin: 0 auto;"></div>
                    </div>

                </div>
            </section>
        </section>
        <footer class="footer bg-templateblue-transparent box-shadow" style="margin-bottom: -30px;">
            <div class="row text-center-xs">
                <div class="col-md-6 hidden-sm">
                    <p class=" m-t text-white">Affichage par pas de 10</p>
                </div>
                <div class="col-md-6 col-sm-12 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-sm m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

</section>

