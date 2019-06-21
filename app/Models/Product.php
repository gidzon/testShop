<?php


namespace App\Models;


class Product extends Model
{
    private $table = 'goods';


    public function getLatestProducts($columns = '*')
    {
//    $this->pdo->prepare('SELECT * FROM  goods WHERE status = "?" ORDER BY id DESC LIMIT 6');
        if (is_array($columns)) {
            $columns = implode(',', $columns);
        }
       return  $this->pdo->query("SELECT {$columns} FROM {$this->table} "
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

    public function getProductById($id,$columns = '*')
    {
        if (is_array($columns)) {
            $columns = implode(',', $columns);
        }
        return $this->pdo->query("SELECT {$columns} FROM {$this->table} "
            . "WHERE id = $id");



    }

    public function getRecommendedProduct($id, $columns = '*')
    {   if (is_array($columns)) {
        $columns = implode(',', $columns);
    }

      return  $this->pdo->query("SELECT{$columns}FROM{$this->table} WHERE status = '1' "
        . "AND is_recomented = '1' AND id = $id");
    }
}