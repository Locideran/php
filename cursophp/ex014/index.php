<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capturando os dados do Formulário Retroalimentado
        $num = $_GET['num'] ?? 0;                
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" min="0" value="<?=$num?>">            
            <input type="submit" value="Calcular Raízes">                                
        </form>            
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            //Cálculos
            $raizq = sqrt($num);        //modo de encontrar a raiz quadrada, também pode ser usado $num ** (1/2)
            $raizc = $num ** (1/3);     //modo de encontrar a raiz cúbica   
        ?>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p> 
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($raizq, 3,",",".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($raizc, 3,",",".")?></strong></li>
        </ul>       
    </section>   
    
</body>
</html>