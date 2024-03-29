<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'panopto',
    'description' => 'Adds a content element for the end-to-end-video-content-management-system panopto',
    'category' => 'plugin',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Sebastian Stein',
    'author_email' => 'sebastian.stein@in2code.de',
    'author_company' => 'in2code GmbH',
    'version' => '3.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
