// So, before to start to compile this project by angular, we need to init jquery functions and plugins select2
// That justified followings lines



var pathapp= 'http://localhost:8080/';

var app=angular.module('BackEnd',["ngRoute"]);

app.factory('Init',function ($http, $q)
{
    var factory=
        {
            data:false,
            getData:function ()
                {
                    var deferred=$q.defer();
                    $http.get('/archenis/restopub/public/init')
                        .success(function (data,status) {
                            factory.data=data;
                            deferred.resolve(factory.data);
                        }).error(function (data,status)
                    {
                        deferred.reject("Impossible de récupérer les valeurs depuis le serveur distant");
                    });
                    return deferred.promise;
                },
            getElement:function (element,listeattributs)
                {

                    var deferred=$q.defer();
                    $http.get(pathapp+'graphql?query=query Sliders {'+element+'{'+listeattributs+'}}')
                        .success(function (data,status) {
                            factory.data=data;
                            deferred.resolve(factory.data);
                        }).error(function (data,status)
                    {
                        deferred.reject("Impossible de récupérer les "+element+" depuis le serveur distant");
                    });
                    return deferred.promise;
                }


        };
    return factory;
});

// var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl : "accueil.blade.php",
            // resolve: {
            //     init: function() {
            //         return init_size_js();
            //     }
            // }
        })
        .when("/pensees",  {
            templateUrl : "pensees.blade.php"
        })
        .when("/messages", {
            templateUrl : "messages.blade.php"
        })
        .when("/galerie",  {
            templateUrl : "galerie.blade.php"
        })
        .when("/activites",  {
            templateUrl : "activites.blade.php"
        }).when("/actualites",  {
            templateUrl : "actualites.blade.php"
        });
});

