<h1>Docentes</h1>
<hr />
<a href="?c=docentes&a=Crud">Nuevo docentes</a>
<table>
<thead>
<tr>
<th>ci</th>
<th>Nombre del docente</th>
<th>fecha_nacimiento</th>
<th>Direccion</th>
<th>Celular</th>
</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r): ?>
<tr>
<td><?php echo $r->ci; ?></td>
<td><?php echo $r->nombres; ?></td>
<td><?php echo $r->fecha_nacimiento; ?></td>
<td><?php echo $r->direccion; ?></td>
<td><?php echo $r->celular; ?></td>
<td>
<a href="?c=docentes&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
</td>
<td>
<a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=docentes&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
