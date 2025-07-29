
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Pokémon App PHP</title>
  <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>
  <?php
  require_once 'controllers/PokemonController.php';

  $controllerName = $_GET['controller'] ?? 'pokemon';
  $action = $_GET['action'] ?? 'showSearch';

  switch ($controllerName) {
    case 'pokemon':
      $controller = new PokemonController();
      if (method_exists($controller, $action)) {
        $controller->$action();
      } else {
        echo "Acción '$action' no encontrada en el controlador.";
      }
      break;

    default:
      echo "Controlador '$controllerName' no encontrado.";
      break;
  }
  ?>
</body>
</html>

