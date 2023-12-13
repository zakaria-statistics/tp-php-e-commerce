<?php

$id = $_GET['idd'];


$pdo = new PDO(
    "mysql:host=localhost;dbname=dbcc",
    "root",
    ""
);

$sql = "SELECT * FROM users WHERE id=$id";

$stmt = $pdo->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <h1>User update</h1>
    <form method="post" enctype="multipart/form-data" action="update.php">
  <div class="mb-3">
  <input type="hidden" class="form-control" name="idd"  value="<?=$id?>">
    <label >Login</label>
    <input type="text" class="form-control" name="login" value="<?=$row['login']?>">
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="text" class="form-control" name="password" value="<?=$row['password']?>">
    
    <div class="mb-3 form-check">
    <div> <img src="<?= $row['photo']?>" style="width:100px" />
       </div>
       <input type="hidden" name="img" value="<?= $row['photo']?>" />
    <input type="file" class="form-input" name="photo" >
  </div>
  
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</body>
</html>