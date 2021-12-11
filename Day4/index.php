<?php
    session_start();

    $url = isset($_SERVER['PATH_INFO']) ? explode("/", ltrim($_SERVER['PATH_INFO'], '/')) : '/';

    // if (!isset($_SESSION['user']) || $url[0] == 'login') {
    //     header("location: ./view/login.php");
    // }

    if ($url == '/' || $url[0] == 'a' || $url[0] == 'dashboard') {
        // dashboard
        // echo 'dashboard';
        header("location: ./views/dashboard.php");
    } else {
        require_once './controllers/assetController.php';
        $controller = $url[0];
        $action = $url[1];

        switch ($controller) {
            case 'asset':
                // require_once './controller/assetController.php';
                $ac = new AssetController();
                switch ($action) {
                    case 'get':
                        echo $ac->getAsset($url[2]);
                        break;
                    
                    default:
                        # code...
                        break;
                }
                break;
            
            default:
                # code...
                break;
        }
    }
