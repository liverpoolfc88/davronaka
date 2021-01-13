<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%menu_item}}".
 *
 * @property int $id
 * @property string $names
 * @property int $prices
 * @property int|null $sales
 * @property string|null $photo
 * @property int|null $views
 * @property int $menu_id
 * @property string $created_at
 * @property string $updated_at
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%menu_item}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['names', 'prices', 'menu_id', 'created_at', 'updated_at'], 'required'],
            [['prices', 'sales', 'views', 'menu_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['names', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'names' => 'Names',
            'prices' => 'Prices',
            'sales' => 'Sales',
            'photo' => 'Photo',
            'views' => 'Views',
            'menu_id' => 'Menu ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
