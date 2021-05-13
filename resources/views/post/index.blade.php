<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <div class="container">

    <div class="jumbotron">
            <h1>Posts</h1>
    </div>

    <a href="/post/create" class="btn btn-dark mb-2">Create a new post</a>


    <ul class="list-group">
        @foreach ($posts as $post)
        <p><li class="list-group-item">This is post {{ $post->title }}</li></p>
        @endforeach
    </ul>

    <a href="/post/show" class="btn btn-dark mb-2">Visualize</a>
    </div>
</body>
</html>