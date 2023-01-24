<h1>Gestion de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
	Crear producto
</a>

<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Stock</th>
	</tr>
	<?php while($prod = $productos->fetch_object()): ?>
		<tr>
			<td><?= $prod->id ?></td>
			<td><?= $prod->nombre ?></td>
			<td><?= $prod->precio ?></td>
			<td><?= $prod->stock ?></td>
		</tr>
	<?php endwhile; ?>

</table>