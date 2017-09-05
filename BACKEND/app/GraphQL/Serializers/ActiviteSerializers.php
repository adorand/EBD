<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Activite;


class ActiviteSerializers extends AbstractSerializer
{

    public function toArray($activite): array
    {
        return
        [
            'id' => $activite->id,
            'titre' => $activite->titre,
            'texte' => $activite->texte,
            'fichier' => $activite->fichier,
            'dateact' => $activite->dateact,
            'categorie' => $activite->categorie,
            'created_at' => $activite->created_at,
            'updated_at' => $activite->updated_at
        ];
    }
}