<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>stitchedinsaltaire.co.uk</title>
    </head>
    <body>
        <?php
            $db_handle = mysql_connect("localhost", "jcook", "jamesjamesjames");
            $db_found = mysql_select_db("stitchedinsaltaire_co_uk", $db_handle);

            if($db_found)
            {
                $result = mysql_query("SELECT * FROM example WHERE id=1");
                $db_field = mysql_fetch_assoc($result);
                print $db_field['data'];
                mysql_close($db_handle);
            }
            else
            {
                print "Construction is under way...";
            }
        ?>
    </body>
</html>
