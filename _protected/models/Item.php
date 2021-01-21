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
 * @property string|null $text
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
            [['names', 'prices', 'menu_id'], 'required'],
            [['prices', 'special', 'sales', 'views', 'menu_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['names','text' ,'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'names' => 'Nomi',
            'prices' => 'Narxi',
            'sales' => 'Chegirma',
            'special' => 'Maxsus',
            'photo' => 'Rasmi',
            'text' => 'Text',
            'views' => 'Ko`rishlar soni',
            'menu_id' => 'Menu',
            'created_at' => 'Qo`shilgan sana',
            'updated_at' => 'O`zgartirilga sana',
        ];
    }

    public function beforeSave($insert){
        if($insert){

            $this->created_at = date('Y-m-d H:i:s');
        }else{

            $this->updated_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }

    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }
}
