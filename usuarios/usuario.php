<html>

<body>
    <form id="form1" name="form1" method="POST" action="ingreso.php">
        <table width="500" border="1" cellspacing="1" cellpadding="5">
            <tr>
                <td>DATOS</td>
                <td>Universidad</td>
            </tr>
            <tr>
                <td>ID</td>
                <td><label for="numero1"></label>
                    <input type="text" name="id" id="id" placeholder="Ingrese su id" />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><label for="numero2"></label>
                    <input type="text" name="password" id="password" placeholder="Ingrese su clave" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="reset" name="cancelar" id="cancelar" value="Borrar" />
                    <input type="submit" name="submit" id="submit" value="Ingresar" />

                </td>
            </tr>
        </table>
    </form>
</body>

</html>