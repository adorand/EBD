<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Pensee;

/**
 * Class PenseeSerializers
 * @package App\GraphQL\Serializers
 */
class PenseeSerializers extends AbstractSerializer
{
    /**
     * @param $pensee
     * @return array
     */
    public function toArray($pensee): array
    {
        return
        [
            'id' => $pensee->id,
            'datepassage' => $pensee->datepassage,
            'theme' => $pensee->theme,
            'texte' => $pensee->texte,
            'auteur' => AuteurSerializer::collection($pensee->hasauteur->where('id',$pensee->auteur)->get()),
            'image' => $pensee->image,
            'created_at' => $pensee->created_at,
            'updated_at' => $pensee->updated_at
        ];
    }
}