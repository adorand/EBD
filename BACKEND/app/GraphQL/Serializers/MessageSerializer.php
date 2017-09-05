<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Message;

/**
 * Class MessageSerializers
 * @package App\GraphQL\Serializers
 */
class MessageSerializer extends AbstractSerializer
{
    /**
     * @param $Message
     * @return array
     */
    public function toArray($message): array
    {
        return
        [
            'id' => $message->id,
            'theme' => $message->theme,
            'auteur' => AuteurSerializer::collection($message->hasauteur->where('id',$message->auteur)->get()),
            'fichier' => $message->fichier,
            'created_at' => $message->created_at,
            'update_at' => $message->created_at
        ];
    }
}