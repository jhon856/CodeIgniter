<?php
    if($cursos){
    foreach ($cursos->result() as $curso){?>
        <ul>
        <li><a href="<?= $curso->idCurso ?>"><?=$curso->nombreCurso;?></a></li>
        </ul>
    <?php } 
    }else{
        echo "<p> error en la aplicacion</p>";?>
        <meta http-equiv="Refresh" content="5;
            url=http://localhost/codeIgniter/index.php/cursos/index/">
   <?php }?>

</body>
</html>