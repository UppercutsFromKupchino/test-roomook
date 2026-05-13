<?
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/stylesheet-Formular.css">
    <title>Test Roomook</title>
</head>
<body>
    <?
    // Подключение header
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/header/template.php')) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/header/template.php';
    }
    ?>
    <?
    // Подключение main content
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/main/template.php')) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/main/template.php';
    }
    ?>
    <?
    // Подключение footer
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/footer/template.php')) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/footer/template.php';
    }
    ?>
</body>
</html>