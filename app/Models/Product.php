<?php
namespace App\Models;

class Product extends Model
{
    private $table = 'goods';


    public function getLatestProducts($columns = '*')
    {
        if (is_array($columns)) {
            $columns = implode(',', $columns);
        }
        return $this->pdo->query("SELECT {$columns} FROM {$this->table} "
        . "WHERE status = '1' ORDER BY id DESC LIMIT 6");
    }

    public function getRecommendedProducts($columns = '*')
    {
        if (is_array($columns)) {
            $columns = implode(',', $columns);
        }
        return $this->pdo->query("SELECT {$columns} FROM {$this->table} "
            . "WHERE status = '1' AND is_recomented = '1' ORDER BY id DESC LIMIT 6");
    }
}