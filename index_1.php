<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuario where id = 6
        ';

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

        echo $usuario->nome;
    } catch (PDOException $e) {
        echo 'Erro: '.$e->getCode();
        echo '<hr>';
        echo 'Mensagem: '.$e->getMessage();
    }

    
?>