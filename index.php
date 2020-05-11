<?php
// création d'un tableau associatif departments avec comme index le numéro des départements des Hauts de France et en valeur leur nom
$departments = array();
$departments['80'] = 'Somme';
$departments['02'] = 'Aisne';
$departments['60'] = 'Oise';
$departments['62'] = 'Pas de Calais';
$departments['59'] = 'Nord';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 3 exo 6</title>
</head>
<body>
  <?php
  foreach ($departments as $department =>$value){
    ?>
    <p>Le Département <?php echo $value; ?> a le numéro <?php echo $department; ?></p>
  <?php }?>
</body>
</html>
