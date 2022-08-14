<?php

var_dump($_POST);

if(isset($_POST)){
    if(!empty($_POST)){
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = $_POST['nome'];
            echo $nome;
        }else{
            echo "Infelizmentenão temos opções hoje!";
        }
    }else{
        echo "Campos vazios";
    }
}else{
    echo "Erro";
}