<?php
$color = $_GET['color'];
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$materia = $_GET['materia'];
?>
<html>
    <body>
        <p>
        <?php
            if($p1==1){
                echo "Cursas Programacion 1 <br/>";
            }
            
            if($p2==2){
                echo "Cursas Programacion 2 <br/>";
            }

            if($p3==3){
                echo "Cursas Programacion 3 <br/>";
            }
        ?>
        </p>
        <p>
            Me gusta mas <?php echo $materia; ?>
        </p>
        <p style="color:<?php echo $color; ?>;">
            Resultado = 
            <?php
                $resultado = $numero1 * $numero2;
                echo $resultado;
            ?>
        </p>
    </body>

</html>
