<?php

require 'form.php';
require '../Exo1/Personnage.php';
require 'text.php';

// $haku = new Personnage('Haku');
// $haku-> regen();
// var_dump($haku);

$form = new Form($_POST);

var_dump(Text::withZero(4));
?>

<form action="#" method="post">
  <?php
  echo $form->input('username');
  echo $form->input('password');
  echo $form->submit();
   ?>
</form>
