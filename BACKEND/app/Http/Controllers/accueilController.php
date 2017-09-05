<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class accueilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('accueil');

    }

    function initialisation()
    {
        $annonceurs=\App\Annonceur::get();
        $pubs=\App\Publicite::where('supprime',0)->get();
        $restaurants=\App\Restaurant::get();
        $inforestos=array();
        foreach ($restaurants as $resto)
        {
            $pingsrestos=\App\Pingsresto::where('restaurant',$resto->id)->whereRaw('id = (select max(`id`) from pingsrestos)')->get();
            $color="bg-dark";
            if(count($pingsrestos)>0)
            {
                $timestamp=stetcrtotime($pingsrestos[0]->created_at);
                if(date("d-m-y",$timestamp)==date('d-m-y'))
                {
                    $nbping=intval((intval((date("H")*60)+(date("i"))+(date("s")/60))-intval((date("H",$timestamp)*60)+(date("i",$timestamp))+(date("s",$timestamp)/60)))/15);
                    $color=($nbping==0) ? "bg-primary" : ($nbping<=2) ? "bg-warning" : ($nbping<=4) ?  "bg-danger" : "bg-dark";
                }
            }
            array_push($inforestos,array("restaurant" => $resto, "tablettes" => \App\Tablette::where('restaurant',$resto->id)->get(), "lastping" => $pingsrestos, "color" => $color));
        }
        $recup=array();
        array_push($recup,$annonceurs);
        array_push($recup,$pubs);
        array_push($recup,$inforestos);
        array_push($recup,\App\Utilisateur::get());
        array_push($recup,\App\Plage::get());
        return $recup;
    }

    function reactiveInfoRestaurant()
    {

    }

    function deconnexion()
    {
        Session::flush();
        return redirect('/');
    }

    function sendPassword()
    {
        $login=Input::get("login");
        return "mot de passe envoyé";
        $user=Utilisateur::where('login',$login)->get()[0];
    }
}
