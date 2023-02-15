<html>

<body>
    <form id="form1" name="form1" method="POST" action="script.php">
        <table width="500" border="1" cellspacing="1" cellpadding="5">
            <tr>
                <td>Numeros</td>
                <td>Ingrese</td>
            </tr>
            <tr>
                <td>Digite un numero</td>
                <td><label for="numero1"></label>
                    <input type="text" name="numero1" id="numero1" placeholder="Ingrese el primer numero" />
                </td>
            </tr>
            <tr>
                <td>Digite otro numero</td>
                <td><label for="numero2"></label>
                    <input type="text" name="numero2" id="numero2" placeholder="Ingrese el segundo numero" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="Calcular" />
                    <input type="reset" name="cancelar" id="cancelar" value="Limpiar" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>