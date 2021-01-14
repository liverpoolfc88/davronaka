<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%menu}}".
 *
 * @property int $id
 * @property string $name
 * @property string $create_at
 * @property string $update_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%menu}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
//            [['create_at', 'update_at'], 'safe'],
            [['name','create_at','update_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'create_at' => 'Qo`shilgan vaqt',
            'update_at' => 'O`zgartirilgan vaqt',
        ];
    }


    public function beforeSave($insert){
        if($insert){

            $this->create_at = date('Y-m-d H:i:s');
        }else{

            $this->update_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }
}
