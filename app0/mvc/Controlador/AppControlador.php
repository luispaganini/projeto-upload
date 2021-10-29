<?php
namespace Controlador;

class AppControlador extends Controlador {
    public function index() {
        $this->visao('inicial/index.php');
    }

    public function uploads() {
        $this->verificarLogado();
        $this->visao('inicial/list-page.php', [], 'navbar.php');
    }

    public function cadastro() {
        $this->visao('inicial/register-account.php', [], 'registro.php');
    }

    public function uploadFile() {
        $this->verificarLogado();
        $this->visao('inicial/upload-file.php', [], 'navbar.php');
    }
}
