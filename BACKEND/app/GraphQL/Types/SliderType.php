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

class SliderType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Slider',
        'description'    => 'Un Slider',
    ];

    public function fields()
    {
        return
        [
            'id'         => ['type' => Type::nonNull(Type::id()), 'description' => 'id du slider' ],
            'nompage'    => ['type' => Type::string(), 'description' => 'nompage du slider' ],
            'image'      => ['type' => Type::string(), 'description' => 'image du slider' ],
            'created_at' => ['type' => Type::string(), 'description' => 'Date d\'ajout du slider' ],
            'updated_at' => ['type' => Type::string(), 'description' => 'Dernière modification du slider' ]
        ];
    }
}