<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\GraphQL\Serializers\MessageSerializer;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Message;
use Illuminate\Support\Collection;

class MessagesQuery extends Query
{

    /**
     * @return GraphQL\Type\Definition\ListOfType
     */
    public function type()
    {
        return Type::listOf(GraphQL::type('Message'));
    }

    /**
     * @return array
     */
    public function args()
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::id()],
            'theme' => ['name' => 'theme', 'type' => Type::string()],
            'auteur' => ['name' => 'auteur', 'type' => Type::listOf(GraphQL::type('Auteur'))],
            'fichier' => ['name' => 'fichier', 'type' => Type::string()],
            'created_at' => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at' => ['name' => 'updated_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, array $args = [])
    {

        $query=Message::with('group');
        return $query->get()->map(function(Message $message)
        {
            return [
                'id' => $message->id,
                'theme' => $message->theme,
                'auteur' => [ $message->hasauteur ],
                'fichier' => $message->fichier,
                'created_at' => $message->created_at,
                'update_at' => $message->created_at
            ];
        })->toArray();
    }


}