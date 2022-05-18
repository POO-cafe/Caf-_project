<?php

require_once 'Database.php';

class CoffeRepository extends Database {

    public function selectAll ()
    {
        $query = $this->getDb()->query('SELECT * FROM cafes');
        $allCoffees = $query->fetchAll();
        
    }
}