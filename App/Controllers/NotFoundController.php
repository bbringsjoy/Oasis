<?php
namespace App\Controllers;

class NotFoundController implements Controller
{
    public function render(): void
    {
        $page = 'notFound.phtml';
        include __DIR__ . '/../../View//main.phtml';
    }
}

?>