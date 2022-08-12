<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property string|null $file
 * @property string|null $create_at
 * @property string|null $update_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['file','name'], 'string', 'max' => 255],
            [[ 'create_at', 'update_at'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Kitob nomi',
            'text' => 'Kitob matni',
            'file' => 'Kitob yuklash',
            'create_at' => 'Qo`shilgan sana',
            'update_at' => 'O`zgartirilgan sana',
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
