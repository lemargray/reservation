<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'css/materialdesignicons.min.css',
        'css/vendor.bundle.base.css',
        'css/vendor.bundle.addons.css',
        'css/style.css',
    ];
    public $js = [
        'js/vendor.bundle.base.js',
        'js/vendor.bundle.addons.js',
        'js/off-canvas.js',
        'js/misc.js',
        'js/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
