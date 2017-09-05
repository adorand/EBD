<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Evenement;
use App\Galerie;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class EvenementsQuery extends Query
{


    public function type()
    {
        return Type::listOf(GraphQL::type('Evenement'));
    }


    public function args()
    {
        return
        [
            'id' => ['name' => 'id', 'type' => Type::id()],
            'titre' => ['name' => 'titre', 'type' => Type::string()],
            'description' => ['name' => 'description', 'type' => Type::string()],
            'galeries' => ['name' => 'galeries', 'type' => Type::listOf(GraphQL::type('Galerie'))],
            'created_at'     => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at'     => ['name' => 'created_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, array $args=[])
    {
        if(isset($args['id']))
        {
            return Evenement::where('id' , $args['id'])->get();
        }
        else if(isset($args['titre']))
        {
            return Evenement::where('titre', $args['titre'])->get();
        }
        else if(isset($args['description']))
        {
            return Evenement::where('description', $args['description'])->get();
        }
        else
        {
            $query=Evenement::with('galeries');
            return $query->get()->map(function(Evenement $evenement)
            {
                return [
                    'id' => $evenement->id,
                    'titre' => $evenement->titre,
                    'description' => $evenement->description,
                    'created_at' => $evenement->created_at,
                    'updated_at' => $evenement->updated_at,
                    'galeries' => $evenement->galeries->map(function (Galerie $galerie)
                    {
                        return [
                            'id' => $galerie->id,
                            'texte' => $galerie->texte,
                            'fichier' => $galerie->fichier,
                            'evenement' =>[ $galerie->hasevenement ],
                            'created_at' =>$galerie->created_at ,
                            'updated_at' =>$galerie->updated_at,
                        ];
                    }),
                ];
            })->toArray();
        }
    }


}