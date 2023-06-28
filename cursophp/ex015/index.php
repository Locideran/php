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
        $val1 = $_GET['val1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0; 
        $val2 = $_GET['val2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;             
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">1º Valor</label>
            <input type="number" name="val1" id="val1" value="<?=$val1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="val2">2º Valor</label> 
            <input type="number" name="val2" id="2" value="<?=$val2?>">
            <label for="peso2">2º Peso</label> 
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">          
            <input type="submit" value="Calcular Médias">                                
        </form>            
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php             
            $ma = ($val1 + $val2) / 2;
                                
            $pond = ($val1*$peso1 + $val2*$peso2)/($peso1+$peso2);             
            
        ?>     
        <p>Analisando os valores <?=$val1?> e <?=$val2?> :</p>
        <ul>
            <li>
            A <strong>Média Aritimética Simples </strong>entre os valores é igual a <?=number_format($ma, 2, ",",".")?>.</li>
            <li>A <strong>Média Aritimética Ponderada </strong>com pesos <?=$peso1?> e <?=$peso2?> <?=number_format($pond, 2, ",",".")?>.</li>
        </ul>       
    </section>   
    
</body>
</html>