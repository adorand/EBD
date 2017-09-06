<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;

class ActualiteType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Actualite',
        'description'    => 'Une Actualite',
    ];

    public function fields()
    {
        return [
            'id'             => ['type' => Type::nonNull(Type::id()), 'description' => 'id de l\'actualite ',],
            'titre'          => ['type' => Type::string(), 'description' => 'titre de l\'actualite ',],
            'texte'          => ['type' => Type::string(), 'description' => 'texte de l\'actualite ',],
            'fichier'        => ['type' => Type::string(), 'description' => 'fichier de l\'actualite ',],
            'dateact'        => ['type' => Type::string(), 'description' => 'date de l\'actualite ',],
            'created_at'     => ['type' => Type::string(), 'description' => 'Date d\'ajout de l\'actualite' ],
            'updated_at'     => ['type' => Type::string(), 'description' => 'Dernière modification de l\'actualite' ],
        ];
    }
}