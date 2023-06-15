<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Aqui você pode adicionar lógica adicional, se necessário

        // Renderiza a visualização 'hello.twig'
        return view('hello.twig');
    }
}
