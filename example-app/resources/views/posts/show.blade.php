<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single post view</title>
</head>
<body>
    <h1>
        Post: {{$singlepost->id}}
    </h1>
    <div class ="post_container">
        <p> {{$singlepost->Author}}</p>
        <p> {{$singlepost->Title}}</p>
        <p> {{$singlepost->Content}}</p>
</div>
</body>
</html>