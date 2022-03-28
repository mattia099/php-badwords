<?php

$paragrafo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure aperiam deleniti odio sed distinctio obcaecati eius dignissimos nulla?';
$paragrago_lenght = strlen($paragrafo);
$censura = $_GET['censura'];
$paragrafo_modificato = str_replace( $censura, '***', $paragrafo);
echo $paragrafo;
echo '<br>';
echo $paragrago_lenght;
echo '<br>';
echo $paragrafo_modificato;

?>

