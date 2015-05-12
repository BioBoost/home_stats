<?php
    include 'vendor/autoload.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Stats</title>
</head>
<body>
    <h1>Welcome to Home Stats</h1>

    <?php
        echo "GET:<br>";
        print_r($_GET);
        echo "<br><br><br>POST:<br>";
        print_r($_POST);
    ?>

    <?php
        use Monolog\Logger;
        use Monolog\Handler\StreamHandler;

        // create a log channel
        $log = new Logger('HomeStats');
        $log->pushHandler(new StreamHandler('log/development.log', Logger::DEBUG));
        $log->pushHandler(new StreamHandler('log/production.log', Logger::WARNING));

        // add records to the log
        $log->addDebug('D_Foo');
        $log->warning('W_Bar');
        $log->error('E_Kitty');
    ?>

</body>
</html>