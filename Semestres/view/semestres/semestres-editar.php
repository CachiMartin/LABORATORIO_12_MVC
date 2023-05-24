<h1><?php echo $sem->id != null ? $sem->semestre_numeral : 'Nuevo Registro'; ?></h1>
<ol>
<li><a href="?c=Semestres">Semestres</a></li>
<li><?php echo $sem->id != null ? $sem->semestre_numeral : 'Nuevo Registro'; ?></li>
</ol>
<form action="?c=Semestres&a=Guardar" method="post" enctype="multipart/form-data">
<input type="hidden" name="id-form" value="<?php echo $sem->id; ?>" />
<div>
<label>Semestre numeral</label>
<input type="text" name="semestre_numeral-form" value="<?php echo $sem->semestre_numeral; ?>"
placeholder="Ingrese sem_numeral"/>
</div>
<div>
<label>Semestre Literal</label>
<input type="text" name="semestre_literal-form" value="<?php echo $sem->semestre_literal;
?>" placeholder="Ingrese su sem_literal"/>
</div>

<hr />
<div>
<button>Guardar</button>
</div>
</form>
