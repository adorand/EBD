<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;


class UtilisateurType extends GraphQLType
{
    protected $attributes=
    [
        'name'           => 'Utilisateur',
        'description'    => 'Un utilisateur',
    ];

    public function fields()
    {
        return
            [
                'id'            => ['type' => Type::nonNull(Type::id()), 'description' => 'id de l\'utilisateur' ],
                'nomcomplet'    => ['type' => Type::string(), 'description' => 'nompage de l\'utilisateur' ],
                'login'         => ['type' => Type::string(), 'description' => 'theme de la pensee',],
                'password'      => ['type' => Type::string(), 'description' => 'fichier de l\'utilisateur' ],
                'phone'         => ['type' => Type::string(), 'description' => 'fichier de l\'utilisateur' ],
                'droits'        => ['type' => Type::string(), 'description' => 'fichier de l\'utilisateur' ],
                'photo'         => ['type' => Type::string(), 'description' => 'fichier de l\'utilisateur' ],
                'created_at'    => ['type' => Type::string(), 'description' => 'Date d\'ajout de l\'utilisateur' ],
                'updated_at'    => ['type' => Type::string(), 'description' => 'Dernière modification de l\'utilisateur' ]
            ];
    }
}