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

    public function resolve($root, array $args = []):Collection
    {

        $query=Pensee::with('group');
        return PenseeSerializers::collection($query->get());
        /*return $query->get()->map(function(Pensee $pensee)
        {
            return [
                'id' => $pensee->id,
                'theme' => $pensee->theme,
                'auteur' =>[ $pensee->hasauteur
                ],
                'imageslider' => $pensee->imageslider,
                'imageplan' => $pensee->imageplan,
                'imageaff' => $pensee->imageaff,
            ];
        })->toArray();*/
    }


}