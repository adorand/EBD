
    <section class="hbox stretch panel">

            <section class="vbox">
                <header class=" bg-templateblue header panel b-b clearfix on animated fadeInDown" style="border-radius: 0px ;">
                    <div class="row m-t-sm">
                        <div class="col-sm-8 m-b-xs">
                            <a class="btn btn-sm bg-white" ng-click="showView('Auteur')">
                                <i class="fa fa-caret-right text-black text fa-lg"></i>
                                <i class="fa fa-caret-left text-black text-active fa-lg"></i>
                            </a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm bg-template" ng-click="reload()" data-toggle="tooltip" data-placement="bottom" data-title="Actualiser">
                                    <i class="fa fa-refresh text-white"></i>
                                </button>
                                <button type="button" class="btn btn-sm bg-white" ng-click="actionGroupee('Remove')" data-toggle="tooltip" data-placement="bottom" data-title="Supprimer"><i class="fa fa-trash-o"></i></button>
                                <button class="btn btn-sm bg-template" ng-click="showModalAdd('Message')">
                                    <i class="fa fa-plus text-white"></i>
                                </button>
                            </div>

                        </div>
                        <div class="col-sm-4 m-b-xs">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm no-border" placeholder="Thème..." ng-model="TriMessageByTheme">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm bg-template">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </header>

                <section class="scrollable wrapper">
                    <section class="panel panel-default">
                        <div class="table-responsive">
                            <table class="table panel on animated fadeInUp">
                                <thead>
                                    <tr class="panel bg-templateblue">
                                        <th width="20"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label></th>
                                        <th width="600">Thème</th>
                                        <th>Auteur</th>
                                        <th>Fichier</th>
                                        <th>fonctions</th>
                                    </tr>
                                </thead>
                                <tbody id="listemessage">
                                    <tr id="message_<%message.id%>" ng-repeat="message in messages | filter : {'theme':TriMessageByTheme,'auteur': TriElementByAuteur} | orderBy:'-updated_at' track by $index" class="on animated fadeInUp message message_<%message.id%>">
                                        <td><label class="checkbox m-n i-checks"><input type="checkbox" name="listmessagestoremove[]"><i></i></label></td>
                                        <td class="text-ellipsis"><%message.theme%></td>
                                        <td ng-repeat="auteur in auteurs" ng-if="auteur.id==message.auteur[0].id">
                                            <%auteur.nom%>
                                        </td>
                                        <td>
                                            <audio controls="controls" id="message_audio_<%message.id%>">
                                                <source  src="<%message.fichier%>" type="audio/mp3">
                                            </audio>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm bg-template btn-rounded btn-icon" ng-click="showModalUpdate(message,'Message',message)"><i class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </section>
                <footer class="footer bg-template box-shadow" style="margin-bottom: -30px;">
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


