<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interagindo com Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>
            <?php 
                $num = $_GET["num"] ?? 0;                
                echo"Analisando o número <strong>". number_format($num, 3, ",",".") . "</strong> informado pelo usuário"; 

                $int = (int) $num;
                $fra = $num - $int;

                echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0,",", ".") ."</strong></li>";
                echo "<li> A parte fracionada do número é <strong>" . number_format($fra, 3,",", ".") ."</strong></li>"
                                       
            ?>
        </p>   
        
        <button onclick= javascript:history.go(-1)>Voltar</button>   
    </main>
</body>
</html>