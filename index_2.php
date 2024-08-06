<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuario
        ';

        $stmt = $conexao->query($query);
        foreach ($stmt as $indice => $valor) {
           print_r($valor['nome']);
           echo '<hr>';
        }

        #$lista = $stmt->fetchAll(PDO::FETCH_OBJ);

        #echo '<pre>';
        #print_r($lista);
        #echo '</pre>';

        /* foreach($lista as $chave => $valor){
            echo '<pre>';
            print_r($valor->nome);
            echo '</pre>';
        } */
    } catch (PDOException $e) {
        echo 'Erro: '.$e->getCode();
        echo '<hr>';
        echo 'Mensagem: '.$e->getMessage();
    }

    
?>