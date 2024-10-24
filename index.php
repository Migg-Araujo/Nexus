<?php
    $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
    if(!file_exists('pages/'.$url.'.php')) {
        $url = '404';
    }
    require_once 'config/config.php';

    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>src/icon.svg" type="image/x-icon">
</head>
<body>
    <div class="gradient"></div>
    <?php
        // friendly url
        $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')) {
            include 'pages/'.$url.'.php';
        } else {
            include 'pages/404.php';
        }
    ?>
</body>
  <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</html>