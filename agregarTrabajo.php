<?php
    
    require_once ("vendor/autoload.php");
    use App\Models\Trabajos;
    use Illuminate\Database\Capsule\Manager as Capsule;

    $capsule = new Capsule;
    
    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'proyectophp',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    
        if(!empty($_POST)){
            $trabajos= new Trabajos();
            $trabajos->nombreT =$_POST['inNombreTrabajo'];
            $trabajos->descripcionT =$_POST['inDescripcionTrabajo'];
            $trabajos->meses =$_POST['inTiempoTrabajo'];
            $trabajos->save();
        }
    




var_dump($_GET);
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Trabaj</title>
</head>
<body> 
    <form action="agregarTrabajo.php" method="post">
        <h2>Agregar Trabajos</h2>
        <label for="" name="NombreTrabajo">Nombre de trabajo:</label>
            
        <label for=""name="descricionTrabajo">Descripcion de trabajo</label>
        <input type="text" name="inDescripcionTrabajo"><br><br>
        <label for=""name="tiempoTrabajo">Tiempo de trabajo</label>
        <input type="text" name="inTiempoTrabajo"><br><br>
        <button type="submit">Save</button>

    
    </form>
</body>
</html>