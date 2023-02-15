<html>

<body>
    <form id="form1" name="form1" method="POST" action="usuario1.php">
        <table width="500" border="1" cellspacing="1" cellpadding="5">
            <tr>
                <td>DATOS</td>
                <td></td>

            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="numero1"></label>
                    <input type="text" name="id" id="id" placeholder="Ingrese su nombre" autofocus required />
                </td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><label for="numero2"></label>
                    <input type="text" name="ap" id="ap" placeholder="Ingrese su apellido" required />
                </td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><label for="numero2"></label>
                    <input type="radio" name="sexo" id="sexo" value="Masculino" />Masculino
                    <input type="radio" name="sexo" id="sexo" value="Femenino" />Femenino

                </td>
            </tr>
            <tr>
            <tr>
                <td>Titulo</td>
                <td><label for="numero2"></label>
                    <input type="checkbox" name="titulo" id="titulo" value="Primaria" /> Primaria<br>
                    <input type="checkbox" name="titulo" id="titulo" value="Secundaria" /> Secundaria<br>
                    <input type="checkbox" name="titulo" id="titulo" value="Universidad" /> Universidad
                </td>
            </tr>
            <tr>
                <td>Registrar</td>
                <td><input type="reset" name="cancelar" id="cancelar" value="Borrar" />
                    <input type="submit" name="submit" id="submit" value="Ingresar" />

                </td>
            </tr>
        </table>
    </form>
</body>

</html>