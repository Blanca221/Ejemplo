<?php
// index.php
session_start();

$action = $_GET['action'] ?? null;

switch ($action) {

    // Resources
    case 'llistar-categories':
        include __DIR__.'/resource_llistar_categories.php';
        break;
    //pagina de registro
    case 'registre':
        include __DIR__.'/resource_registre.php';
        break;
    //pagina para listar productos
    case 'llistar-productes':
        include __DIR__.'/resource_productos.php';
        break;
    //iniciar sesion
    case 'inicio-sesion':
        include __DIR__.'/resource_iniciar_sesion.php';
        break;
        //ESTAS DOS NO NECESITAN VIEW PORQUE NO SON PAGINAS SINO ACCIONES -> SON LOS CONTROLADORES 

    //Esta relacionada con la ruta registre
    case 'registre-session':
        include __DIR__.'/controller/almacenar_registro.php';
        break;
    //Este relacionada con la ruta inicio-sesion
    case 'inicio-session':
        include __DIR__.'/controller/iniciar_sesion.php';
        break;

    case 'ejemplo':
        include __DIR__.'/resource_ejemplo.php';
        break;

    

    // Default
    default:
        include __DIR__.'/resource_portada.php';
        break;
}

?>