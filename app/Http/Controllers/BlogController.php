<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }



    public function post1()
    {
        $post = new Post([
            'titulo' => 'Título do Post 1',
            'conteudo' => 'Conteúdo do Post 1',
            'autor' => 'Autor do Post 1',
            'data_publicacao' => now(),
            'categoria' => 'Categoria 1',
        ]);

        return view('post', compact('post'));
    }

    public function post2()
    {
        $post = new Post([
            'titulo' => 'Título do Post 2',
            'conteudo' => 'Conteúdo do Post 2',
            'autor' => 'Autor do Post 2',
            'data_publicacao' => now(),
            'categoria' => 'Categoria 2',
        ]);

        return view('post', compact('post'));
    }

    public function post3()
    {
        $post = new Post([
            'titulo' => 'Título do Post 3',
            'conteudo' => 'Conteúdo do Post 3',
            'autor' => 'Autor do Post 3',
            'data_publicacao' => now(),
            'categoria' => 'Categoria 3',
        ]);

        return view('post', compact('post'));
    }
}
