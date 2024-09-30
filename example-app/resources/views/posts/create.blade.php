<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>
    <h1>create post</h1>
    <form action="/posts" method="post">
        @csrf
        <input type="text"name ="author"> 
        Title: <input type="text" name ="title">
        Content: <textarea name ="content"id=></textarea>
        <input type ="submit" value = "save">

    </form>
    
</body>
</html>