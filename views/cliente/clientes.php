<h2 class="center">Clientes</h2>
<table>
	<thead>
		<tr>
			<th>Identificador</th>
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
		<?php foreach ($arrayClientes as $item): ?>
			<tr>
				<td><?=$item["id_cliente"] ?></td>
				<td><?=$item["nome"] ?></td>
				<td><?=$item["password"] ?></td>
				<td><?=$item["sexo"] ?></td>
				<td><?=$item["escolhas"] ?></td>
				<td><?=$item["selecao"] ?></td>
				<td><?=$item["opcao"] ?></td>
				<td><?=$item["textArea"] ?></td>
		<?php endforeach; ?>
	</tbody>
</table>