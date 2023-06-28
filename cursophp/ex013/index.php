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
        $sal = $_GET['sal'] ?? 0;
        $salm = 1_320.00;        
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" min="1" value="<?=$sal?>"step="0.01"> 
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salm, 2, ",",".")?></strong></p>           
            <input type="submit" value="Cálcular">                                
        </form>            
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            //Cálculos
            $quociente = intdiv($sal, $salm);
            $resto = $sal % $salm; 
            echo "<p>Quem recebe um salário de R\$ " . number_format($sal, 2, ",", ".") . " ganha <strong>$quociente salários minimos</strong> + R\$ ". number_format($resto, 2, ",", ".") ." ";       
        ?>        
    </section>
</body>
</html>