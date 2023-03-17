
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}">
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ $empleado->Correo }}">
    <br>
    <label for="file">Archivo</label>
    <input type="file" name="Foto" value="{{ $empleado->Foto }}">
    <br>
    <input type="submit" value="Enviar">