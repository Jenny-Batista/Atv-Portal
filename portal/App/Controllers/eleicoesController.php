<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\noticia;

class eleicoesController extends Controller {
    
    public function index() {
        //$clients = Clients::getAll();
        //$this->view('clients', ['clients' -> $clients]);
    }
    
    public function eleiçoes($titulo) {
        $noticiaModel = new noticia();
        $noticia = $noticiaModel->getByTituloUrl($titulo);

        $this->view('eleiçoes', ['noticia' -> $noticia]);
    }
}