<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;


class GalerieType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Galerie',
        'description'    => 'Une galerie',
    ];

    public function fields()
    {
        return
        [
            'id'             => ['type' => Type::nonNull(Type::id()), 'description' => 'id de la galerie ',],
            'texte'          => ['type' => Type::string(), 'description' => 'date de passage de la galerie ',],
            'fichier'        => ['type' => Type::string(), 'description' => 'fichier de la galerie ',],
            'evenement'      => ['type' => Type::listOf(GraphQL::type('Evenement')), 'description' => ' Evenement auquel appartient la galerie',],
            'created_at'     => ['type' => Type::string(), 'description' => 'Date d\'ajout de la galerie' ],
            'updated_at'     => ['type' => Type::string(), 'description' => 'Dernière modification de la galerie' ]
        ];
    }
}