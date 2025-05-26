<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    while($nome == $senha){
         echo "<script>
        alert('Erro');
        window.location.href = 'index.html';
        </script>";
    exit;
    }

    echo "Logado com Sucesso";

?>
