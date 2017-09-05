<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;

/**
 * Class PenseeType
 * @package App\GraphQL\Types
 */
class PenseeType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Pensee',
        'description'    => 'Une pensee',
    ];

    public function fields()
    {
        return
        [
            'id'             => ['type' => Type::nonNull(Type::id()), 'description' => 'id du user',],
            'datepassage'    => ['type' => Type::string(), 'description' => 'date de passage de la pensee',],
            'theme'          => ['type' => Type::string(), 'description' => 'theme de la pensee',],
            'texte'          => ['type' => Type::string(), 'description' => 'texte de la pensee',],
            'auteur'         => ['type' => Type::listOf(GraphQL::type('Auteur')), 'description' => 'theme de la pensee',],
            'image'          => ['type' => Type::string(), 'description' => 'image de la pensee',],
            'created_at'     => ['type' => Type::string(), 'description' => 'Date d\'ajout du slider' ],
            'updated_at'     => ['type' => Type::string(), 'description' => 'Dernière modification du slider' ]
        ];
    }
}