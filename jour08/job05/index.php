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
            $_SESSION['player'] = 1;



            echo "<table><tbody>";
            for($i=1; $i<=3; $i++)
            {
                  echo "<tr>";
                  for($j=1; $j<=3; $j++)
                  {
                        if (isset($_GET['line1col1']) && $_SESSION['player'] == 1 && $i == 1 && $j == 1) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line1col1']) && $_SESSION['player'] == 2 && $i == 1 && $j == 1) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }
                        if (isset($_GET['line1col2']) && $_SESSION['player'] == 1 && $i == 1 && $j == 2) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line1col2']) && $_SESSION['player'] == 2 && $i == 1 && $j == 2) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }

                        if (isset($_GET['line1col3']) && $_SESSION['player'] == 1 && $i == 1 && $j == 3) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line1col3']) && $_SESSION['player'] == 2 && $i == 1 && $j == 3) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }


                        if(isset($_GET['line2col1']) && $_SESSION['player'] == 1 && $i == 2 && $j == 1) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line2col1']) && $_SESSION['player'] == 2 && $i == 2 && $j == 1) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }

                        if (isset($_GET['line2col2']) && $_SESSION['player'] == 1 && $i == 2 && $j == 2) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line2col2']) && $_SESSION['player'] == 2 && $i == 2 && $j == 2) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }

                        if (isset($_GET['line2col3']) && $_SESSION['player'] == 1 && $i == 2 && $j == 3) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line2col3']) && $_SESSION['player'] == 2 && $i == 2 && $j == 3) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }


                        if(isset($_GET['line3col1']) && $_SESSION['player'] == 1 && $i == 3 && $j == 1) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line3col1']) && $_SESSION['player'] == 2 && $i == 3 && $j == 1) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }

                        if (isset($_GET['line3col2']) && $_SESSION['player'] == 1 && $i == 3 && $j == 2) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line3col2']) && $_SESSION['player'] == 2 && $i == 3 && $j == 2) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }

                        if (isset($_GET['line3col3']) && $_SESSION['player'] == 1 && $i == 3 && $j == 3) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="X"></td></form>';
                              $_SESSION['player'] = 2; }
                        else if (isset($_GET['line3col3']) && $_SESSION['player'] == 2 && $i == 3 && $j == 3) {
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="O"></td></form>';
                              $_SESSION['player'] = 1; }
                        if (!isset($_GET["line".$i."col".$j])) 
                              echo '<form method="GET"><td><input name="line'.$i.'col'.$j.'" type="submit" value="-"></td></form>';

                  }
                  echo "</tr>";
            }
            echo "</tbody></table>";



      ?>
</body>
</html>
