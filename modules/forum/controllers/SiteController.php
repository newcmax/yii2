<?php
/**
 * Created by PhpStorm.
 * User: ����
 * Date: 07.11.2015
 * Time: 0:51
 */

namespace app\modules\forum\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $breadcrumbs = array();  // ��� ���������� (��� ������__)

    public function actionIndex()
    {


        $this->render('index');
    }
}