<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com número aleatórios</h1>
        <p>
            <?php 
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);      
                echo "Gerando um número aleatório entre $min e $max... \n";
                echo "<br>O número gerado foi <strong>$num</strong>"; 
                
            ?>            
        </p>
        <button onclick="javascript:location.reload()">&#x1F503;Gerar Outro</button>
    </main>    
</body>
</html>