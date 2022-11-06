<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOStatement;

/**
 * Représente une base de données
 */
class Database
{
    protected PDO $pdo;

    protected Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->pdo = new PDO(
            "mysql:host={$this->config->get('DATABASE_HOST')};dbname={$this->config->get('DATABASE_NAME')};port={$this->config->get('DATABASE_PORT')}",
            $this->config->get('DATABASE_USER'),
            $this->config->get('DATABASE_PASSWORD'),
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Éxécute un requête à la base de données
     * sans retourner de résultats
     */
    public function execute(string $request, array $parameters = []): bool
    {
        $request = $this->prepare($request, $parameters);

        return $request->execute();
    }

    /**
     * Éxécute une requête à la base de données
     * et retourne un seul résultat sous forme
     * de model
     */
    public function fetch(string $request, array $parameters = [], ?string $model = null): mixed
    {
        $request = $this->pdo->prepare($request, $parameters);

        if ($model) {
            $request->setFetchMode(PDO::FETCH_CLASS, $model);
        } else {
            $request->setFetchMode(PDO::FETCH_ASSOC);
        }

        $request->execute();

        return $request->fetch();
    }

    /**
     * Éxécute une requête à la base de données
     * et retourne plusieurs résultats sous forme
     * de tableaux
     */
    public function fetchAll(string $request, array $parameters = [], ?string $model = null): array
    {
        $request = $this->pdo->prepare($request, $parameters);

        if ($model) {
            $request->setFetchMode(PDO::FETCH_CLASS, $model);
        } else {
            $request->setFetchMode(PDO::FETCH_ASSOC);
        }

        $request->execute();

        return $request->fetchAll();
    }

    /**
     * Prépare une requête PDO
     */
    protected function prepare(string $request, array $parameters = []): PDOStatement
    {
        $request = $this->pdo->prepare($request);

        foreach ($parameters as $key => $value) {
            $type = PDO::PARAM_STR;

            if (is_bool($value)) {
                $type = PDO::PARAM_BOOL;
            }

            if (is_float($value) || is_int($value)) {
                $type = PDO::PARAM_INT;
            }

            $request->bindParam($key, $value, $type);
        }

        return $request;
    }
}
