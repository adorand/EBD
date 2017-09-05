
<section class="hbox stretch panel" >

    <aside>
        <section class="vbox panel">
            <section class="scrollable wrapper">
                <div class="timeline">
                    <article class="timeline-item active">
                        <div class="timeline-caption">
                            <div class="panel bg-templateblue lt no-borders">
                                <div class="panel-body m-r m-l">
                                    <div class="m-t timeline-action m-b">
                                        <button class="btn btn-sm btn-default btn-bg"><i class="fa fa-pause"></i> Pause</button>
                                        <button class="btn btn-sm btn-default btn-bg"><i class="fa fa-check"></i> Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article ng-repeat="activite in activites | orderBy:'-dateact' track by $index" class="timeline-item" ng-class="{alt: $index%2!=0}">
                        <div class="timeline-caption">
                            <div class="panel panel-default"  style="<%$index%2!=0 ? 'border-radius: 50px 0px 0px 50px;' : 'border-radius: 0px 50px 50px 0px;' %>">
                                <div class="panel-body <%$index%2!=0 ? '' : 'm-l'%> " >
                                    <img src="<%activite.fichier%>" style="height: 100px;width: 100px;border-radius: 50px;" class="bg-template img-rounded img-responsive" ng-class="$index%2!=0 ? 'm-r pull-left' : 'm-l pull-right'">

                                    {{--//Adorand--}}
                                    <div class="multiple-btnicon">
                                        <span class="timeline-icon" style="<%$index%2!=0 ? 'margin-right: -40px;' : 'margin-left: 40px;'%>z-index: 1;">
                                            <i class="fa fa-trash-o time-icon bg-template"></i>
                                        </span>
                                        <span class="timeline-icon">
                                            <i ng-repeat="categorie in categories" ng-if="activite.categorie==categorie.nom" class="fa fa-male time-icon bg-template"></i>
                                        </span>
                                        <span class="timeline-icon" style="<%$index%2!=0 ? 'margin-right: 40px;' : 'margin-left: -40px;'%>z-index: 1;" >
                                            <i class="fa fa-edit time-icon bg-template"></i>
                                        </span>
                                    </div>
                                    <span class="timeline-date" style="z-index: 0;"><%activite.dateact%></span>
                                    <div class="text-md m-t"><b><%activite.titre%></b></div>
                                    <p class="text-ellipsis"><%activite.texte%></p>
                                </div>

                            </div>
                        </div>
                    </article>

                    <div class="timeline-footer"><a href="#"><i class="fa fa-plus time-icon inline-block bg-dark"></i></a></div>
                </div>
            </section>

        </section>

    </aside>
    <!-- /.aside -->
</section>


