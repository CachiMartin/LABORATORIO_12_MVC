<h1><?php echo $car->id != null ? $car->carrera_codigo : 'Nuevo Registro'; ?></h1>
<ol>
<li><a href="?c=Carreras">Carreras</a></li>
<li><?php echo $car->id != null ? $car->carrera_codigo : 'Nuevo Registro'; ?></li>
</ol>
<form action="?c=Carreras&a=Guardar" method="post" enctype="multipart/form-data">
<input type="hidden" name="id-form" value="<?php echo $car->id; ?>" />
<div>
<label>Codigo de Carrera</label>
<input type="text" name="carrera_codigo-form" value="<?php echo $car->carrera_codigo; ?>"
placeholder="Ingrese su codigo"/>
</div>
<div>
<label>Nombre de la Carrera</label>
<input type="text" name="carrera_nombre-form" value="<?php echo $car->carrera_nombre;
?>" placeholder="Ingrese su nombre"/>
</div>
<div>
<label>Abreviacion de Carrera</label>
<input type="text" name="carrera_abreviacion-form" value="<?php echo $car->carrera_abreviacion; ?>"
placeholder="Ingrese su abreviacion"/>
</div>
<hr />
<div>
<button>Guardar</button>
</div>
</form>
