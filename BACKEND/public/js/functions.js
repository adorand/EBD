jQuery(window).on('load', function()
{
    "use strict";

    $('.catg').css('height',''+($('#content').height()-180)+'px');
    $('.catg').css('max-height',''+($('#content').height()-180)+'px');

    $('.plats').css('height',''+($('#content').height()-(66+$('.ssctg').height()+60+68))+'px');
    $('.plats').css('max-height',''+($('#content').height()-(66+$('.ssctg').height()+60+68))+'px');

    $ (window).width()<1300 ? $('.al-sidebar').addClass('nav-xs'): '';
    jQuery('.preloader-wrapper').fadeOut('slow');
});




jQuery(window).on('resize', function ()
{
    $('.catg').css('height',''+($('#content').height()-180)+'px');
    $('.catg').css('max-height',''+($('#content').height()-180)+'px');

    $('.plats').css('height',''+($('#content').height()-(66+$('.ssctg').height()+60+68))+'px');
    $('.plats').css('max-height',''+($('#content').height()-(66+$('.ssctg').height()+60+68))+'px');

    $ (window).width()<1300 ? $('.al-sidebar').addClass('nav-xs') : $('.al-sidebar').removeClass('nav-xs');
});

//When modal is showed, we put focus on the first input
$('#modal-calculator').on('shown.bs.modal', function ()
{
    $('input:text:visible:first', this).focus();
});

// Determines button clicked via id
function updatetextcalculator(id)
{
    document.calc.result.value+=id;
}

// Clears calculator input screen
function clearScreen()
{
    $('#resultcalc').val("");
}

// Calculates input values
function calculate()
{
    try
    {
        var input = eval(document.calc.result.value);
        $('#resultcalc').val(input);
    }
    catch(err)
    {
        $('#resultcalc').val("Erreur");
    }
    this.event.preventDefault();
}


// Hover on table number, active it
$('.tableid').on('mouseenter',function()
{

    var detailscmd=$('<div/>').addClass('detailscmd-bas row animated scrollable');
        var detailscmd_1=$('<div/>');
            var table=$('<table/>');
                var tbody=$('<tbody/>');
                for(i=0;i<6;i++)
                {
                    var tr=$('<tr/>').addClass('side-message-navigation-item little-human shineHover family');
                        var tdimg=$('<td/>').addClass('photo-td');
                        tdimg.append('<img class="little-human-picture" src="images/p1.jpg">');
                        var tdname=$('<td/>');
                        tdname.append('<div class="name-container"><div><span class="name">Nom du plat</span></div><div><span class="tag label label-primary work">10 000 </span></div></div>');
                        var tdqte=$('<td/>');
                        tdqte.append('<div class="additional-info"><span class="subject"> Quantité</span></div>');
                        var tdmontant=$('<td/>');
                        tdmontant.append('<div class="additional-info"><span class="montant" > Montant</span></div>');
                        var tdcheck=$('<td/>').addClass('check-td');
                        tdcheck.append('<div class="checkbox i-checks"><label><input type="checkbox" checked=""><i></i></label></div>');
                    tr.append(tdimg);tr.append(tdname);tr.append(tdqte);tr.append(tdmontant);tr.append(tdcheck);

                    tbody.append(tr);
                }
            table.append(tbody);
        detailscmd_1.append(table);
        var line_btns=$('<div/>').addClass('answer-container');
            line_btns.append('<button type="button" class="btn btn-with-icon" href="#modal-calculator" data-toggle="modal" style="margin-right: 15px;"><i class="ion-reply"></i>Régler</button>');
            line_btns.append('<button type="button" class="btn btn-with-icon" href="#modal-motif" data-toggle="modal" style="margin-right: 15px;"><i class="ion-reply"></i>Annuler</button>');
            line_btns.append('<button type="button" class="btn btn-with-icon"><i class="ion-reply"></i>Valider</button>');
        detailscmd_1.append(line_btns);
    detailscmd.append('<center><h4 style="margin-top: 23px;">Liste des plats<h4/><center/>')
    detailscmd.append(detailscmd_1);
    let that=$(this);

    let str=that.attr('class');
    let rx=/typecmd.*/i;
    str= str.match( rx )[0];
    detailscmd.addClass(str);
    detailscmd.css('max-height','400px');

    var animate='fadeIn';
    var float='';
    var left=0;
    var top=-(that.height()+1);
    that.parent().parent().position().left>(2*that.parent().parent().width()) ?
        (
            float='right',
            left=0,
            right=that.width(),
            animate+='Right'
        )
        :
        (
            float='left',
            right=0,
            left=that.width(),
            animate+='Left'
        );
    detailscmd.css('float',float);
    detailscmd.css('margin-left',left);
    detailscmd.css('margin-right',right);
    detailscmd.addClass(animate);
    that.append(detailscmd);

    var taille=detailscmd.parent().parent().parent().position().top+detailscmd.height();
    //var taille2=taille-detailscmd.parent().parent().parent().height();
    //alert(detailscmd.parent().parent().parent().position().top+'==taille=='+detailscmd.parent().parent().parent().parent().css('max-height').replace('px',''));
    var maxheight=parseInt(detailscmd.parent().parent().parent().parent().css('max-height').replace('px',''));
    var margintop=(-1*(maxheight-taille)) < (that.height()) ? -(that.height()+1) : (maxheight-taille) ;
    taille>maxheight ?
        detailscmd.css('margin-top',margintop): detailscmd.css('margin-top',top);
    
    /*taille>maxheight ?
        detailscmd.css('margin-top',-(detailscmd.height()+1)): detailscmd.css('margin-top',top);*/
});


$('.tableid').on('mouseleave',function()
{
    $(this).find('.detailscmd-bas').remove();
});


$('.thumbnail').on('mouseenter',function()
{
    var menu=$(this).find('.menu');
    let str=$(this).attr('class');
    str=str.match( /typecmd.*/i )[0];
    var apply=(str.match('ann')) ? 'ctg' : (str.match('val')) ? 'ssctg' : 'plats' ;
    //alert(ap);

    menu.find('.menu-open').remove();
    menu.find('a.menu-item').remove();
    menu.prepend('<input type="checkbox" href="#" class="menu-open .menu-item-'+apply+'" name="menu-open" id="menu-open"/>');
        var edit=$('<a/>').addClass('menu-item');
            var icon_edit=$('<i/>').addClass('fa fa-edit');
        edit.append(icon_edit);
        var details=$('<a/>').addClass('menu-item');
            var icon_details=$('<i/>').addClass('fa fa-eye');
        details.append(icon_details);
        var remove=$('<a/>').addClass('menu-item');
            var icon_remove=$('<i/>').addClass('fa fa-trash-o');
        remove.append(icon_remove);
        menu.append(edit);menu.append(details);menu.append(remove);
        menu.find('.menu-item').addClass('menu-item-'+apply);
        /*<a href="#" class=""> <i class="fa fa-ey"></i> </a>
        <a href="#" class="menu-item"> <i class=""></i> </a>
        <a href="#" class="menu-item"> <i class="fa fa-trash-o"></i> </a>
        <div style="float: left;color:#FFF;margin-left:100px;display: none; ">actif</div>*/
    menu.append('<input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>');
});

$('.thumbnail').on('mouseleave',function()
{
    var menu=$(this).find('.menu');
    menu.find('.menu-open').remove();
    menu.find('a.menu-item').remove();
});


function showModal(modal)
{
    $('#'+modal).modal('show');
}



