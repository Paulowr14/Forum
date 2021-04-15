<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
   posts 
   <br>
   <br>
   <a href="/post/create" class="btn btn-dark mb-2">Create a new post</a>


   @foreach ($posts as $post)
    <p>This is post {{ $post->title }}</p>
@endforeach
<a href="/post/show" class="btn btn-dark mb-2">Visualize</a>

</body>
</html>