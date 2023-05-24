<h1>Materias</h1>
<hr />
<a href="?c=Materias&a=Crud">Nuevo Materias</a>
<table>
<thead>
<tr>
<th>Nombre de la Materia</th>
<th>Hora Academica</th>
<th>Tipo</th>
<th>Pensum</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r): ?>
<tr>
<td><?php echo $r->materia_nombre; ?></td>
<td><?php echo $r->hora_academica; ?></td>
<td><?php echo $r->tipo; ?></td>
<td><?php echo $r->pensum; ?></td>
<td>
<a href="?c=Materias&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
</td>
<td>
<a onclick="javascript:return confirm('¿Seguro de eliminar este
registro?');" href="?c=Materias&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
