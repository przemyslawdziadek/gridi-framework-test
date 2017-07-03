<?php
$pagesDir = __DIR__ . '/pages/';
$colors = array('primary', 'secondary', 'success', 'info', 'warning', 'error');
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/gridi.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Gridi Framework Test</title>
    </head>
    <body>
        <button id="menu-switch"></button>
        <section id="left-column">
            <h1><a href="/">GRIDI FRAMEWORK</a></h1>
            <nav>
                <ul>
                    <?php
                    $dirFiles = scandir($pagesDir);

                    foreach($dirFiles as $file) {
                        if(is_file($pagesDir . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                            $file = preg_replace('/.php$/i', '', $file);
                            ?>
                            <li>
                                <a href="<?php echo $file; ?>"><?php echo ucfirst($file); ?></a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </nav>
        </section>
        <section id="right-column">
            <div class="container">
                <div class="row">
                    <div class="column column-12">
                    <?php
                    $params = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

                    if(count($params) > 0 && mb_strlen($params[0]) > 0) {
                        $file = $pagesDir . $params[0] . '.php';

                        if(file_exists($file) && is_readable($file)) {
                            @include $file;
                        } else {
                            ?>
                            <div class="text-center">
                                <h2>
                                    404 Not Found
                                </h2>
                                <p>
                                    Not Found Page
                                </p>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="text-center">
                            <h2>
                                Welcome to GRIDI FRAMEWORK test site
                            </h2>
                            <p>
                                choose sometching from menu
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery.js"></script>
        <script>
        $('#menu-switch').on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $('body').toggleClass('open-navigation');
        });
        </script>
    </body>
</html>
