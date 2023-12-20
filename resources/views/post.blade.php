<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->titulo }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="post card">
            <div class="card-body">
                <h1 class="card-title">{{ $post->titulo }}</h1>
                <p class="card-subtitle mb-2 text-muted">Autor: {{ $post->autor }}</p>
                <p class="card-subtitle mb-2 text-muted">Data de Publicação: {{ $post->data_publicacao }}</p>
                <p class="card-subtitle mb-2 text-muted">Categoria: {{ $post->categoria }}</p>
