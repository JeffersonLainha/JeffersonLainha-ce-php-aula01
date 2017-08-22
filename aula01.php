<?php
  $a = 10;
  $b = 20;
?>

<!DOCTYPE html>
<html>
    <body>
        <h1 align='center'>PHP - Atividade 01</h1>
        <p>
            Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes cálculos:
        </p>
        <table border=1>
            <tr>
                <th>Operação</th>
                <th>Resultado</th>
            </tr>

            <tr>
                <td>A + B</td>
                <td> <?php echo $a + $b ?> </td>
            </tr>

            <tr>    
                <td>A - B</td>
                <td> <?php echo $a - $b ?> </td>
            </tr>

            <tr>    
                <td>A * B</td>
                <td> <?php echo $a * $b ?> </td>
            </tr>

            <tr>    
                <td>A / B</td>
                <td> <?php echo $a / $b ?> </td>
            </tr>

            <tr>    
                <td>B <sup>A</sup> </td>
                <td>
                    <?php
                        $resultado = pow ($b, $a);
                        echo number_format("$resultado",2,",",".");
                    ?>
                </td>
            </tr>        
        </table>
    </body>
</html>