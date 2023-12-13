<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
<h1>Bonjour HTML</h1>
    
    <form action="save.php" method="post" enctype="multipart/form-data">
        <input type="text" name="login" placeholder="Login"> <br>
        <input type="password" name="pass" placeholder="Password"> <br>
        <input type="file" name="photo[]" multiple > <br>
        <button>Envoyer</button>
    </form>
</body>
</html>