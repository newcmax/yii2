<?php

use app\components\FirstWidget;
use app\components\SecondWidget;
use yii\bootstrap\
use yii\bootstrap\Modal;

?>
<div class="test-default-index">

    <h1>Панель управления.</h1>

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

     DatePicker::widget
    ([

             'name'  => 'from_date',
             'value'  => $value,

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
