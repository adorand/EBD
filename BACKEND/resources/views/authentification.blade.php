<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Authentification</title>
        <link rel="stylesheet" href="css/authentification.css">
        <link rel="stylesheet" href="css/font.css">
    </head>
    <body>
        <div id="connexion-btn">
            <img src="images/login-w-icon.png"></img>
        </div>
        <div id="container">
            <h2 class="fontpacifico"><center><font color="#FFF">Administration</font></center></h2>
            <span class="close-btn" style="background: #FFF;">
                <img  src="images/close-btn.png"></img>
            </span>
            <form id='form-connexion' action="{{url('/')}}/" method="POST">
                <input type="email" id="login" name="login" placeholder="E-mail" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <a href="javascript:void()" class="bg-btn fontpacifico" onclick="Connexion()">Connexion</a>
                <div id="session-container">
                    <span id="Passwordoublie">Mot de passe oublié</span>
                </div>
            </form>
        </div>
        <div id="Passwordoublie-container">
            <h1>Mot de passe ?</h1>
            <span class="close-btn">
                    <img src="images/close-btn.png"></img>
                </span>
            <form>
                <input type="email" id="sendpassword" name="sendpassword" placeholder="E-mail">
                <a href="#" class="container-btn" onclick="sendPassword()">Renvoyez moi ça</a>
            </form>
        </div>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/authentification.js"></script>
    </body>
</html>
