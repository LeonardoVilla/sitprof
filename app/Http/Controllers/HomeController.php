<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = [
            ['titulo' => 'Programação Web', 'descricao' => 'HTML, CSS, JS e frameworks modernos'],
            ['titulo' => 'Banco de Dados', 'descricao' => 'SQL, NoSQL e modelagem de dados'],
            ['titulo' => 'Inteligência Artificial', 'descricao' => 'Machine Learning e Python'],
        ];

        // se você quer conteúdo extra (posts) separado
        $posts = [
            ['titulo' => 'Post 1', 'resumo' => 'Resumo do post 1'],
            ['titulo' => 'Post 2', 'resumo' => 'Resumo do post 2'],
            ['titulo' => 'Post 3', 'resumo' => 'Resumo do post 3'],
        ];

        $bio = 'Olá! Sou o Prof. João da Silva, ministro aulas de tecnologia na graduação e compartilho conteúdos para alunos de TI.';

        $foto = 'https://avatars.githubusercontent.com/u/6941080?v=4';

        return view('home', compact('cursos', 'posts', 'bio', 'foto'));
    }
}
