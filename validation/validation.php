<?php session_start();
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);  

    if($uri_segments[1] == 'index.php' || 
    $uri_segments[1] == '' || 
    $uri_segments[1] == 'index'
    ){
        $page = 'home';
    }
  
?>
