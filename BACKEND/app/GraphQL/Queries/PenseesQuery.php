<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\GraphQL\Serializers\PenseeSerializers;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Pensee;
use Illuminate\Support\Collection;

class PenseesQuery extends Query
{

    /**
     * @return GraphQL\Type\Definition\ListOfType
     */
    public function type()
    {
        return Type::listOf(GraphQL::type('Pensee'));
    }

    /**
     * @return array
     */
    public function args()
    {
        return
        [
            'id'          => ['name' => 'id', 'type' => Type::id()],
            'theme'      => ['name' => 'theme', 'type' => Type::string()],
            'texte'       => ['name' => 'texte', 'type' => Type::string()],
            'auteur'      => ['name' => 'auteur', 'type' => Type::listOf(GraphQL::type('Auteur'))],
            'image'       => ['name' => 'image', 'type' => Type::string()],
            'created_at'  => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at'  => ['name' => 'created_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, array $args = [])
    {

        $query=Pensee::with('group');
        // return PenseeSerializers::collection($query->get());
        // Si on ajoute ça, il faut ajouter devant la fonction :collection
        return $query->get()->map(function(Pensee $pensee)
        {
            return [
                'id' => $pensee->id,
                'theme' => $pensee->theme,
                'texte' => $pensee->texte,
                'auteur' => [ $pensee->hasauteur ],
                'image' => $pensee->image,
                'imageslider' => $pensee->image,
                'imageplan' => $pensee->image,
                'imageaff' => $pensee->image,
                'created_at' => $pensee->created_at,
                'updated_at' => $pensee->updated_at
            ];
        })->toArray();
    }


}