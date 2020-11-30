<?php
include "../db/autoload.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MOSTRANDO LISTA DE PROFESORES</title>
    </head>
    <body>


        <?php

        $contCategoria = new ControladorProfesor();
        $categoria = $contCategoria->mostrarCategoria();
        ?>
        <h1>Profesores a cargo</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>id </th>

                    <th>Nombre</th>

                    <th>idioma</th>                              
                </tr>
            </thead>

            <?php

            foreach ($categoria as $cato) {
                ?>        

                <tr>
                    <td><?php echo $cato['id']; ?></td>

                    <td><?php echo $cato['nombre']; ?></td>
                    
                    <td><?php echo $cato['idioma']; ?> </td>

                </tr>
                <?php
            }
            ?>


        </table>


    </body>
</html>
