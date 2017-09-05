<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;


class EvenementType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Evenement',
        'description'    => 'Un evenement',
    ];

    public function fields()
    {
        return
        [
            'id'     => ['type' => Type::nonNull(Type::id()),'description' => 'id de l\'evnement',],
            'titre'    => ['type' => Type::string(), 'description' => 'titre de l\'evenement',],
            'description'    => ['type' => Type::string(), 'description' => 'description de l\'evenement',],
            'galeries'    => ['type' => Type::listOf(GraphQL::type('Galerie')), 'description' => 'Liste de toutes les galeries coorespondant à cet evenement',],
            'created_at'     => ['type' => Type::string(), 'description' => 'Date d\'ajout de l\'evenement' ],
            'updated_at'     => ['type' => Type::string(), 'description' => 'Dernière modification de l\'evenement' ]
        ];
    }
}