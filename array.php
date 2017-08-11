<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <?php

    $fruits = array ('Strawberry', 'Apple', 'Banana');

    $ffxiv = array (
      'genre' => 'MMORPG',
      'publisher' => 'Square Enix',
      'producer' => 'Naoki Yoshida');

      foreach ($ffxiv as $category => $element) {
        echo $category . ' : ' . $element . '<br/>';
      }

    ?>
  </body>
</html>
