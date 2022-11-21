<html>

<head>
      <?php
            echo '<link rel="stylesheet" type="text/css" href="';
            switch ($_GET['style_choice'])
            {
                  case 'Style 1':
                        echo 'style1.css" />';
                        break;
                  case 'Style 2':
                        echo 'style2.css" />';
                        break;
                  case 'Style 3':
                        echo 'style3.css" />';
                        break;
                  default:
                        echo 'style1.css" />';
            }
      ?>
</head>

<body>
<form action="" method="get" class="formulaire">
      <select name="style_choice">
      	<option>Style 1</option>
      	<option>Style 2</option>
      	<option>Style 3</option>
      </select>

      <input type="submit" value="Envoyer">
</form>
</body>
</html>
