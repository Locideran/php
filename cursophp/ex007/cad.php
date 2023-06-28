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
        <h1>Conversor de Moedas</h1>
        <p>
            <?php 
                $cot = 4.89;
                $num = $_GET ["num"] ?? 0;
                $val = $num / $cot;
                         
                $pd = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Seus " . numfmt_format_currency($pd, $num, "BRL") . " equivalem a " . numfmt_format_currency($pd, $val,"USD");           
            ?>
        </p>     
        <button onclick= javascript:history.go(-1)>Voltar</button>   
    </main>
</body>
</html>