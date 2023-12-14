<?php
$ll = 'LLL:EXT:ma_starter/Resources/Private/Language/locallang_db_container.xlf'.':';
//$configurationManager = GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Configuration\ConfigurationManager');
//$settings = $configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);

$iconFolder = 'EXT:ma_starter/Resources/Public/ApplicationAssets/ContainerLayouts/';
$positionFolder = 'EXT:ma_starter/Resources/Public/ApplicationAssets/ContainerPositions/';
//$iconFolder = $settings['iconFolder'];
$gridElements = '100,101,50-50,25-25-25-25,33-33-33,33-33-33-float,50-50,50-50_media,75-25,25-75,66-33,33-66';
$disallowed = ['CType' => $gridElements];

$leftColPos = 21;
$centerColPos = 23;
$centerLeftColPos = 24;
$rightColPos = 22;

$colSpan = 1;
$colSpan2 = 2;
$colSpan3 = 3;
$colSpan4 = 4;


$left = ['name' => $ll.'columns.leftColumn', 'colPos' => $leftColPos, 'disallowed' =>  $disallowed];
$leftColSpan2 = ['name' => $ll.'columns.leftColumn', 'colPos' => $leftColPos, 'colspan' => $colSpan2, 'disallowed' =>  $disallowed];
$leftColSpan3 = ['name' => $ll.'columns.leftColumn', 'colPos' => $leftColPos, 'colspan' => $colSpan3, 'disallowed' =>  $disallowed];
$center = ['name' => $ll.'columns.centerColumn', 'colPos' => $centerColPos, 'disallowed' =>  $disallowed];
$centerLeft = ['name' => $ll.'columns.centerLeftColumn', 'colPos' => $centerColPos, 'disallowed' =>  $disallowed];
$centerRight = ['name' => $ll.'columns.centerRightColumn', 'colPos' => $centerLeftColPos, 'disallowed' =>  $disallowed];
$right = ['name' => $ll.'columns.rightColumn', 'colPos' => $rightColPos, 'disallowed' =>  $disallowed];
$rightColSpan2 = ['name' => $ll.'columns.rightColumn', 'colPos' => $rightColPos, 'colspan' => $colSpan2, 'disallowed' =>  $disallowed];
$rightColSpan3 = ['name' => $ll.'columns.rightColumn', 'colPos' => $rightColPos, 'colspan' => $colSpan3, 'disallowed' =>  $disallowed];

