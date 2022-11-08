<?php

declare(strict_types=1);

namespace App\Entity;

class User
{
    public int $id;

    public string $email;

    public string $lastname;

    public string $firstname;

    public string $password;

    public string $createdAt;

    public string $updatedAt;
}
