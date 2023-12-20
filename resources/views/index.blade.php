<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogFicticio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">BlogFicticio</h1>
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ route('post1') }}" class="text-decoration-none">Título do Post 1</a></li>
            <li class="list-group-item"><a href="{{ route('post2') }}" class="text-decoration-none">Título do Post 2</a></li>
            <li class="list-group-item"><a href="{{ route('post3') }}" class="text-decoration-none">Título do Post 3</a></li>
        </ul>
    </div>
</body>
</html>
