<html>
    <head>
        <title>Number Two</title>
    </head>

    <body>
        <?php
            $data = "SeLamAT PAGi semua halOo";

            $format_title = ucwords(strtolower($data));

            $format_normal = lcfirst(strtolower($data));

            echo "Format Judul: " . $format_title. "<br>";
            echo "Format Biasa: " . $format_normal;
        ?>
    </body>
</html>

