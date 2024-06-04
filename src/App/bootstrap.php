<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;

// Wait isnt registerRoutes inside Routes.php?
// Well composer.php does autoloading so it works I think
// composer dump-autoload does this too
// my head hurts
use function App\Config\registerRoutes;

$app = new App();

registerRoutes($app);

return $app;