app.controller('backgroundController',function ($location,$scope,$q,$route,Init)
{
    $scope.linknav="/";

    // Configuration de base des notifications
    toastr.options =
    {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }


    var listofrequests =
        [
            {"Sliders": "id,nompage,image,created_at,updated_at"},
            {"Auteurs": "id, nom, created_at, updated_at, pensees{id}"},
            {"Pensees": "id,datepassage, theme, texte, image, created_at, updated_at, auteur{id}"},
            {"Messages": "id, theme , fichier , created_at, updated_at, auteur{id,nom}"},
            {"Utilisateurs": "id,nomcomplet,login,password,phone,droits,photo, created_at,updated_at"},
            {"Evenements": "id,titre,description,created_at,updated_at"},
            {"Galeries": "id,texte, fichier, created_at, updated_at, evenement{id,titre,description}"},
            {"Activites": "id,titre,texte,fichier,dateact, categorie,created_at, updated_at"},
            {"Actualites": "id,titre,texte,fichier,dateact, categorie,created_at, updated_at"},
        ];


    $scope.keyPress = function(e,whereputit)
    {
        $('#texte'+whereputit).val(($(event.target)).html());
    }


    $scope.categories=[ {'nom':'Hommes', 'icon' : 'fa-male'} , {'nom':'Femmes', 'icon' : 'fa-female'}, {'nom':'Jeunes', 'icon' : 'fa-check'} , {'nom':'Enfants', 'icon' : 'fa-child'} ]
    $scope.$on('$routeChangeStart', function(next, current)
    {
        $('#viewAddActivite').attr('Class').match("show") ?  $scope.showView('AddActivite') : "";
        $scope.linknav=$location.path();
        $.each(listofrequests[4],function (element, listeattributs)
        {
            Init.getElement(element, listeattributs).then(function (data)
            {
                $scope.utilisateurs=data['data'][element];
            }, function (msg)
            {
                alert(msg);
            });
        });

        if(current.templateUrl.toLocaleLowerCase().indexOf('accueil')!=-1)
        {
            $.each(listofrequests[0],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.sliders=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });

        }
        else if(current.templateUrl.toLocaleLowerCase().indexOf('pensees')!=-1)
        {

            $.each(listofrequests[2],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.pensees=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });

        }
        else if(current.templateUrl.toLocaleLowerCase().indexOf('messages')!=-1)
        {

            $.each(listofrequests[3],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.messages=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });

        }
        else if(current.templateUrl.toLocaleLowerCase().indexOf('galerie')!=-1)
        {

            $.each(listofrequests[5],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.evenements=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });

            $.each(listofrequests[6],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.galeries=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });

        }

        if( current.templateUrl.toLocaleLowerCase().indexOf('pensees')!=-1 || current.templateUrl.toLocaleLowerCase().indexOf('messages')!=-1)
        {
            $.each(listofrequests[1],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.auteurs=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });
        }

        if( current.templateUrl.toLocaleLowerCase().indexOf('activites')!=-1)
        {
            $scope.showView('AddActivite');
            $.each(listofrequests[7],function (element, listeattributs)
            {
                Init.getElement(element, listeattributs).then(function (data)
                {
                    $scope.activites=data['data'][element];
                }, function (msg)
                {
                    alert(msg);
                });
            });
        }


    });

    var today = new Date();
    var day = ("0" + today.getDate()).slice(-2);
    var month = ("0" + (today.getMonth() + 1)).slice(-2);
    var strDate = today.getFullYear()+"-"+(month)+"-"+(day) ;

    /*setInterval(function () {
        var now = new Date(Date.now());
        var currenttime = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
        $("#currenttime").html(currenttime);
    },(1000/3));*/


    //Reactualiser
    /*setInterval( function () {
        Init.etatServeurs().then(function(data)
        {
            $.each($scope.infosrestaurants,function(key,value)
            {
                $.each(data,function(key1,value1)
                {
                    if(value.restaurant.id==value1.restaurant.id)
                    {
                        $scope.infosrestaurants[key].color=value1.color;
                        $scope.infosrestaurants[key].Ping_restos=value1.Ping_restos;
                    }
                });
            });
        },function (msg) {
            alert(msg);
        });
    },(1000));*/

    $scope.pgcontent=0;
    $scope.showView=function (view)
    {
        $('#view'+view).attr('Class').match("show") ?
            ($('#view'+view).removeClass('show'),$('#view'+view).addClass('hide'))
            : ($('#view'+view).addClass('show'), $('#view'+view).removeClass('hide') ) ;
    };

    /*$scope.setContent=function(event,pg,inner=-1)
    {
        $(event.target).parent().parent().children().children().removeClass('bg-templateblue');
        $(event.target).addClass('bg-templateblue');
        (inner==-1) ? ( $('#viewAnnonceur').attr('class','aside bg-template lt hide'), $('#viewUtilisateur').attr('class','aside-md bg-black lt hide') )
        : (inner==1)
            ? ( $('#viewAnnonceur').attr('Class').match("show") ?  $('#viewAnnonceur').attr('class','aside bg-template lt hide')
                : $('#viewAnnonceur').attr('class','aside bg-template lt show'), $('#viewUtilisateur').attr('class','aside-md bg-black lt hide') )
            : ( $('#viewAnnonceur').attr('class','aside bg-template lt hide'),
                $('#viewUtilisateur').attr('Class').match("show") ? $('#viewUtilisateur').attr('class','aside-md bg-black lt hide')
                    : $('#viewUtilisateur').attr('class','aside-md bg-black lt show') ) ;
        $scope.pgcontent=pg;
    };*/


    $scope.actionGroupee=function(action)
    {
        $('.message').each(function (index)
        {
            var prefix=$( this ).attr('class').match( /message_.*/i )[0];

            // alert(prefix);
            if($("."+prefix+ " > td > label > input").prop('checked'))
            {
                console.log(prefix.split('_')[1]);
                $scope.deleteElement(prefix.split('_')[1],'Message',index);
                // console.log($('.'+prefix).remove());
                // $('#'+prefix).remove();
            }
        });
        setTimeout(function () { $route.reload(); }, 100);

    };


    $scope.deleteElementinDOM=function (type,key)
    {
        (type.match("plage")) ? delete $scope.plages[key].selected : delete $scope.infosrestaurants[key].selected ;
        console.log(JSON.stringify($scope.plages));
        $("#"+type+"_"+key).remove();
        alert("l'Element a supprimé est :"+key);
    };


    //This function clear totally form in modal before his showing
    function emptyform(type)
    {
        var dfd = $.Deferred();
        (type.match("Slider")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouveau "+type),
                $("#id_slider").val(""),
                $("#nompage").val(""),
                $("#affimgslider").attr('src',''),
                $("#imgslider").attr('required',true),
                $("#imgslider").val(""),
                $('.input-modal').val("")
        )
        :(type.match("Auteur")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvel "+type),
            $("#id_auteur").val(""),
            $("#nomauteur").val("")
        )
        :(type.match("Pensee")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvelle "+type),
            $("#id_"+type.toLowerCase()).val(""),
            $("#theme"+type.toLowerCase()).val(""),
            $("#texte"+type.toLowerCase()+"convert").html("Contenu de la pensee ici"),
            $("#texte"+type.toLowerCase()).val("Contenu de la pensee ici"),
            $("#affimg"+type.toLowerCase()).attr('src',''),
            $("#img"+type.toLowerCase()).attr('required',true),
            $("#img"+type.toLowerCase()).val(""),
            $('.input-modal').val("")
        )
        :(type.match("Message")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouveau "+type),
            $("#id_message").val(""),
            $("#thememessage").val(""),
            $("#auteurmessage").val(""),
            $("#fichiermessage").attr('required',true),
            $("#fichiermessage").val(""),
            $('.input-modal').val("")
        )
        :(type.match("Evenement")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvel "+type),
            $("#id_evenement").val(""),
            $("#titreevenement").val(""),
            $("#texte"+type.toLowerCase()+"convert").html("Contenu de l'evenement ici"),
            $("#texte"+type.toLowerCase()).val("Contenu de l'evenement ici")
        )
        :(type.match("Galerie")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvel element"),
            $("#id_"+type.toLowerCase()).val(""),
            $("#evenement"+type.toLowerCase()).val(""),
            $("#texte"+type.toLowerCase()).val(""),
            $("#fichier"+type.toLowerCase()).attr('required',true),
            $("#fichier"+type.toLowerCase()).val(""),
            $('.input-modal').val("")
        )
        :(type.match("Plage")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvelle "+type),
            $("#id_plg").val(""),
            $("#debutplage").val(""),
            $("#finplage").val("")
        )
        : (type.match("Restaurant")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouveau "+type),
            $("#id_resto").val(""),
            $("#nomresto").val(""),
            $("#adrresto").val(""),
            $("#adrmailresto").val(""),
            $("#phoneresto").val(""),
            $("#nbretabresto").val(""),
            $("#latresto").val(""),
            $("#longresto").val("")
        )
        : (type.match("Tablette")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvelle "+type),
            $("#id_tab").val(""),
            $("#id_restotab").val(""),
            $("#nomtab").val(""),
            $("#mactab").val(""),
            $("#detailsmac").val(""),
            $('#nomtab').css('border-color','#cbd5dd'),
            $('#mactab').css('border-color','#cbd5dd'),
            $('#nomtab').attr('readonly',false),
            $('#mactab').attr('readonly',false),
            $('#detailsmac').attr('readonly',false),
            $("#save_"+type).attr('disabled',false)
        )
        : (type.match("Pingresto")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouveau "+type),
            $("#liste_json_tablettes_ping").val(""),
            $("#restoping").val(""),
            $("#isuptodateping").val("")
        )
        : (type.match("Utilisateur")) ?
        (
            $("#Modal_add"+type+" .title_modal").html("Nouvel "+type),
            $("#id_user").val(""),
            $("#nomcompletuser").val(""),
            $("#loginuser").val(""),
            $("#passworduser").val(""),
            $("#passworduser").val(""),
            $("#droitsuser").val(""),
            $("#affimguser").attr('src',''),
            $("#imguser").attr('required',true),
            $("#imguser").val("")
        ) : '' ;

        return dfd.promise();
    }

    //We'll Call this function, when btn for add element is clicked
    $scope.showModalAdd=function (type)
    {
        emptyform(type);
        $("#save_"+type).html("<i class=\"fa fa-check\"></i>");
        (type.match('Plage')) ? $("#Modal_addPublicite").modal('hide'): '' ;
        $("#Modal_add"+type).modal('show');
    };

    $scope.clearModal=function()
    {
        emptyform("Publicite");
    };

    var formater="";
    //Such as other, we'll Will Call this function, when btn to show Element is clicked
    $scope.showModalUpdate=function (element,type,id)
    {
        (type.match("Slider")) ?
        (
            emptyform("Slider"),
            $("#id_slider").val(element.id),
            $("#nompage").val(element.nompage),

            chaine='<img src="'+element.image+'" class="thumbnail" style="width: 100%;height: 135px;margin-bottom: 10px;" id="affimgslider">',
            $("#afffichierslider").html(chaine),
            $("#imgslider").attr('required',false),
            $("#imgslider").val("")
        )
        : (type.match("Auteur")) ?
        (
            emptyform("Auteur"),
            emptyform("Auteur"),
            $("#id_auteur").val(element.id),
            $("#nomauteur").val(element.nom)
        )
        : (type.match("Pensee")) ?
        (
            emptyform("Pensee"),
            $("#id_"+type.toLowerCase()).val(element.id),
            $("#theme"+type.toLowerCase()).val(element.theme),
            $("#textepenseeconvert").html(element.texte),
            chaine='<img src="'+element.image+'" class="thumbnail" style="width: 100%;height: 135px;margin-bottom: 10px;" id="affimg'+type.toLowerCase()+'">',
            $("#afffichier"+type.toLowerCase()).html(chaine),
            $("#img"+type.toLowerCase()).attr('required',false),
            $("#img"+type.toLowerCase()).val(""),
            $("#auteur"+type.toLowerCase()).val(element.auteur[0].id)
        )
        : (type.match("Message")) ?
        (
            emptyform("Message"),
            $("#id_"+type.toLowerCase()).val(element.id),
            $("#theme"+type.toLowerCase()).val(element.theme),
            $("#fichier"+type.toLowerCase()).attr('required',false),
            $("#fichier"+type.toLowerCase()).val(""),
            $("#auteur"+type.toLowerCase()).val(element.auteur[0].id)
        )
        : (type.match("Evenement")) ?
        (
            emptyform("Evenement"),
            element=JSON.parse(element),
            $("#id_"+type.toLowerCase()).val(element.id),
            $("#titre"+type.toLowerCase()).val(element.titre),
            $("#texteevenementconvert").html(element.description),
            $("#texteevenement").val(element.description)
        )
        :(type.match("Galerie")) ?
        (
            emptyform("Galerie"),
            $("#id_"+type.toLowerCase()).val(element.id),
            $("#texte"+type.toLowerCase()).val(element.texte),
            chaine=isValide(element.fichier)==1 ? '<img src="'+element.fichier+'" class="thumbnail" style="width: 100%;height: 135px;margin-bottom: 10px;" id="affimg'+type.toLowerCase()+'">' : '<video src="'+element.fichier+'" controls autoplay style="width:260px;height:135px;margin-bottom:10px;" class="img-responsive" id="affimg'+type.toLowerCase()+'"></video>',
            $("#afffichier"+type.toLowerCase()).html(chaine),
            $("#img"+type.toLowerCase()).attr('required',false),
            $("#img"+type.toLowerCase()).val(""),
            $("#evenement"+type.toLowerCase()).val(element.evenement[0].id)
        )
        :(type.match("Plage")) ?
        (
            $("#id_plg").val(element.id), $("#debutplage").val(element.debut), $("#finplage").val(element.fin),
            alert($('#checkplage'+id).prop('checked')),
            $("#Modal_add"+type+" .title_modal").html("Modifier "+type),
            $("#save_Plage").html("Modifier"),
            $("#Modal_addPlage").modal('show'),
            ($('#checkplage'+id).prop('checked')==false) ? (emptyform("Plage"), $("#save_Plage").html("Ajouter")) : ''
        )
        : (type.match("Slider")) ?
        (
            emptyform("Slider"),
            $("#id_slider").val(element.id),
            $("#nompage").val(element.datecreation),
            $("#datedeclenchement").val(element.datedeclenchement),
            $("#dateexpiration").val(element.dateexpiration),
            $("#debutperiodediffusion").val(element.debutperiodediffusion),
            $("#finperiodediffusion").val(element.finperiodediffusion),
            (element.type.match('image')) ? chaine='<img src="'+element.fichier.split('.')[0]+'_rz.'+element.fichier.split('.')[1]+'" alt="" class="thumbnail" style="width:260px;height:198px;" id="affimgpub" >'
            : chaine='<video src="'+element.fichier+'" controls style="width:260px;height:198px;margin-bottom:15px;" class="img-responsive"></video>',
            $("#afffichierslider").html(chaine),
            $("#imgslider").attr('required',false),
            $("#imgslider").val(""),


            angular.forEach(jQuery.parseJSON(element.plages),function (valueR,keyR)
            {
                angular.forEach($scope.plages,function (value,key)
                {
                    (valueR==value.id) ?
                    (
                        $scope.plages[key].selected=true,
                        $("#select2Plage").val(value.id),
                        $("#s2id_select2Plage > ul").prepend('<li id="plage_'+key+'" class="select2-search-choice">    <div>'+value.debut+'-'+value.fin+'</div>    <a id="plage_'+key+'_close" href="#" class="select2-search-choice-close" tabindex="-1"></a></li>'),
                        $("#plage_"+key+" > a.select2-search-choice-close").attr('onclick','liasonOrController("plage",'+key+')')
                    ): '';
                });
            }),


            //Restaurants
            angular.forEach(jQuery.parseJSON(element.restaurants),function (valueR,keyR)
            {
                angular.forEach($scope.infosrestaurants,function (value,key)
                {
                    (valueR==value.restaurant.id) ?
                    (
                        $scope.infosrestaurants[key].selected=true,
                        $("#select2Resto").val(value.restaurant.id),
                        $("#s2id_select2Resto > ul").prepend('<li id="restopub_'+key+'" class="select2-search-choice">    <div>'+value.restaurant.nom+'</div>    <a id="restopub_'+key+'_close" href="#" class="select2-search-choice-close" tabindex="-1"></a></li>'),
                        $("#restopub_"+key+" > a.select2-search-choice-close").attr('onclick','liasonOrController("restopub",'+key+')')
                    ): '';
                });
            }),
            console.log(JSON.stringify($scope.infosrestaurants)),
            console.log(JSON.stringify($scope.plages))
        )
        : (type.match('Restaurant')) ?
        (
            $("#id_resto").val(element.id),
            $("#nomresto").val(element.nom),
            $("#adrresto").val(element.adresse),
            $("#adrmailresto").val(element.email),
            $("#phoneresto").val(element.phone),
            $("#nbretabresto").val(element.nbretab),
            $("#latresto").val(element.lattitude),
            $("#longresto").val(element.longitude)
        )
        : (type.match('Tablette')) ?
        (
            $("#id_tab").val(element.id),
            $("#id_restotab").val(element.restaurant),
            $("#nomtab").val(element.nom),
            $("#mactab").val(element.mac),
            $("#detailsmac").val(element.details),
            $('#nomtab').css('border-color','#cbd5dd'),
            $('#mactab').css('border-color','#cbd5dd'),
            $('#nomtab').attr('readonly',true),
            $('#mactab').attr('readonly',true),
            $('#detailsmac').attr('readonly',true),
            $("#save_"+type).attr('disabled',true)
        ): (type.match("Utilisateur")) ?
        (
            $("#id_user").val(element.id), $("#nomcompletuser").val(element.nomcomplet), $("#loginuser").val(element.login), $("#passworduser").val(element.password),
            $("#droitsuser").val(element.droits),
            $("#affimguser").attr('src',element.photo),
            $("#imguser").attr('required',false),
            $("#imguser").val("")
        ) : '' ;

        (type.match("Plage")) ? '' : ( $("#Modal_add"+type+" .title_modal").html("Modifier "+type), $("#save_"+type).html("<i class=\"fa fa-edit\"></i>"), $("#Modal_add"+type).modal('show'));
    };


    // Add element in database and in scope
    $scope.addElement=function(e,type)
    {
        var continuer=true;
        e.preventDefault();

        var form=$('#Form_add'+type);
        var formdata=(window.FormData) ? ( new FormData(form[0])): null;
        var data=(formdata!==null) ? formdata : form.serialize();

        (continuer) ?
            $.ajax
            (
                {
                    url:pathapp+'addElement/'+type,
                    type:'GET',
                    contentType:false,
                    processData:false,
                    DataType:'json',
                    data:data,
                    success:function(obj)
                    {
                        obj=JSON.parse(obj);
                        if(type.match('Slider'))
                        {
                            ($("#save_"+type).html().match('edit')) ?
                            (
                                $.each($scope.sliders,function (key,value)
                                {
                                    if(value.id==obj.id)
                                    {
                                        // setTimeout(function () { }, 100000);
                                        // $('.slider_'+value.id+' img').attr('src',obj.image);
                                        $scope.sliders[key]=obj;
                                    }
                                })
                            )
                            :(
                                $scope.sliders.push(obj)
                            );
                        }
                        else (type.match('Auteur')) ?
                        (
                            ($("#save_"+type).html().match('edit')) ?
                                $.each($scope.auteurs,function(key,value)
                                {
                                    if(value.id==obj.id)
                                        $scope.auteurs[key]=obj;
                                })
                                :   $scope.auteurs.push(obj)
                        )
                        :(type.match('Pensee')) ?
                        (
                            ($("#save_"+type).html().match('edit')) ?
                                (
                                    $.each($scope.pensees,function (key,value)
                                    {
                                        if(value.id==obj.id)
                                        {
                                            // setTimeout(function () { }, 100000);
                                            // $('.pensee'+value.id+'img').attr('src',obj.image);
                                            $scope.pensees[key]=obj;
                                        }
                                    })
                                )
                                :$scope.pensees.push(obj)
                        )
                        :(type.match('Message')) ?
                        (
                            ($("#save_"+type).html().match('edit')) ?
                                (
                                    $.each($scope.messages,function (key,value)
                                    {
                                        if(value.id==obj.id)
                                        {
                                            setTimeout(function () { }, 10000000);
                                            $scope.messages[key]=obj;
                                            $('#message_audio_'+value.id)[0].load();
                                        }
                                    })
                                )
                                :$scope.messages.push(obj)
                        )
                        :(type.match('Evenement')) ?
                        (
                            ($("#save_"+type).html().match('edit')) ?
                                $.each($scope.evenements,function(key,value)
                                {
                                    if(value.id==obj.id)
                                        $scope.evenements[key]=obj;
                                })
                                :$scope.evenements.push(obj)
                        )
                        :(type.match('Galerie')) ?
                        (
                            ($("#save_"+type).html().match('edit')) ?
                                (
                                    $.each($scope.galeries,function (key,value)
                                    {
                                        if(value.id==obj.id)
                                            $scope.galeries[key]=obj;
                                    })
                                )
                                :$scope.galeries.push(obj)
                        ): '';


                        $scope.$apply();
                        toastr.success('Opération effectuée avec succès');
                        emptyform(type);
                        $("#Modal_add"+type).modal('hide');

                    },
                    error:function (error)
                    {
                        toastr.error(error);
                        var msg="";
                        // (type.match('Plage')) ? msg="Cette plage est déjà comprise dans une autre ou elle existe déjà"
                        // :(type.match('Publicite')) ? msg="Réessayer encore ou contacter l'administrateur"
                        // : (type.match('Tablette')) ? msg="Le nom et l'adresse mac de la tablette doivent être en couple unique"
                        // : msg="Vérifier les paramètres saisis:: l'email saisi existe déjà";
                        // alert(msg);

                    }
                }
            ):' ';

    };

    $scope.trierElement=function (type,by,value='',event=0)
    {
        (type.match('Pensees')) ?
        (
            $scope.TriPenseeByAuteur=value.id,
                (!value) ? $scope.TriPenseeByAuteur="" : ''
        )
        :(type.match('Messages')) ?
        (
            $scope.TriPenseeByAuteur=value
        )
        :(type.match('Annonceur')) ?
        (
            $scope.triAnn.type=value,
            (!value) ? $scope.triAnn.nom="" : ''
        )
        : (type.match('Plage')) ?
        (
            (!value) ? $scope.searchByDebOrEndPlage="" : ''
        )
        : (type.match("Publicite")) ?
        (
            $(event.target).parent().parent().children().removeClass('active'),
            (parseInt(value)) ?
                $scope.triPub.annonceur=parseInt(value)
                : $scope.triPub.annonceur='',
                (!value) ? $scope.triPub.nom="" : ''
        )
        : (type.match('Tablette')) ?
        (
            $scope.triTab.etat=value,
                (!value) ?  $scope.triTab.nom="" : ''
        ) : '' ;
    };


    $scope.showModalTablette=function (id_resto)
    {
        $("#Modal_addTablette .title_modal").html("Nouvelle tablette");
        $("#id_tab").val("");
        $("#id_restotab").val(id_resto);
        $("#mactab").val("");
        $("#nomtab").val("");
        $("#detailsmac").val("");
        $("#Modal_addTablette").modal('show');
        $("#nomtab").attr("readonly",false);
        $("#mactab").attr("readonly",false);
        $("#detailsmac").attr("readonly",false);
        $("#save_Tablette").attr("disabled",false);
        $('#nomtab').css('border-color','#cbd5dd');
        $('#mactab').css('border-color','#cbd5dd');
    };

    $scope.showallTablette=function (liste_tablettes,bydefault=1)
    {
        $('.resto').removeClass('resto-actif');
        $scope.liste_tablettes=[];
        (bydefault==0) ?
        (
            $.each(JSON.parse(liste_tablettes),function(key,idping)
            {
                alert(JSON.stringify(idping));
                $.each($scope.infosrestaurants,function(key1,inforestaurant)
                {
                    $.each(inforestaurant.tablettes,function(key2,tab)
                    {
                        (idping.id==tab.id) ? $scope.liste_tablettes.push(tab) : ''
                    });
                })
            })
        )
        : $scope.liste_tablettes=liste_tablettes;
        $scope.liste_tablettes.length>0 ? ($('.resto_'+$scope.liste_tablettes[0].restaurant).addClass('resto-actif')) : '' ;
    };

    $scope.Historique=function (element)
    {
        $scope.liste_tablettes=[];
        $('.resto').removeClass('resto-actif');
        $('.resto_'+element).addClass('resto-actif');

        ($('#viewHistorique').attr('Class').match("show") && $('#id_restoping_resto').val()==element) ?
        (
            $('#viewHistorique').attr('class','aside bg-template lt hide'),
            $('.resto').removeClass('resto-actif')
        )
        :
        (
            $scope.liste_pings_restos=Init.getHistorique(element).then(function(data)
            {
                $scope.liste_pings_restos=data;
                $("#triPingcreated").val("");
                angular.forEach(data,function(value,key){ $scope.datepings.push(Date.parse(value.ping_time)); });
            },function (msg)
            {
                alert(msg);
            }),
            $('#id_restoping_resto').val(element),
            $('#viewHistorique').attr('class','aside bg-template lt show')
        );
    };

    $scope.datechanger=function()
    {
        alert($scope.triPing.ping_time);

    };


    $scope.isValide=function (fichier)
    {
        return isValide(fichier);
    };


    //Delete element in scope
    $scope.deleteElement=function (id,type,position="")
    {
        id=type.match('Evenement') ? JSON.parse(id).id : id;
        var msg='Confirmer cette suppression ???';

        (type.match("Auteur")) ?
        (
            cpt=0,
            angular.forEach($scope.pensees,function (value,key)
            {
                cpt+=(value.auteur[0].id==id) ? 1 : 0;
            }),
            (cpt>0) ?
                msg='Cet auteur a des pensees à son actif, Notez qu\'en le supprimant, TOUTES SES PENSEES seront supprimées ???'
                :  (angular.forEach($scope.messages,function (value,key)
                    {
                        cpt+=(value.auteur[0].id==id) ? 1 : 0;
                    }),(cpt>0) ?
                msg='La suppression de cet Auteur entrainera la suppression de tous les messages à son actif, Voulez-vous poursuivre ???'
                : '')
        )
        : (type.match("Evenement")) ?
        (
            cpt=0,
                angular.forEach($scope.galeries,function (value,key)
                {
                    cpt+=(value.evenement[0].id==id) ? 1 : 0;
                }),
                (cpt>0) ? msg='La suppression entrainera la suppression de tous ses elements dans la Galerie, voulez-vous poursuivre ???' : ''
        )
        :'' ;

        Reponse=confirm(msg);
        if(Reponse==false)
        {
            alert("Suppression annulée");
        }
        else
        {
            $.get
            (
                pathapp+'/deleteElement/'+type,
                {
                    id:id,
                },
                function(back)
                {
                    if(back.match('1'))
                    {

                        // if(type.match('Auteur'))
                        // {
                        //     $route.reload();
                        //
                        //     // var deferred=$q.defer();
                        //     // $.each($scope.auteurs,function (key,value)
                        //     // {
                        //     //     if(value.id==id)
                        //     //     {
                        //     //         if($scope.linknav.match('pensees'))
                        //     //         {
                        //     //             for(var i=0;i<$scope.pensees.length;i++)
                        //     //             {
                        //     //                 ($scope.pensees[i].auteur[0].id==value.id) ? ( $scope.pensees.splice(i,1),  i-- ) : '' ;
                        //     //             }
                        //     //         }
                        //     //         else
                        //     //         {
                        //     //             for(var i=0;i<$scope.messages.length;i++)
                        //     //             {
                        //     //                 ($scope.messages[i].auteur[0].id==value.id) ? ( $scope.messages.splice(i,1),  i-- ) : '' ;
                        //     //             }
                        //     //         }
                        //     //         return false;
                        //     //     }
                        //     // });
                        //     // deferred.resolve($scope.auteurs.splice(position,1));
                        //     // deferred.promise;
                        // } else (type.match('Slider')) ?
                        //     $scope.sliders.splice(position,1)
                        // : (type.match('Pensee')) ?
                        // (
                        //     $scope.pensees.splice(position,1)
                        // )
                        // : (type.match('Message')) ?
                        //     $scope.messages.splice(position,1)
                        // : (type.match('Evenement')) ?
                        // (
                        //     $.each($scope.evenements,function (key,value) {
                        //         if(value.id==id)
                        //         {
                        //              for(var i=0;i<$scope.galeries.length;i++)
                        //              {
                        //                 ($scope.galeries[i].evenement[0].id==value.id) ? ( $scope.galeries.splice(i,1),  i-- ) : '' ;
                        //              }
                        //             $scope.evenements.splice(key,1);
                        //             $('#TriGalerieById').val("");
                        //             return false;
                        //         }
                        //     })
                        // )
                        // : (type.match('Galerie')) ?
                        //     $scope.galeries.splice(position,1)
                        // : (type.match('Tablette')) ?
                        // (
                        //     $.each($scope.infosrestaurants,function(key,value)
                        //     {
                        //         angular.forEach($scope.infosrestaurants[key].tablettes,function (value1,key1)
                        //         {
                        //             (value1.id==id) ?  $scope.infosrestaurants[key].tablettes.splice(position,1) : '' ;
                        //         });
                        //     })
                        // ): (type.match('Utilisateur')) ?
                        //     $scope.utilisateurs.splice(position,1): '';

                        toastr.success("Suppression effectuée");
                        (type.match('Message')) ? '' : $route.reload();
                        // $scope.$apply();
                    }
                    else
                    {
                        toastr.error("Une erreur est survenue, contacté l'administrateur");
                    }
                },
                'text'
            ).fail(function()
            {
                alert(
                        (type.match('Slider')) ?
                            "Réessayer s'il vous plait"
                        : (type.match('Restaurant')) ?
                            "Supprimer d'abord toutes les tabletes associés à ce Restaurant"
                        : (type.match('Tablette')) ?
                            "Réessayer s'il vous plait"
                        : (type.match('Plage')) ?
                            "Impossible de suppprimer cette plage, Réessayer ou contacter l'administrateur"
                        :"Impossible de supprimer cet Annonceur, car il a des publicités qui lui appartiennent"
                    );
            });
        }
    };


});

