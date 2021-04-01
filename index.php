<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kew booking system - frontend</title>
</head>
<body>

<ul>

    <?php

    function process_filename($str) {
        $no_file_ext = str_replace('.html', '', $str);
        $no_underscores = str_replace('_', ' ', $no_file_ext);
        return ucfirst($no_underscores);
    }

    if ($handle = opendir('.')) {

        while (false !== ($entry = readdir($handle))) {

            if (strpos($entry, '.html') != false) {

                $format = '<li><a href=\'/%s\'>%s</a></li>';
                echo sprintf($format, $entry, process_filename($entry));
            }
        }

        closedir($handle);
    }

    ?>

</ul>

</body>
</html>

