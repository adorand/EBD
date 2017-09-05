<?php

namespace App\Http\Controllers;

use App\Activite;
use App\Auteur;
use App\Evenement;
use App\Galerie;
use App\Message;
use App\Pensee;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;
use Intervention\Image\Facades\Image;


class saveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function save($class)
    {
        if($class=="Slider")
            return $this->saveSlider();
        else if($class=="Auteur")
            return $this->saveAuteur();
        else if($class=="Pensee")
            return $this->savePensee();
        else if($class=="Message")
            return $this->saveMessage();
        else if($class=="Evenement")
            return $this->saveEvenement();
        else if($class=="Galerie")
            return $this->saveGalerie();
        else if($class=="Activite")
            return $this->saveActivite();
        else if($class=="Actualite")
            return $this->saveActualite();

    }

    function saveSlider()
    {
        $slider=new Slider();
        empty(Input::get('id_slider')) ?  $slider->id=Uuid::generate() : $slider=Slider::find(Input::get('id_slider')) ;
        $slider->nompage=Input::get('nompage');
        echo Input::get('imgslider');
        $fichier=$_FILES['imgslider']['name'];
        if(!empty($fichier))
        {
            try
            {
                if(!empty(Input::get('id_slider')))
                {
                    $ext=explode('.',$slider->image);

                    unlink(public_path($ext[0].'_rz.'.end($ext)));
                    unlink(public_path($slider->image));
                }
            }
            catch (\Exception $e)
            {
            }

            $fichier_tmp=$_FILES['imgslider']['tmp_name'];

            $ext=explode('.',$fichier);
            $rename=config('view.uploads')[2]."/".$slider->id.".".end($ext);
            $rename_newsize=config('view.uploads')[2]."/".$slider->id."_rz.".end($ext);
            move_uploaded_file($fichier_tmp,$rename);
            $slider->image=$rename;
            Image::make(realpath(base_path('public/'.$rename)))->resize(260, 198)->save(public_path($rename_newsize));
        }
        $slider->save();
        return json_encode(Slider::find($slider->id));
    }

    function saveAuteur()
    {
        $auteur= !empty(Input::get('id_auteur')) ? Auteur::find(Input::get('id_auteur')) : new Auteur() ;
        $auteur->nom = Input::get('nom');
        $auteur->save();
        return empty(Input::get('id_auteur')) ? json_encode(Auteur::get()[(count(Auteur::get()) - 1)]) : json_encode(Auteur::find($auteur->id));
    }

    function savePensee()
    {
        $pensee=new Pensee();
        empty(Input::get('id_pensee')) ?  $pensee->id=Uuid::generate() : $pensee=Pensee::find(Input::get('id_pensee')) ;
        $pensee->theme=Input::get('theme');
        $pensee->texte=Input::get('texte');
        $pensee->datepassage=Input::get('datepassage');
        $pensee->auteur=Input::get('auteur');
        $fichier=$_FILES['img']['name'];
        if(!empty($fichier))
        {
            try
            {
                if(!empty(Input::get('id_pensee')))
                {
                    $ext=explode('.',$pensee->image);
                    unlink(public_path($ext[0].'_aff.'.end($ext)));
                    unlink(public_path($ext[0].'_plan.'.end($ext)));
                    unlink(public_path($ext[0].'_slider.'.end($ext)));
                    unlink(public_path($pensee->image));
                }
            }
            catch (\Exception $e)
            {
            }

            $fichier_tmp=$_FILES['img']['tmp_name'];
            $ext=explode('.',$fichier);
            $rename=config('view.uploads')[3]."/".$pensee->id.".".end($ext);
            $rename_aff=config('view.uploads')[3]."/".$pensee->id."_aff.".end($ext);
            $rename_plan=config('view.uploads')[3]."/".$pensee->id."_plan.".end($ext);
            $rename_slider=config('view.uploads')[3]."/".$pensee->id."_slider.".end($ext);
            move_uploaded_file($fichier_tmp,$rename);
            $pensee->image=$rename;
            Image::make(realpath(base_path('public/'.$rename)))->resize(260, 198)->save(public_path($rename_aff));
            Image::make(realpath(base_path('public/'.$rename)))->resize(260, 198)->save(public_path($rename_plan));
            Image::make(realpath(base_path('public/'.$rename)))->resize(260, 198)->save(public_path($rename_slider));
        }
        $pensee->save();
        $pensee=Pensee::find($pensee->id);
        $pensee->auteur=Auteur::where('id',$pensee->auteur)->get();
        return json_encode($pensee);
    }

    function saveMessage()
    {
        $message=new Message();
        empty(Input::get('id_message')) ?  $message->id=Uuid::generate() : $message=Message::find(Input::get('id_message')) ;
        $message->theme=Input::get('theme');
        $message->auteur=Input::get('auteur');
        $fichier=$_FILES['fichier']['name'];
        if(!empty($fichier))
        {
            try
            {
                if(!empty(Input::get('id_message')))
                {
                    unlink(public_path($message->fichier));
                }
            }
            catch (\Exception $e)
            {

            }
            $fichier_tmp=$_FILES['fichier']['tmp_name'];
            $ext=explode('.',$fichier);
            $rename=config('view.uploads')[4]."/".$message->id.".".end($ext);
            if(move_uploaded_file($fichier_tmp,$rename))
                echo "bon";
            else
                echo "mabé";

            $message->fichier=$rename;
        }
        $message->save();
        $message=Message::find($message->id);
        $message->auteur=Auteur::where('id',$message->auteur)->get();
        return json_encode($message);
    }

    function saveEvenement()
    {
        $evenement= !empty(Input::get('id_evenement')) ? Evenement::find(Input::get('id_evenement')) : new Evenement() ;
        $evenement->titre = Input::get('titre');
        $evenement->description = Input::get('description');
        $evenement->save();
        return empty(Input::get('id_evenement')) ? json_encode(Evenement::get()[(count(Evenement::get()) - 1)]) : json_encode(Evenement::find($evenement->id));
    }

    function saveGalerie()
    {
        $galerie=new Galerie();
        empty(Input::get('id_galerie')) ?  $galerie->id=Uuid::generate() : $galerie=Galerie::find(Input::get('id_galerie')) ;
        $galerie->texte=Input::get('texte');
        $galerie->evenement=Input::get('evenement');
        $fichier=$_FILES['fichier']['name'];
        if(!empty($fichier))
        {
            try
            {
                if(!empty(Input::get('id_galerie')))
                {
                    unlink(public_path($galerie->fichier));
                }
            }
            catch (\Exception $e)
            {

            }
            $fichier_tmp=$_FILES['fichier']['tmp_name'];
            $ext=explode('.',$fichier);
            $rename=config('view.uploads')[5]."/".$galerie->id.".".end($ext);
            move_uploaded_file($fichier_tmp,$rename);
            $galerie->fichier=$rename;
        }
        $galerie->save();
        $galerie=Galerie::find($galerie->id);
        $galerie->evenement=Evenement::where('id',$galerie->evenement)->get();
        return json_encode($galerie);
    }

    function saveActivite()
    {
        $activite=new Activite();
        empty(Input::get('id_activite')) ?  $activite->id=Uuid::generate() : $activite=Activite::find(Input::get('id_activite')) ;
        $activite->titre = Input::get('titre');
        $activite->texte = Input::get('texte');
        $activite->dateact = Input::get('dateact');
        $activite->categorie = Input::get('categorie');
        $fichier=$_FILES['fichier']['name'];
        if(!empty($fichier))
        {
            try
            {
                if(!empty(Input::get('id_activite')))
                {
                    unlink(public_path($activite->fichier));
                }
            }
            catch (\Exception $e)
            {

            }
            $fichier_tmp=$_FILES['fichier']['tmp_name'];
            $ext=explode('.',$fichier);
            $rename=config('view.uploads')[6]."/".$activite->id.".".end($ext);
            move_uploaded_file($fichier_tmp,$rename);
            $activite->fichier=$rename;
        }
        $activite->save();
        return json_encode(Activite::find($activite->id));
    }
}
