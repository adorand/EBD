<?php declare(strict_types=1);

namespace App\GraphQL\Serializers;
use App\Utilisateur;


class UtilisateurSerializer extends AbstractSerializer
{

    public function toArray($utilisateur): array
    {
        return
        [
            'id' => $utilisateur->id,
            'nomcomplet' => $utilisateur->nomcomplet,
            'login' => $utilisateur->login,
            'password' => $utilisateur->password,
            'phone' => $utilisateur->phone,
            'droits' => $utilisateur->droits,
            'photo' => $utilisateur->photo,
            'created_at' => $utilisateur->created_at,
            'update_at' => $utilisateur->created_at
        ];
    }
}