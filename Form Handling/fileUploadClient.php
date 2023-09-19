<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <h1>Form Handling without="enctype/form" data will not to be upload. And Method must be {post}.</h1>
    <form action="fileUploadServer.php" enctype="multipart/form-data" method="post">
        <input type="text" name="username" id="username" placeholder ="Enter your name" required>
        <input type="file" name="upfile" id="images" required><br>
        <input type="submit" value="Upload">

    </form>
</body>

</html>