<h1><?php echo $mat->id != null ? $mat->materia_nombre : 'Nuevo Registro'; ?></h1>
<ol>
<li><a href="?c=Materias">Materias</a></li>
<li><?php echo $mat->id != null ? $mat->materia_nombre : 'Nuevo Registro'; ?></li>
</ol>
<form action="?c=Materias&a=Guardar" method="post" enctype="multipart/form-data">
<input type="hidden" name="id-form" value="<?php echo $mat->id; ?>" />
<div>
<label>Nombre de la Materia</label>
<input type="text" name="materia_nombre-form" value="<?php echo $mat->materia_nombre; ?>"
placeholder="Ingrese  nombre"/>
</div>
<div>
<label>Hora academica</label>
<input type="text" name="hora_academica-form" value="<?php echo $mat->hora_academica;
?>" placeholder="Ingrese hora_academica"/>
</div>
<div>
<label>Tipo</label>
<input type="text" name="tipo-form" value="<?php echo $mat->tipo; ?>"
placeholder="Ingrese tipo"/>
</div>

<div>
<label>Pensum</label>
<input type="text" name="pensum-form" value="<?php echo $mat->pensum; ?>"
placeholder="Ingrese pensum"/>
</div>

<hr />
<div>
<button>Guardar</button>
</div>
</form>
