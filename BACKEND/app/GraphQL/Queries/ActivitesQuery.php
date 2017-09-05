<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Activite;

class ActivitesQuery extends Query
{


    public function type()
    {
        return Type::listOf(GraphQL::type('Activite'));
    }


    public function args()
    {
        return
        [
            'id'          => ['name' => 'id', 'type' => Type::id()],
            'titre'       => ['name' => 'titre', 'type' => Type::string()],
            'texte'       => ['name' => 'texte', 'type' => Type::string()],
            'fichier'     => ['name' => 'fichier', 'type' => Type::string()],
            'dateact'     => ['name' => 'dateact', 'type' => Type::string()],
            'categorie'   => ['name' => 'categorie', 'type' => Type::string()],
            'created_at'  => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at'  => ['name' => 'updated_at', 'type' => Type::string()]
        ];
    }


    public function resolve($root, array $args=[])
    {
        if(isset($args['id']))
        {
            return Activite::where('id' , $args['id'])->get();
        }
        else if(isset($args['titre']))
        {
            return Activite::where('titre', $args['titre'])->get();
        }
        else if(isset($args['texte']))
        {
            return Activite::where('texte', $args['texte'])->get();
        }
        else if(isset($args['dateact']))
        {
            return Activite::where('dateact', $args['dateact'])->get();
        }
        else
        {
            return Activite::get();
        }
    }


}