<tr class="j_<?= $usuario->getId() ?>"> 
	
	<td><?= $usuario->getId() ?></td>
	<td><?= $usuario->getLogin() ?></td>
	<td><?php  
		if($usuario->getPerfil() == 'A'){
			echo  'Administrador';   
		} elseif($usuario->getPerfil() == 'U') {
			echo 'Usuário';
		} elseif ($usuario->getPerfil() == 'S') {
			echo 'Suporte';
		}   
		?></td>
	<td><?php 
			if ($usuario->getStatus() == '1') {
				echo "Ativo";
			} elseif ($usuario->getStatus() == '0') {
				echo "Desativado";
			}  
			?></td> 
	<td><a href="modulo=usuario&acao=editar&id=<?= $usuario->getId() ?>" class="j_editUsuario" data-target="#modal-cadastro" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a></td> 
</tr>