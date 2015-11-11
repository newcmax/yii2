<?php
/**
 * Created by PhpStorm.
 * User: Вика
 * Date: 07.11.2015
 * Time: 21:18
 */
namespace app\components;

use yii\base\Widget;

class SecondWidget extends Widget {
    public function init(){
        parent::init();
        ob_start();
    }
    public function run(){
        $content = ob_get_clean();
        return $this->render(
            'second',
            [
                'content' => $content
            ]
        );
    }
}