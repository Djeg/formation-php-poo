<?php

namespace App\Table;

class PersonnageTable
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function enregistrer(array $data): void
    {
    }
}
