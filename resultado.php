<!-- <?php
    $velocidade = $_POST["velocidade"];  
    $velocidadeMedia = 60;
    $velocidadeReduza = 80;

    if ($velocidade == $velocidadeMedia):
        echo '<p style="color: green; font-size:42px;">Prossiga<p>';

    elseif ($velocidade == $velocidadeReduza):
        echo '<p style="color: yellow; font-size:42px">Reduza a velocidade<p>';
    elseif ($velocidade > $velocidadeReduza):
        echo '<p style="color: red; font-size:42px">Voce foi multado<p>';
    endif;    
?> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados Recebidos</title>
</head>
<body>
    <!-- div com nome da mesma classe do formulario para exdibir as informacoes no "mesmo" layout. xD--->
    <div class="formulario">
        <?php
            $velocidade = trim(@$_POST["velocidade"]) ;  
            $velocidadeMedia = 60;
            $velocidadeReduza = 80;

            if (empty($velocidade) or !is_numeric($velocidade)):
                echo '<p style="color: blue; font-size:48px;">Insira um numero valido!<p>';
            elseif ($velocidade <= $velocidadeMedia):
                echo '<p style="color: green; font-size:48px;">Prossiga<p>';

            elseif ($velocidade > $velocidadeMedia && $velocidade <= $velocidadeReduza):
                echo '<p style="color: yellow; font-size:48px">Reduza a velocidade<p>';
            elseif ($velocidade > $velocidadeReduza):
                echo '<p style="color: red; font-size:48px">Voce foi multado<p>';
            endif;    
        ?>
    </div>
</body>
</html>
