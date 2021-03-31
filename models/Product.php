<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $product
 * @property string|null $description
 * @property string|null $date
 * @property string|null $image
 * @property int|null $user_id
 * @property int|null $category_id
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['date'], 'safe'],
            [['user_id', 'category_id'], 'integer'],
            [['product', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Product',
            'description' => 'Description',
            'date' => 'Date',
            'image' => 'Image',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
        ];
    }
}
