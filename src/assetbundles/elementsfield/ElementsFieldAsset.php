<?php
/**
 * Sort Elements plugin for Craft CMS 3.x
 *
 * Field to sort related elements
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2018 @cole007
 */

namespace ournameismud\sortelements\assetbundles\elementsfield;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    @cole007
 * @package   SortElements
 * @since     0.0.1
 */
class ElementsFieldAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@ournameismud/sortelements/assetbundles/elementsfield/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Elements.js',
        ];

        $this->css = [
            'css/Elements.css',
        ];

        parent::init();
    }
}
