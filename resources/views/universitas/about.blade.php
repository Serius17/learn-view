<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>About</title>
</head>
    <body>
    <h1><?= $nama ?></h1>
    <h2>Kampus terbaik se-galaksi</h2>
    <h3>Struktur Pimpinan</h3>
    <ol>
   <?php
   foreach ($angka as $a):?>
  <li><?= $a?></li>
  <?php endforeach ?>
</ol>
    </body>
</html>
