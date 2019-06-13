<?php

namespace App\Models;

abstract class Model
{
    /**
     * @var \PDO
     */
    public $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}
