<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>    
    <main>
    <h1>Resultado Final</h1>
    <p>
    <?php 
            $num = $_GET ["num"] ?? 0;
            echo "O número escolhido foi <strong>$num</strong>";            
            echo "<br> O seu antecessor é ". ($num - 1) ." ";
            echo "<br> O seu sucessor é ". ($num + 1) ." "              
        ?>
    </p>       
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>        
    </main>
</body>
</html>