<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Actualite;


class ActualiteSerializers extends AbstractSerializer
{

    public function toArray($actualite): array
    {
        return
        [
            'id' => $actualite->id,
            'titre' => $actualite->titre,
            'texte' => $actualite->texte,
            'fichier' => $actualite->fichier,
            'dateact' => $actualite->dateact,
            'categorie' => $actualite->categorie,
            'created_at' => $actualite->created_at,
            'updated_at' => $actualite->updated_at
        ];
    }
}