$('#connexion-btn').click(function()
{
    $('#connexion-btn').fadeOut("slow",function()
    {
        $("#container").fadeIn();
        TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
        TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
    });
});

$(".close-btn").click(function()
{
    TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
    $("#container, #Passwordoublie-container").fadeOut(800, function()
    {
      $("#connexion-btn").fadeIn(800);
    });
});

$('#Passwordoublie').click(function()
{
    $("#container").fadeOut(function(){
      $("#Passwordoublie-container").fadeIn();
    });
});



function Connexion()
{
    $('#login').css('border','none');
    $('#password').css('border','none');
    if(!$('#login').val()) $('#login').css('border','1px solid #501f1f');
    if(!$('#password').val()) $('#password').css('border','1px solid #501f1f');
    else
    {

        $.get
        (
            $('#form-connexion').attr('action'),
            {
                login:$('#login').val(),
                password:$('#password').val()
            },
            function (back)
            {
                if(back.error==0)
                    location.reload();
                else if(back.error==1)
                {
                    $('#login').css('border','1px solid #501f1f');
                    $('#password').val("");
                    alert('Login inexistant');
                }
                else
                {
                    $('#password').css('border','1px solid #501f1f');
                    alert('Password incorrecte');
                }
            },
            'json'
        );
    }
}


function sendPassword()
{
    $('#sendpassword').css('border','none');
    if(!$('#sendpassword').val()) $('#sendpassword').css('border','1px solid #501f1f');
    else
    {

        $.get
        (
            $('#form-connexion').attr('action')+'Sendpassword',
            {
                login:$('#sendpassword').val()
            },
            function (back)
            {
                if(back.error==0)
                    location.reload();
                else
                {
                    $('#sendpassword').css('border','1px solid #501f1f');
                    alert('E-mail inexistant');
                }
            },
            'json'
        );
    }
}