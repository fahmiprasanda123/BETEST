<html>
    <head>
        <title>
            Number One
        </title>
    </head>
    <body>
    <?php
        $data = "aaabbcccaaaac";
        $count = 1;
        $prev_data = $data[0];

        for ($i = 1; $i < strlen($data); $i++) {
            if ($data[$i] == $prev_data) {
                $count++;
            } else {
                echo $prev_data . " = " . $count . "<br>";
                $prev_data = $data[$i];
                $count = 1;
            }
        }

            echo $prev_data . " = " . $count . "<br>";
        ?>
    </body>
</html>


