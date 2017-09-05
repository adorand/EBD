
    <section class="vbox stretch on animated fadeIn" >
        <header class="bg-templateblue header panel clearfix">
            <p class="h4 font-thin pull-left m-r m-b-sm font-bold">Sliders</p>
            <button class="btn btn-sm bg-white btn-rounded btn-icon" ng-click="showModalAdd('Slider')" data-toggle="tooltip" data-placement="bottom" data-title="Ajouter un Slider"><i class="fa fa-plus"></i></button>
            <button class="m-l-sm btn btn-sm bg-white btn-rounded btn-icon" ng-click="trierElement('Publicite','')" data-toggle="tooltip" data-placement="bottom" data-title="Actualiser" ><i class="fa fa-refresh"></i></button>
            <select style="margin-right:15px;margin-top:10px;" class="bg-white box-shadow input-group pull-right input-sm no-border ng-pristine ng-valid" ng-model="triPub.restaurants">
                <option value="">Trier par Page</option>
                <option ng-repeat="inforestaurant in infosrestaurants" value="<%inforestaurant.restaurant.id%>"><%inforestaurant.restaurant.nom%></option>
            </select>
        </header>
        <section class="scrollable wrapper" style="height: 100%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-sm">
                        <div ng-repeat="slider in sliders | orderBy:'-updated_at' track by $index" class="col-xs-6 col-sm-4 col-md-2 slider on animated zoomIn">
                            <div class="thumbnail text-center panel" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);">

                                <img src="<%slider.image%>" style="width:100%;height: 155px;" class="img-responsive" alt="">
                                <div class="caption">
                                    <p class="text-ellipsis m-b-none">
                                        <button class="btn btn-sm bg-danger text-white btn-rounded btn-icon" data-toggle="tooltip" data-placement="right" data-title="Supprimer ce slider" ng-click="deleteElement(slider.id,'Slider',$index)" ><i class="fa fa-trash-o"></i></button>
                                        <button style="margin-right: 10px;" class="btn btn-sm bg-white text-black btn-rounded btn-icon" ng-click="showModalUpdate(slider,'Slider',slider.id)"><i class="fa fa-eye"></i></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

