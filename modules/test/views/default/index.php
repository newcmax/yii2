<?php

use app\components\FirstWidget;
use app\components\SecondWidget;
use yii\bootstrap\Modal;
use yii\jui\DatePicker;
use yii\bootstrap\Nav;
?>
<div class="test-default-index">

    <h1>Панель управления.</h1>

    <?=
    Nav::widget([
        'items'=>[
            [
                'label'=>'Ссылка1',
                'url'=>['#']
            ],
            [
                'label'=>'Ссылка2',
                'url'=>['#']
            ],
            [
                'label'=>'Выпадающий список',
                'items'=>[
                    [
                        'label'=>'Ссылка1',
                        'url'=>['#']
                    ],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Описание</li>',
                    [
                        'label'=>'Ссылка2',
                        'url'=>['#']
                    ],

                ]
            ],
        ],


    ]);
    ?>
    <?= FirstWidget::widget(
        [
            'a' => 33,
            'b' => 67
        ]
    );?>
    <?php SecondWidget::begin() ?>
        Этот текст сделаем красным.
    <?php SecondWidget::end() ?>

    <?php
    Modal::begin([
        'header' =>'<h2>Привет МИР !!!</h2>',
        'toggleButton' => ['label' => 'нажми']
        ]);
        echo 'это контент модального окна...';
    Modal::end();
    ?>

    <?php
    $value = date('d.m.Y');

    echo DatePicker::widget([
        'language' => 'ru',
        'name'  => 'from_date',
        'clientOptions' => [
            'dateFormat' => 'd.m.Y',
            'dateDefault' => '21.06.1977',
        ],
    ]
    );
    ?>


    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
