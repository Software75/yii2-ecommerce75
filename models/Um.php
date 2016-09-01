<?php

namespace software75\ecommerce\models;

use Yii;

/**
 * This is the model class for table "ecom_um".
 *
 * @property integer $id
 * @property string $description
 * @property string $code
 *
 * @property Products[] $ecomProducts
 */
class Um extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ecom_um';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'code'], 'required'],
            [['description'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'description' => Yii::t('app', 'Description'),
            'code' => Yii::t('app', 'Code'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id_um' => 'id']);
    }
}
