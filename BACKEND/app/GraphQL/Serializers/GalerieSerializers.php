<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Evenement;
use App\Galerie;


class GalerieSerializers extends AbstractSerializer
{

    public function toArray($galerie): array
    {
        return
        [
            'id' => $galerie->id,
            'texte' => $galerie->texte,
            'fichier' => $galerie->fichier,
            'evenement' => EvenementSerializer::collection($galerie->hasevenement->where('id',$galerie->evenement)->get()),
            'created_at' => $galerie->created_at,
            'updated_at' => $galerie->updated_at
        ];
    }
}