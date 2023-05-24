<h1><?php echo $doc->id != null ? $doc->ci : 'Nuevo Registro'; ?></h1>
<ol>
<li><a href="?c=docentes">Docentes</a></li>
<li><?php echo $doc->id != null ? $doc->ci : 'Nuevo Registro'; ?></li>
</ol>
<form action="?c=docentes&a=Guardar" method="post" enctype="multipart/form-data">
<input type="hidden" name="id-form" value="<?php echo $doc->id; ?>" />
<div>
<label>CI de docente</label>
<input type="text" name="ci-form" value="<?php echo $doc->ci; ?>"
placeholder="Ingrese CI"/>
</div>
<div>
<label>Nombre de docente</label>
<input type="text" name="nombres-form" value="<?php echo $doc->nombres;
?>" placeholder="Ingrese su nombre"/>
</div>
<div>
<label>fecha_nac de docente</label>
<input type="text" name="fecha_nacimiento-form" value="<?php echo $doc->fecha_nacimiento; ?>"
placeholder="Ingrese su fecha nac"/>
</div>
<div>
<label>direccion de docente</label>
<input type="text" name="direccion-form" value="<?php echo $doc->direccion; ?>"
placeholder="Ingrese su direccion"/>
</div>
<div>
<label>celular de docente</label>
<input type="text" name="celular-form" value="<?php echo $doc->celular; ?>"
placeholder="Ingrese su  celular"/>
</div>
<hr />
<div>
<button>Guardar</button>
</div>
</form>