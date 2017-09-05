<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;

/**
 * Class AuteurType
 * @package App\GraphQL\Types
 */
class AuteurType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Auteur',
        'description'    => 'Un auteur',
    ];

    public function fields()
    {
        return [
            'id'             => ['type' => Type::nonNull(Type::id()), 'description' => 'id de l\'auteur ',],
            'nom'            => ['type' => Type::string(), 'description' => 'nom de l\'auteur ',],
            'created_at'     => ['type' => Type::string(), 'description' => 'Date d\'ajout de l\'auteur' ],
            'updated_at'     => ['type' => Type::string(), 'description' => 'Dernière modification de l\'auteur' ],
            'pensees'        => ['type'        => Type::listOf(GraphQL::type('Pensee')), 'description' => 'Liste de toutes les pensées à appatenant à cette hauteur',],
        ];
    }
}