$grids = [
    ['cType' => '100',
        'label' => $ll.'cType.100.label',
        'description' => $ll.'cType.100.description',
        'config' => ['name' => $ll.'content', 'colPos' => $leftColPos, 'disallowed' => ['CType' => '100']],
        'icon' => 'grid-100.jpg'
    ],
    ['cType' => '101',
        'label' => $ll.'cType.101.label',
        'description' => $ll.'cType.101.description',
        'config' => ['name' => $ll.'cType.101.label', 'colPos' => $leftColPos],
        'icon' => 'grid-100-section.jpg'
    ],
    ['cType' => '50-50',
        'label' => $ll.'cType.50-50.label',
        'description' => $ll.'cType.50-50.description',
        'config' => [$left, $right],
        'icon' => 'grid-50-50.jpg'
    ],
    ['cType' => '33-33-33',
        'label' => $ll.'cType.33-33-33.label',
        'description' => $ll.'cType.33-33-33.description',
        'config' => [$left, $center, $right],
        'icon' => 'grid-33-33-33.jpg'
    ],
    ['cType' => '33-33-33-float',
        'label' => $ll.'cType.33-33-33-float.label',
        'description' => $ll.'cType.33-33-33-float.description',
        'config' => ['name' => $ll.'content', 'colPos' => $leftColPos],
        'icon' => 'grid-33-33-33-float.jpg'
    ],
    ['cType' => '25-25-25-25',
        'label' => $ll.'cType.25-25-25-25.label',
        'description' => $ll.'cType.25-25-25-25.description',
        'config' => [$left, $centerLeft, $centerRight, $right],
        'icon' => 'grid-25-25-25-25.jpg'
    ],
    ['cType' => '66-33',
        'label' => $ll.'cType.66-33.label',
        'description' => $ll.'cType.66-33.description',
        'config' => [$leftColSpan2, $right],
        'icon' => 'grid-66-33.jpg'
    ],
    ['cType' => '33-66',
        'label' => $ll.'cType.33-66.label',
        'description' => $ll.'cType.33-66.description',
        'config' => [$left, $rightColSpan2],
        'icon' => 'grid-33-66.jpg'
    ],
    ['cType' => '75-25',
        'label' => $ll.'cType.75-25.label',
        'description' => $ll.'cType.75-25.description',
        'config' => [$leftColSpan3, $right],
        'icon' => 'grid-75-25.jpg'
    ],
    ['cType' => '25-75',
        'label' => $ll.'cType.25-75.label',
        'description' => $ll.'cType.25-75.description',
        'config' => [$left, $rightColSpan3],
        'icon' => 'grid-25-75.jpg'
    ],
    ['cType' => '50-50_media',
        'label' => $ll.'cType.50-50_media.label',
        'description' => $ll.'cType.50-50_media.description',
        'config' => [$left, $right],
        'icon' => 'grid-50-50-media.jpg'
    ],
];


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '100', // CType
        $ll.'cType.100.label', // label
        $ll.'cType.100.description', // description
        [
            [
                ['name' => $ll.'content', 'colPos' => $leftColPos]
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-100.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '101', // CType
        $ll.'cType.101.label', // label
        $ll.'cType.101.description', // description
        [
            [
                ['name' => $ll.'cType.101.label', 'colPos' => $leftColPos]
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-100-section.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '50-50', // CType
        $ll.'cType.50-50.label', // label
        $ll.'cType.50-50.description', // description
        [
            [
                $left,
                $right
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-50-50.jpg')

);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '33-33-33', // CType
        $ll.'cType.33-33-33.label', // label
        $ll.'cType.33-33-33.description', // description
        [
            [
                $left,
                $center,
                $right
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-33-33-33.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '33-33-33-float', // CType
        $ll.'cType.33-33-33-float.label', // label
        $ll.'cType.33-33-33-float.description', // description
        [
            [
                ['name' => $ll.'content', 'colPos' => $leftColPos]
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-33-33-33-float.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '25-25-25-25', // CType
        $ll.'cType.25-25-25-25.label', // label
        $ll.'cType.25-25-25-25.description', // description
        [
            [
                $left,
                $centerLeft,
                $centerRight,
                $right
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-25-25-25-25.jpg')
);


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '66-33', // CType
        $ll.'cType.66-33.label', // label
        $ll.'cType.66-33.description', // description
        [
            [
                $leftColSpan2,
                $right
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-66-33.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '33-66', // CType
        $ll.'cType.33-66.label', // label
        $ll.'cType.33-66.description', // description
        [
            [
                $left,
                $rightColSpan2
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-33-66.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '75-25', // CType
        $ll.'cType.75-25.label', // label
        $ll.'cType.75-25.description', // description
        [
            [
                $leftColSpan3,
                $right
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-75-25.jpg')
);


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '25-75', // CType
        $ll.'cType.25-75.label', // label
        $ll.'cType.25-75.description', // description
        [
            [
                $left,
                $rightColSpan3
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-25-75.jpg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '50-50_media', // CType
        $ll.'cType.50-50_media.label', // label
        $ll.'cType.50-50_media.description', // description
        [
            [
                $left,
                $right
            ]
        ] // grid configuration
    )
    )
        ->setIcon($iconFolder.'grid-50-50-media.jpg')

);

/*
foreach ($grids as $grid) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            $grid['cType'], // CType
            $grid['label'], // label
            $grid['description'], // description
            [
                [
                    $grid['config']
                ]
            ]
        )
        )
            ->setIcon($iconFolder.$grid['icon'])
    );
}*/


$colorColumns = [
    'background_color' => [
        'label' => $ll.'colors.bgColor',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
        ],
    ],
    'border_color' => [
        'label' => $ll.'colors.bdColor',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
        ],
    ],
    'text_color' => [
        'label' => $ll.'colors.textColor',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
        ],
    ],
    'link_color' => [
        'label' => $ll.'colors.linkColor',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
        ],
    ],
    'header_color' => [
        'label' => $ll.'colors.headerColor',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
        ],
    ],
];

$positionColumns = [
    'justify_content' => [
        'label' => $ll.'positions.justfy-content',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value','', $positionFolder.'justify-start.svg'],
                [$ll.'positions.start','justify-start', $positionFolder.'justify-start.svg'],
                [$ll.'positions.end','justify-end', $positionFolder.'justify-end.svg'],
                [$ll.'positions.center','justify-center', $positionFolder.'justify-center.svg'],
                [$ll.'positions.between','justify-between', $positionFolder.'justify-space-between.svg'],
                [$ll.'positions.around','justify-around', $positionFolder.'justify-space-around.svg'],
            ],
            'default' => '',
        ],
    ],
    'align_items' => [
        'label' => $ll.'positions.align-items',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value','', $positionFolder.'align-start.svg'],
                [$ll.'positions.items-start','items-start', $positionFolder.'align-start.svg'],
                [$ll.'positions.items-end','items-end', $positionFolder.'align-end.svg'],
                [$ll.'positions.center','items-center', $positionFolder.'align-center.svg'],
                [$ll.'positions.baseline','items-baseline', $positionFolder.'align-baseline.svg'],
                [$ll.'positions.stretch','items-stretch', $positionFolder.'align-stretch.svg'],
            ],
            'default' => '',
        ],
    ],
    'column_gap' => [
        'label' => $ll.'positions.column-gap',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'gap-extra-small'],
                ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'gap-small'],
                ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'gap-medium'],
                ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'gap-large'],
                ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'gap-extra-large'],
                ['None', 'gap-0'],
            ],
            'default' => '',
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['palettes']['palette_color'] = [
    'canNotCollapse' => true,
    'label' => $ll.'colors.paletteTitle',
    'showitem' => 'background_color,border_color,--linebreak--,text_color,link_color,--linebreak--,header_color,'
];

$GLOBALS['TCA']['tt_content']['palettes']['palette_position'] = [
    'canNotCollapse' => true,
    'label' => $ll.'positions.palettePosition',
    'showitem' => 'justify_content,align_items,column_gap,'
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $colorColumns,1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $positionColumns,1);

/*
foreach ($grids as $grid) {
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content','media',$grid['cType'],'after:header');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content','palette_color',$grid['cType'],'after:header');
}*/

foreach ($grids as $grid) {
    $GLOBALS['TCA']['tt_content']['types'][$grid['cType']]['showitem'] = '
	--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
	--palette--;;headers,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
    --palette--;;palette_position,
    media,
    --palette--;;palette_color,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
    --palette--;;hidden,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,
	categories,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription
	';
}
