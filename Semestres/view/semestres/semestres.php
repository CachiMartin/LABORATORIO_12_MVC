<h1>Semestres</h1>
<hr />
<a href="?c=Semestres&a=Crud">Nuevo Semestres</a>
<table>
<thead>
<tr>
<th>Semestre numeral</th>
<th>Semestre Literal</th>

<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r): ?>
<tr>
<td><?php echo $r->semestre_numeral; ?></td>
<td><?php echo $r->semestre_literal; ?></td>

<td>
<a href="?c=Semestres&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
</td>
<td>
<a onclick="javascript:return confirm('¿Seguro de eliminar este
registro?');" href="?c=Semestres&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
