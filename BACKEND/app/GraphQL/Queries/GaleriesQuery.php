<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\GraphQL\Serializers\GalerieSerializers;
use App\GraphQL\Serializers\PenseeSerializers;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Galerie;
use Illuminate\Support\Collection;

class GaleriesQuery extends Query
{


    public function type()
    {
        return Type::listOf(GraphQL::type('Galerie'));
    }


    public function args()
    {
        return
        [
            'id'             => ['name' => 'id', 'type' => Type::id()],
            'texte'          => ['name' => 'texte', 'type' => Type::string()],
            'fichier'        => ['name' => 'fichier', 'type' => Type::string()],
            'evenement'      => ['name' => 'evenement', 'type' => Type::listOf(GraphQL::type('Evenement'))],
            'created_at'     => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at'     => ['name' => 'created_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, array $args = [])
    {

        $query=Galerie::with('group');
        return $query->get()->map(function(Galerie $galerie)
        {
            return [
                'id' => $galerie->id,
                'texte' => $galerie->texte,
                'fichier' => $galerie->fichier,
                'evenement' => [ $galerie->hasevenement ],
                'created_at' => $galerie->created_at,
                'updated_at' => $galerie->updated_at
            ];
        })->toArray();
    }


}