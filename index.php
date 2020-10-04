<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre * -->


<?php
 // variabile del testo in considerazione
 $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit";

 // sto creando una variabile parola e gli sto assegnando il valore di
 // parola all'interno del link
 $parola = $_GET["parola"];

 // str replace sostituisce una parola con un altra $parola
 // quindi...(parola da sostituire, sostituta, testo in cui è compresa la parola da sostituire)
 $testo = str_replace($parola, "***", $testo);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- per visualizzare il testo -->
  <p><?php echo $testo ?></p>
  <!--per visualizzare il testo e scrivere la sua in numeri la sua lunghezza -->
  <span>La lunghezza della stringa è: <?php echo strlen($testo); ?></span>


</body>
</html>
