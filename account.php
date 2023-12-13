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
    <h1>Creer un compte</h1>
    <?php if(isset($_SESSION['msg'])) : ?>
        <div class="alert alert-danger"><?= $_SESSION['msg']?></div>
    <?php endif; ?>
<form method="post" action="create.php" onsubmit="return valider(this)">
  <div class="mb-3">
    <label >Login</label>
    <input type="text" class="form-control" name="login" >
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" id="p1" name="password">
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" id="p2">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  
</form>
</div>
<script>
    function valider(f){
        const p1 = document.querySelector('#p1').value;
        const p2 = document.querySelector('#p2').value;
        if(p1 == p2)
            return true;
        return false;
    }
</script>
</body>
</html>