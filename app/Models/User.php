<?php

namespace App\Models;

class User extends Model
{
    private $table = 'categories';

    public function getAllUsers($columns = '*')
    {
        if (is_array($columns)) {
            $columns = implode(',', $columns);
        }
        return $this->pdo->query("SELECT {$columns} FROM {$this->table}");
    }
}
