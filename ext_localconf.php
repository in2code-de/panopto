<?php

defined('TYPO3') || die();

call_user_func(
    function () {
        /**
         * Page TsConfig
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            "@import 'EXT:panopto/Configuration/TsConfig/Page/Mod/Wizards/Panopto.tsconfig'"
        );

        $icons = [
            [
                'identifier' => 'ce.panopto',
                'source' => 'EXT:panopto/Resources/Public/Icons/Extension.svg'
            ]
        ];

        $iconRegistry = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            TYPO3\CMS\Core\Imaging\IconRegistry::class
        );
        foreach ($icons as $icon) {
            $iconRegistry->registerIcon(
                $icon['identifier'],
                TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => $icon['source']]
            );
        }

        $rendererRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::class);
        $rendererRegistry->registerRendererClass(\In2code\Panopto\Resource\Rendering\PanoptoRenderer::class);


        $GLOBALS['TYPO3_CONF_VARS']['SYS']['fal']['onlineMediaHelpers']['pan'] =
            \In2code\Panopto\Resource\OnlineMedia\Helpers\PanoptoHelper::class;

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'] .=
            ',pan';

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['FileInfo']['fileExtensionToMimeType']['pan'] = 'video/pan';
    }
);
