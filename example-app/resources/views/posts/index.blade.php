<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Posts</h1>
    <ul>
        @foreach ($allposts as $post)
            <li>
                Author: {{$post->Author}},
                Title: {{$post->Title}},
                Content: {{$post->Content}}
                <a href="/posts/{{$post ->id}}">Show</a>
            </li>
        @endforeach

</ul>
</body>
</html>