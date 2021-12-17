<html>
    <head>
        <title>birthdate form</title>
    </head>
    <body>
        <form>
            <?php
                $bathdate = new DateTime('07.18.1996');
                $today = new Datetime(date('m.d.y'));
                $diff = $today->diff($bday);
                printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
                printf("\n");

            ?>
        </form>
    </body>
</html>