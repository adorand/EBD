<?php declare(strict_types=1);


namespace App\GraphQL\Mutations;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Auteur;

class AuteurUpdate extends Mutation {

    protected $attributes = ['name' => 'auteur_update'];

    public function type()
    {
        return GraphQL::type('Auteur');
    }

    public function args()
    {
        return
        [
            'id' =>['name' => 'id', 'type' => Type::id()],
            'nom' =>['name' => 'nom', 'type' => Type::string()],
            'type' =>['name' => 'type', 'type' => Type::string()]
        ];
    }

    public function resolve($root, $args)
    {
        $auteur = Auteur::find($args['id']);
        if(!$auteur)
        {
            $auteur=new Auteur();
            $auteur->id=0;

        }
        $auteur->nom = $args['nom'];
        $auteur->save();
        return $auteur;

//        if($args['type']=='update')
//        {
//            $auteur->nom = $args['nom'];
//            $auteur->save();
//            return $auteur;
//        }
//        else
//        {
//            $auteur->id=0;
//            $auteur->nom='0';
//            return $auteur;
//        }



    }

}