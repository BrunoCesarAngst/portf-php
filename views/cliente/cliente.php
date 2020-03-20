<?php
  $nome = ( isset($_POST['nome']) ) ? $_POST['nome'] : null;
  $pass = ( isset($_POST['pass']) ) ? $_POST['pass'] : null;
  $rdSexo = ( isset($_POST['rdSexo']) ) ? $_POST['rdSexo'] : null;
  $escolha1 = ( isset($_POST['escolha1']) ) ? $_POST['escolha1'] : null;
  $escolha2 = ( isset($_POST['escolha2']) ) ? $_POST['escolha2'] : null;
  $escolha3 = ( isset($_POST['escolha3']) ) ? $_POST['escolha3'] : null;
  $selecao = isset($_POST['selecao']) ? $_POST['selecao'] : null;
  $opcao = isset($_POST['opcao']) ? $_POST['opcao'] : null;
  $textArea = ( isset($_POST['textArea']) ) ? $_POST['textArea'] : null;
?>

<h2 class="center">Cliente</h2>

<table class="table table-striped table-inverse table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>Nome</th>
      <th>Senha</th>
      <th>Sexo</th>
      <th>Escolha</th>
      <th>Seleção</th>
      <th>Opção</th>
      <th>Texto</th>
    </tr>
  </thead>
    <tbody>
      <tr>
        <td scope="row"><?php echo $nome?></td>
        <td><?php echo $pass?></td>
        <td><?php echo $rdSexo?></td>
        <td><?php echo $escolha1." ".$escolha2." ".$escolha3?></td>
        <td><?php echo $selecao?></td>
        <td><?php echo $opcao?></td>
        <td><?php echo $textArea?></td>
      </tr>
    </tbody>
</table>
