<?php

/**
 * Extension Manager/Repository config file for ext "ma_starter".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'MA Starter',
    'description' => 'TYPO3 Starter package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MwayiAnyula\\MaStarter\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mwayi Anyula',
    'author_email' => 'code@mwayianyula.com',
    'author_company' => 'Mwayi Anyula',
    'version' => '1.0.0',
];