function liasonOrController(type,id)
{
    var el = document.getElementById(type+"_"+id);
    $('#'+type+'_'+id+' > .select2-search-choice-close').removeAttr('onclick');
    $('#'+type+'_'+id+' > .select2-search-choice-close').attr("ng-click", "deleteElementinDOM('"+type+"',"+id+")");
    reCompile(el);

}

function reCompile(element)
{
    var el = angular.element(element);
    $scope = el.scope();
    $injector = el.injector();
    $injector.invoke(function($compile)
    {
        $compile(el)($scope)
    })
    alert('Cliquez une seconde fois pour confirmer la suppression');

}

function isValide(fichier)
{
    var Allowedextensionsimg=new Array("jpg","JPG","jpeg","JPEG","gif","GIF","png","PNG");
    var Allowedextensionsvideo=new Array("mp4");
    for (var i = 0; i < Allowedextensionsimg.length; i++)
        if( ( fichier.lastIndexOf(Allowedextensionsimg[i]) ) != -1)
        {
            return 1;
        }
    for (var j = 0; j < Allowedextensionsvideo.length; j++)
        if( ( fichier.lastIndexOf(Allowedextensionsvideo[j]) ) != -1)
        {
            return 2;
        }
    return 0;
}


function Chargerphoto(idform)
{
    var fichier = document.getElementById("img"+idform);
    (isValide(fichier.value)!=0) ?
    (
        fileReader=new FileReader(),
        (isValide(fichier.value)==1) ?
        (
            chaine='<img alt="" class="thumbnail" style="width: 100%;height: 135px;margin-bottom: 10px;" id="affimg'+idform+'">'
        ):(
            chaine='<video controls autoplay style="width:260px;height:135px;margin-bottom:10px;" class="img-responsive" id="affimg'+idform+'"></video>'
        ),
        $("#afffichier"+idform).html(chaine),
        fileReader.onload = function (event) { $("#affimg"+idform).attr("src",event.target.result);},
        fileReader.readAsDataURL(fichier.files[0])
    ):(
        alert("L'extension du fichier choisi ne correspond pas aux règles sur les fichiers pouvant être uploader"),
        $('#img'+idform).val(""),
        $('#affimg'+idform).attr("src",""),
        $('.input-modal').val("")
    );
}