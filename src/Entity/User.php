<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Représente un utilisateur de la base de données
 */
class User
{
    public int $id;

    public string $email;

    public string $password;

    public string $firstname;

    public string $lastname;

    public string $role;

    public string $profilePicture;

    public string $createdAt;

    public string $updatedAt;
}
