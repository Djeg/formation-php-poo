<?php

declare(strict_types=1);

namespace App\Model;

class User
{
    public int $id;

    public string $email;

    public string $password;

    public string $createdAt;

    public string $updatedAt;
}
