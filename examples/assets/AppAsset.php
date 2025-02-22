<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

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
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css',
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'phuongdev89\socketio\assets\SocketIoAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
    public $jsOptions = ['position' => View::POS_HEAD];
}
