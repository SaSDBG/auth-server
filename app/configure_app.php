<?php

namespace SaS;

include_conf($app);

require 'services.php';

$app['controllers'] = require('controllers.php');

function include_conf(\Silex\Application $app) {
    $conf = $app;
    require '../config/domain.conf.php';
    require '../config/app.conf.php';
}

?>
