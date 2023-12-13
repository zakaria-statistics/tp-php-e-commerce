<?php
    include "auth.inc.php";
    if(!isset($_SESSION['panier']))
        $_SESSION['panier'] = [];
    unset($_SESSION["msg"]);
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
    <h1>E-commerce
        <a href="logout.php" style="float:right" class="btn btn-warning">Logout <b><i><?=$_SESSION['auth']['login']?></i></b></a>
    </h1>
    <hr>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>DESC</th>
            <th>QTE</th>
            <th>ADD</th>
        </tr>
        <tr>
            <td>A</td>
            <td>AAAA</td>
            <td><input class="form-control" id="A" type="number" value="1"></td>
            <td><a class="btn btn-success" onclick="add('A')"> + </a></td>
        </tr>
        <tr>
            <td>B</td>
            <td>BBBB</td>
            <td><input class="form-control" id="B" type="number" value="1"></td>
            <td><a class="btn btn-success" onclick="add('B')"> + </a></td>
        </tr>
        <tr>
            <td>C</td>
            <td>CCCC</td>
            <td><input class="form-control" id="C" type="number" value="1"></td>
            <td><a class="btn btn-success" onclick="add('C')"> + </a></td>
        </tr>
        <tr>
            <td>D</td>
            <td>DDDD</td>
            <td><input class="form-control" id="D" type="number" value="1"></td>
            <td><a class="btn btn-success" onclick="add('D')"> + </a></td>
        </tr>
    </table>
    </div>
    <script>
        function add(id){
            const qte = document.querySelector('#' + id).value
            location.href = "add.php?id=" + id + "&qte=" + qte;
        }
    </script>
    <hr>
    <pre>
        <?php
            print_r($_SESSION);
        ?>
    </pre>
</body>
</html>