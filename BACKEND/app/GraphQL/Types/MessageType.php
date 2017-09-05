<?php
/**
 * Created by PhpStorm.
 * User: jacques
 * Date: 08/06/17
 * Time: 14:48
 */

namespace App\GraphQL\Types;


use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;

class MessageType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Message',
        'description'    => 'Un Message',
    ];

    public function fields()
    {
        return
        [
            'id'         => ['type' => Type::nonNull(Type::id()), 'description' => 'id du Message' ],
            'theme'    => ['type' => Type::string(), 'description' => 'nompage du Message' ],
            'auteur'         => ['type' => Type::listOf(GraphQL::type('Auteur')), 'description' => 'theme de la pensee',],
            'fichier'      => ['type' => Type::string(), 'description' => 'fichier du Message' ],
            'created_at' => ['type' => Type::string(), 'description' => 'Date d\'ajout du Message' ],
            'updated_at' => ['type' => Type::string(), 'description' => 'Dernière modification du Message' ]
        ];
    }
}