<h1>Carreras</h1>
<hr />
<a href="?c=Carreras&a=Crud">Nuevo Carreras</a>
<table>
<thead>
<tr>
<th>Codigo de Carrera</th>
<th>Nombre de la Carrera</th>
<th>Abreviacion de la Carrera</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r): ?>
<tr>
<td><?php echo $r->carrera_codigo; ?></td>
<td><?php echo $r->carrera_nombre; ?></td>
<td><?php echo $r->carrera_abreviacion; ?></td>
<td>
<a href="?c=Carreras&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
</td>
<td>
<a onclick="javascript:return confirm('¿Seguro de eliminar este
registro?');" href="?c=Carreras&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
