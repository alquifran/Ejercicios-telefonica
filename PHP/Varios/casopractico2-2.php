<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi web</title>
</head>
<body>
    <?php
    error_reporting(0);
    $array = [
        [
            'nombre' => 'Fran',
            'tel1' => '12345678',
            'tel2' => '',
            'email' => 'frantastico@gmail.com'
        ],
        [
            'nombre' => 'Bea',
            'tel1' => '12345671',
            'tel2' => '12345431',
            'email' => 'bea@gmail.com'
        ],
        [
            'nombre' => 'Jorge',
            'tel1' => '12345612',
            'tel2' => '12432123',
            'email' => 'jorge@gmail.com'
        ],
    ];
    //echo $array[0][email];
    //print_r($array[0][email]);
    echo '<table border="2" width="800" align="center">';
        echo '<tr>';
            echo '<td>'.('Nombre').'</td>';
            echo '<td>'.('Teléfono 1').'</td>';
            echo '<td>'.('Teléfono 2').'</td>';
            echo '<td>'.('Email').'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>'.$array[0][nombre].'</td>';
            echo '<td>'.$array[0][tel1].'</td>';
            echo '<td>'.$array[0][tel2].'</td>';
            echo '<td>'.$array[0][email].'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>'.$array[1][nombre].'</td>';
            echo '<td>'.$array[1][tel1].'</td>';
            echo '<td>'.$array[1][tel2].'</td>';
            echo '<td>'.$array[1][email].'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>'.$array[2][nombre].'</td>';
            echo '<td>'.$array[2][tel1].'</td>';
            echo '<td>'.$array[2][tel2].'</td>';
            echo '<td>'.$array[2][email].'</td>';
        echo '</tr>';
    echo '</table>';
    ?>
</body>
</html>