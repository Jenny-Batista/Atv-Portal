<?php

namespace App\Models;

use Core\DataBase;

class noticia {

    private $table = 'esporte';

    public function getAll() {
        $db = Database::getInstance();
        $dados - $db->getList($this->table,'*');
        return $db->getList($this->table,'*');
    }
    public function getByTituloUrl($tituloUrl) {
        $db = Database::getInstance();
        
        return $db->getList($this->table, '*', ['titulo_url' -> "'" . $tituloUrl . "'" ]);
    }
}    