<?php


namespace App\Models;


class Category extends Model
{
    private $table = 'categories';

    public function getCategoryList($columns = 'name_category')
    {
        if (is_array($columns)) {
            $columns = implode(',', $columns);
        }
        return $this->pdo->query("SELECT  {$columns} FROM {$this->table} WHERE status = '1' ORDER BY sort_order");
    }
}