<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job3</title>
</head>
<body>
    <header>
    <h1>Titre principal</h1>
    <h2>Déclaration de variable de différents types</h2>
    <?php
        $var1 = true;
        $var2 = 2;
        $var3 = "String";
        $var4 = 2.54;
    ?>
    <h3>Tableau de valeur</h3>
        <table>
            <thead>
                <tr>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo gettype($var1)?></td>
                    <td><?php echo "\$var1" ?></td>
                    <td><?php echo $var1?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($var2)?></td>
                    <td><?php echo "\$var2"?></td>
                    <td><?php echo $var2?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($var3)?></td>
                    <td><?php echo "\$var3"?></td>
                    <td><?php echo $var3?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($var4)?></td>
                    <td><?php echo "\$var4"?></td>
                    <td><?php echo $var4?></td>
                </tr>
            </tbody>
        </table>

    </header>
</body>
</html>