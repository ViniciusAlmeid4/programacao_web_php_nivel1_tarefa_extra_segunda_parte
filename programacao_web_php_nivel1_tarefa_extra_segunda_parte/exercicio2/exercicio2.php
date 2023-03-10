<?php

if(isset($_POST["enviar"])){

    if($_POST["altura"] == "" || $_POST["peso"] == ""){
        ?>
            <script>
                window.location.href = "index.php";
                alert("Preencha os valores de forma correta");
            </script>
        <?php
    }else{

        $altura = $_POST["altura"];
        $peso = $_POST["peso"];

        $imc = $peso/$altura**2;

        if($imc<18.5){
            echo "<br> Abaixo do peso";
        }elseif($imc>=18.5 && $imc<25){
            echo "<br> Peso saúdavel";
        }elseif($imc>=25 && $imc<=30){
            echo "<br> Sobrepeso";
        }elseif($imc>30 && $imc<40){
            echo "<br> Obeso";
        }elseif($imc>=40){
            echo "<br> Obeso morbido";
        }
    }
}