<?php

namespace App\Http\Controllers;

use App\Auteur;
use App\Evenement;
use App\Galerie;
use App\Message;
use App\Pensee;
use App\Slider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class deleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function delete($class)
    {
        if($class=="Slider")
            return $this->deleteSlider();
        else if($class=="Auteur")
            return $this->deleteAuteur();
        else if($class=="Pensee")
            return $this->deletePensee();
        else if($class=="Message")
            return $this->deleteMessage();
        else if($class=="Evenement")
            return $this->deleteEvenement();
        else if($class=="Galerie")
            return $this->deleteGalerie();
    }

    function deleteSlider()
    {
        $slider=Slider::find(Input::get('id'));
        $ext=explode('.',$slider->image);
        unlink(public_path($ext[0].'_rz.'.end($ext)));
        unlink(public_path($slider->image));
        return Slider::destroy(Input::get('id'));
    }

    function deleteAuteur()
    {
        return Auteur::destroy(Input::get('id'));
    }

    function deletePensee()
    {
        $pensee=Pensee::find(Input::get('id'));
        $ext=explode('.',$pensee->image);
        unlink(public_path($ext[0].'_aff.'.end($ext)));
        unlink(public_path($ext[0].'_plan.'.end($ext)));
        unlink(public_path($ext[0].'_slider.'.end($ext)));
        unlink(public_path($pensee->image));
        return Pensee::destroy(Input::get('id'));
    }

    function deleteMessage()
    {
        $message=Message::find(Input::get('id'));
        unlink(public_path($message->fichier));
        return Message::destroy(Input::get('id'));
    }

    function deleteEvenement()
    {
        return Evenement::destroy(Input::get('id'));
    }

    function deleteGalerie()
    {
        $galerie=Galerie::find(Input::get('id'));
        unlink(public_path($galerie->fichier));
        return Galerie::destroy(Input::get('id'));
    }
}
