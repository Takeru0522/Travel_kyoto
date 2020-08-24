<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{

    protected $table = 'spots';

    public function findByTitle($data)
    {
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE name LIKE ?');
        $stmt->execute($data);
        $spots = $stmt->fetchAll();
        return $spots;
    }
}
