<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offer".
 *
 * @property int $id
 * @property string|null $seller
 * @property string|null $customer
 */
class Offer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['seller', 'customer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seller' => 'Seller',
            'customer' => 'Customer',
        ];
    }
}
