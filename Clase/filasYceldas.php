<html>
    <body>
        <?php
        $var = "texto";
        $num = 3;

        printf("Puede fácilmente intercalar <b>%s</b> con números <b>%d</b> <br>",$var,$num);

        printf("<table border=1 CELLPADDING=20>");

        for ($i=0;$i<3;$i++)
        {
        printf("<tr><td>%10.d</td></tr>",$i);
        }
        printf("</table>");

        $num = [0,1,2,3,4,5,6];

        ?>
    </body>
</html>