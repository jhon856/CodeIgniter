<?= form_open('/cursos/recibirdatos') ?>
<?php
    $nombre = array (
        'name' => 'nombre',
        'placeholder' => 'Escribe tu nombre');

    $videos = array (
        'name' => 'videos',
        'placeholder' => 'cantidad de videos del curso');
?>
    <?= form_label('Nombre','nombre') ?>
    <?= form_input($nombre) ?>

<br><br><br>    
    <?= form_label('Numero videos','videos') ?>
    <?= form_input($videos) ?>

<?= form_submit('','Subir curso') ?>
<br>
<?= form_close()?>
</body>
</html>