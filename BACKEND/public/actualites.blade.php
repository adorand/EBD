

<section class="vbox stretch on animated fadeIn" >
    <header class="bg-templateblue header panel clearfix">
        <p class="h4 font-thin pull-left m-r m-b-sm font-bold">Actualités</p>
        <button class="btn btn-sm bg-white btn-rounded btn-icon" ng-click="showModalAdd('Actualite')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter un Slider"><i class="fa fa-plus"></i></button>
        <button class="m-l-sm btn btn-sm bg-white btn-rounded btn-icon" ng-click="reload()" data-toggle="tooltip" data-placement="bottom" data-title="Actualiser" ><i class="fa fa-refresh"></i></button>

        <div class="form-group m-t-sm m-b-n pull-right">
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
                        <article ng-repeat="actualite in actualites | filter : { titre:TriActualiteByTitre } track by $index" class="col-xs-12 col-sm-6 col-md-6 comment-item">
                            <a class="pull-left thumb-sm avatar">
                                <img src="<%actualite.fichier%>" id="actualiteimg_<%actualite.id%>" class="img-circle" style="height: 36px;">
                            </a>
                            <span class="arrow left" style="left: 52px !important;"></span>
                            <section class="comment-body panel">
                                <header class="panel panel-heading ">
                                    <strong class="text-white"><%actualite.titre | uppercase %></strong>
                                    <span class="text-white m-l-sm pull-right" >
                                        <i class="fa fa-clock-o"></i>
                                        <strong><%actualite.dateact | date:'MM / dd / yyyy' %></strong>
                                      </span>
                                </header>
                                <div class="panel-body">
                                    <strong ng-bind-html="actualite.texte"></strong>
                                    <div class="comment-action m-t-sm pull-right">
                                        <a type="button" class="btn btn-info btn-xs" ng-click="showModalUpdate(actualite,'Actualite',actualite.id)" data-toggle="tooltip" data-placement="bottom" title="Editer cette Actualité">
                                            <i class="fa fa-edit text-white"></i>
                                        </a>
                                        <a type="button" class="btn btn-danger btn-xs" ng-click="deleteElement(actualite.id,'Actualite',$index)" data-toggle="tooltip" data-placement="bottom" title="Supprimer cette Actualité">
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




