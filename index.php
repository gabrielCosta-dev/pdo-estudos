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
        $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo '<pre>';
        print_r($lista);
        echo '</pre>';

        echo $lista[2]->email;
    } catch (PDOException $e) {
        echo 'Erro: '.$e->getCode();
        echo '<hr>';
        echo 'Mensagem: '.$e->getMessage();
    }

    
?>