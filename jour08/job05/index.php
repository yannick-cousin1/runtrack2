<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="utf-8" />
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <title>Morpion</title>
</head>

<body>
      <?php
            $_SESSION['turn'] = 0;
            $_SESSION['l1'] = ['-','-','-'];
            $_SESSION['l2'] = ['-','-','-'];
            $_SESSION['l3'] = ['-','-','-'];
            $_SESSION['game'] = [$_SESSION['l1'],$_SESSION['l2'],$_SESSION['l3']];

            for($k=0; $k<3; $k++)
            {
                  for($l=0; $l<3; $l++)
                  {
                              if ($_GET['button'] == ("l".$k."c".$l) && $_SESSION['turn'] % 2 == 0)
                              {
                                    $_SESSION['game'][$k][$l] = 'X';
                                    $_SESSION['turn'] += 1;
                              }
                              if ($_GET['button'] == ("l".$k."c".$l) && $_SESSION['turn'] % 2 == 1)
                              {
                                    $_SESSION['game'][$k][$l] = 'O';
                                    $_SESSION['turn'] += 1;
                              }
                  }
            }

            echo "<table><tbody>";
            for($i=0; $i<3; $i++)
            {
                  echo "<tr>";
                  for($j=0; $j<3; $j++)
                  {
                        echo "<td><form method='GET'><button type='submit' value='l".$i."c".$j."' name='button'>" . $_SESSION['game'][$i][$j] . "</button></form></td>";
                  }
                  echo "</tr>";
            }
            echo "</tbody><table>";



      ?>
</body>
</html>
