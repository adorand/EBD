<?php
/**
 * Created by PhpStorm.
 * User: jacques
 * Date: 08/06/17
 * Time: 14:47
 */

namespace App\GraphQL\Queries;

use App\GraphQL\Serializers\SliderSerializer;
use App\Slider;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Auteur;

class SlidersQuery extends Query
{
    /**
     * @return GraphQL\Type\Definition\ListOfType
     */
    public function type()
    {
        return Type::listOf(GraphQL::type('Slider'));
    }

    /**
     * @return array
     */
    public function args()
    {
        return
        [
            'id' => ['name' => 'id', 'type' => Type::id()],
            'nompage' => ['name' => 'nompage', 'type' => Type::string()],
            'image' => ['name' => 'image', 'type' => Type::string()],
            'created_at' => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at' => ['name' => 'created_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, array $args=[])
    {
        /*$query=isset($args['id']) ? Slider::where('id' , $args['id'])->get()
            : isset($args['nompage']) ? Slider::where('nompage', $args['nompage'])->get()
        : isset($args['image']) ? Slider::where('image', $args['image'])->get() : Slider::all() ;
        return $query;*/
        //SliderSerializer::collection($query->get());
        if(isset($args['id']))
        {
            return Slider::where('id' , $args['id'])->get();
        }
        else if(isset($args['nompage']))
        {
            return Slider::where('nompage', $args['nompage'])->get();
        }

        else if(isset($args['image']))
        {
            return Slider::where('image', $args['image'])->get();
        }
        else if(isset($args['created_at']))
        {
            return Slider::where('created_at', $args['created_at'])->get();
        }
        else if(isset($args['updated_at']))
        {
            return Slider::where('updated_at', $args['updated_at'])->get();
        }
        else
        {
            return Slider::get()->toArray();
        }
    }

}