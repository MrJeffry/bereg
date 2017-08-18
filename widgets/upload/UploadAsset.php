<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\widgets\upload;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UploadAsset extends AssetBundle
{
    public $sourcePath = '@app/widgets/upload/assets';
    public $css = [
        'css/jquery.fileupload.css',
    ];
    public $js = [
        'js/jquery.fileupload.js',
    ];
    public $depends = [
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
