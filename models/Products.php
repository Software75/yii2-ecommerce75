<?php

namespace software75\ecommerce\models;

use Yii;

/**
 * This is the model class for table "ecom_products".
 *
 * @property integer $id
 * @property string $code
 * @property string $description
 * @property integer $id_um
 * @property integer $id_type
 *
 * @property ProductType $idType
 * @property Um $idUm
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ecom_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'id_um'], 'required'],
            [['id_um', 'id_type'], 'integer'],
            [['code'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 500],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => ProductType::className(), 'targetAttribute' => ['id_type' => 'id']],
            [['id_um'], 'exist', 'skipOnError' => true, 'targetClass' => Um::className(), 'targetAttribute' => ['id_um' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'description' => Yii::t('app', 'Description'),
            'id_um' => Yii::t('app', 'Id Um'),
            'id_type' => Yii::t('app', 'Id Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdType()
    {
        return $this->hasOne(ProductType::className(), ['id' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUm()
    {
        return $this->hasOne(Um::className(), ['id' => 'id_um']);
    }
}
