<?php

    include('conexao.php');

    $id = $_GET['id'];

    $consulta = $banco->prepare("select * from pessoas where id=?");
    $consulta->execute(array($id)); //todas as linhas da minha tabela
    $linha = $consulta->fetchAll(PDO::FETCH_OBJ); //ta fatiando tudo

    foreach($linha as $func){ //a cada linha, ele percorre o banco de dados (a partir doq vc fatiou)
        $id = $func->id;
        $nome = $func->nome;
        $email = $func->email;    

?>

<div>
        <form method="post" action="atualizar.php">
            <div>
                <label>
                    Nome
                </label>
                <input type="text" name="nome" value="<?php echo $nome?>">
            </div> <br>
            <div>
                <label>
                    E-mail
                </label>
                <input type="text" name="email" value="<?php echo $email?>">
            </div>
            <div><br><br>
                <button type="submit">
                    Enviar
                </button><br>
                <input type="number" name="id" value="<?php echo $id?>" style="display: none">
            </div>
        </form>
    </div>
    <div>
        <button>
            <a href="consulta.php">Consulta</a>
        </button>
    </div>

<?php }

?>