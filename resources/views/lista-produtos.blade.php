<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Sistema Gerenciamento de Estoques</h1>
<table border="1px">
<a href="/produtos/criar">Criar um novo produto</a>
<thead>
	<tr>
		<th>#</th>
		<th>nome produto</th>
		<th>narca</th>
		<th>preço</th>
	</tr>
</thead>
<?php
		
	foreach ($produtos as $produto) {
	echo "
<tbody>
	<tr>
		<td>$produto[0]</td>
		<td>$produto[3]</td>
		<td>$produto[1]</td>
		<td>$produto[2]</td>
	</tr>
</tbody>
	";			
	}


?>

</table>
</body>
</html>