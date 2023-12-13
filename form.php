<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.css" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Authentification</h1>
    <?php if(isset($_SESSION['msg'])) : ?>
        <div class="alert alert-danger"><?= $_SESSION['msg']?></div>
    <?php endif; ?>
    <form method="post" action="auth.php">
  <div class="mb-3">
    <label >Login</label>
    <input type="text" class="form-control" name="login" >
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="account.php" class="btn btn-success">S'inscrire</a>
</form>
</div>
</body>
</html>