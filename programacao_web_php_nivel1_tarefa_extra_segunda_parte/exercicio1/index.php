<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form align="center" method="POST">
        <tr>
            <td><input type="number" name="lebron" placeholder="Pontos Lebron">        
        </tr>
        <div><br></div>
        <tr>
            <td>Selecione uma das opções</td>
        </tr>
        <div><br></div>
        <tr>
            <td><input type="submit" name="diferenca" value="Diferença de pontos"></td>
            <td><input type="submit" name="jogos" value="Quantidade de jogos"></td>
        </tr>
        <div><br></div>
        <tr>
            <td><?php

            if(isset($_POST["diferenca"]) || isset($_POST["jogos"])){
                if($_POST["lebron"] != ""){

                    $abdul = 38387;

                    $lebron = $_POST["lebron"];

                    if($abdul>$lebron){
                        $diferenca = $abdul - $lebron;
                    }

                    if($lebron>$abdul){
                        $diferenca = $lebron - $abdul;
                    }


                    $jogos = number_format($diferenca/30, 2);

                    if(isset($_POST["diferenca"])){

                        echo "<br> Diferença de pontos: ".$diferenca;

                    }elseif(isset($_POST["jogos"])){

                        if($abdul>$lebron){
                            echo "<br> Número de jogos para o Lebron cestinha: ".$jogos;
                        }else{
                            echo "<br> Já passou.";
                        }
                    }

                }else{
                    ?>
                        <script>
                            window.location.href = "index.php";
                            alert("Preencha o campo lebron de forma correta")
                        </script>
                    <?php

                }

            }
            ?></td>
        </tr>
    </form>
</body>
</html>




