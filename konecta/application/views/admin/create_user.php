<form action="<?= base_url('users/store') ?>" method="POST">
	<h3>Datos de la Cuenta</h3>
	<hr>
	<div class="form-group">
		<div class="form-row">
			<div class="col-7">
				<label for="">Nombre Usuario</label>
				<input type="text" name="user" class="form-control" placeholder="Inserte nombre de usuario" value="<?= set_value('user') ?>">
				<div class="text-danger"><?= form_error('user') ?></div>
			</div>
			<div class="col">
				<label for="">Correo</label>
				<input type="text" name="correo" class="form-control" placeholder="correo@mail.com" value="<?= set_value('correo') ?>">
				<div class="text-danger"><?= form_error('correo') ?></div>
			</div>
			<div class="col">
				<label for="">Rango de Usuario</label>
				<select name="range" class="custom-select">
					<option selected value="">Seleccione el rango</option>
					<option <?= set_value('range') == 'admin' ? 'selected' : ''; ?> value="admin">Administrador</option>
					<option <?= set_value('range') == 'user' ? 'selected' : ''; ?> value="user">Usuario</option>
				</select>
				<div class="text-danger"><?= form_error('range') ?></div>
			</div>
		</div>
		<br>
		<h3>Información del usuario</h3>
		<hr>
		<div class="form-row">
			<div class="col-7">
				<label for="">Nombre(s)</label>
				<input name="name" class="form-control" type="text" placeholder="Inserte su nombre" value="<?= set_value('name') ?>">
				<div class="text-danger"><?= form_error('name') ?></div>
			</div>
			<div class="col">
				<label for="">Apellidos</label>
				<input name="lastname" class="form-control" type="text" placeholder="Inserten sus apellidos" value="<?= set_value('lastname') ?>">
				<div class="text-danger"><?= form_error('lastname') ?></div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col-7">
				<label for="">telefono</label>
				<input name="telefono" type="number" class="form-control" placeholder="Ingrese el telefono" value="<?= set_value('telefono') ?>">
				<div class="text-danger"><?= form_error('telefono') ?></div>
			</div>
			<div class="col-5">
				<label for="">Cédula</label>
				<input name="cedula" type="number" class="form-control" placeholder="XXXXXXXXX-X" value="<?= set_value('cedula') ?>">
				<div class="text-danger"><?= form_error('cedula') ?></div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col-7">
				<label for="">Cliente para el que trabaja</label>
				<input name="cliente" class="form-control" type="text" placeholder="Cliente para el que trabaja" value="<?= set_value('cliente') ?>">
				<div class="text-danger"><?= form_error('cliente') ?></div>
			</div>
			<div class="col-5">
				<label for="">fecha nacimiento</label>
				<input name="fecha" type="text" class="form-control" placeholder="Fecha nacimiento" value="<?= set_value('fecha') ?>">
				<div class="text-danger"><?= form_error('fecha') ?></div>
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col">
			<label for="">Usuario que hace el registro.</label>
			<input name="usuarioregistro" class="form-control" type="text" placeholder="Usuario que hace el registro" value="<?= set_value('usuarioregistro') ?>">
			<div class="text-danger"><?= form_error('usuarioregistro') ?></div>
		</div>
		<div class="col">
			<label for="">Genero</label>
			<select name="genero" class="custom-select">
				<option selected value="">Seleccione el genero</option>
				<option <?= set_value('genero') == 'Masculino' ? 'selected' : ''; ?> value="Masculino">Masculino</option>
				<option <?= set_value('genero') == 'Femenino' ? 'selected' : ''; ?> value="Femenino">Femenino</option>
			</select>
			<div class="text-danger"><?= form_error('genero') ?></div>
		</div>
		<div class="col">
			<label for="">Sede donde trabaja</label>
			<select name="sede" class="custom-select">
				<option selected value="">Sede donde trabaja </option>
				<option <?= set_value('sede') == 'Ruta N' ? 'selected' : ''; ?> value="Ruta N">Ruta N</option>
				<option <?= set_value('sede') == 'Puerto Seco' ? 'selected' : ''; ?> value="Puerto Seco">Puerto Seco</option>
				<option <?= set_value('sede') == 'Buro' ? 'selected' : ''; ?> value="Buro">Buro</option>
			</select>
			<div class="text-danger"><?= form_error('sede') ?></div>
		</div>

	</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Registrar asesor">
	</div>
</form>