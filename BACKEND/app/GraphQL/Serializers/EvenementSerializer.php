<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Galerie;


class EvenementSerializer extends AbstractSerializer
{

    public function toArray($evenement): array
    {
        return
        [
            'id'           => (int) $evenement->id,
            'titre'        => $evenement->titre,
            'description'  => $evenement->description,
            'created_at'   => $evenement->created_at,
            'updated_at'   => $evenement->updated_at
        ];
    }
}