<?php

declare(strict_types=1);

/***************************************************************
 * Extension Manager/Repository config file for ext: "fal_securedownload"
 ***************************************************************/
$EM_CONF['fal_securedownload'] = [
    'title' => 'FAL Secure Download',
    'description' => 'Secure download of assets. Makes it possible to secure FE use of assets/files by setting permissions to folders/files for fe_groups.',
    'category' => 'plugin',
    'author' => 'Frans Saris (Beech.it)',
    'author_email' => 't3ext@beech.it',
    'author_company' => 'Beech.it',
    'state' => 'stable',
    'version' => '6.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'ke_search' => '6.0.0',
            'solrfal' => '13.0.0',
        ],
    ],
];
