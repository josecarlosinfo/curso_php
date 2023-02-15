<html>

<head>

</head>

<body>
    <?php
    $var = "texto";
    $num = 3;
    printf("Puede fácilmente intercalar <b>%s</b> con números <b>%d</b> <br>", $var, $num);

    printf("<TABLE BORDER=1 CELLPADDING=20>");
    for ($i = 0; $i < 10; $i++) {
        printf("<tr><td>%10.d</td></tr>", $i);
    }
    printf("</table>");
    ?>
</body>

</html>