<?php declare(strict_types=1);


namespace App\GraphQL\Mutations;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Message;
use Ramsey\Uuid\Uuid;

class MessageUpdate extends Mutation {

    protected $attributes = ['name' => 'Message_update'];

    public function type()
    {
        return GraphQL::type('Message');
    }

    public function args()
    {
        return
        [
            'id' =>['name' => 'id', 'type' => Type::id()],
            'theme' =>['name' => 'nom', 'type' => Type::string()],
            'auteur' =>['name' => 'type', 'type' => Type::string()],
            'fichier' =>['name' => 'fichier', 'type' => Type::string()],
        ];
    }

    public function resolve($root, $args)
    {
        $message = Message::find($args['id']);
        if(!$message)
        {
            $message=new Message();
            $message->id=Uuid::generate();

        }
        $message->theme = $args['theme'];
        $message->auteur = $args['auteur'];
        $message->fichier = $args['fichier'];
        $message->save();
        return $message;
    }

}