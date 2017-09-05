<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Message;
use App\Pensee;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Auteur;

class AuteursQuery extends Query
{

    /**
     * @return GraphQL\Type\Definition\ListOfType
     */
    public function type()
    {
        return Type::listOf(GraphQL::type('Auteur'));
    }

    /**
     * @return array
     */
    public function args()
    {
        return [
            'id'          => ['name' => 'id', 'type' => Type::id()],
            'nom'         => ['name' => 'nom', 'type' => Type::string()],
            'created_at'  => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at'  => ['name' => 'updated_at', 'type' => Type::string()],
            'pensees'     => ['name' => 'pensees', 'type' => Type::listOf(GraphQL::type('Pensee'))
            ],
            'messages' => [
                'name' => 'pensees',
                'type' => Type::listOf(GraphQL::type('Message'))
            ]
        ];
    }

    public function resolve($root, array $args=[])
    {
        if(isset($args['id']))
        {
            return Auteur::where('id' , $args['id'])->get();
        }
        else if(isset($args['nom']))
        {
            return Auteur::where('nom', $args['nom'])->get();
        }
        else
        {
            $query=Auteur::with('pensees');
            return $query->get()->map(function(Auteur $auteur)
            {
                return [
                    'id' => $auteur->id,
                    'nom' => $auteur->nom,
                    'created_at' => $auteur->created_at,
                    'updated_at' => $auteur->updated_at,
                    'pensees' => $auteur->pensees->map(function (Pensee $pensee)
                    {
                        return [
                            'id' => $pensee->id,
                            'theme' => $pensee->theme,
                            'datepassage' => $pensee->datepassage,
                            'texte' => $pensee->datepassage,
                            'auteur' =>[ $pensee->hasauteur ],
                            'image' => $pensee->image,
                        ];
                    }),
                    'messages' => $auteur->messages->map(function (Message $message)
                    {
                        return [
                            'id' => $message->id,
                            'theme' => $message->theme,
                            'auteur' =>[ $message->hasauteur],
                            'fichier' => $message->fichier,
                            'created_at' => $message->created_at,
                            'updated_at' => $message->updated_at,
                        ];
                    }),
                ];
            })->toArray();
        }
    }


}