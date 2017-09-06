

<section class="vbox stretch on animated fadeIn" >
    <header class="bg-templateblue header panel clearfix">
        <p class="h4 font-thin pull-left m-r m-b-sm font-bold">Activités</p>
        <button class="btn btn-sm bg-white btn-rounded btn-icon" ng-click="showModalAdd('Activite')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter un Slider"><i class="fa fa-plus"></i></button>
        <button class="m-l-sm btn btn-sm bg-white btn-rounded btn-icon" ng-click="reload()" data-toggle="tooltip" data-placement="bottom" data-title="Actualiser" ><i class="fa fa-refresh"></i></button>

        <a class="btn btn-sm bg-template pull-right" ng-click="trierElement(linknav,TriActiviteByCtg,$event)" data-toggle="tooltip" data-placement="bottom" title="Trier les activités par catégorie" ng-disabled="!activites.length">
            <i class="fa fa-th-large text-white"></i>
        </a>
        <select style="margin-right:15px;margin-top:10px;" class="bg-white box-shadow input-group pull-right input-sm no-border ng-pristine ng-valid" id="TriActiviteByCtg" ng-model="TriActiviteByCtg">
            <option value="">Trier par Catégorie</option>
            <option ng-repeat="categorie in categories" value="<%categorie%>"><%categorie.nom%></option>
        </select>
        <div class="form-group m-t-sm m-b-n m-r pull-right">
            <div class="input-group">
                <input type="text" class="form-control input-sm no-border" ng-model="TriActualiteByTitre" placeholder="Rechercher un titre...">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-sm bg-white b-white btn-icon">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>

    </header>
    <section class="scrollable wrapper" style="height: 100%;">
        <div class="row m-t-lg">
            <div class="col-md-12">
                <div class="row row-sm">
                    <section class="comment-list block">
                        <article ng-repeat="activite in activites | filter:{ titre : TriActualiteByTitre, categorie : TriElementByForeignKey}  | orderBy:'-updated_at' track by $index" class="col-xs-12 col-sm-6 col-md-6 comment-item">
                            <a class="pull-left thumb-sm avatar">
                                <img src="<%activite.fichier%>" id="activiteimg_<%activite.id%>" class="img-circle" style="height: 36px;">
                            </a>
                            <span class="arrow left" style="left: 52px !important;"></span>
                            <section class="comment-body panel">
                                <header class="panel panel-heading ">
                                    <strong class="text-white"><%activite.titre | uppercase %></strong>
                                    <label class="label bg-info m-l-xs"><%activite.categorie%></label>
                                    <span class="text-white m-l-sm pull-right" >
                                        <i class="fa fa-clock-o"></i>
                                        <strong><%activite.dateact | date:'MM / dd / yyyy' %></strong>
                                      </span>
                                </header>
                                <div class="panel-body">
                                    <strong ng-bind-html="activite.texte"></strong>
                                    <div class="comment-action m-t-sm pull-right">
                                        <a type="button" class="btn btn-info btn-xs" ng-click="showModalUpdate(activite,'Activite',activite.id)" data-toggle="tooltip" data-placement="bottom" title="Editer cette activité">
                                            <i class="fa fa-edit text-white"></i>
                                        </a>
                                        <a type="button" class="btn btn-danger btn-xs" ng-click="deleteElement(activite.id,'Activite',$index)" data-toggle="tooltip" data-placement="bottom" title="Supprimer cette activité">
                                            <i class="fa fa-trash-o text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>




