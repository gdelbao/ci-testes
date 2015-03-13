<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ola Mundo Exemplo 2</title>
    </head>
    <body>
        <header>
            <h1><?php echo $titulo; ?></h1>
            
            <nav>
                <ul>
                    <?php foreach ($menu as $item) {
                        echo $item;
                    ?>
                    <li></li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
        <p><?php echo $texto; ?></p>
        <p><?php echo $segmento; ?></p>
    </body>
</html>
