<?php 
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);
            $query = "
                select * from tb_usuario where email = '{$_POST['usuario']}' AND senha = '{$_POST['senha']}'
            ";

            echo $query;
            #$stmt = $conexao->query($query);
            #$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            echo '<pre>';
            #print_r($usuario);
            echo '</pre>';
        } catch (PDOException $e) {
            echo 'Erro: '.$e->getCode();
            echo '<hr>';
            echo 'Mensagem: '.$e->getMessage();
        } 
    }
?>

<html>
    <head>
        <meta content="text/html;charset=UTF-8">
        <title>Login</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <input type="text" name="usuario" id="" placeholder="Usuário">
            <input type="password" name="senha" id="" placeholder="Senha">

            <button type="submit">Entrar</button>
        </form>
    </body>
</html>