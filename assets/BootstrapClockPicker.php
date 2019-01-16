<?php
/**
 * @link https://github.com/MadAnd/yii2-clockpicker
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace faryshta\assets;

use yii\web\AssetBundle;

class BootstrapClockPicker extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/clockpicker/dist';

    /**
     * @inheritdoc
     */
    public $css = ['bootstrap-clockpicker.css'];

    /**
     * @inheritdoc
     */
    public $js = ['bootstrap-clockpicker.js'];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\bootstrap\BootstrapPluginAsset'];
}
