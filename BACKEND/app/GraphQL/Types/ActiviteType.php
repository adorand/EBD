<?php declare(strict_types=1);

namespace App\GraphQL\Types;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;

class ActiviteType extends GraphQLType
{
    protected $attributes=[
        'name'           => 'Activite',
        'description'    => 'Une Activite',
    ];

    public function fields()
    {
        return [
            'id'             => ['type' => Type::nonNull(Type::id()), 'description' => 'id de l\'activite ',],
            'titre'          => ['type' => Type::string(), 'description' => 'titre de l\'activite ',],
            'texte'          => ['type' => Type::string(), 'description' => 'texte de l\'activite ',],
            'fichier'        => ['type' => Type::string(), 'description' => 'fichier de l\'activite ',],
            'dateact'        => ['type' => Type::string(), 'description' => 'date de l\'activite ',],
            'categorie'        => ['type' => Type::string(), 'description' => 'Categorie de l\'activite ',],
            'created_at'     => ['type' => Type::string(), 'description' => 'Date d\'ajout de l\'activite' ],
            'updated_at'     => ['type' => Type::string(), 'description' => 'Dernière modification de l\'activite' ],
        ];
    }
}