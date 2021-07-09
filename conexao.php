<?php

    if(isset($_GET['id'])):

            #Conexao Com O Banco;;
        $banco = "teste_empresa";
        $localhost = "localhost";
        $usuario = "root";
        $senha = "";

        try{
            $pdo = new PDO("mysql:dbname=".$banco.";host=".$localhost,$usuario,$senha,array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
                    
        }catch(PDOException $e){
            echo "Erro Com Banco De Dados.. Erro: ".$e->getMessage();
        }

    #Selecionar o Registro Pelo ID;;
        $id = $_GET['id'];
        $select = $pdo->prepare("SELECT * FROM registros WHERE id = :id");
        $select->bindParam(":id",$id);
        $select->execute();
    else:
        header ('Location:index.php');
    endif;
?>