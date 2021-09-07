<h1 class="text-center">Editando Usuario</h1>
<?php
// echo '<pre>';
// var_dump($user);
// echo '</pre>';
?>

<div class="container-fluid">
    <h4>Datos de la cuenta</h4>
    <form method="POST" action="<?= base_url('users/update') ?>">
        <div class="card">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nombre de usuario</label>
                        <input type="text" name="username" value="<?= set_value('username', isset($user['nombre_usuario']) ? $user['nombre_usuario'] : '') ?>" class="form-control" placeholder="" readonly>
                        <input type="hidden" value="<?= set_value('_id', isset($user['id']) ? $user['id'] : '') ?>" name="_id">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= set_value('email', isset($user['correo']) ? $user['nombre_usuario'] : '') ?>" class="form-control" placeholder="" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Status</label>
                        <input type="text" name="status" value="<?= set_value('status', isset($user['status']) ? $user['status'] : '') ?>" class="form-control" placeholder="" readonly>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h4>Información personal</h4>
        <div class="card">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nombre(s)</label>
                        <input type="text" name="nombre" value="<?= set_value('nombre', isset($user['nombre']) ? $user['nombre']  : '') ?>" class="form-control" placeholder="">
                        <?= form_error('nombre', '<p class="text-danger">', '</p>') ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" value="<?= set_value('apellidos', isset($user['apellido']) ? $user['apellido']  : '') ?>" class="form-control" placeholder="">
                        <?= form_error('apellidos', '<p class="text-danger">', '</p>') ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Cédula</label>
                        <input type="number" name="cedula" value="<?= set_value('cedula', isset($user['cedula']) ? $user['cedula']  : '') ?>" class="form-control" placeholder="">
                        <?= form_error('cedula', '<p class="text-danger">', '</p>') ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-7">
                            <label for="">Cliente para el que trabaja</label>
                            <input name="cliente" class="form-control" type="text" placeholder="Cliente para el que trabaja" value="<?= set_value('cliente', isset($user['cliente']) ? $user['cliente']  : '') ?>" class="form-control" placeholder="">

                        </div>
                        <div class="col-5">
                            <label for="">fecha nacimiento</label>
                            <input name="fecha" type="text" class="form-control" placeholder="Fecha nacimiento" value="<?= set_value('fecha', isset($user['fecha']) ? $user['fecha']  : '') ?>" class="form-control" placeholder="">

                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Usuario que hace el registro.</label>
                        <input name="usuarioregistro" class="form-control" type="text" placeholder="Usuario que hace el registro" value="<?= set_value('usuarioregistro', isset($user['usuarioregistro']) ? $user['usuarioregistro']  : '') ?>" class="form-control" placeholder="">
                    </div>
                    <div class="col">
                        <label for="">telefono</label>
                        <input name="telefono" type="number" class="form-control" placeholder="Ingrese el telefono" value="<?= set_value('telefono', isset($user['telefono']) ? $user['telefono']  : '') ?>">
                        <div class="text-danger"><?= form_error('telefono') ?></div>
                    </div>
                    <div class="col">
                        <label for="">Genero</label>
                        <select name="genero" class="custom-select">
                            <option selected value="<?= set_value('genero', isset($user['genero']) ? $user['genero']  : '') ?>">Seleccione el genero</option>
                            <option <?= set_value('genero') == 'Masculino' ? 'selected' : ''; ?> value="Masculino">Masculino</option>
                            <option <?= set_value('genero') == 'Femenino' ? 'selected' : ''; ?> value="Femenino">Femenino</option>
                        </select>
                        <div class="text-danger"><?= form_error('genero') ?></div>
                    </div>
                    <div class="col">
                        <label for="">Sede donde trabaja</label>
                        <select name="sede" class="custom-select">
                            <option selected value="<?= set_value('sede', isset($user['sede']) ? $user['sede']  : '') ?>">Sede donde trabaja </option>
                            <option <?= set_value('sede') == 'Ruta N' ? 'selected' : ''; ?> value="Ruta N">Ruta N</option>
                            <option <?= set_value('sede') == 'Puerto Seco' ? 'selected' : ''; ?> value="Puerto Seco">Puerto Seco</option>
                            <option <?= set_value('sede') == 'Buro' ? 'selected' : ''; ?> value="Buro">Buro</option>
                        </select>
                        <div class="text-danger"><?= form_error('sede') ?></div>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-lg" value="Actualizar">
    </form>
</div>