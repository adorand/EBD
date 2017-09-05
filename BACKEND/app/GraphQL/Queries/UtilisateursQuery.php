<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\GraphQL\Serializers\MessageSerializer;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Utilisateur;
use Illuminate\Support\Collection;

class UtilisateursQuery extends Query
{


    public function type()
    {
        return Type::listOf(GraphQL::type('Utilisateur'));
    }


    public function args()
    {

        return
            [
                'id'            => ['name' => 'id', 'type' => Type::id()],
                'nomcomplet'    => ['name' => 'nomcomplet', 'type' => Type::string()],
                'login'         => ['name' => 'login', 'type' => Type::string()],
                'password'      => ['name' => 'password', 'type' => Type::string()],
                'phone'         => ['name' => 'phone', 'type' => Type::string()],
                'droits'        => ['name' => 'droits', 'type' => Type::string()],
                'photo'         => ['name' => 'photo', 'type' => Type::string()],
                'created_at'    => ['name' => 'created_at', 'type' => Type::string()],
                'updated_at'    => ['name' => 'updated_at', 'type' => Type::string()]
            ];
    }

    public function resolve($root, array $args = [])
    {
        if(isset($args['id']))
        {
            return Utilisateur::where('id' , $args['id'])->get();
        }
        else if(isset($args['nomcomplet']))
        {
            return Utilisateur::where('nomcomplet', $args['nomcomplet'])->get();
        }
        else if(isset($args['created_at']))
        {
            return Utilisateur::where('created_at', $args['created_at'])->get();
        }
        else if(isset($args['updated_at']))
        {
            return Utilisateur::where('updated_at', $args['updated_at'])->get();
        }
        else
        {
            return Utilisateur::get()->toArray();
        }
    }


}