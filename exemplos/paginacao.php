<?php
    include "../settings/authdb.php";
    
    $result = $conn -> query("SELECT nome FROM contato ORDER BY nome LIMIT") -> fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXEMPLO DE PAGINAÇÃO DE INFORMAÇÕES DA DB QUE EU VI NO YT</h1>
</body>
</html>