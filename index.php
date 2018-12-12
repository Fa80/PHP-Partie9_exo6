<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie9_exo6</title>
</head>
<body>
  <h1>Exo6:</h1>
  <p>Afficher le nombre de jour dans le mois de février de l'année 2016..</p>
  <div class="container" id="date">
    <?php
    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
    echo 'Il y avait' . ' ' . $number . ' ' . 'Jours en Février 2016';
    ?>

    <p><?php //2ème méthode avec mktime et le parametre 't'. 
    $numberOfDays = date('t', mktime(0, 0, 0, 2, 1, 2016));// le paramétre t compte le nbre de jour qu'il y a dans le mois?
      echo 'le nombre de jour est' . ' ' . $numberOfDays
     ?></p>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
