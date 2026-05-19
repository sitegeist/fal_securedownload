<?php

declare(strict_types=1);

use BeechIt\FalSecuredownload\Controller\BePublicUrlController;

return [
    'dump_file' => [
        'path' => '/fal_securedownloads/dump_file',
        'target' => BePublicUrlController::class . '::dumpFile',
    ],
];
