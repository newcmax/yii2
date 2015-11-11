<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spr_category".
 *
 * @property string $categoryid
 * @property string $name
 * @property string $nameeng
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spr_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryid'], 'required'],
            [['categoryid'], 'string', 'max' => 40],
            [['name', 'nameeng'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoryid' => Yii::t('app', 'id'),
            'name' => Yii::t('app', 'Наименование'),
            'nameeng' => Yii::t('app', 'Наименование на английском'),
        ];
    }
}
