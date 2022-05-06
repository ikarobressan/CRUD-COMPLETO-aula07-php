<?php

include("conexao.php"); //heranca da criação de banco

$consulta = $banco->prepare("select * from pessoas");
$consulta->execute(); //todas as linhas da minha tabela
$linha = $consulta->fetchAll(PDO::FETCH_OBJ); //ta fatiando tudo


foreach($linha as $func){ //a cada linha, ele percorre o banco de dados (a partir doq vc fatiou)
    $id = $func->id;
    $nome = $func->nome;
    $email = $func->email;
  
?>

    <p><?php echo $nome?> </p>
    <p><?php echo $email?> </p>
    <button><a href="editar.php?id=<?php echo $id?>"> Editar </a></button>
    <button><a href="excluir.php?id=<?php echo $id?>"> Excluir </a></button>

<?php
}
?>













