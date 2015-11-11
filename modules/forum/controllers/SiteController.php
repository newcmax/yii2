<?php
/**
 * Created by PhpStorm.
 * User: Вика
 * Date: 07.11.2015
 * Time: 0:51
 */

namespace app\modules\forum\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $breadcrumbs = array();  // это необходимо (как стимул__)

    public function actionIndex()
    {


        $this->render('index');
    }
}