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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;                
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label> 
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">           
            <input type="submit" value="Qual será minha idade?">                                
        </form>            
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            //Cálculos
            $id = $ano - $nasc;        
        ?>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$id?> anos</strong> em <?=$atual?>!</p>    
            
    </section>   
    
</body>
</html>