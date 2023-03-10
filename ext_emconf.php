<?php

/**
 * Extension Manager/Repository config file for ext "template".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Template',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KnowEx\\Template\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Vitali Scharov',
    'author_email' => 'scharov@knowex.de',
    'author_company' => 'KnowEx',
    'version' => '1.0.0',
];
