<?php 

$pdo = new PDO("mysql:host=localhost;dbname=dbcc",
                "root",
                ""
                );
$sql = "SELECT * FROM users";

$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>Users List</h1>
    <form method="post" enctype="multipart/form-data" action="add.php">
  <div class="mb-3">
    <label >Login</label>
    <input type="text" class="form-control" name="login" >
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="file" class="form-input" name="photo">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <hr>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>LOGIN</th>
            <th>PASSWORD</th>
            <th>PHOTO</th>
            <th></th>
            <th></th>
         
</tr>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['login'] ?></td>
            <td><?= $row['password'] ?></td>
            <td><img style="width:100px" src="<?= $row['photo'] ?>"></td>
            <td><a href="del.php?iddd=<?= $row['id'] ?>" class="btn btn-danger">X</a></td>
            <td><a href="edit.php?idd=<?= $row['id'] ?>" class="btn btn-warning">U</a></td>
        
    </tr>   

    <?php endforeach ?>
    </table>

    </div>
    
      <pre>
          <?php print_r($rows) ?>
      </pre>
</body>
</html>