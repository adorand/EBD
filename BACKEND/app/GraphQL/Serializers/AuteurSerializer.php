<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Auteur;
use App\Pensee;
use Illuminate\Database\Eloquent\Model;


class AuteurSerializer extends AbstractSerializer
{

    public function toArray($auteur): array
    {
        return [
            'id'           => (int) $auteur->id,
            'nom'          => $auteur->nom,
            'created_at'   => $auteur->created_at,
            'updated_at'   => $auteur->updated_at,
//            'pensees' => PenseeSerializers::collection(Pensee::get()[0])
        ];
    }
}