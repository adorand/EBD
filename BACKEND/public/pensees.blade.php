

    <section class="vbox stretch on animated fadeIn" >

        <header class="bg-templateblue header panel clearfix" style="border-radius: 0px ;">
            <button class="m-l-sm btn btn-sm bg-white btn-rounded btn-icon" ng-click="showView('Auteur')" data-toggle="tooltip" data-placement="bottom" data-title="Liste des auteurs"><i class="fa fa-user"></i></button>
            <p class="h4 font-thin pull-left m-r m-b-sm font-bold">Pensées du Jour</p>
            <button class="m-l-sm btn btn-sm bg-white btn-rounded btn-icon" ng-click="showModalAdd('Pensee')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter une Pensee"><i class="fa fa-plus"></i></button>
            <button class="m-l-sm btn btn-sm bg-white btn-rounded btn-icon" ng-click="trierElement('Pensees','auteur','',$event)" data-toggle="tooltip" data-placement="bottom" data-title="Actualiser" ><i class="fa fa-refresh"></i></button>
            <select style="margin-right:15px;margin-top:10px;" class="bg-white box-shadow input-group pull-right input-sm no-border ng-pristine ng-valid" ng-model="triPub.restaurants">
                <option value="">Trier par Page</option>
                <option ng-repeat="inforestaurant in infosrestaurants" value="<%inforestaurant.restaurant.id%>"><%inforestaurant.restaurant.nom%></option>
            </select>
        </header>
        <section class="scrollable wrapper" style="height: 100%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-sm">
                        <div ng-repeat="pensee in pensees | filter : {'auteur': TriElementByAuteur} | orderBy:'-updated_at' track by $index" class="col-xs-6 col-sm-4 col-md-2 pensee pensee_<%pensee.id%> on animated zoomIn">
                            <div class="thumbnail text-center panel" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);">
                                <img src="<%pensee.image%>" style="width:100%;height: 155px;" class="img-responsive" alt="">
                                <div class="caption">
                                    <p class="text-ellipsis m-b-none">
                                        <button class="btn btn-sm bg-danger text-white btn-rounded btn-icon" data-toggle="tooltip" data-placement="right" data-title="Supprimer cette pensée" ng-click="deleteElement(pensee.id,'Pensee',$index)" ><i class="fa fa-trash-o"></i></button>
                                        <button style="margin-right: 10px;" class="btn btn-sm bg-white btn-rounded btn-icon" ng-click="showModalUpdate(pensee,'Pensee',pensee.id)"><i class="fa fa-eye"></i></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>



